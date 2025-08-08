<div align='center'>
    <br><br><br>

    {{-- form for search --}}
    <form action="search">
        <input type="text" placeholder="Search by Name" name="search" value="{{@$Search}}">
        <button>Search</button>
    </form>
    <br><br>
    <table border="1" style="border-collapse: collapse">
        <thead>
            <tr style="background-color:lightblue">
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th colspan="2">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($AllData as $Student)
            <tr>
                <td>{{$Student->name}}</td>
                <td>{{$Student->email}}</td>
                <td>{{$Student->password}}</td>
                <td><a href="edit/{{$Student->id}}">Edit</a></td>
                <td><a href="/delete/{{$Student->id}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table> <br><br>

    {{$AllData->links()}}

    <style>
        .w-5.h-5{
            width: 15px;
        }
    </style>
    <br><br><br>

    <button><a href="/addstudents">Add a New Student</a></button>
</div>
