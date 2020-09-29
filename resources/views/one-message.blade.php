@extends('layouts.app')

@section('title-block'){{$data->subject}}@endsection

@section('content')
@csrf
<h1>{{ $data->subject }}</h1>
<div class="alert alert-info">
    <p>{{ $data->message }}</p>
    <p>{{ $data->email }}</p>
    <p><small>{{ $data->created_at }}</small></p>
    <a href="{{ route ('contact-update', $data->id ) }}">
        <button class="btn btn-primary">Редактировать</button>
    </a>
</div>
@endsection