<div align='center'>
    <form action="/update/{{$getData->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" placeholder="Enter Student Name" value="{{$getData->name}}"> <br><br>
        <input type="email" name="email" placeholder="Enter Student Email" value="{{$getData->email}}"><br><br>
        <input type="password" name="password" placeholder="Enter password" value="{{$getData->password}}"><br><br>
        <button>Update</button> &nbsp; &nbsp;
        <button><a href="/getstudents">Cancel</a></button>
    </form>
</div>