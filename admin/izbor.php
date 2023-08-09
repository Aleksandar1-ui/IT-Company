<?php
if(isset($_POST["ok"]))
{
	$rb=$_POST["rb"];
	if($rb=="vnesi")
	{
		include "vnesiizb.html";
	}
	elseif($rb=="brisi")
	{
		include "brisi.php";
	}
	elseif($rb=="izmeni")
	{
		include "izmeni.html";
	}
	elseif($rb=="prebaraj")
	{
		include "prebaraj.html";
	}
}