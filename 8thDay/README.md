#
## Day 8th Learning 

#### <p align='center'>Query Builder</p>

- Query builder are the types of functions that helps us to use execute database queries in laravel.

#### <p align='center'>Eloquent Model Query Builder</p>
- When we used query builder with model file so that its called Eloquent Model Query Builder.

- When we used query builder with the database class so its called Database query builder.
   - Create Controller
   - Create View
   - Create Route for Controller in web.php and import Controller first.
   - import model in Controller

    ```js
    Function User(){
        $response = User::all(); // this will get all the data form the User table

        // Now if you want to show the data on frontend so for that 
        return view('User',['key'=>$response]);

        // Now for condition if you want to filter out data so for that 
        $response=User::where('phone','111')->get();


        // Now if you want to show the first result
        $response = User::where('phone','124')->first(); // this will show the first result of where phone is = 124 and this will not show the data properly it will pass an error its because you send data as an array while you fetch only once record so for that 

        $response = User::where('phone','124')->first();
        $response = [$response];


        // now insertion data to database 
        $response = User::insert([
            'name'=>'key',
            'email'=>'key@email.com',
            'phone'=>'010'
        ]);

        // now update
        $response = User::where('name'=>'key')update([
            'phone'=>'12'
        ]);

        // Delete
        $response = User::Where('name','key')->delete();
    }
    ```