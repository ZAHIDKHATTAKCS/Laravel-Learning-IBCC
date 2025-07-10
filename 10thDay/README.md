### <p align="center">Laravel Sessions</p>
- A session is a way to store and access data across multiple pages of website for a single user. This is no link to database like this is not storing the data on the database. 

- The data that is stored in the session can be accessible anywhere mean an any page within the computer.

- session store data in the server side but manage with the browser cookies, in order to store data in session for that we have to simply store like ,

```js
$request->session()->put('user'),$request->input('name');

// here the request is the http class that holds all the data and the session function is used to create a session and put mean the session should hold the data in this like here user and user is the session name through which we can access the data while input('name'); means store the input type name data in the user session

return redirect('profile'); // this means redirect to the profile page
```
- now in order to fetch data from session you have to use only session and session name like 
```js
{{session('user')}} // this will show the data of the session variable user  
```

- now how we can remove the sessions in order to remove session just go to controller and inside controller function code like

```js
session()->pull('user'); // this means it will remove the user

return redirect('profile'); // this means that it will redirect to the profile page than
```

