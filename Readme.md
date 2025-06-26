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

- **_Modal_** : - manage data and logic , and it is interacted with the database, handle data, communicate with the database
- **_View_** : - Display data from the modal to the user. Only cares about how things looks likes **( HTML, CSS etc )**

- **_Controller_** : - act as a middle middle man in between Modal and view, handle user interactions and select a view to render for the user. receives user inputs e.g from submission, button click, and sends the data to the view for the display.

<br>

#### <p align='center'>File and Folder Structure</p>

##### <p align='center'>Composer.json file</p>

- it is the most important file in the project. Because this file have all the information of the project like what is the project name, which packages are using in the project. which is the version of php in the project, and which libraries are used in this project.

##### <p align='center'>Vendor Folder</p>

- **_Vendor_** - all the dependecies that are mentioned in the **composer.json** file are stored in the **Vendor** folder.

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

##### <p align='center'>Routing in Laravel</p>

- Routing is the path for opening a webpage or Routing is a URL for opening a file

##### <p align='center'>Two Ways of Routing</p>

- By default defining Route you can copy paste and make new routing

```js
Route::view("/home", "home");
```

##### <p align='center'>Routing Methods</p>

- Route::get($uri,$callback);
- Route::post($uri,$callback);
- Route::put($uri,$callback);
- Route::path($uri,$callback);
- Route::delete($uri,$callback);
- Route::options($uri,$callback);

#

## <p align='center'> Day 2</p>

##### <p align='center'>Controller in Laravel</p>

- the Controller handles the user request.
  - like display view
  - Handle Database
- we an say that controller is a central unit that handles usr request modal and view.

##### <p align='center'>Where to Create Controller</p>

- in order to create controllers just go to the path ,

  ```js
  app / Http / Controllers / Controller.php; // that is the default created controller
  ```

##### <p align='center'>How to Create Controllers</p>

- go to the project terminal and run the below command

```js
php artisan make:controller ControllerName
```

- **Note** Controller name should be start with the Capital Letter

##### <p align='center'>How to Call Controller</p>

- in order to call controller you have to create function in controller and you have to call it from web.php file mean from **Routing File**

- **Note** you have to create path for each function you write in Controller

```js
Route::get('user',[ControllerName::class], 'FunctionName you created in controller file'); // here the user in get function is the path form where you can call the controller without creating view
// now if go to user path so that function will be called from controller
```

##### <p align='center'>How to Call view in Controller</p>

- in order to call view in controller function you have to write code in function like

```js
return view("ViewPageName");
```

##### <p align='center'>What is view in Laravel</p>

- the view contains the UI part of the project, view has the code that is directly visible to the user.

##### <p align='center'>How to make views in Laravel</p>

1. **Manual Way** : - by default there is a view created in a views folder that is **Welcome.blade.php** you can make a copy of it and create it your own file by renaming it.
2. **Command Line**

- Open Terminal
- Run Command

```js
php artisan make:view viewName
```

- **Note** view name should be start with the small letter because of coding standards

- **Note** you can call the view from the controller we need to call a viw from controller because of sometimes we need to show data from database to the User in a view file.

##### <p align='center'>Created nested view</p>

- nested view mean to create view inside a folder

  ```js
  php artisan make:view folderName.viewName // this will create a view inside a folder
  ```

- now in order to call it in controller so you have to give the path in function like

  ```js
  function view() {
    return view("foldername.filename");
  }
  ```

- route should be like

```js
Route::get('view',[ControllerName:class],'FunctionName')
```

##### <p align='center'>Blade Template in laravel</p>

- Blade template is use for execute the PHP code.
- Blade template let you mix the HTML and PHP code.
- in blade template you don't need to draw the raw php like `<?php ?>` instead of it you can use `@` symbols and only curly braces `{{}}`.

##### <p align='center'>Display Variables in Laravel</p>

- in order to display variables in laravel you don't need to start and end the php instead you have to use Curly braces like

  ```php
  $name = 'zahid khattak';

  <h1>welcome {{$name}}</h1>
  ```

##### <p align='center'>Using Loop</p>

```js
@for($i=0;$i<=10;$i++)
<h2>{{$i}}</h2>
@endfor
```

##### <p align='center'>Foreach Loop</p>

