# How to set up environment

clone file to set up environment
```git clone ```

cd into laradock file
``` cd BackEnd/blog/laradock```

run the script below
``` cp .env.example .env ```

```docker-compose up -d mysql```

run laravel default server
``` php artisan serve ```

## .env
adjust DB parameter

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=default
DB_USERNAME=default
DB_PASSWORD=secret 

```
> the parameter can find in ```laradock/.env```

type ```http://127.0.0.1:8000/``` in your browser




