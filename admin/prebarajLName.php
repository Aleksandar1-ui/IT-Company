<?php
include "Klient.php";
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"itexpress")or die(mysqli_error());
if(isset($_POST["ok"]))
{
	$prez=$_POST["lnameP"];
	$k=new Klient();
	$k->prebarajPrez($con,$prez);
}
?>