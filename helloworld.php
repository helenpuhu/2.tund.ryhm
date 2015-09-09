<?php
	$first_name="Helen";
	$last_name="Puhu";
	echo $first_name." ".$last_name;
?>	
<br>
<?php
	$age = 3;
	//testib loogikat, juhul kui vanus on väiksem
	//kui 18,siis kirjuta "alaealine", muul juhul "täisealine"
	//ifi sisse loogikatehe
	if($age < 18) {
		echo "alaealine";
		
	} else {
		echo "täisealine";
	}
?>	
<br>
<?php
	//vastavalt vanusele trükime niimitu korda välja sõna "palju", kui on vanust	
	
	for($i = 0; $i < $age; $i = $i + 1) {
		//tegevus mis kordub
		echo "palju";
	}
	
	echo "õnne!"
?>
<br>
<?php
//trüki välja kuupäev kujul: nädalapäev, kp, kuu, aasta

echo date("l j. F Y");

?>
