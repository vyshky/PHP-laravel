@extends('template')

@section('title')
    Авторизация
@endsection

@section('site')
  <form method="get" action="личныйкабинет">
    @csrf
    <h1>Авторизация</h1>
    <label>Login:</label><br>
    <input type="text" name="login"><br>
    <label>Password:</label><br>
    <input type="text" name="password"><br>
    <input type="submit"><br>
    </form>
    
    <form method="post" action="регистрация">
    @csrf
    <h1>Регистрация</h1>
    <label>Login:</label><br>
    <input type="text" name="login"><br>
    <label>Password:</label><br>
    <input type="text" name="password"><br>
    <input type="submit"><br>
    </form>
@endsection
