<div align='center'>
    <h3>Here is the All Workers Data</h3>
    <table style="border: 2px solid green;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th colspan="2">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Workers as $worker)
            <tr>
                <td>{{$worker->id}}</td>
                <td>{{$worker->name}}</td>
                <td>{{$worker->email}}</td>
                <td>{{$worker->phone}}</td>
                <td>{{$worker->created_at}}</td>
                <td>{{$worker->updated_at}}</td>
                <td><a href="edit/{{$worker->id}}">Edit</a></td>
                <td><a href="delete/{{$worker->id}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
