<?php
	include_once "Classes/Event/Event.php";
	include_once "Classes/Event/Database/Twenty.php";
	include_once "Classes/Event/Database/Thirty.php";
	include_once "Classes/Event/Database/Fourty.php";
	include_once "Classes/Map.php";
	
	//ランダムmap生成
	$map = new Map($twenty,$thirty,$fourty,45); 


	//mapの長さ
	echo "マップの長さ: ".Count($map->createdMap);
	print "<p>------------------------------------------------------------</p>";	
	
	//各マス目のEvent表示
	for($i=0;$i < Count($map->createdMap); $i++){
		print "<p>".$i."マス目 イベント名: ".$map->createdMap[$i]->getName();
		print "<p>マス情報: ".$map->createdMap[$i]->getInfo();
		print "<p>------------------------------------------------------------</p>";
	}
	
	
	
?>