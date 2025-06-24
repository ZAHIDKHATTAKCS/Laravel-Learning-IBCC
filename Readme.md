## Started Laravel

- Laravel is the PHP MVC Framework, MVC stands for (Modal View Controller). It is Very Popular Framework of PHP.
- Laravel is the Framework through which we can create websites and API's.

<br>

#### <p align='center'>Features in Laravel</p>
- Routing
- DB Connection
- Well managed Code
- Project Structure

<br>

#### <p align='center'>Tools for Start Laravel</p>

- PHP and Composer or use [Laravel Herd](https://herd.laravel.com/docs/windows/getting-started/installation) ( Herd is a tool throgh which you can install xampp and composer easily )
- Laravel Package
- Windows or any OS 

<br>

#### <p align='center'>Why Laravel</p>

- Large Community
- Regular Updates
- A lot of Features 
- The command line is best

<br>

#### <p align='center'>XAMPP and Composer</p>

- XAMPP is a tool that install PHP and MySQL easily and quickly 
- Composer helps you install and manage the libraries and packages that your PHP or Laravel Project needs. Composer saves everything in a file called **Composer.json**

- with the help of composer we can also install laravel easily and we can update the laravel using composer. Sometimes we need external libraries for laravel framework so we can install it using composer.

#### <p align='center'>To check XAMPP and Composer are installed or not</p>

- go to **CMD** and type **PHP -v** it will show the version of PHP installed in your machine

- go to **CMD** and type only Composer if its not showing an error it means the composer is also installed !

#### <p align='center'>Create Laravel Application</p>

- Install laravel Global package using this command 

```js 
composer global require laravel/installer
```

- this command will install the laravel globally after this you can install laravel project anywhere using only below command

```js
laravel new project-name
```

- after this command it will show some settings so you have to just hit enter and go for by default one 

- after this run this command to run project 

```js
php artisan serve

your project will be run 
```

<br>

#### <p align='center'>What is MVC</p>

- **MVC** stands for modal view controller , it is a software design pattern to develop reliable software.

- ***Modal*** : - manage data and logic , and it is interacted with the database, handle data, communicate with the database
  
- ***View*** : - Display data from the modal to the user. Only cares about how things looks likes **( HTML, CSS etc )**

- ***Controller*** : -  act as a middle middle man in between Modal and view, handle user interactions and select a view to render for the user. receives user inputs e.g from submission, button click, and sends the data to the view for the display.

<br>

#### <p align='center'>File and Folder Structure</p>

##### <p align='center'>Composer.json file</p>

  - it is the most important file in the project. Because this file have all the information of the project like what is the project name, which packages are using in the project. which is the version of php in the project, and which libraries are used in this project.

##### <p align='center'>Vendor Folder</p>

- ***Vendor*** - all the dependecies that are mentioned in the **composer.json** file are stored in the **Vendor** folder.

- some of other dependencies are also stored in the vendor folder this why the folder is too heavy and may you install a package that is depend on the other so all these are stored here. **Note** this why we not pushed the vendor folder to the github because its too heavy if someone other working on project they have to only pull the code and run the command composer update so the vendor folder will be created in their local machine.

##### <p align='center'>app folder</p>

- this is the folder where the core code of our application stored here.

##### <p align='center'>Resources</p>

- This folder stores the user interface related files of our application. 

##### <p align='center'>Public</p>

- Public is the folder in which the **index.php** file stores that is shown directly when the application runs

##### <p align='center'>Storage Folder</p>

- if you want to create files in your application like pdf files excel files so that will be stored in the storage folder of the application

##### <p align='center'>tests folder</p>

- tests folder is the folder where we can store the testing related files.


##### <p align='center'>.env file</p>

- it is very important file env means environment file here we stores the secrete keys and configuration.

##### <p align='center'>.env.example</p>

- .env.example is the file that is the copy of the default env file so if you need some default settings you can watch it their. nothings happens if you delete this file.

