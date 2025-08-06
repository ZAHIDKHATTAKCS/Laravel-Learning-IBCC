<div align='center'>
    <form action="/update/{{$data->id}}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="name" value="{{$data->name}}" ><br><br>
        <input type="phone" name="phone" value="{{$data->phone}}"><br><br>
        <input type="email" name="email" value="{{$data->email}}"><br><br>
        <button>update</button><br><br>
        <button><a href="/getstudents">Cancel</a></button>
    </form>
</div>