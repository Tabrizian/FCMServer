<?php

namespace App\Http\Controllers;

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
}
