![](Laravel_5_Basics_handouts/headings/3.3.png)

# PHP Artisan Tinker

One tool that we run with Artisan is Tinker. Tinker is a powerful REPL that is connected to our application. REPL stands for `read evaluate print loop`. With PHP we already get a REPL if we were to run `php -a`. The difference is with Tinker is that it is connected directly with our application, so we can use it to interact with data in our app, which we will see how to use in a later lesson.

## Running Tinker

We need to be inside our virtual machine to run Tinker. We can do the following:

```
cd ~/Homestead
vagrant ssh
cd ~/projects
php artisan tinker
```

Because we will frequently need to SSH to our Homestead VM, you can add the below bash snippet inside your `~/.bashrc` or `~/.zshrc` to make things quicker.

```
function homestead() {
    ( cd ~/Homestead && vagrant $* )
}
```

We can now SSH to our machine from everywhere:

```
homestead ssh
```

Our Tinker tool can do anything we can do in the PHP REPL.

```
Psy Shell v0.7.2 (PHP 7.0.1-1+deb.sury.org~trusty+2 — cli) by Justin Hileman
>>> 2 + 2
=> 4
>>>
```

You can create arrays and dump them.

```
>>> $test = ['this', 'works', 'cool'];
=> [
     "this",
     "works",
     "cool",
   ]
>>>
```
Then you can also run any of the PHP array functions like:

```
>>> shuffle($test);
=> true
>>> $test;
=> [
     "works",
     "this",
     "cool",
   ]
>>>
```
You will really see the power behind this tool when we get more into our application. With this tool we can interact with any piece of our application and actually test code before we place it in our apps. For example, you can use this tool to test model relationships.
