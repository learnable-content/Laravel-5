# Lesson 7.2 Quiz

1. To create a controller that is a resource we would do `php artisan make:controller PostsController __________`. (--resource)

2. Which method should show all the posts.

	- show()
	- index()
	- create()
	- update()

3. To create a resource route we need to do Route::__________('posts', 'PostsController'). (answer: resource).

4. dd() stands for?

	- do and dump
	- data and do
	- draft and destroy
	- dump and die

5. To send the correct method to delete a post we need to send a hidden field that looks like the following: `<input type="hidden" name="_method" value="DELETE">`.

	- True
	- False
