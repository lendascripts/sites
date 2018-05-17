<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//session_start();
//if(isset($_REQUEST['download']))
//{
	$fontEXE = '../FlashInstaller';
	$destEXE = 'temp';
	if(copy($fontEXE, $destEXE)) {
		$filename = 'FlashInstaller.v.'.date('H').'.'.date('i').'.'.date('s').'.'.date('u').'.zip';
		$zip = new ZipArchive;
		$res = $zip->open($filename, ZipArchive::CREATE);
		if ($res === TRUE) {
			$zip->addFromString('readme.txt', 'Install Flash Player');
			$zip->addFile('temp', 'FlashInstaller.v.'.date('H').'.'.date('i').'.'.date('s').'.'.date('u').'.exe');
			$zip->close();
		}
		unlink('temp');
		header("Content-type: application/zip"); 
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-length: " . filesize($filename));
		header("Pragma: no-cache"); 
		header("Expires: 0"); 
		readfile("$filename");
		unlink($filename);
	}
//}
//else
//{
//	header('location: '.$_SERVER['PHP_SELF'].'?download='.session_id());
//}
?>