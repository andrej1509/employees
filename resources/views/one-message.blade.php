@extends('layouts.app')

@section('title-block'){{$data->name}}@endsection

@section('content')
    <h1>{{$data->name}}</h1>
        <div class="alert alert-info">
            <p>{{$data->email}}</p>
            <p>{{$data->age}}</p>
            <p>{{$data->experience}}</p>
            <p>{{$data->salary}}</p>
            @isset($data->photo)
                <img class="img-fluid"  src="{{'/storage/images/' . $data->photo}}">
            @endisset
            <p><small>{{$data->created_at}}</small></p>
        </div>
@endsection




