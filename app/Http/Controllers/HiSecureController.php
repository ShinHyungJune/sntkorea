<?php

namespace App\Http\Controllers;

use App\Http\Requests\HiSecurePatchRequest;
use App\Http\Requests\HiSecureRequest;
use App\Models\Authority;
use App\Models\Group;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class HiSecureController extends Controller
{
    public function index()
    {
        $users = User::with('group')->where('id', '>', 1)->get();
        return view('user.hi-secure.HiSecure_account')->with('users', $users);
    }

    public function create(): View
    {
        $groups = Group::get();
        $authorities = Authority::get();
        return view('user.hi-secure.HiSecure_account_add')->with('groups', $groups)->with('authorities', $authorities);
    }

    public function store(HiSecureRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        event(new Registered($user));

        return redirect()->route('hi-secure.index');
    }

    public function edit(User $user)
    {
        $groups = Group::get();
        $authorities = Authority::get();
        return view('user.hi-secure.HiSecure_account_modify')->with('user', $user)->with('groups', $groups)->with('authorities', $authorities);
    }

    public function update(HiSecurePatchRequest $request, User $user)
    {
        $validated = $request->validated();

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $user->update($validated);

        return redirect()->route('hi-secure.index');
    }

    public function switch(Request $request, User $user)
    {
        $user->is_active = $request->input('switch') == "true" ? 1 : 0;
        $user->push();
    }

    public function delete(Request $request)
    {
        User::destroy($request->input('id'));
        return redirect()->route('hi-secure.index');
    }
    public function globalSetting()
    {
        return view('user.hi-secure.HiSecure_account_setting');
    }

    public function globalSettingUpdate(Request $request)
    {
        $request->validate([
            'lifetime' => 'required|integer|min:1'
        ]);
        $lifetime = $request->input('lifetime');

        // .env 파일의 경로 설정
        $envFilePath = base_path('.env');

        // .env 파일을 읽어옴
        $envFileContent = File::get($envFilePath);

        // SESSION_LIFETIME 값을 업데이트
        $newEnvFileContent = preg_replace('/SESSION_LIFETIME=\d+/', 'SESSION_LIFETIME=' . $lifetime, $envFileContent);

        // 업데이트된 내용을 .env 파일에 쓰기
        File::put($envFilePath, $newEnvFileContent);
        return redirect()->route('hi-secure.global-setting');
    }
}
