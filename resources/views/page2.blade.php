@extends('template')

@section('title')
Страница2
@endsection

@section('site')
{{-- @foreach($rows as $row)
   Имя : {{$row['name']}}<br>
   Возраст : {{$row['age']}}<br>
   Фото : {{$row['photo']}}<br> 
   <img src={{$row['photo']}}> <br>
   ----------------------------------------------------------------------------------------------------------------<br>
@endforeach --}}

<?php dd($rows) ?>
@endsection