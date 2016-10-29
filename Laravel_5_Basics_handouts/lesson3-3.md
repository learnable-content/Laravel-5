![](headings/3.3.png)

# PHP Artisan Tinker

One tool that we run with artisan is tinker. Tinker is a powerful repl that is connected to our application. Repl stands for `read evaluate print loop`. With php we already get a repl if we were to run `php -a`. The difference is with tinker it is connected directly with our application so we can use it to interact with data in our app which we will see how to use in a later lesson.

## Running tinker

We need to be inside our virtual machine to run tinker. We can do the following:

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

Our tinker tool can do anything we can do in the php repl.

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
Then you can also run any of the php array functions like:

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
You will really see the power behind this tool when we get more into our application. With this tool we can interact with any piece of our application and actually test code before we place it in our apps. Alot of times I use this tool to test model relationships so I know what I will put in my model files.
