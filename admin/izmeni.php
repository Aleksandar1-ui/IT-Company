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
.btn{
background-color: #b33c00;
  opacity:0.9;
  border: none;
  color: white;
  padding: 14px 50px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
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
	$rbi=$_POST["rbi"];
	if($rbi=="ime")
	{
		$k=mysqli_query($con,"SELECT * FROM klient");
echo "<p align='center' style='color:white; font-size:30px;'><strong>Форма за изменување по име</strong></p>
<table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
while($b=mysqli_fetch_array($k))
{
	echo "<tr><td>".$b['KlientID']."</td><td>".$b['Ime']."</td><td>".$b['Prezime']."</td><td>".$b['Email']."</td><td>".$b['Username']."</td><td>".
	$b['Doznavanje']."</td></tr>";
}
echo "</table><br><br>";
echo "<form method='post' action='izmenaIme.php'>
<table border='0' align='center' style='color:white; font-size:20px;' height='13%'>
<tr>
<td><p style='color:white; font-size:20px;'>Внеси име за измена:</p></td>
<td><input type='text' name='iime' id='iime'></td></tr>
<tr></tr><tr></tr><tr>
<td><p style='color:white; font-size:20px;'>Внеси ID :</p></td>
<td><input type='number' name='kidb' id='kidb'></td>
</tr>
<tr>
<td></td>
<td><input type='submit' name='ok' id='ok' value='Измени' class='btn'></td>
</tr>
</table>
</form>";
	}
	elseif($rbi=="prez")
	{
		$k=mysqli_query($con,"SELECT * FROM klient");
echo "<p align='center' style='color:white; font-size:30px;'><strong>Форма за изменување по презиме</strong></p>
<table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
while($b=mysqli_fetch_array($k))
{
	echo "<tr><td>".$b['KlientID']."</td><td>".$b['Ime']."</td><td>".$b['Prezime']."</td><td>".$b['Email']."</td><td>".$b['Username']."</td><td>".
	$b['Doznavanje']."</td></tr>";
}
echo "</table><br><br>";
echo "<form method='post' action='izmenaPrez.php'>
<table border='0' align='center' style='color:white; font-size:20px;' height='13%'>
<tr>
<td><p style='color:white; font-size:20px;'>Внеси презиме за измена:</p></td>
<td><input type='text' name='iprez' id='iprez'></td></tr>
<tr></tr><tr></tr><tr>
<td><p style='color:white; font-size:20px;'>Внеси ID :</p></td>
<td><input type='number' name='kidb' id='kidb'></td>
</tr>
<tr>
<td></td>
<td><input type='submit' name='ok' id='ok' value='Измени' class='btn'></td>
</tr>
</table>
</form>";
	}
	elseif($rbi=="email")
	{
		$k=mysqli_query($con,"SELECT * FROM klient");
echo "<p align='center' style='color:white; font-size:30px;'><strong>Форма за изменување по e-mail</strong></p>
<table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
while($b=mysqli_fetch_array($k))
{
	echo "<tr><td>".$b['KlientID']."</td><td>".$b['Ime']."</td><td>".$b['Prezime']."</td><td>".$b['Email']."</td><td>".$b['Username']."</td><td>".
	$b['Doznavanje']."</td></tr>";
}
echo "</table><br><br>";
echo "<form method='post' action='izmenaEmail.php'>
<table border='0' align='center' style='color:white; font-size:20px;' height='13%'>
<tr>
<td><p style='color:white; font-size:20px;'>Внеси E-mail за измена:</p></td>
<td><input type='text' name='iemail' id='iemail'></td></tr>
<tr></tr><tr></tr><tr>
<td><p style='color:white; font-size:20px;'>Внеси ID :</p></td>
<td><input type='number' name='kidb' id='kidb'></td>
</tr>
<tr>
<td></td>
<td><input type='submit' name='ok' id='ok' value='Измени' class='btn'></td>
</tr>
</table>
</form>";
	}
	elseif($rbi=="usr")
	{
		$k=mysqli_query($con,"SELECT * FROM klient");
echo "<p align='center' style='color:white; font-size:30px;'><strong>Форма за изменување по username</strong></p>
<table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
while($b=mysqli_fetch_array($k))
{
	echo "<tr><td>".$b['KlientID']."</td><td>".$b['Ime']."</td><td>".$b['Prezime']."</td><td>".$b['Email']."</td><td>".$b['Username']."</td><td>".
	$b['Doznavanje']."</td></tr>";
}
echo "</table><br><br>";
echo "<form method='post' action='izmenaUsr.php'>
<table border='0' align='center' style='color:white; font-size:20px;' height='13%'>
<tr>
<td><p style='color:white; font-size:20px;'>Внеси username за измена:</p></td>
<td><input type='text' name='iusr' id='iusr'></td></tr>
<tr></tr><tr></tr><tr>
<td><p style='color:white; font-size:20px;'>Внеси ID :</p></td>
<td><input type='number' name='kidb' id='kidb'></td>
</tr>
<tr>
<td></td>
<td><input type='submit' name='ok' id='ok' value='Измени' class='btn'></td>
</tr>
</table>
</form>";
	}
	elseif($rbi=="pass")
	{
		$k=mysqli_query($con,"SELECT * FROM klient");
echo "<p align='center' style='color:white; font-size:30px;'><strong>Форма за изменување по password</strong></p>
<table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
while($b=mysqli_fetch_array($k))
{
	echo "<tr><td>".$b['KlientID']."</td><td>".$b['Ime']."</td><td>".$b['Prezime']."</td><td>".$b['Email']."</td><td>".$b['Username']."</td><td>".
	$b['Doznavanje']."</td></tr>";
}
echo "</table><br><br>";
echo "<form method='post' action='izmenaPass.php'>
<table border='0' align='center' style='color:white; font-size:20px;' height='13%'>
<tr>
<td><p style='color:white; font-size:20px;'>Внеси password за измена:</p></td>
<td><input type='text' name='ipass' id='ipass'></td></tr>
<tr></tr><tr></tr><tr>
<td><p style='color:white; font-size:20px;'>Внеси ID :</p></td>
<td><input type='number' name='kidb' id='kidb'></td>
</tr>
<tr>
<td></td>
<td><input type='submit' name='ok' id='ok' value='Измени' class='btn'></td>
</tr>
</table>
</form>";
	}
	elseif($rbi=="doz")
	{
		$k=mysqli_query($con,"SELECT * FROM klient");
echo "<p align='center' style='color:white; font-size:30px;'><strong>Форма за изменување по дознавање</strong></p>
<table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
while($b=mysqli_fetch_array($k))
{
	echo "<tr><td>".$b['KlientID']."</td><td>".$b['Ime']."</td><td>".$b['Prezime']."</td><td>".$b['Email']."</td><td>".$b['Username']."</td><td>".
	$b['Doznavanje']."</td></tr>";
}
echo "</table><br><br>";
echo "<form method='post' action='izmenaDoz.php'>
<table border='0' align='center' style='color:white; font-size:20px;' height='13%'>
<tr>
<td><p style='color:white; font-size:20px;'>Внеси дознавање за измена:</p></td>
<td><input type='text' name='idoz' id='idoz'></td></tr>
<tr></tr><tr></tr><tr>
<td><p style='color:white; font-size:20px;'>Внеси ID :</p></td>
<td><input type='number' name='kidb' id='kidb'></td>
</tr>
<tr>
<td></td>
<td><input type='submit' name='ok' id='ok' value='Измени' class='btn'></td>
</tr>
</table>
</form>";
	}
}