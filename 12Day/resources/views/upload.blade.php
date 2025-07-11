<div>
    <h1>Upload file Page</h1>
    <form action="/UploadController" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"><br><br>
        <button>Upload file</button>
    </form>
</div>