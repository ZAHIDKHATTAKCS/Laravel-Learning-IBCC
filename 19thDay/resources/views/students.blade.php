<div align='center' style="margin-top: 50px"> 
    <h3>Add Student Here</h3>
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter Student Name"> <br><br>
        <input type="email" name="email" placeholder="Enter Student Email"><br><br>
        <input type="password" name="password" placeholder="Enter password"><br><br>
        <button>Add Student</button>
        &nbsp;&nbsp;&nbsp;
        <button><a href="/getstudents">Show Data</a></button>
    </form>
</div>
