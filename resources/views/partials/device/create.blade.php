@extends('layouts/layout')

@section('content')
    <div class="row">
        <div class="col-xs-3">
            <h1>List of devices</h1>
            <ul class="list-group">
                @foreach($devices as $device)
                    <li class="list-group-item">{{ $device['hash'] }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@stop