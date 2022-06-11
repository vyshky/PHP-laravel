<?php

Route::get('страница1', function () {
    return view('page1');
});

Route::get('страница2', 'TestController@Page2');

Route::post('страница3', 'TestController@Page3');

Route::get('авторизация', 'TestController@AuthorizationFun');

Route::post('регистрация', 'TestController@Registration');

Route::get('/', function () {
    return view('welcome');
});
