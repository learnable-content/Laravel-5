![](headings/4.3 .png)

PHP Artisan is a very useful tool to interact with your app. Use `php artisan tinker` to open it. To find a post with an id of `1` you can say

```
$post = Post::find(1);
```

You'll get "Class Post not found" error. Remember that everything is namespaced, so say

```
$post = App\Post::find(1);
```

To echo the title, say

```
echo $post->title;
```

So basically we are pulling data from the database with PHP Artisan Tinker.

Create a post:

```
App\Post::create(
    [
        'title' => "This is awesome",
        'body' => "lorem ipsum awesome"
    ]
);
```

Inside *User.php* there is a `$fillable` variable. It means that I can interact with my app with Faker, but not outside of it. So copy the `$fillable` variable into *Post.php* and tweak it:

```
protected $fillable = [
	'title', 'body'
];
```

These are the fields that I want to be able to fill in, mass assign. This is just a layer of protection for us.

Also there is a `$hidden` variable that defines which fields I don't want to return.

Next restart Tinker and run the same command again - everything should work!

