<?php
include "Proekt.php";
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"itexpress")or die(mysqli_error());
mysqli_query($con,"SET NAMES UTF8")or die(mysqli_error());
if(isset($_POST['ok']))
{
	$imepr=$_POST["imepr"];
	$tehpr=$_POST["tehpr"];
	
	$p=new Proekt();
	$p->setIme($imepr);
	$p->setTehnologija($tehpr);
	$p->vnesiPr($con);
}
?>