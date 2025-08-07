### <p align='center'> Practice of CRUD Operations</p>
### <p align='center'> Search in MYSQL Database</p>
1. make search form 
2. make route and controller function
3. search and display data 


- first of all you have to create a form of method get at the top of the page where you get all the database data.
- after this create an input field of type text with placeholder and name property,

- after this create a function for search functionality.

- for search code in function here we code like
    ```js
    function search(Request $req){
        $studentData=Student::where('name','like',"%req->search%")->get(); // this will show data where name is like user fill in input field and get method will get that data, after this 
        return view('/getstudents',['Data'=>$studentData,'search'=>$req->search]); // now here Data parameter will show the data in the table and search parameter will be placed in value of the search input to show what data is user looking for 
    }
    ```

- now for frontend we have to code like 
    ```js
    <form action="search" method="get">
    <input type="text" name="search" value="{{@$search}}"> // here @ is for when there is no search by default so the form page will show error so insertion of @ so it will not show an error
    </form>
    ```