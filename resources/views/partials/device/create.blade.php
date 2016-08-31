@extends('layouts/layout')

@section('content')
    <div class="row">
        <div class="col-xs-3">
            <h1>List of devices</h1>
            <ul class="list-group">
                @foreach($devices as $device)
                    <li class="list-group-item" id="{{$device['id']}}">{{ substr($device['hash'], 0, 10) }}
                        <div class="checkbox pull-right">
                            <input type="checkbox" value="" style="margin-bottom: 20px">
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="form-group">
                <label class="form-control">Message to be sent</label>
                <input class="form-control" type="text">
            </div>
            <button type="submit" class="btn btn-primary">Send message</button>
        </div>
    </div>
@stop