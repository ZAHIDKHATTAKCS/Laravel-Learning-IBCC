<div>
    <h2>List of the Student</h2>
    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>Crated_at</th>
                <th>Updated_at</th>
            </tr>
        </thead>

        @foreach ($data as $studentdata)
        <tbody> 
            <tr>
                <td>{{$studentdata->Id}}</td>
                <td>{{$studentdata->name}}</td>
                <td>{{$studentdata->email}}</td>
                <td>{{$studentdata->phone}}</td>
                <td>{{$studentdata->created_at}}</td>
                <td>{{$studentdata->updated_at}}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
