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
.bri{
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
<p align="center" style="color:white; font-size:30px;"><strong>Можност за бришење</strong></p><br><br>
<?php
$con=mysqli_connect("localhost","root","")or die(mysqli_error());
mysqli_select_db($con,"itexpress")or die(mysqli_error());
$k=mysqli_query($con,"SELECT * FROM klient");
echo "<table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
while($b=mysqli_fetch_array($k))
{
	echo "<tr><td>".$b['KlientID']."</td><td>".$b['Ime']."</td><td>".$b['Prezime']."</td><td>".$b['Email']."</td><td>".$b['Username']."</td><td>".
	$b['Doznavanje']."</td></tr>";
}
echo "</table><br><br>";
?>
<form method="post" action="brisi1.php">
<table border='0' align='center' style='color:white; font-size:20px;' height='13%'>
<tr>
<td><p style='color:white; font-size:20px;'>Внеси ID за бришење :</p></td>
<td><input type="number" name="kidb" id="kidb"></td>
</tr>
<tr><td></td>
<td><input type="submit" name="ok" id="ok" value="Избриши" class="bri"></td>
</tr>
</table>
</form>
</body>
</html>