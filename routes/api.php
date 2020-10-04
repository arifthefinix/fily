<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::resource('/user', 'Admin\UserController');

Route::get('/file-list/{id}','File\FileController@fileList');

Route::get('/download/{id}','File\FileController@download');
Route::get('/delete/{id}','File\FileController@deleteFile');
Route::post('/file/upload','File\FileController@uploadFile');

// user dashboard routes

Route::get('/dashboard/shared-by-me','File\FileController@sharedByMe');
Route::get('/dashboard/shared-with-me','File\FileController@sharedWithMe');