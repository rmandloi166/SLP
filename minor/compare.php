<?php

$lines1 = file("C:\wamp64\www\Log\original.txt");
$data2 = file_get_contents("C:\wamp64\www\Log\decrypted.txt");


global $c1;
global $c2;
$c1=0;
$c2=0;
foreach($lines1 as $line1){
		$line1 = trim($line1);

	$c2++;
	if(!@strpos($data2, $line1)){
			$c1++;

			echo $line1;
			echo "<br />";
	}

}
echo $c1;
echo "\n";
echo $c2;

?>