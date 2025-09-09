## <p align='center'> One To Many Relationship in Laravel </p>

-   a One to Many relationship means one record in a table is connected to many records in another table , in order to do it we have to create a models and a controller and a proper path for it to run on local server.

-   first of all we have to create two tables like Products and Sellers in the database !

-   after this we have to create two models one is for Product and other is for the sellers.

-   and now we want to make **One to Many Relation** of a **Products** table with **Seller** Table so for that we have to code in **Seller Model** like

    ```js
    function OnetoMany(){
        return $this->hasMany('App\Models\Product'); // so this will create one to many relation with the Product
    }
    ```

-   after this we have to code in controller like

    ```js
    function Data(){
        return Seller::find(1)->OnetoMany; // so this will return record of OnetoMany.
    }
    ```

-   and for this we have to create a proper route for it so when we run it will return data.

<br>

## <p align='center'> Many To One Relationship in Laravel </p>

-   The procedure is same as but here we will consider the second table is first one like when we want to apply many to one relationship so for this we will considered the second table as first table . and we code in the model like

    ```js
    function list(){
        return $this->belongsto('App\Models\Seller');
    }
    ```
- and we will code in controller like 

    ```js
    function data(){
        $data = Product::with('list')->get();
        return $data;
    }
    ```