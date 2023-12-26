<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="userid.php" method="POST">
        <label>Input Username</label>
        <input type="text" name="id"/>
        <br>
        <label>Input Password</label>
        <input type="password" name="pass"/>
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
$id=$_POST['id'];
$pass=$_POST['pass'];
if($id== "user1")
{
    if($pass== "123")
    {
        echo "Login Successfull";
    }
    else{
        echo "Wrong Password";
    }
}
else {
    echo "Login Failed";
}
?>