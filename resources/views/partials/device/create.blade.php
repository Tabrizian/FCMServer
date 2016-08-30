@extends('layouts/layout')

@section('content')
    <ul class="list-group">
        @foreach($devices as $device)
            <li class="list-group-item">{{ $device['hash'] }}</li>
        @endforeach
    </ul>
@stop