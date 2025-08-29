<div style="display: flex; justify-content: center; align-items: center; border:2px solid green; height:100vh;">
    <table style="border-collapse: collapse; border:2px solid green;" align='center'>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($AllData as $data)    
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>