@extends('layouts.app')

@section('title-block')Обновление записи@endsection

@section('content')
<h1>Обновление записи</h1>

<form action="{{ route('contact-update-submit', $data->name ) }}" method="post">
    @csrf
    
    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" name="name" value="{{ $data->name }}" id="name" placeholder="Введите имя" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Введите email</label>
        <input type="text" name="email" value="{{ $data->email }}" id="email" placeholder="Введите email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">Тема сообщения</label>
        <input type="text" name="subject" value="{{ $data->subject }}" id="subject" placeholder="Тема сообщения" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Cообщения</label>
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control">{{$data->message}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Update</button>

</form>

@endsection