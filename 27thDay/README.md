### <p align='center'>Accessor in Laravel</p>

- An accessor in laravel is a way to automatically change the formate of a value when you get it from the database , Think of it like a filter that runs after fetching data so accessor formate the data when reading from the database.

- `or` Laravel accessor are the methods that are written in the model and it is used for when we fetching data from the database and want to formate it like when we fetch data from database and we want to show it in the capitalize form and if we want to show the country code in front of mobile number keep in mind that it doesn't make changes in the actual data that is stored in database. it only make changes on frontend.

- so in order to do that first of all you have to create Model, Controller, and view (for insertion and for getting data).


- ```Note``` in order to apply the accessor we must code in model.

- so for applying a capitalize formate on data you have to create a function in model like

    ```js
    function getNameAttribute($val){ // here always you have to use get and after get you have to plac the specific column name like Name, Email etc and then attribute
    return ucfirst($val); //this is php built in function used for uppercase the first letter of each value that is stored in the column Name in database
    }
    ```
- now for adding the country code like +92 on the phone numbers

    ```js
    function getPhoneAttribute($val){
        return '+92'.$val;
    }
    ```
