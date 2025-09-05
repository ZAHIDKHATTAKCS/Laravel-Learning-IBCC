### <p align="center">Laravel One to One Relationship</p>
- There are 4 types of relationship in laravel.

- A one to one relationship in laravel means one record in a table is linked with exactly one record in another table. so if there is multiple record stored of same record in other table so it will show only store first row if other record found this will only return first row data,

- so in order to create one to one relationship for that first of all you have to create models and controller and if you want to create one to one relation in between two tables so for that you have to code in a model like , (Seller.php Model)
    ```js
    // this is the Seller Model and we want to make relation one to one with product table 
    function Product(){
        return $this->hasOne('App\Models\Product');
    }
    ```
- now this will not work if you not code in controller so for it
    ```js
    function list(){
        return Seller::find(1)->Product;
        // so it will return first data in a one to one relation
    }
    ```
- here the Product is the function of the Product Model now the question arise that how the controller know about the Seller id is stored in seller_id column look this is the default functionality of laravel, if you want to make joins of two tables so all you have to do as create a column of other table as a singular with underscore id, for example we have a table products and sellers and we want to attached the sellers and we through their id in product table so for that in product table we have to create a column of other table singular name along with the underscore like 

### Products Table

| id | Product Name  | Seller_id |
|----|---------------|-----------|
| 1  | Laptop        | 101       |
| 2  | Mobile Phone  | 102       |

- so what if you create a column instead of singular table name along with the underscore for that laravel default functionality will not work now for it we have to specify the proper column name like in the seller Model like
    ```js
    function list(){
        return $this->hasOne('App\Models\Product','Owner_Id'); // this is the way when you not follow the laravel default way
    }
    ```