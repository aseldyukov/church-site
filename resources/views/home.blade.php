@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
<h1>Главная страница</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est pariatur assumenda ratione exercitationem. Expedita
    debitis esse illum! Culpa, rem. Impedit ipsa, accusamus laboriosam molestiae aliquid officia reprehenderit aut quia
    expedita.</p>
@endsection

@section('aside')
@parent
<p>Дополнительный текст 2</p>
@endsection