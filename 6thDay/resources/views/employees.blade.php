<div>
    <h3>Employees List</h3>

    {{-- {{print_r($list)}}  --}}

    @foreach ($list as $employee)
    <tr>
        <td>Employee Name : {{$employee->E_Name}}</td><br>
        <td>Employee Email : {{$employee->E_Email}}</td><br>
        <td>Employee Phone : {{$employee->E_Phone}}</td>
    </tr> <br/><br/>
    @endforeach
</div>
