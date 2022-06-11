@extends('template')

@section('title')
    Авторизация
@endsection

@section('site')
  <h1>Привет {{$row->login}}</h1>
@endsection
