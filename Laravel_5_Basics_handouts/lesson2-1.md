![](headings/2.1.png)

# What is Routing

Routing is what allows us to create urls for the user via the browser. For example imagine going to blog.dev/posts. `/posts` would be the url that we created and with the routes file we tell the application what method to serve up when we hit that route. This gives us great control over every aspect of users that visit our application.

## HTTP Verbs

Routing also allows us to hit every HTTP verb that we would need to hit. HTTP verbs are something we interact with everyday. When we request a url that would be a `GET` verb and when we post a form that would be the `POST` verb. (It may also be PUT)

## Creating a route
To create a route you would need to do the following to have a url that we can do on the `GET`. We are going to open the `app/Http/routes.php` file.

```
Route::get('some-url', function() {
	return 'Test this url';
});
```
So what we are doing with the above is when we request a url at the the browser `http://blog.app/some-url` you will see the string `Test this url`. Later we will see how we make this route go to our blog area.

Similarly you would create a post the same with one minor difference. Notice the word post after route.

```
Route::post('another-url', function() {
	return 'We posted a form';
});
```

If you want a route to respond to multiple HTTP request type, you can use the `match` method.

```
Route::match(['get', 'post'], 'some-url', function () {
    return 'Test this url';
});
```

You can also match a route to any request type using the `any` method.

```
Route::any('some-url', function () {
    return 'Test this url';
});
```

## Resource routes

Later in the course we will discuss resource routes that we will be using for our basic crud operations. CRUD stands for create, read, update and delete. This is the basic foundation for any app that will do some sort of functionality that deals with the database. For this we will need about 7 routes to handle all of our requests needed. Instead of having these 7 routes listed for every operation we need Laravel gives us a resource route that handles those routes. It looks like the following:

```
Route::resource('posts', function() {
	// ... code
});
