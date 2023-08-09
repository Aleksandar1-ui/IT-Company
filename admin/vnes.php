<?php
include "Klient.php";
if(isset($_POST["ok"]))
{
	$ime=$_POST["ime"];
	$prez=$_POST["prez"];
	$mail=$_POST["mail"];
	$usr=$_POST["usr"];
	$pass=$_POST["pass"];
	$doz=$_POST["doz"];
	$con=mysqli_connect("localhost","root","")or die(mysqli_error());
	mysqli_select_db($con,"itexpress")or die(mysqli_error());
	$a=mysqli_query($con,"SELECT * FROM klient")or die(mysqli_error());
	$br=0;
	while($b=mysqli_fetch_assoc($a))
		if($mail==$b['Email'] || $usr==$b['Username'] || $pass==$b['Password'])
			$br=$br+1;
		if($br==0)
		{
		    $k=new Klient();
			$k->setIme($ime);
			$k->setPrezime($prez);
			$k->setEmail($mail);
			$k->setUsername($usr);
			$k->setPassword($pass);
			$k->setDoznavanje($doz);
			
			$k->vnes($con);
		}
		else
			include "VnesiKorisnik.html";
}
?>