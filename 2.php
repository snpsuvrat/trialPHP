<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="2.php" method="post">
<label>empid</label>
<input type="text" name="empid"/>
<input type="submit" name="submit" value="submit"/>
</form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$database="employee";
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
$id=$_POST['empid'];
}
$sql="select emp_name from personal_details where emp_id=$id";
$data=array();
$data=($sql);
if(mysqli_query($conn,$sql))
{
echo $data;
}
else{
echo "error:",mysqli_error($conn);
}
mysqli_close($conn);
?>