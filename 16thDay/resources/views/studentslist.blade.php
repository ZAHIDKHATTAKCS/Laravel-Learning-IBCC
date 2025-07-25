<div>
    <h3>Student List</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Crated_at</th>
                <th>Updated_at</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $Student)
            <tr>
                <td>{{$Student->id}}</td>
                <td>{{$Student->Name}}</td>
                <td>{{$Student->Email}}</td>
                <td>{{$Student->Phone}}</td>
                <td>{{$Student->created_at}}</td>
                <td>{{$Student->updated_at}}</td>
                <td><a href="{{'delete/'.$Student->id}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
