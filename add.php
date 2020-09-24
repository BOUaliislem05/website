<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Images</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="fileToUpload">Select image to upload:</label>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input class="btn btn-primary"type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>