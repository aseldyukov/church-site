@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('content')
<h1>Контакты</h1>

<form action="{{ route('contact-form') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" name="name" id="name" placeholder="Введите имя" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Введите email</label>
        <input type="text" name="email" id="email" placeholder="Введите email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">Тема сообщения</label>
        <input type="text" name="subject" id="subject" placeholder="Тема сообщения" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Cообщения</label>
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>

</form>

@endsection