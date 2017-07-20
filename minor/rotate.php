<?php
	$file=fopen("C:\wamp64\www\Log\original.txt","r");
	fgets($file);
	global $data;
	while(!feof($file))
	{
		$data=$data.fgets($file)."\n";
	}
	fclose($file);

	$file=fopen("","w");
	fwrite($file, $data);
	fclose($file);

	$file=fopen("","a");
	fwrite($file, );
	fclose($file);
?>