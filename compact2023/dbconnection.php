<?php
$con=mysqli_connect("localhost","root","","smartdb");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
else
{
echo "Connection Successfull";
}
?>