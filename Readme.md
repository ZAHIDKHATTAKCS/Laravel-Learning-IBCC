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

#

## <p align='center'> Day 3</p>

<br>

##### <p align='center'>Form and inputs Field in Laravel</p>

###### <p align='center'>Methods in forms</p>

    1. Get :- Get method of form is less secure because its value is visible in the URL.
    2. Post :- Post method of the form is more secure because the data is not visible to anyone.

- so first create a form in a new view with the inputs fields and _**Note**_ that the name attribute must be on each input field.
- once you create the form after this you have to create controller for it when controller done after this you have to crete a route for it so inside the route you have to use the method that you specified in the method attribute of the form and in the action attribute of the form you have to enter the url that is in controller

- in laravel we must send a token called _**@csrf**_ token if you didn't send this token you will get an error of ```419```

- after this you code will be run and it will return what you write in the controller function now for get the form data

- now for get data you have to write **```Request```** and along with it you have to pass a variable like
- _**Note**_ for a form you have to create a route and also path for it in route page.

```js
function addUser(Request $req){
  return $req; // this will show you all the data 

  // now if you want specific data so for it 
  echo $req->username;
  echo $req->userEmail;
  echo $req->userPhone; // etc etc
}
```

##### <p align='center'>Form handling in Laravel</p>

- if you use checkboxes in form when you select multiple data like there is an option of skills and there are multiple options like JAVA, PHP, Laravel and you select all. but instead of all the values you will get only one value instead of getting all values. like

  ```js
  function getUserData(Request $req){
    echo $req->skills; // here you will get an error its because of its an array so have to define as an array in html file
  }
  ```

- for example here is how you can define an array in html

  ```js
  <input type="checkbox" value="HTML" name="skills[]" />
  <input type="checkbox" value="PHP" name="skills[]" />
  <input type="checkbox" value="Laravel" name="skills[]" /> // here you must have to define as an empty array
  ```

- here is how you can get the array data in controller
  
  ```js
  function getUserData(Request $req){
    print_r($req->skills);
  }
  ```

##### <p align='center'>Form Validation in Laravel</p>

- Form validation is the process in which we check about the data is filled by the user is correct or not For example, if you want the must enter their name and username must be atleast 10 characters so for validation you have to write code like.
- in controller you have to write like
  
  ```js
  function getUserData(Request $result){
    $result->validate([
      'username'=>'required | min:10 | max:20'; // here the 'username' should be matched with name of the input field
      'userEmail'=>'required | Email'; // here the userEmail should be matched with the name of input field
    ])
  }
  ```

- here how you can write validation on views like
  
  ```js
  
  <input type="email" name="userEmail" />
  <span>@error('userEmail'){{$message}}</span>
  <input type="text" name="username" />
  <span>@error('username'){{$message}}</span> // this will check if the username validation matched with the defining rules in controller if match the form will be submitted if not the form will not submitted
  ```

<br>

##### <p align='center'>Apply custom error Messages in form Validation </p>

- if you want to apply custom errors messages so for that you have to pass a second parameter in **validate function** as an array for example
  
  ```js
  function getUserData(Request $result){
    $result->validate([
      'userName'=>'required',
      'userEmail'=>'required | Email | min:3',
    ], // here you will pass another array for custom messages like 
    [
      'userName.required'=>"user must enter their name",
      'userEmail.min'=>"length of the email should be 3 characters",
    ]
    )
  }
  ```

- now what if user want to show the old value when the page refresh

```js
<input type="text" name="userName" value="{{old('userName')}}">
 // here in the value you have to use old function and pass the name attribute value in it so it will show value after refreshing the page
```

- now what if user want to color the input field when there is an error in the field so for that

```js
<input type="text" name="userName" class="{{$errors->first('userEmail')?'input-error':''}}">
// so her if there is an error the class of input-error will automatically generated , so you have to create the style for it in advance like

<style>
.input-error{
  border:2px solid red;
}
</style>
```

