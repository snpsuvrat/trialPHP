<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="1.php" method="post">
<label>UserNo</label>
<input type="number" name="userno"/>
<label>UserName</label>
<input type="text" name="UserName"/>
<label>UserPass</label>
<input type="text" name="UserPass"/>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$database="userid";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
die("Sorry we failed to connect: ".mysqli_connect_error());
}
else
{
echo "connected";
}

if(isset($_POST['submit']))
{
$userno=$_POST['userno'];
$username1=$_POST['UserName'];
$userpass=$_POST['UserPass'];
}
$sql="insert into userdata(UserNo,UserName,UserPass)
values('$userno','$username1','$userpass')";
if(mysqli_query($conn,$sql))
{
echo "<script>alert('new record inserted')</script>";
}
else{
echo "error:",mysqli_error($conn);
}
mysqli_close($conn);
?>