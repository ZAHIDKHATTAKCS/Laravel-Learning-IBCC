### <p align="center"> Upload and Display File in Laravel </p>

-   whenever you want to upload the file so in the form you must have to define `enctype="multipart/form-data"` .

-   we can upload files with automatically generated names and a custom name too. now in order to find the path of the image.

    ```js
    function Upload(Request $request){
        $path = $request->file('file')->store('public'); // here in the file function we passed file that is input field name value and store function store file in the folder that is pass in the store function, and now if you print path it will return path of the image

        // and the file will be store in the storage/app/public folder
    }
    ```

-   **Note** you can't directly access it you have to make it publically available you have to make it publically available for that you have to run the command

    ```js
    php artisan storage:link // this will make the storage folder publically available to access it
    ```

-   now we can display it on frontend , so in order to display it on frontend we have to remove the extra part of the url for that we can use explode function. explode function is basically used for converting string into array.

    ```js
    function Upload(Request $request){

        $path = $request->file('file')->store('public');

        $fileNameArray = explode('/',$path); // this means to take out the path after the / forward slash
        $FileName = $fileNameArray[1];

        return view('display',['path'=>$FileName]);
    }
    ```

-   now to display on frontend you have to do like

    ```js
    <img src="{{url('storage/'.$path)}}" /> // here in the url you have to pass the folder with forward slash with the dot and the path that is passed from the controller
    ```

-   now if you want to apply a custom name so for it

    ```js
    $path=$request->file('file')->storeAs('public','dummy1.png'); // here the storeAs is the function where we have to pass the folder where we store and after this place name and with extension so the user have to select that type of file
    ```
