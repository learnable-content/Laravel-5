# Live Lesson

Remember alot of what we will be doing is in routes and is for testing but in a normal app everything will be separated where they would need to be.

## What is routing

Routing is what allows us to create urls for the user via the browser. For example imagine going to blog.dev/posts. /posts would be the url that we created and with the routes file we tell the application what method to serve up when we hit that route. This gives us great control over every aspect of users that visit our application.

### HTTP Verbs

Routing also allows us to hit every HTTP verb that we would need to hit. HTTP verbs are something we interact with everyday. When we request a url that would be a GET verb and when we post a form that would be the POST verb. (It may also be PUT)

Let's make our first Route

```
Route::get('test', function() {
    return 'test stuff';
});

// Test for age middleware
// Redirect to test
Route::get('again', function() {
    return 'something else';
});
```

## What is middleware

Let's run this code in our terminal.

```
php artisan make:middleware AgeCheckMiddleware
```

Route middleware code for age.

```
<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->input('age') <= 200) {
            return redirect('home');
        }

        return $next($request);
    }

}
```

Kernel file change

```
protected $routeMiddleware = [
    'auth' => \App\Http\Middleware\Authenticate::class,
    'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
    'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    'ageCheck' => \App\Http\Middleware\AgeMiddleware::class,
];
```

Route change with attached middleware.

```
Route::get('again', ['middleware' => 'ageCheck', function () {
    return 'you are now young again';
}]);
```

## What are requests

Requests are any input that comes to the server. Request can come in from the browser via the GET HTTP verb or any other verb (POST, PUT, DELETE, etc)

Laravel comes with a lot of methods for use to grab this request and use them to pass along information to the rest of our application.

### Type hinting request

Below is an example of the way we will be interfacing with the request object. We will be type hinting the request into our methods to a parameter into the method. Now we can access the name input whether it is a GET parameter or if the request is coming in through a POST form.

Get request

```
Route::get('request', function(Request $request) {
    $requests = $request->all();

    dd( $requests );
});
```

## What are views

Views are the "V" in MVC and are easy to create.

```
Route::get('test', function() {
    $title = 'Blog title';
    $content = 'Lorem ipsum dolor';

    return view('test', compact('title', 'content'));
});
``

## The Power Behind Blade Templating

Like we discussed before when we return a view view('posts'); the file can be either of two paths resources/views/posts.php or resources/views/posts.blade.php. To take advantage of blade syntax we need to make sure the file name ends in .blade.php. This will tell Laravel that we want to use blade syntax on the file.

```
@extends('layouts.master')

@section('title', 'Blog title here')

@section('sidebar)
    @parent

    <p>We still have parents content now we are appending to it.</p>
@endsection

@section('content')
    <p>This will get placed where our yield content is.</p>
@endsection
```