<?php
if(isset($_POST["ok"]))
{
	$rb=$_POST["rb"];
	if($rb=="kor")
	{
		include "VnesiKorisnik.html";
	}
	elseif($rb=="pro")
	{
		include "VnesiProekt.html";
	}
	elseif($rb=="teh")
	{
		include "VnesiTehnologija.html";
	}
}
?>