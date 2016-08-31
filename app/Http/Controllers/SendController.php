<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Log;

class SendController extends Controller
{
    function create() {
        $devices = Device::all();

        return view('partials.device.create', compact('devices'));
    }

    function store(Request $request) {
        $hash = $request->json('hash');
        $device = new Device();
        $device->hash = $hash;
        $device->save();
    }

    function send(Request $request) {
        $devices = Device::all();
        $responses = array();

        for ($i = 0; $i < count($devices); $i++) {
            Log::info($request->input($i + 1));
            if($request->input($i + 1)) {
                $url = "https://fcm.googleapis.com/fcm/send";
                $response = \Httpful\Request::post($url)
                    ->sendsJson()
                    ->body(json_encode(["to" => $devices[$i]->hash, "notification" =>
                        ["body" => $request->input("message")]]))->addHeader('Authorization',
                        'key=AIzaSyCOP7A4f0-W2kHhSpQIiY8yzu6b2IbbuY4')->send();
                array_push($responses, $response->body);
            }
        }

        return $responses;
    }
}
