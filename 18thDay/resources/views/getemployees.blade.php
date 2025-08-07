<div align='center'>
    <h2>All the data</h2>

    <form action="/search" method="get">
        @csrf
        <input type="text" placeholder="Enter name of Employee" name="search" value="{{@$search}}">
        <button>Search</button>
    </form>
    <table style="border:4px solid red;">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Phone</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Operations</th>
        </thead>
        <tbody>
            @foreach ($Data as $EmployeeData)    
            <tr>
                <td>{{$EmployeeData->id}}</td>
                <td>{{$EmployeeData->name}}</td>
                <td>{{$EmployeeData->email}}</td>
                <td>{{$EmployeeData->password}}</td>
                <td>{{$EmployeeData->phone}}</td>
                <td>{{$EmployeeData->created_at}}</td>
                <td>{{$EmployeeData->updated_at}}</td>
                <td><a href="/editemployees/{{$EmployeeData->id}}">Edit</a></td>
                <td><a href="/delete/{{$EmployeeData->id}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$Data->links()}}
    <style>
        .w-5.h-5{
            width:15px;
        }
    </style>
</div>
