@extends('template')

@section('title')
Страница3
@endsection

@section('site')
    {{$_POST['Name']}} 
    <?php 
        dd($_POST);
        // var_dump($_POST);
    ?>
@endsection