<?php
include "Klient.php";
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"itexpress")or die(mysqli_error());
if(isset($_POST["ok"]))
{
	$doz=$_POST["dozp"];
	$k=new Klient();
	$k->prebarajDoz($con,$doz);
}
?>