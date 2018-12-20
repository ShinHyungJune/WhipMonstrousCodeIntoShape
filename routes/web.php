<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Forms\PublishPostForm;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/posts', function (\App\Http\Requests\PublishPostForm $form) {
    $form->persist();

    return 'success';
});
