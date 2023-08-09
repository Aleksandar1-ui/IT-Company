<?php
include "Tehnologija.php";
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"itexpress")or die(mysqli_error());
mysqli_query($con,"SET NAMES UTF8")or die(mysqli_error());
if(isset($_POST["ok"]))
{
	$imet=$_POST["imet"];
	
	$t=new Tehnologija();
	$t->setImeT($imet);
	$t->vnes($con);
}
?>