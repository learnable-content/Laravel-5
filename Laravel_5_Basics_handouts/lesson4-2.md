![](headings/4.2.png)

# Seeders

Seeding our database is when we create test data so we can interact with our applications early on.

One tool we like to use when creating fake "test" data is a library called [faker](https://github.com/fzaninotto/Faker). We could use this library to create lots of posts with very little effort.

To install the library we can do so by doing `composer require fzaninotto/faker --dev` This will tell our application to install the library in the development environment.

**It's always a good idea to have a seeder class for every table and only call the other classes seeders inside the `run` method**

You can now open the `dataabase/seeders/DatabaseSeeder.php` file and put the following.

```
<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1; $i <= 100; $i++) {
            Post::create(
                [
                    'title' => $faker->name,
                    'body' => $faker->paragraph
                ]
            );
        }
    }
}
```
Here we are saying that we want to use the faker library and use our Post model. We then put everything in the `run();` method. We run the database seeder with the following command inside our virtual machine.

```
php artisan db:seed
```

With this setup and our command we easily placed 100 records of fake blog posts in our database. Now we can build an application and test all the views around this data so we can support for multiple records in the database.

**You should be using model factories for seeding the DB, this is one of the main reasons it was added**
