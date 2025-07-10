<div>
    <h1>Login page</h1>

    <form action="/Login" method="POST">
        @csrf
        <input type="text" name="name" placeholder="enter your name"><br><br>
        <input type="password" name="password" placeholder="enter your password"><br><br>
        <button type="submit">Login</button>
    </form>
</div>