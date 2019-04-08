

<?php
Route::get('/', function () {
return view('welcome');
});

Route::get('/home', 'HomeController@index');
Route::get('/blogs', 'BlogController@index');
Route::get('/blogs/create', 'BlogController@create');
Route::post('/blogs', 'BlogController@store');
Route::get('/blogs/{blog}/edit', 'BlogController@edit');
Route::patch('/blogs/{blog}', 'BlogController@update');
Route::delete('/blogs/{blog}', 'BlogController@destroy');
Route::get('/blogs/{blog}', 'BlogController@show');
Route::post('/blogs/{blog}', 'CommentsController@store');

