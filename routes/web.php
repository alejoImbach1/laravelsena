<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/p',function(){
    return Storage::download('default/reflexión_sobre_programación.pdf');
});

Route::controller(AppController::class)->group(function () {
    Route::get('/', 'index')->name('app.index');
    Route::get('/web-development', 'WebDevelopmentDefault')->name('app.webDevelopmentDefault');

});

Route::resource('course', CourseController::class);
Route::controller(CourseController::class)->group(function () {
    Route::get('/pdf-download/{file}', 'pdfDownload')->name('course.pdfdownload');
});