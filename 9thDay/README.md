## Route 
- when we want to access a page or controller in laravel and we define a url that is called **Route**.

```js
    Route::get('user',[UserContorller::class,'user']);
    // here route is the class while get is the method 
```

### <p align='center'>Types of methods</p>
### <p align='center'>Get method</p>
- **Get** method is used to store data on database or anywhere.

```js
Route::get($uri,$callback);
```

### <p align='center'>Put method</p>
- **Put and Patch** these are the methods these two methods are used to update data, you can used both of the method to update data but if you wants to update multiple data so you have to use **put** method and if you wants to update a single data like 'email' or 'name' so you have to use **patch** method
```js
Route::put/patch($uri , $callback);
```


### <p align='center'>Delete method</p>
- delete method is used to delete a user or any row or data from the database.
```js
Route::delete($uri,$callback);
```

### <p align='center'>View method</p>
- view method is used to load the UI page on frontend.

- when we used get request method so all the data is visible on the url. This is the disadvantage of using it. 

- **Note** when we using post method in form we must have to use **@csrf** inside the form in laravel this is for the security purpose.

- put method when we using put method we can't send as a method in a form in order to use it we have to use it as an input field like

```js
<input type="hidden" name="_method" value="put"> 
// put will be used like this but the method in the form 
```

```js
// same goes for delete method we have to use like 

<input type="hidden" name="_method" value="delete">

//put will be used like this but the method in the form 
```

**Note** for all the the method you using you have to use the put/delete in route like 

```js
Route::delete/put/patch ('/user',[userController::class,'user']);
```


### <p align='center'>Route : : Any and Match Functions</p>
- **Any and Match** these are the functions of Route , these are the two important functions in route,

- **Any Method** by the help of Any method you can make one route for many routes as per we used multiple methods earlier like post, put, get and delete etc. and we call them as a seperate methods of UserController, now if you want to call a single function for all the Routes. you thinks that we have to place ANY as a method class in route like 
```js
Route::Get('/user',[UserController::class,'Any']);
Route::Put('/user',[UserController::class,'Any']);
Route::delete('/user',[UserController::class,'Any']); // this way is also working but its not the proper way instead of it 
```

```js
Route::Any('/user', [UserController::class,'Any']); // this will call any function that is define in the controller UserController 

// in Any function you can change the method in form like method="post" or method="get"
```

- **Match** function is used to modify the calling functions like if you want to run specific method only on **get** and **post** method and you want to call another function on **put** and **delete**
- in order to use match function so here how you can use like

```js
Route::match(['post','get'],'/user',[UserController::class,'Group1']);
// so here on method post and get only the Group1 will be called 

Route::match(['put','delete'],'/user',[UserController::class,'Group2']); // so here if you set the method as a put or delete so the Group2 function will called from UserController
```

### <p align='center'>HTTP Request Class</p>
- HTTP request is whenever we submit the form or want to access the page so our computer sends request to the server. so the HTTP request class provides the forms details in the controller.
- now as we discussed that the HTTP request is send to the server and as we know the form details are also send with it so we can see the details that are send to the controller by using HTTP request class like whenever you create the controller the request is also import with it automatically, so in order to check the data that is send by the HTTP request to the controller we can do it

```js
// here is the HTTP request that holds all the information about the form and we store all data in $req
Function NewOne(Request $req){
    return $req; // it will return the data that is send by the http request
}
```

- we can also get more information like , which method is used which path is used here, and we can also get the url these are all accessible by using HTTP request, and we can also access the inputs fields that are submitted like 
```js
echo "The Request method is " . $req->method(); // so it will return which method is used in the request 

echo "The Request path is " . $req->path(); // this will return the path from where the http request created 

echo "The Request URL is " . $req->url();// this will return the url from where the request is made 

echo "The input type name value is " . $req->input('name'); // this will return the value of the input field name
```