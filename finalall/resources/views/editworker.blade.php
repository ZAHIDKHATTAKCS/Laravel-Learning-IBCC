<div align="center">
    <form action="/update/{{$workers->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" placeholder="Enter Your Name" value="{{$workers->name}}"><br><br>
        <input type="email" name="email" placeholder="Enter Your Email" value="{{$workers->email}}"><br><br>
        <input type="phone" name="phone" placeholder="Enter Your Phone" value="{{$workers->phone}}"><br><br>
        <button>Update</button>
        <button><a href="/getworker">Cancel</a></button>
    </form>
</div>
