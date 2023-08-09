<?php
class Klient{
	private $ime;
	private $prezime;
	private $email;
	private $username;
	private $password;
	private $doznavanje;
	
	function __construct()
	{
		$this->ime="";
		$this->prezime="";
		$this->email="";
		$this->username="";
		$this->password="";
		$this->doznavanje="";
	}
	public function setIme($ime)
	{
		$this->ime=$ime;
	}
	public function setPrezime($prezime)
	{
		$this->prezime=$prezime;
	}
	public function setEmail($email)
	{
		$this->email=$email;
	}
	public function setUsername($username)
	{
		$this->username=$username;
	}
	public function setPassword($password)
	{
		$this->password=$password;
	}
	public function setDoznavanje($doznavanje)
	{
		$this->doznavanje=$doznavanje;
	}
	public function getIme()
	{
		return $this->ime;
	}
	public function getPrezime()
	{
		return $this->prezime;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function getUsername()
	{
		return $this->username;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function getDoznavanje()
	{
		return $this->doznavanje;
	}
	public function vnes($con)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"INSERT INTO klient(Ime,Prezime,Email,Username,Password,Doznavanje) VALUES
		('$this->ime','$this->prezime','$this->email','$this->username','$this->password','$this->doznavanje')");
		$k=mysqli_query($con,"SELECT * FROM klient")or die(mysqli_error());
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".
			$q['Email']."</td><td>".$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function brisi($id,$con)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"DELETE FROM klient WHERE KlientID='$id'");
		$k=mysqli_query($con,"SELECT * FROM klient")or die(mysqli_error());
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".
			$q['Email']."</td><td>".$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function izmeniIme($con,$id,$ime)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"UPDATE klient SET Ime='$ime' WHERE KlientID='$id'");
		$k=mysqli_query($con,"SELECT * FROM klient");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".
			$q['Email']."</td><td>".$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function izmeniPrez($con,$id,$prez)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"UPDATE klient SET Prezime='$prez' WHERE KlientID='$id'");
		$k=mysqli_query($con,"SELECT * FROM klient");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".
			$q['Email']."</td><td>".$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function izmeniMail($con,$id,$mail)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"UPDATE klient SET Email='$mail' WHERE KlientID='$id'");
		$k=mysqli_query($con,"SELECT * FROM klient");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".
			$q['Ime']."</td><td>".$q['Prezime']."</td><td>".$q['Email']."</td><td>".$q['Username']."</td><td>".$q['Doznavanje']
			."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function izmeniUsr($con,$id,$usr)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"UPDATE klient SET Username='$usr' WHERE KlientID='$id'");
		$k=mysqli_query($con,"SELECT * FROM klient");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".$q['Email']."</td><td>".
			$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function izmeniPass($con,$id,$pass)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"UPDATE klient SET Password='$pass' WHERE KlientID='$id'");
		$k=mysqli_query($con,"SELECT * FROM klient");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".$q['Email']."</td><td>".
			$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function izmeniDoz($con,$id,$doz)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='60%' height='30%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"UPDATE klient SET Doznavanje='$doz' WHERE KlientID='$id'");
		$k=mysqli_query($con,"SELECT * FROM klient");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".$q['Email']."</td><td>".
			$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function prebarajIme($con,$ime)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='70%' height='10%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"SELECT * FROM klient WHERE Ime='$ime'");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".$q['Email']."</td><td>".
			$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function prebarajPrez($con,$prez)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='70%' height='10%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"SELECT * FROM klient WHERE Prezime='$prez'");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".$q['Email']."</td><td>".
			$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function prebarajMail($con,$mail)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='70%' height='10%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"SELECT * FROM klient WHERE Email='$mail'");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".$q['Email']."</td><td>".
			$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function prebarajUsr($con,$usr)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='70%' height='10%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"SELECT * FROM klient WHERE Username='$usr'");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>"
			.$q['Email']."</td><td>".$q['Username']."</td><td>".$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function prebarajPass($con,$pass)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='70%' height='10%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"SELECT * FROM klient WHERE Password='$pass'");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".$q['Email']."</td><td>".$q['Username']."</td><td>".
			$q['Doznavanje']."</td></tr>";
		}
		echo "</table></body></html>";
	}
	public function prebarajDoz($con,$doz)
	{
		echo "<html><head><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
}</style></head><body><table><table border='0' style='color:white;' align='center' width='70%' height='10%'>
<tr><th>KlientID</th><th>Ime</th><th>Prezime</th><th>E-mail</th><th>Username</th><th>Doznavanje</th></tr>";
		$k=mysqli_query($con,"SELECT * FROM klient WHERE Doznavanje='$doz'");
		while($q=mysqli_fetch_array($k))
		{
			echo "<tr><td>".$q['KlientID']."</td><td>".$q['Ime']."</td><td>".$q['Prezime']."</td><td>".$q['Email']."</td><td>".$q['Username']."</td><td>".$q['Doznavanje'].
			"</td></tr>";
		}
		echo "</table></body></html>";
	}
}