<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function() {
    return 'test stuff';
});

// Test for age middleware
// Redirect to test
// Route::get('again', function() {
//     return 'something else';
// });

// Route::get('again', ['middleware' => 'ageCheck', function () {
//     return 'you are now young again';
// }]);

Route::get('request', function(Request $request) {
    $requests = $request->all();

    dd( $requests );
});

Route::get('test', function() {
    $title = 'Blog title';
    $content = 'Lorem ipsum dolor';

    return view('test', compact('title', 'content'));
});

Route::get('posts', function() {
    return view('posts');
});