<div>
    <h1>Profile page</h1>

    @if (session('user'))
    <h2>welcome to dashboard {{session('user');}}</h2>
    @else
    <h2>user not found <a href="/Login">Login</a></h2>
    @endif

    <br><br>

    <a href="/Logout">Logout</a>
</div>