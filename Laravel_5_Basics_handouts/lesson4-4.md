![](headings/4.4.png)

Another important feature is **factory**. Factory is new to Laravel 5 and before it came about, we did pretty much everything in seeds. Factories already have the Faker inside of it. Factory can be consumed inside Seeder and also used in tests.

Run the following command:

```
php artisan make:seeder UsersTableSeeder
```

Now tweak the newly created file by adding

```
public function run() {
	factory(App\User::class, 50)->create();
}
```

This is going to create 50 users for us.

Also add another line of code into *DatabaseSeeder.php* (inside `run()`):

```
$this->call(UsersTableSeeder::class);
```

Next run

```
php artisan migrate:refresh --seed
```

to get rid of all the data and seed users. Check the `users` table for its contents.

