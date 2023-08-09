<?php
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"itexpress")or die(mysqli_error());
if(isset($_POST["ok"]))
{
	$usr=$_POST["usr"];
	$pass=$_POST["pass"];
	$sql="SELECT KlientID FROM klient WHERE Username='$usr' AND Password='$pass'";
	$k=mysqli_query($con,$sql)or die(mysqli_error());
	while($q=mysqli_fetch_assoc($k))
	{
		if((int)$q['KlientID']<4)
			include ".\\admin\FormaZaIzbor.html";
		else
			include ".\\admin\prebaraj.html";
	}
}
?>