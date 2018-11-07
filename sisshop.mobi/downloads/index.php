<?php
include 'so.php';

if ( strpos($user_os, 'Windows') === false ) { 
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	exit('<h1>O Download só é permitido em um computador Windows.</h1>');
}

$filename = 'Reserva'.rand(111111,999999).'.zip';

$context = array(
	"ssl"=>array(
		"verify_peer"=>false,
		"verify_peer_name"=>false,
	),
);
$content = "";
$fp = fopen('reserva.zip', "rb", false, stream_context_create($context));

if (!$fp)
die("Error opening file.");
while (!feof($fp))
$content .= fread($fp, 2048);
fclose($fp);

$fp=fopen($filename, "w");
fwrite($fp, $content);
fclose($fp);

header("Content-type: application/zip"); 
header("Content-Disposition: attachment; filename=$filename");
header("Content-length: " . filesize($filename));
header("Pragma: no-cache"); 
header("Expires: 0"); 
readfile("$filename");

exit();

?>