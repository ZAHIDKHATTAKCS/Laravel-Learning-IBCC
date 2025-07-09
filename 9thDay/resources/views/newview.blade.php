<div>
    <h1>new view created</h1>
    <form action="/newView" method="POST">
        @csrf
        <input type="text" placeholder="enter your name" name="name"><br><br>
        <input type="password" placeholder="type your password" name="password"><br><br>
        <button type="submit">login</button>
    </form>
</div>