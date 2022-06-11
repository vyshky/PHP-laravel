@extends('template')

@section('title')
Авторизация
@endsection

@section('site')
    @if($errors->any())
      @foreach ($errors->all() as $err)
        <li>{{$err}}</li>
      @endforeach
    @endif
    <h1>Авторизация</h1>
    <form method="POST" action="авторизация">
        @csrf
        <label>Login:</label><br>
        <input type ="text" name="login"><br>
        <label>Password:</label><br>
        <input type ="text" name="password"><br>    
        <input type ="submit"><br>
    </form>

    <form method="POST" action="регистрация">
        @csrf
        <h1>Регистрация</h1>
        <label>Login:</label><br>
        <input type ="text" name="login"><br>
        <label>Password:</label><br>
        <input type ="text" name="password"><br>    
        <input type ="submit"><br>
    </form>
@endsection
