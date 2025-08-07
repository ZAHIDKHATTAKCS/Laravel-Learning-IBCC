<div align='center'>
    <h2>Add Employees Here</h2>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter your name" ><br><br>
        <input type="email" name="email" placeholder="Enter Your Email"> <br><br>
        <input type="password" name="password" placeholder="Enter Your Password"><br><br>
        <input type="text" name="phone" placeholder="Enter Your Phone number"><br><br>
        <button>Add New Employee</button>
    </form>
</div>