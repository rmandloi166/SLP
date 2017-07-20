<?php

//function_encryption
function encryptData($value){
   $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
   $text = $value;
   $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
   $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
   $crypttext = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $text, MCRYPT_MODE_ECB, $iv);
   return $crypttext;
}


//function_decryption
function decryptData($value){
   $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
   $crypttext = $value;
   $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB);
   $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
   $decrypttext = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $crypttext, MCRYPT_MODE_ECB, $iv);
   return trim($decrypttext);
}




//Defining the server variables.

$ip=$_SERVER['REMOTE_ADDR'];
$uri=$_SERVER['REQUEST_URI'];
$time=$_SERVER['REQUEST_TIME'];
$date = date("Y-m-d H:i:s", $time);
$serverport=$_SERVER['SERVER_PORT'];
$userport=$_SERVER['REMOTE_PORT'];
$browser=$_SERVER['HTTP_USER_AGENT'];
$method=$_SERVER['REQUEST_METHOD'];
$server=$_SERVER['SERVER_NAME'];



//connecting database
//inserting into database

/*	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "log";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "INSERT INTO logfile (`id`,`ip`,`server`,`sp`,`up`,`method`,`datentime`,`uri`,`browser`) VALUES (NULL,'$ip', '$server', '$serverport', '$userport', '$method', '$date', '$uri', '$browser')";

    $sql_run = mysqli_query($conn, $sql);
    if (!$sql_run) {
    	echo "not running";
    }
    $conn->close();
*/



//Writing the original file.
//original.txt
	$filename = "C:\\wamp64\\www\\Log\\original.txt";
    $file = fopen( $filename, "a" );

   if( $file == false ) {
      echo ( "Error in opening new file" );
      exit();
   }

   file_put_contents( "C:\\wamp64\\www\\Log\\original.txt", $ip. "\t"  . $server . "\t\t"  . $serverport . "\t" . $userport. "\t" . $method. "\t" . $date. "\t\t" . $uri. "\t\t" . $browser. "\r\n", FILE_APPEND );


fclose($file);
//Rotate Log




if(filesize("C:\\wamp64\\www\\Log\\rotated.txt")>=50*1024)
{

$file = "C:\\wamp64\\www\\Log\\rotated.txt";
$f = fopen($file, 'r');
$line = fgets($f);
fclose($f);

$newDoc = file_get_contents($file, true);
$newFileContents = substr( $line, strpos($newDoc, "\n")+1 );
file_put_contents($file, $newFileContents);




$file=fopen("C:\\wamp64\\www\\Log\\rotated.txt","a");
file_put_contents( "C:\\wamp64\\www\\Log\\rotated.txt", $ip. "\t"  . $server . "\t\t"  . $serverport . "\t" . $userport. "\t" . $method. "\t" . $date. "\t\t" . $uri. "\t\t" . $browser. "\r\n", FILE_APPEND );
fclose($file);
}
else
{
  $file=fopen("C:\\wamp64\\www\\Log\\rotated.txt","a");
file_put_contents( "C:\\wamp64\\www\\Log\\rotated.txt", $ip. "\t"  . $server . "\t\t"  . $serverport . "\t" . $userport. "\t" . $method. "\t" . $date. "\t\t" . $uri. "\t\t" . $browser. "\r\n", FILE_APPEND );
fclose($file);
}














//Encripting the original file.
//encrypted.txt
$filename = "C:\\wamp64\\www\\Log\\original.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));

$EncryptedData=encryptData($contents);

$file2 = fopen("C:\\wamp64\\www\\Log\\encrypted.txt","w");
fwrite($file2,$EncryptedData);
fclose($file2);







//Compressing the encrypted file.
//encr_compressed.txt
$filename2 = "C:\\wamp64\\www\\Log\\encrypted.txt";
$handle = fopen($filename2, "r");
$contents = fread($handle, filesize($filename2));

$compressed=gzcompress($contents, 9);
  
$file3 = fopen("C:\\wamp64\\www\\Log\\encr_compressed.txt","w");
fwrite($file3,$compressed);
fclose($file3);








//Decompressing the encr_compressed file.
//encr_decompressed.txt
$filename3 = "C:\\wamp64\\www\\Log\\encr_compressed.txt";
$handle = fopen($filename3, "r");
$contents = fread($handle, filesize($filename3));

$decompressed=gzuncompress($contents);

$file4 = fopen("C:\\wamp64\\www\\Log\\encr_decompressed.txt","w");
fwrite($file4,$decompressed);
fclose($file4);




//Decrypting the encrypted file.
//decrypted.txt
$filename4 = "C:\\wamp64\\www\\Log\\encr_decompressed.txt";
$handle = fopen($filename4, "r");
$contents = fread($handle, filesize($filename4));

$DecryptedData=PHP_EOL.decryptData($contents);

$file5 = fopen("C:\\wamp64\\www\\Log\\decrypted.txt","w");

fwrite($file5,$DecryptedData);
fclose($file5);


?>