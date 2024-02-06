<?php

namespace App\Http\Controllers;

use App\Models\Authority;
use App\Models\Group;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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

    public function store(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'ids' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()->symbols()],
            'group_id' => ['required', 'integer'],
            'authority_id' => ['required', 'integer'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
//            'period_of_use' => ['required', 'date'],
        ]);

        $validate['password'] = Hash::make($request->password);

        $user = User::create($validate);

        event(new Registered($user));

        return redirect()->route('hi-secure.index');
    }

    public function edit(User $user)
    {
        $groups = Group::get();
        $authorities = Authority::get();
        return view('user.hi-secure.HiSecure_account_modify')->with('user', $user)->with('groups', $groups)->with('authorities', $authorities);
    }

    public function update(Request $request, User $user)
    {
        $validate = $request->validate([
//            'ids' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'name' => ['required', 'string', 'max:255'],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()->symbols()],
            'group_id' => ['required', 'integer'],
            'authority_id' => ['required', 'integer'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
//            'period_of_use' => ['required', 'date'],
        ]);

        if ($request->input('password')) {
            $validate['password'] = Hash::make($request->password);
        } else {
            unset($validate['password']);
        }

        $user->update($validate);

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
}
