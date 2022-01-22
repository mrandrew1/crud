<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//Главная
Route::get('/', 'IndexController@index')->name('index');

//добавление
Route::post('/send', 'SendController@send')->name('send');
//удаление
Route::post('/del', 'SendController@del')->name('del');
//изменение
Route::post('/correct', 'SendController@correct')->name('correct');


