### Insert Data in MySQL Database Table
- **.env file** configuration first of all go to **.env file** change the value of ```DB-Connection``` from ```sqllite``` to ```mysql``` after that uncomment all the below commands of that line. after that creates model, view and controller

- create form in view
- in controller we have to define function and import that controller in routes file and use it with post method.
- import model in controller once the model import in the controller.

    ```js
    function addStudent(Request $req){
        $student = new student(); // this will creates a new and empty student object.
        $student->name=$req->name; // this will store the value of name in the student object.
        $student->email=$req->email; // this will store the value of email in to the student object.
        $student->phone=$req->phone; // this will store the value of the phone number in the student object.
        $student->save(); // this will store a new student in the database
        if($student){
            echo 'a new student added to the database';
        }else{
            echo 'there is an error in storing the data at database';
        }
    }
    ```
- **Note** created_at and updated_at are the two database values that are automatically updated by the laravel and these two name should be in lower case and with underscores.


### Now How to Get all Data From the Database
- first of all a new view will be created for display data there.
- and we will create another function for fetching data , the function should be created in controller . 
- for this case we already created controller so we have to only create a new function inside it .
- after this we have to create a route for function to call. but for new we have to use get method in route its because we are going to get the data.
- inside the controller we have to import the model but we already call it here in this case .
- now inside the controller function we have to code like 
    ```js
    $StudentData = Student::all(); // here it will get all the data from the student model . here Student is your Eloquent model. so it will run query , it will run select * from students;

    return view('list-student',['data'=>$StudentData]); // this will return view of list-student page with the data key so we can use this key to show data in list-student. now in order to show the data in the page so for that you have to create a table in that page 
    ```

- now in order to reterive data in the view we have to create table and use @foreach Loop
    ```js
    @foreach ($data as $studentData)
    <tr>
    <td>{{$studentData->Id}}</td>
    <td>{{$studentData->Name}}</td>
    <td>{{$studentData->Email}}</td>
    </tr>
    @endforeach 
    // so this will show all the data in the table
    ```