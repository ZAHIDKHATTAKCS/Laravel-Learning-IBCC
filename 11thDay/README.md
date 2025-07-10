### <p align='center'>Laravel Flash Session</p>
- a session is a way to store only once. after page refresh or anything route request data will removed from flash sessions.
- this is basically used for display error and success messages . you can also keep it even if the page is refresh or if you visit another page like ,

```js
function AddUser(Request $request){
    $request->session()->flash('message','User has been added successfully'); // here is how you can create the flash session

    return redirect('userView'); // this will redirect the user when flash session runs
}
```

- you can access this on frontend like

```js
<h1>user page</h1>
@if(session('message'))
<h1>{{session('message')}}</h1>
@endif
```
- and you can keep it even if the page is refresh or you visit other page , here is how you can keep it up like
```js
{{session()->reflash()}} // this will keep all the sessions that are used in the code and all the session will not disappear after refresh
```

- you can also store multiple flash messages like

```js
function AddUser(Request $request){
    $request->session()->flash('success-message','user added');

    // another flash message
    $request->session()->flash('error message','user not added');

    return redirect('/userView');
}
```
- now receive on frontend


```js
<span>{{session('success-message')}}</span>
<span>{{session('error-message')}}</span>
// now if you want to keep the success-message and want to remove the error message after display it once like a flash so for it

{{session()->keep(['success-message'])}} // success message will keep by the session it will not removed while all the other session will show once and than removed 
```


- 