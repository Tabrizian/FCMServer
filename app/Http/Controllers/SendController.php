<?php

namespace App\Http\Controllers;

use App\Device;
use Illuminate\Http\Request;

use App\Http\Requests;

class SendController extends Controller
{
    function create() {
        $devices = [
            ['hash' => 'Salam'],
            ['hash' => 'What']
        ];

        return view('partials.device.create', compact('devices'));
    }

    function store(Request $request) {
        $hash = $request->json('hash');
        $device = new Device();
        $device->hash = $hash;
        $device->save();
    }
}
