#### Today Learn about Deleting data from table

-   in order to delete a record from the database table so for that you have to code like
    ```js
    <td>
        <a href="{{'delete/'.$student->id}}">Delete</a>
    </td>
    ```
-   for deletion you have to create deletion function in controller and you have to pass the id in the Route like

    ```js
    Route::get("delete/{id}", "delete");
    ```

-   just go to table and add a th of operation and in tbody in td you have to define an anchor tag and in the href you have to code like
    ```js
    <td>
        <a href="{{'delete/'.$student->id}}">Delete</a>
    </td>
    ```
-   now for proper deleting data whenever we want to delete a record so for that we have to use a proper route. like

    ```js
    Route::get('delete/{id}', [ControllerName::class,'deletefnt']);
    ```

-   keep in mind always that the table columns names should be in smaller letter, like i tried a lot the delete operation. and the function in controller receiving id from the route where we passed and function code as like
    ```js
    function delete($id){ // this id is receiving from the route
        $isDelete=Student::destroy($id);
        if($isDelete){
            return redirect('tablepage');
        }
    }
    ```