### <p align='center'>Insert Data in MySQL DB Table</p>

- **.env** file configuration first of all go to **.env file** change the value of DB-Connection from **sqllite** to **mysql** after that uncomment all the below commands of that line,

- after that create Model, View and Controller.

1. Create form in view
2. in controller we have to define a function and import that controller in routes file and use it with post method .
3. import model in controller once the model import in the controller.

    ```js
    function addStudent(Request $request){
        $student = new student(); // this will create a new an empty student object

        $student->name=$request->name; // this will get the name value from the form and put it into the student object .
        $student->email=$request->email; // this will get the email value from the form and put it into the student object .

        // here you can get all the form values and store it in the student object

        if($student){
            return "new student added";
        }else{
            return "error in insertion";
        }
    }
    ```
- **Note** ```created_at``` and ```updated_at``` are the two database columns whose values are updated automatically by the laravel and there  names should be in lower case and with proper underscores as i write down


### <p align='center'>Get and Display Data from DB</p>

- first of all create a new view that will be created for display data there.
- and we will create another function in controller that we created earlier.
- and for that we have to create rout for the function to call, but for now we have to use ```get method``` as per we are going to get data from the database.

- inside the controller we have to import the model but we already import it earlier. if you not imported so import it first.

- now inside the controller function we have to code like 
    ```js
    function GetData(){
        $studentData= Student::all(); // here the Student is the model name and all function we get all the data from the table students , 
        
        // it fetches all records from your students table, here "Student" is your Eloquent Model so it will run query like select * from students and as per we know our model connects to table already when we create model as a singular name and table as a plural name
        
        return view('liststudent',['data'=>$StudentData]); // here it will return view of liststudent along with the key of data that holds the fetch data of all the students so data will be used as a key in the view 
    }
    ```

- now in order to show the data in that page so for that you have to create table in that page in order to reterive data so for that we have to use @foreach loop like along with table or something else

    ```js
    @foreach($data as $studentData) // here $data is that key that is send by the controller to this page 
    <tr>
    <td>{{$studentData->Id}}</td>
    <td>{{$studentData->Name}}</td>
    <td>{{$studentData->Email}}</td>
    </tr> 
    @endforeach 

    // this will be show all the data in the table 
    ```