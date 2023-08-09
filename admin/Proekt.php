<?php
class Proekt{
	private $ime;
	private $tehnologija;
	
	function __construct()
	{
		$this->ime="";
		$this->tehnologija="";
	}
	public function setIme($ime)
	{
		$this->ime=$ime;
	}
	public function getIme()
	{
		return $this->ime;
	}
	public function setTehnologija($tehnologija)
	{
		$this->tehnologija=$tehnologija;
	}
	public function getTehnologija()
	{
		return $this->tehnologija;
	}
	public function vnesiPr($con)
	{
		echo "<html><head><meta charset='UTF-8'><style>
  html {
  width: 100%;
  height: 100%;
  position: relative;
  background: #222 url(https://i.cloudup.com/B-nGjfTv8k.jpg) no-repeat;
  background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(https://i.cloudup.com/B-nGjfTv8k.jpg);  
  background-size: cover;
} .mojdiv{margin:150px;} th,td{font-size:22px;}</style></head><body><div class='mojdiv'><table><table border='0' style='color:white;' align='center' width='70%' height='30%'>
<tr><th>ProektID</th><th>ImeProekt</th><th>Tehnologija</th></tr>";
$k=mysqli_query($con,"INSERT INTO proekti(ImeProekt,Tehnologija) VALUES('$this->ime','$this->tehnologija')")or die(mysqli_error());
$k=mysqli_query($con,"SELECT * FROM proekti")or die(mysqli_error());
while($c=mysqli_fetch_array($k))
{
	echo "<tr><td>".$c['ProektID']."</td><td>".$c['ImeProekt']."</td><td>".$c['Tehnologija']."</td></tr>";
}
echo "</table></bod></html>";
	}
}