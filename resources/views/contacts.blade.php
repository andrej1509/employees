@extends('layouts.app')

@section('title-block')Все сотрудники@endsection

@section('content')
    <h1>Все сотрудники</h1>
    @foreach($data as $el)
        <div class="alert alert-info">
            <p>{{$el->name}}</p>
            <a href="{{route('contact-data-one', $el->id)}}"><button class="btn btn-warning">Детальнее</button></a>
        </div>
    @endforeach
@endsection
