#### <p align='center'>Crud Operations and Pagination on Database Data</p>
#### <p align='center'>Pagination on Database Data in laravel</p>

1. Pagination with mySQL data list
2. Apply Pagination with data list Database result
3. Apply Pagination Link 
4. Add Style

- for applying pagination on table you have to do as go to the function through which you getting all the data from the database. the function needs to modify a little bit. by default the function will be.
    ```js
    function Data(){
        $Data=Student::all(); // this code will return all the data from the database
        return view('getstudents',['data'=>$Data]);
    }
    ```

- you have to change this function to this one
    ```js
    function Data(){
        $Data=Student::paginate(5); // paginate is the function that apply pagination on the data and the number 5 is the number of data show on a single page
        return view('getstudents',['data'=>$Data]);
    }
    ```
- this is the code that is in the controller function now for frontend pagination all we have to do as 

- now you have to apply numbers on view mean on frontend so for that all we have to do as just go to view and code like as we passed variable to the view so use of that variable will add pagination to our view
    ```js
    <table>
    .
    .
    .
    </table>
    {{$data->links()}} // here links is the function which creates pagination on frontend. but you will see big icons shows by code like previous icon and forward icon so you have to style it and show smaller on the page so for that just go for inspect and select icons and find out their classes names and apply and set width to 20px or whatever width you wants to apply
    ```