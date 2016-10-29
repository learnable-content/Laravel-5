![](headings/2.4 .png)

# What are views


Views are the "V" in any MVC framework. These are the files that the user will actually see and the files that we will implement our templates html templates.

The views live in the `resources/views` directory and we can add any folders and view files to this directory.

## Returning a view

Going back to our routes we can show a view by returning it. See below how simple it is to return a route.

```
Route::get('/posts', function() {
	return view('posts');
});
```

The `view` function is a helper function, in previous versions of Laravel you'll need to call the `View::make` method.

```
Route::get('/posts', function() {
	return View::make('posts');
});
```

The views are already mapped to the view folder, but you can change it inside the `configs/view.php` file. If you did `return view('posts');`, Blade will look for a file named `posts.blade.php` or `posts.php` inside the list of view folders specified in the config file.

## Passing information to a view

```
Route::get('/posts', function() {
	return view('posts', ['title' => 'A blog title']);
});
```
We simply pass an array of the information that we want available in the view. The `title` key will be available to us as a variable in the view like so `$title`. If we wanted to pass multiple variables we would just add on the view file.

Alot of times I like to pass multiple pieces of data to the view. I tend to make use of the `compact()` function in php as it makes some things easier to understand. What this does is look for variables with the string names we passed and make them part of an array. The array gets passed to the view and the keys are now available as variables in the view.

```
Route::get('/posts', function() {
	$title = 'Blog title';
	$content = 'Lorem ipsum dolor';

	return view('posts', compact('title', 'content');
});
```

## Checking if a view exists

This view will return a boolean checking first if a view exists in the `resources/views` folder.

```
view()->exists('posts');
```
