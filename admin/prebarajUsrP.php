<?php
include "Klient.php";
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"itexpress")or die(mysqli_error());
if(isset($_POST["ok"]))
{
	$usr=$_POST["userP"];
	$k=new Klient();
	$k->prebarajUsr($con,$usr);
}
?>