@extends('layouts.app')

@section('title-block')Страница отправки@endsection

@section('content')
    <h1></h1>

    <form action="{{ route('contact-form') }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="name">Введите ФИО</label>
            <input type="text" name="name" placeholder="Введите ФИО" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="age">Возраст</label>
            <input type="number" name="age" placeholder="Возраст" id="age" class="form-control">
        </div>

        <div class="form-group">
            <label for="experience">Стаж работы</label>
            <input type="number" name="experience" placeholder="Стаж работы" id="age" class="form-control">
        </div>

        <div class="form-group">
            <label for="photo">Фото</label>
            <input type="file" name="photo" placeholder="Фото" accept="image/jpeg,image/png" id="photo" class="form-control" >
        </div>

        <div class="form-group">
            <label for="salary">Средняя зарплата</label>
            <input type="number" name="salary" placeholder="Средняя зарплата" id="salary" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection

