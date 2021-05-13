<?php
	include_once "../Classes/Event/Event.php";
	include_once "../Classes/Event/Database/Twenty.php";
	include_once "../Classes/Event/Database/Thirty.php";
	include_once "../Classes/Event/Database/Fourty.php";
	include_once "../Classes/Map.php";
	
	$array = array_merge($twenty,$thirty,$fourty);

	echo $array["2_001"]->getName();
	echo "<p>------</p>";
	echo $array["3_004"]->getName();
	echo "<p>------</p>";
	echo $array["4_002"]->getName();
	
	
			
			
	
	
	
?>