<?php
class Tehnologija{
	private $imeT;
	
	function __construct()
	{
		$this->imeT="";
	}
	public function setImeT($imeT)
	{
		$this->imeT=$imeT;
	}
	public function getImeT()
	{
		return $this->imeT;
	}
	public function vnes($con)
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
<tr><th>TehnologiiID</th><th>ImeTehnologija</th></tr>";
$insert="INSERT INTO tehnologii(ImeTehnologija) VALUES('$this->imeT')";
$b=mysqli_query($con,$insert)or die(mysqli_error());
$select="SELECT * FROM tehnologii";
$b=mysqli_query($con,$select)or die(mysqli_error());
while($c=mysqli_fetch_array($b))
{
	echo "<tr><td>".$c['TehnologiiID']."</td><td>".$c['ImeTehnologija']."</td></tr>";
}
echo "</table></body></html>";
	}
}
?>