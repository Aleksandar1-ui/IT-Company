<?php
include "Klient.php";
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"itexpress")or die(mysqli_error());
if(isset($_POST["ok"]))
{
	$ime=$_POST["nameP"];
	$k=new Klient();
	$k->prebarajIme($con,$ime);
}