- _**Note**_ the custom validation is comes from a file called **validation.php** and its hide by default in order to see it you have to run the command

```js
php artisan lang:publish; // this will unhide the folder and you will able to see the custom messages 
```

#

## <p align='center'> Day 4</p>

##### <p align='center'>Apply custom validation in Laravel</p>

- custom validation rules let you create your own rules to check if user input is valid when laravel's bulid-in rules like (Required, email, max).

##### <p align='center'>Why use Custom Rules </p>

- sometimes you want to check
  - A number must be even
  - A username must be incldue @
  - A field must be start with the Uppercase letter etc

  ```js
  php artisan make:rule rule-name

  // like 

  php artisan make:rule UpperCase // so this will create a folder of Rules in the app folder and a file within it, the name of the file is UpperCase.php so where you can define new rules for validation
  ```
  
##### <p align='center'>URL Generation </p>

- it si the laravel feature through which we can easily working with routing, links and URL's. The URL Generation make our way easy only you have to use only build-in functions. for example,

  ```js
  Get Current url : - {{URL::current()}} // display the current url
  Get Full url : - {{URL::full()}} // display the full url with data passed that is show in the url
  Get Previous url : - {{URL::previous()}} // this will show the previous url like from where this page is opened
  TO url : - <a href="{{URL::to('home')}}">Homepage</a> // direct url using to function 
  TO url : - <a href="{{URL::to('home',['name'])}}">Homepage</a> // when we want to pass argument
  ```

#

## <p align='center'> Day 5</p>

##### <p align='center'>Route Grouping with Prefix </p>

```js
Route::view('student/home','home');
Route::get('student/show',[HomeController::class,'show']);
Route::get('student/add',[HomeController::class,'add']);
// here in these routes the student is the prefix for all the routes 
```

- so for Routes Grouping if the prefix of all the routes are sam ewe we can keep these in a group for that we keep all these in a function this is good because if there are 1000 routes in a ll the routes you that have the same prefix so you can keep it in the function. Later on if you want to change the name of the prefix from ```student``` to ```teacher``` so you can do it easily.

- **```Note```** That for the controllers we have to use get always.

- for creating group we have to use the prefix function like

```js
Route:prefix('student')->group(function{
  // so here you have to paste all the routes that are the prefix of student as per we pass the student in a prefix function

  Route::view('/show','show'); // so here before /show it will applied student as a prefix like student/show

  Route::get('/add',[HomeController::class,'add']); // here also it will apply student prefix

  // note now if you want to apply student/one on prefix so just change the value in the prefix function so it will be changed 
});
```

##### <p align='center'>Route Grouping with Controller</p>

- As we know we repeat the controller name and class in all the routes of controller so now we have to use the **Grouping Routing** with Controller for it. like

  ```js
  Route::get('StudentController/show',[StudentController::class,'show']);

  Route::get('StudentController/delete',[StudentController::class,'delete']);


  Route::get('StudentController/add',[StudentController::class,'add']);
  ```

- as we look before we have to use the ControllerName with the class always when we have to call the same controller so for this we can group it as a single controller for our convenance like

  ```js
  Route::Controller(StudentController::class)->group(function(){
    Route::get('StudentController/add','add'); // so now you don't have to write the ControllerName::class this 
    Route::get('StudentController/delete','delete');
  });
  ```

##### <p align='center'>Middleware in Laravel</p>

- Middleware is a layer in between user and application
- Middleware is checking conditions or filter user requests
- if condition pass request will reach to middleware
  
##### <p align='center'>Types of Middleware</p>

1. Global Middleware : Applied on whole application
2. Route Middleware  : Applied on specific routes or the middleware that is applied on number of routes.
3. Group Middleware :
  
  ```js
  php artisan make:middleware AgeCheck 

  // this command is used for the creating of the middleware

  // the middleware will be in this location app/Http/Middleware/AgeCheck.php
  ```

