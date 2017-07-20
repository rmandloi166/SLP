<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div style="width: 93%; margin: auto; padding: 0px;">
<?php
$file = new SplFileObject("C:\\wamp64\\www\\Log\\rotated.txt");

	// Loop until we reach the end of the file.
	while (!$file->eof()) {
	    // Echo one line from the file.
	    echo $file->fgets();
	    echo "<br />\n";
	}
?>
</div>
</body>
</html>