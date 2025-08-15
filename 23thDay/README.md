#### <p align="center">Sub Customization</p>

- Stub is the skelton file of model view, controller etc. like when we create a controller model or view so by default code code is defined by stub all these files that are created by make command so it will be automatically stubs will applied. If you want to create a default function for that you can used stubs.

- first of all you have to publish stubs first run this command, 
    ```js
    php artisan stub::publish // this will publish stubs and create multiple files in the projects.
    ```
- now in order to create default function so you have to create it in controller.plain.stub. if you want to create by default model so for that you have to look for model.stub

#### <p align="center">Migration in Laravel</p>
- what is migration:-
- In order to work with laravel you don't need to work manually with database for that laravel have built-in code so that you can create by using laravel. now what if we want to create table by using laravel.

- `php artisan make:migration Create_test_table` so the create an entry in the database folder inside the database it will create a migrations folder so that file will store there. so when we open it you will see up and down function inside that file so whenever you run command so two value (Columns) will be created automatically in the table id and timestamps, so if you wants to add more fields so you can create it like,
    ```js
    $table->string('name');
    $table->string('email');
    ```
- so after this you have to connect .env file so that when we run migrate command so the table will create , migration in laravel is important because if multiple developers working on same project same table so if one developer update table here in the migrations so whenever other developer run migration after pull so their table will automatically updated, 
- after all these you have to run `php artisan migrate`