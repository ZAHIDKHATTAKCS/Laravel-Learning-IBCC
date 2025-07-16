<div>
    <h2>Add New Student !</h2>

    <form action="" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br><br>
        <input type="text" name="email" placeholder="Enter Email">
        <br><br>
        <input type="text" name="phone" placeholder="Enter Phone">
        <button>Add Student</button>
    </form>
</div>
