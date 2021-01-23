<p align="center"><img src="https://www.ven10.co/wp-content/uploads/2019/08/ven10Logo.svg" height="100"></p>
# My Ven 10 Interview Assessment

## Inital Build Setup

```bash
# install dependencies
$ composer install

# autoload dependencies
$ composer dump-autoload

# create a .env file in the root of the project, and copy and paste the contents of .env.example into it and save it.

# Set Your Keys and APi Keys in the .env file.

# migrate and seed
$ php artisan migrate --seed

# start server
$ php artisan serve

# And you're good to go!
```

## After Build Setup (Incase of Database Refresh)

```bash
# After you've started the server sometime later in the future during development, if u wish to refresh the database, run
$ php artisan migrate:refresh --seed

# And you're good to go!
```

For detailed explanation on how things work, check out [Laravel docs](https://laravel.com).