```js
$users = ['ali','hamad','zahid','khattak']
@foreach($users as $user)
<h2>user is : {{$user}}</h2>
@endforeach
// this will print all the users from the array
```

##### <p align='center'>SubView in Laravel</p>

- A view that is include in other view is called subview. Like you have a view **homepage.blade.php** and you include the **header.blade.php** in **homepage.blade.php** in that case the **header.blade.php** is called Subview. And the **homepage.blade.php** will be called main view . 

##### <p align='center'>How to create Subview</p>

- the creation of sub view as same as view. you have to create a view and code in it and this is called creation of subview.
  
##### <p align='center'>Include Subview to Main view</p>

- first you have to create a sub view after that just include it on the main view like this 

  ```js 
  <!-- this is main view -->
  @include ('header'); // when header view is not in the other folder

  @include ('FolderName.header'); // when it is inside the other folder

  @include ('FolderName.header',['data'=>'data passed']) // when you want to passed the data from the main file
  ```

##### <p align='center'>Components in Laravel</p>

- a peace of code that can be reuse again and again is called component.

- like a function is written once but can be reuse again and again.

- we can create component and reuse it again and again.

- Component can be reuse within the same file as well as you can reuse it on other files also.

- To create Component you have to run command 
  ```js
  php artisan make:component componentName 

  // this will create a component folder and a file in view folder and as well as in the app folder 
  ```

- now if you code in view component and want to render the same component on other page like you create a component of an alert message and want to render it on the other page so for that you have to write this on other page like 

  ```php
  <x-componentName />
  // like
  <x-alertMessage />

  // if you wan to pass data in component so here you can pass like

  <x-alertMessage data="this is green alert" class="success" />

  // and go to app folder component and write like this 

  
  class messageBanner extends Component{
    public $data;
    public $class;
    
    /**
     * Create a new component instance.
     */
    public function __construct($data , $class)
    {
        //
        $this->data = $data;
        $this->class = $class;
    }
    
    // after this code in app you can use the component 
  ```

<br>

#
## <p align='center'>Topics Covered</p>

1. **Xampp and Composer**
 
2. **install Composer globally** 
   ```js
   Composer global require laravel/installer
   ```
  
3. **Create new Project**
   ```js
   laravel new ProjectName
   ```
4. **Run Project** 
  ```js
  php artisan serve
  ```
5. **MVC**
   - **Modal** :- Modal handle CRUD operation its responsiblities to interact with the database
   - **View** :- The UI part of the project is called view
   - **Controller** :- Controller is the middle man in between Modal and view it takes request from the user and than act as per the instruction
6. **Composer.json File** :- Composer is the main file that have all the details about the project like which packages are used which version is use etc.
7. **Vendor folder** :- all the packages are stored here.
8. **app folder** :- this is the main folder where core code stores.
9. **Resources** :- this is the folder where our view are stored
10. **public folder**
11. **Storage folder** :- this is the folder if you use excel pdf files in the project they are stored here
12. **tests folder** :- this is the folder where developer write tests here.
13. **.env file** :- this is the main file where our secrete keys are stored here
14. **.env.example file** :- its the copy of env file if you remove something form **.env file** and you need it to get back you can take it from this file
15. **Routing in Laravel** :- Routing is the path way to the web page 
16. **Controller in Laravel** :- 
    ```js
    php artisan make:controller ControllerName
    ```

17. **view in Laravel** :- the part that is directly visible to the user is called view.
    ```js
    php artisan make: view viewName
    ```
18. **Blade Template in Laravel** :- blade template allow you to write php code without ```<?php ?> ``` and allow you to code the backend and frontend within the same file.
19. **Display Variables in Laravel** :- 
  ```js 
  $name = "zahid";
  {{$name}}
  ```

20. **Loop in laravel** :- 
    ```js
    @for(i=0;i<=10;i++)
    <h3>{{$i}}</h3>
    @endfor
    ```
21. **Foreach Loop** :- 
    ```js
    $users=['a','b','c']
    @foreach($users as $user)
    <h4>Welcome to my website {{$user}}
    @endforeach
    ```
22. **Components in Laravel** :- Components are the reusable code in laravel like function that we can reuse again and again.
    ```js
    php artisan make:component ComponentName
    ```
23. **Call Component**

    ```js
    <x-MessageAlert />
    ```


