<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form action="index.php" method="post">
<label>empid</label>
<input type="text" name="empid"/>
<label>empname</label>
<input type="text" name="empname"/>
<label>designation</label>
<input type="text" name="designation"/>
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
$name=$_POST['empname'];
$designation=$_POST['designation'];
}
$sql="insert into personal_details(emp_id,emp_name,designation)
values('$id','$name','$designation')";
if(mysqli_query($conn,$sql))
{
echo "<script>alert('new record inserted')</script>";
}
else{
echo "error:",mysqli_error($conn);
}
mysqli_close($conn);
?>