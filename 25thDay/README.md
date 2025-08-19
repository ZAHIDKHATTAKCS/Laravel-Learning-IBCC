### <p align="center">Seeding in Laravel</p>

- Seeding mean enter dummy data using laravel into database. In order to insert dummy data into database seeding so first of all we have to create seeding file to create file we have to run command 
`php artisan make:seeder seeder_name`
when we run it, it will create seeders folder in database and your file will store there , 

- in seeder we have to import the database like
```js
use Illuminate\support\Facades\DB; 
// this will import database file
```
- now we have to import a file that generates random data.
```js
use Illuminate\support\Facades\Str;
```

- after this we have to code in function like

    ```js
    public function run(){
        DB:Table('table_name')->insert([
            'name'=>Str::random(10),
            'email'=>Str::random(10),
            'address'=>Str::random(10)
        ]);
    }
    ```
- Now we have to run the command `php artisan db:seed --class=class_Name`

