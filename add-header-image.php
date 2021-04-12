<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Personal Webpage</title>
        <meta charset="utf-8" />
    </head>
    <h1><br>Welcome To The Webpage</h1>
    <body>
    <form action="upload-image.php" method="post" enctype="multipart/form-data">
  Choose your header Image
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" name="submit">
</form>
    </body>
</html>
