<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Support\Facades\Http;

class NMSController extends Controller
{
    public function devices()
    {
        $responsePing = Http::withoutVerifying()->get("http://118.130.110.156:8080/api/table.json", [
            "page" => 1,
            "username" => "prtgadmin",
            "password" => "hgs_1qa@WS",
            "content" => "",
            "columns" => "device,sensor, objid, lastvalue, value, name,datetime,message,status",
            "filter_name" => "Ping",
        ]);
        foreach ($responsePing->object()->{''} as $item) {
            if ($item->value_raw !== '') {
                if ($item->device_raw === 'FW1') {
                    $item->device_raw = 'FW#1';
                }
                Device::updateOrCreate(
                    ['title' => $item->device_raw],
                    ['title' => $item->device_raw, 'ping_value' => $item->value_raw]
                );
            }
        }

        $responseCPU = Http::withoutVerifying()->get("http://118.130.110.156:8080/api/table.json", [
            "page" => 1,
            "username" => "prtgadmin",
            "password" => "hgs_1qa@WS",
            "content" => "",
            "columns" => "device,sensor, objid, lastvalue, value, name,datetime,message,status",
            "filter_name" => "CPU Load",
        ]);
        foreach ($responseCPU->object()->{''} as $item) {
            if ($item->value_raw !== '') {
                if ($item->device_raw === 'FW1') {
                    $item->device_raw = 'FW#1';
                }
                Device::updateOrCreate(
                    ['title' => $item->device_raw],
                    ['title' => $item->device_raw, 'cpu_load_value' => $item->value_raw]
                );
            }
        }

        $devicesFW = Device::where('title', 'like', 'FW%')->orderBy('title')->get();
        $devicesL3 = Device::whereTitle('L3 Switch')->first();

        return view('user.main-menu.nms.nms_devices_all')->with('devicesFW', $devicesFW)->with('devicesL3', $devicesL3);
    }

    public function favoriteDevices()
    {
        return view('user.main-menu.nms.nms_devices_favorite');
    }

    public function dependencies()
    {
        return view('user.main-menu.nms.nms_devices_dependencies');
    }

    public function reports()
    {
        return view('user.main-menu.nms.nms_reports_all');
    }

    public function addReport()
    {
        return view('user.main-menu.nms.nms_reports_add');
    }

    public function logs()
    {
        return view('user.main-menu.nms.nms_logs_all');
    }
}
