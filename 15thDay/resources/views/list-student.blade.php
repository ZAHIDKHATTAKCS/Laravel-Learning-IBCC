<div>
    <h2>List of the Students in database</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $Student)
            <tr>
            <td>{{$Student->Id}}</td>
            <td>{{$Student->Name}}</td>
            <td>{{$Student->Email}}</td>
            <td>{{$Student->Address}}</td>
            <td>{{$Student->created_at}}</td>
            <td>{{$Student->updated_at}}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
</div>
