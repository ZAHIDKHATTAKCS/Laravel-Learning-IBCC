<div>
    <h1>File Uploaded view</h1>
    <form action="FileUpload" method="POST">
        @csrf
        <input type="file" name="file"/><br><br>
        <button type="submit">submit data</button>
    </form>
</div>