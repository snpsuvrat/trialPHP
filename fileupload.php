<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="uploadfile" />
    <br>
    <br>
    <input type="submit" name="fileuploaded" value="fileuploaded"/>
    </form>
</body>
</html>
<?php                                             //comment
$filename=$_FILES['uploadfile']['name'];
$tempname=$_FILES['uploadfile']['tmp_name'];
print_r($_FILES['uploadfile']);
$folder="C:/Users/shivs/OneDrive/Documents/php_storage/$filename";
move_uploaded_file($tempname,$folder);
?>