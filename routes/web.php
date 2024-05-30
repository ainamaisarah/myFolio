<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('mainpage');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/add-student', function () {
    return view('add-student');
});

Route::get('student',[StudentsController::class, 'index'] );
Route::resource('addstudent',StudentsController::class);


// Route::group([], function()
// {
// Route::get('/first',function()
// {
// echo "first route";
// });
// Route::get('/second',function()
// {
// echo "second route";
// });
// Route::get('/third',function()
// {
// echo "third route";
// });
// });

// Route::group(['prefix' => 'tutorial'], function()
// {
// Route::get('/aws',function()
// {
// echo "aws tutorial";
// });
// Route::get('/jira',function()
// {
// echo "jira tutorial";
// });
// Route::get('/testing',function()
// {
// echo "testing tutorial";
// });
// });

// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
//     });

// Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
// //
// return 'Post'. $postId. ' Comment' . $commentId;
// });

// //Define a route with a name in route/web.php
// Route::get('/food/traditional/satay/kambing/cucuk', function () {
//     echo "This is";
//     //
//     })->name('profile');

// Route::get('profile1', function () {
//         return redirect() -> route('profile');
//         });
