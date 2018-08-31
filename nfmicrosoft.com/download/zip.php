<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$filename = 'java.v.'.date('H').'.'.date('i').'.'.date('s').'.zip';

$zip = new ZipArchive;
$res = $zip->open($filename, ZipArchive::CREATE);
if ($res === TRUE) {
    $zip->addFile('java.exe', 'java.v.'.date('H').'.'.date('i').'.'.date('s').'.exe');
    $zip->close();
}

header("Content-type: application/zip"); 
header("Content-Disposition: attachment; filename=$filename");
header("Content-length: " . filesize($filename));
header("Pragma: no-cache"); 
header("Expires: 0"); 
readfile("$filename");
?>