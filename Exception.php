<?php
function f1($s) 
{
  if($s<0)
  {
    throw new Exception("Its a negative integer");
  }
  else{
    echo"Positive number";
  }
 return $s;
}
try {
    f1(-2);
}
catch(Exception $e) 
{
    echo $e->getMessage();
}
finally
{
    echo"<Br>Finally Block";
}
?>