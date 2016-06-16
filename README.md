# Installing our first Laravel application

Install the Laravel installer with composer

```
composer global require "laravel/installer"
```

After that is installed lets make sure we tell our system to respond to our command.

```
~/.composer/vendor/bin // added to our path
```

## Install a new project

Now lets run the following to create a new Laravel install.

```
cd ~/projects
laravel new blog.app
```

Now we need to tell our vagrant machine that our new site needs to be available.

```
cd ~/.homestead
subl Homestead.yml
```
Add the following to the sites section

```
sites:
    - map: blog.app
      to: /home/vagrant/Code/blog.app/public

databases:
	- blog_db
```

Now run ```vagrant reload --provision``` to reload the virtual machine with the new site we added.

Next we will need to generate an application key for our site that is unique to that site.

```
cd ~/Homestead
vagrant ssh
cd /home/vagrant/Code/blog.app/public
php artisan key:generate
```

## Setting up our .env file

So we 

## Setting up our DB

## Setting up our hosts file

Lets edit our hosts file so we can point our new app to the server.

```
subl /etc/hosts


// Add the line
192.168.10.10  blog.app
```