- now in order to apply the middleware so you have to apply it in **```bootstrap/aap.php```** file

- so in order to apply proper so in the app.php file bootstrap folder you have to apply middleware in the section of middleware but you have to import the middle before use.

```js
public function handle(Request $request, Closure $next): Response
    {
        // echo 'Print this using AgeCheck middleware';
        // echo '<pre>';

        // in the $request we have all the data like hosted url, age etc
        // print_r($request->age);
        
        if($request->age<18){
            die(' you cannot visit our website');
        } // in order to retreive the age you have to pass the age in the url of your application like 8000/show?age=19
        return $next($request);
    }
  ```

<br>

##### <p align='center'>Middleware Group in Laravel</p>

- Middleware can be apply on single route
- Middleware can be apply on Route Group
- Middleware can be apply on all Route

- now what if you want to apply the middleware on a single route or what if we have 100 routes and want to apply 20 middleware on only 20 pages. so for that first you have to create multiple middlewares and you have to import it in the **bootstrap/app.php** file
  
- in order to make a group of the middlewares for that 

  ```js
  $middleware->appendToGroup('groupName',[
    // so have to create an array here its because we have multiple middlewares here
    AgeCheck::class,
    CountryCheck::class,
  ]);
  ```

- now in order to apply these middleware properly you have to place the middleware name in the routes files like

  ```js
  Route:view('/home','home')->middleware('middlewareName');
  // so here the group of middleware will be applied on a single page
  ```

- now in the middleware file you can write code like
  ```js
  if($request->Country!='Pakistan'){
    die('you cannot access the website you are outsider');
  }

  // for age check
  if ($request->age<18){
    die('you are not eligible  to visit our website');
  }
  ```

- now in order to check it working properly or not so for this you have to run your application and go to the path and give details like
  
  
  ```js
  localhost:8000/home?age=20&Country=Pakistan // so if you proper enter the details so it will be run else it will through a die error
  ```

- now how to apply a group of middleware on multiple routes

  ```js
  Route::middleware('middlewarename')->group(function(){
    // pass all the route so that multiple middleware will be applied on multiple routes
  });
  ```


##### <p align='center'>Connect to Mysql Database</p>

- **.env File** in order to connect the project with the database you have to modifiy the **.env file**. 

- make these changes 
  
1. DB-Connection = mysqlite to mysql
2. uncomment all the below commands after DB-Connection command
3. create a database in php/mysql
4. DB-Database = "place your database name"
5. keep the username as it as and password should be empty
6. run ``` php artisan migrate ``` this command will creates some defaults tables.

- now create Controller for fetching data : we have to create controller to fetch the data from the table so for that in controller create a function that returns data like 
  ```js
  function ShowUsers(){
    return DB::select('select * from Users');
    // now if you run the controller so the data from the users will be fetched and showed as an object 
  }
  ```

- now if you don't want the default tables that are generated by the migrate command so for that you have to do a little change on **.env file** like change 
  ```js
  SESSION_DRIVER=database // change this to the below one
  SESSION_DRIVER=file

  // so after this your project will be run without running migrate command and it will not giving any error
  ```

</br>

##### <p align='center'>Connect to Mysql Database</p>

- first of all you have to create the connection with the database
- after this fetch the data in controller

  ```js
  function showUsers(){
    $UsersData = DB::select('select * from users');

    return view('Show',['users'=>$users]); // here is the key users in the array first this key will be use to show the data
  }
  ```

- now in the file you want to show just code like 

  ```js
  // first create the UI like if you want to show the data in the table so create table first and apply foreach loop than like

  @foreach($users as $user){
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td> //etc etc
  @endforeach

  // so this will fetch the data and show on a view
  }
  ```

- 

</br>

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

18. **Blade Template in Laravel** :- blade template allow you to write php code without ```<?php ?>``` and allow you to code the backend and frontend within the same file.
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
