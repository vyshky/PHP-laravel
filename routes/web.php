<?php

Route::get('страница1', function () {
    return view('page1');
});

Route::get('страница2', 'TestController@Page2');

Route::post('страница3', 'TestController@Page3');

Route::get('авторизация', function () {
    return view('authorization');
});

Route::post('регистрация', 'TestController@Registration');

Route::get('личныйкабинет', 'TestController@AuthorizationFun');


Route::get('/', function () {
    return view('welcome');
});
