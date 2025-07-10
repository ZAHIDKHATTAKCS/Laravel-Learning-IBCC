<div>
    <h1>Add a new User</h1>

    @if (session('message'))
    <span class="success-message" style="">{{session('message')}}</span> <br><br>
    @endif

    <span class="success-message">{{session('name')}}</span>

    {{-- to keep all the sessions --}}
    {{-- {{session()->reflash()}}  --}}

    {{session()->keep(['name'])}}

    <form action="/user" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter your name"> <br><br>

        <input type="email" name="email" placeholder="enter your email"> <br> <br>


        <input type="text" name="phone" placeholder="enter your phone number"> <br> <br>

        <button type="submit">Add User</button>

    </form>
</div>

<style>
    .success-message{
        background-color: lightblue;
    padding: 4px;
    border-radius: 5px;
    color: darkgreen;
    font-size: 20px; margin-bottom:20px;
    }
</style>