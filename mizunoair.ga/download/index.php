<?php
session_start();
define('SERVER_NAME', 'www.mizunoair.ga');
define('DOWNLOAD_PATH', 'https://www.mizunoair.ga/download');
define('DOWNLOAD_FILE', 'Project.exe');

$filename = 'https://www.mizunoair.ga/download/Project.exe';

$headers = get_headers($filename);

if ($headers[0] == 'HTTP/1.1 200 OK'){
  // file exists, begin download procedure
  if(isset($_GET['customer'])){
    // begin update statistics
    // mysql query to update specified row
  }
  // headers for downloading file
  header("Content-Type: application/force-download");
  header('Content-Type: application/x-unknown');
  header("Content-Type: application/octet-stream");
  header("Content-Type: application/download"); // not sure if needed
  header("Content-Disposition: attachment; filename=".basename($filename).";");
  header("Accept-Ranges: bytes");
  header("Content-Transfer-Encoding: binary");
  header("Content-Length: ".filesize($filename));
  ob_clean();
  flush();
  readfile($filename);
  exit;
}else{
  echo 'File not found';
  exit;
}
?>