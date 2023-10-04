<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
</head>
<body>
    <h2>Upload Image</h2>
    <form action="{{ route('file.upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">Select image to upload:</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>
