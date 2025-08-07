<div align='center'>
    <form action="/editemployees/{{$edit->id}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" placeholder="Enter your name" value="{{$edit->name}}" ><br><br>
        <input type="email" name="email" placeholder="Enter Your Email" value="{{$edit->email}}"> <br><br>
        <input type="password" name="password" placeholder="Enter Your Password" value="{{$edit->password}}"><br><br>
        <input type="text" name="phone" placeholder="Enter Your Phone number" value="{{$edit->phone}}"><br><br>
        <button>Update Employee</button> &nbsp; &nbsp;
        <button><a href="/getemployees">Cancel</a></button>
    </form>
</div>
