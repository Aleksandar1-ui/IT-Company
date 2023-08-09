<?php
include "Klient.php";
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"itexpress")or die(mysqli_error());
if(isset($_POST["ok"]))
{
	$pass=$_POST["ipass"];
	$id=$_POST["kidb"];
	$k=new Klient();
	$k->izmeniPass($con,$id,$pass);
}