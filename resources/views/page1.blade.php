@extends('template')

@section('title')
Страница1
@endsection

@section('site')
    <h1>TEST1</h1>

    @if($errors->any())
      @foreach ($errors->all() as $err)
        <li>{{$err}}</li>
      @endforeach
    @endif

    <form method="POST" action="страница3">
        @csrf
        <label>Name:</label><br>
        <input type ="text" name="Name"><br>
        <label>Age:</label><br>
        <input type ="number" name="Age"><br>
        <label>Photo:</label><br>
        <input type ="text" name="Photo"><br>
        <input type ="submit"><br>
    </form>
@endsection

