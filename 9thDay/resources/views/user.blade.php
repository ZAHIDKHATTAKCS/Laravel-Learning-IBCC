<div>
    <h1>User Form</h1>

    {{-- method get the data will be visible in the URL --}}
    {{-- method post used to store data on the database --}}
    {{-- put method but you can't send as a method , but if you want to use it you have to use input field hidden  --}}
    <form action="/user" method="post">
        <!-- CSRF token for security -->
        @csrf

        {{-- we have to use put like create an input type of hidden --}}
        {{-- <input type="hidden" name="_method" value="put"> --}}
        {{-- we have to use delete same as input field but the value should be delete --}}
        {{-- <input type="hidden" name="_method" value="delete"> --}}


        {{-- <input type="hidden" name="_method" value="Any"> --}}


        <input type="text" name="user" placeholder="enter the user name" />
        <br><br>
        <input type="password" name="password" placeholder="enter your password" />
        <br><br>
        <button type="submit">Submit</button>
    </form>
</div>