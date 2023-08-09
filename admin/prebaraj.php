<html>
<head>
<style>
html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}
.bttn{
	background-color: #b33c00;
  opacity:0.9;
  border: none;
  color: white;
  padding: 14px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 17px;
  cursor: pointer;
  border-radius:12px;
}
</style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"itexpress")or die(mysqli_error());
if(isset($_POST["ok"]))
{
	$rbp=$_POST["rbp"];
	if($rbp=="ime")
	{
		$k=mysqli_query($con,"SELECT * FROM klient");
echo "<p align='center' style='color:white; font-size:30px;'><strong>Можност за пребарување по име</strong></p>
<table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
while($b=mysqli_fetch_array($k))
{
	echo "<tr><td>".$b['KlientID']."</td><td>".$b['Ime']."</td><td>".$b['Prezime']."</td><td>".$b['Email']."</td><td>".$b['Username']."</td><td>".
	$b['Doznavanje']."</td></tr>";
}
echo "</table><br><br>";
echo "<form method='post' action='prebarajName.php'>";
echo "<table border='0' align='center' style='color:white;font-size:20px;' height='13%'>
<tr><td>Внеси име за пребарување : </td><td><input type='text' name='nameP' id='nameP'></td></tr>
<tr><td></td><td><input type='submit' name='ok' id='ok' value='Пребарај' class='bttn'></td></tr></table></form></body></html>";
	}
	elseif($rbp=="prez")
	{
		$a=mysqli_query($con,"SELECT * FROM klient");
		echo "<p align='center' style='color:white; font-size:30px;'><strong>Можност за пребарување по презиме</strong></p>
		<table border='0' style='color:white;' align='center' width='60%' height='30%'>
		<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		while($q=mysqli_fetch_array($a))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".$q['Email']."</td><td>".$q['Username']."</td><td>".
			$q['Doznavanje']."</td></tr>";
		}
		echo "</table><br><br>";
		echo "<form method='post' action='prebarajLName.php'>";
		echo "<table border='0' align='center' style='color:white; font-size:20px;' height='13%'>
		<tr><td>Внеси презиме за пребарување : </td><td><input type='text' name='lnameP' id='lnameP'></td></tr>
		<tr><td></td><td><input type='submit' name='ok' id='ok' value='Пребарај' class='bttn'></td></tr></table></form></body></html>";
	}
	elseif($rbp=="email")
	{
		$v=mysqli_query($con,"SELECT * FROM klient");
		echo "<p align='center' style='color:white; font-size:30px;'><strong>Можност за пребарување по e-mail</strong></p>
		<table border='0' style='color:white;' align='center' width='60%' height='30%'>
		<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		while($c=mysqli_fetch_array($v))
		{
			echo "<tr><td>".$c['KlientID']."</td><td>".$c['Ime']."</td><td>".$c['Prezime']."</td><td>".$c['Email']."</td><td>".$c['Username'].
			"</td><td>".$c['Doznavanje']."</td></tr>";
		}
		echo "</table><br><br>
		<form method='post' action='prebarajMail.php'>
		<table border='0' align='center' style='color:white; font-size:20px' height='13%'><tr><td>Внеси e-mail за пребарување : </td><td>
		<input type='text' name='emailP' id='emailP'></td></tr><td><td><input type='submit' name='ok' id='ok' value='Пребарај' class='bttn'></td>
		</tr></table></form></body></html>";
	}
	elseif($rbp=="usr")
	{
		$u=mysqli_query($con,"SELECT * FROM klient");
		echo "<p align='center' style='color:white; font-size:30px;'><strong>Можност за пребарување по username</strong></p>
		<table border='0' align='center' width='60%' height='30%' style='color:white;'><tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th>
		<th>Username</th><th>Doznavanje</th></tr>";
		while($x=mysqli_fetch_array($u))
		{
			echo "<tr><td>".$x['KlientID']."</td><td>".$x['Ime']."</td><td>".$x['Prezime']."</td><td>".$x['Email']."</td><td>".
			$x['Username']."</td><td>".$x['Doznavanje']."</td></tr>";
		}
		echo "</table><br><br><form method='post' action='prebarajUsrP.php'><table border='0' align='center' style='color:white; font-size:20px;'
		height='13%'><tr><td>Внеси username за пребарување : </td><td><input type='text' name='userP' id='userP'></td></tr><tr><td></td><td>
		<input type='submit' name='ok' class='bttn' id='ok' value='Пребарај'></td></tr></table></form></body></html>";
	}
	elseif($rbp=="pass")
	{
		$p=mysqli_query($con,"SELECT * FROM klient");
		echo "<p align='center' style='color:white; font-size:30px;'><strong>Можност за пребарување по password</strong></p> <table border='0' align='center'
		style='color:white;' width='60%' height='30%'><tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th>
		<th>Doznavanje</th></tr>";
		while($i=mysqli_fetch_array($p))
		{
			echo "<tr><td>".$i['KlientID']."</td><td>".$i['Ime']."</td><td>".$i['Prezime']."</td><td>".$i['Email']."</td><td>".$i['Username']."</td><td>"
			.$i['Doznavanje']."</td></tr>";
		}
		echo "</table><br><br><form method='post' action='prebarajPassP.php'><table border='0' align='center' style='color:white; font-size:20px;'
		height='13%'><tr><td>Внеси password за пребарување : </td><td><input type='password' name='loz' id='loz'></td></tr><tr><td></td>
		<td><input type='submit' name='ok' id='ok' value='Пребарај' class='bttn'></td></tr></table></form></body></html>";
	}
	elseif($rbp=="doz")
	{
		$d=mysqli_query($con,"SELECT * FROM klient");
		echo "<p align='center' style='color:white; font-size:30px;'><strong>Можност за пребарување по дознавање</strong></p>
		<table border='0' style='color:white;' width='60%' height='30%' align='center'><tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th>
		<th>Doznavanje</th></tr>";
		while($q=mysqli_fetch_array($d))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".$q['Email']."</td><td>".
			$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table><br><br>
		<form method='post' action='prebarajDozP.php'><table border='0' align='center' style='color:white; font-size:20px;' height='13%'><tr><td>
		Внеси дознавање за пребарување : </td><td><input type='text' name='dozp' id='dozp'></td></tr><tr><td></td><td><input type='submit'
		name='ok' id='ok' class='bttn' value='Пребарај'></td></tr></table></form></body></html>";
	}
}