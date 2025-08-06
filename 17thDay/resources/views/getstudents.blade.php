<div align='center'>
    <h3>All the Students data is here</h3>
    <table style="border: 3px solid red;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th colspan="2">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Data as $Student)    
            <tr>
                <td>{{$Student->id}}</td>
                <td>{{$Student->name}}</td>
                <td>{{$Student->phone}}</td>
                <td>{{$Student->email}}</td>
                <td>{{$Student->created_at}}</td>
                <td>{{$Student->updated_at}}</td>
                <td><a href="edit/{{$Student->id}}">Edit</a></td>
                <td><a href="delete/{{$Student->id}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
