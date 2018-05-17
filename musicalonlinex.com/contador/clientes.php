<meta http-equiv="refresh" content="120" >
<?php 

$lines = file_get_contents("dados.txt");
$lines = explode("\n", $lines);
$lines = array_unique($lines);

$num_linhas = count($lines) -1;

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="refresh" content="50;URL=clientes.php" />
	<title>Total.: ( <?php echo "$num_linhas"; ?> )</title>
<body  bgcolor="#0b4182" text="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<p align="center"><font color="#00FFFF" size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Contador</strong></font></p>
<p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> 
  <?php 
//$arquivo = fopen ("dados.txt", "r"); 

$num_linhas= 0;
foreach ($lines as $linha) {
      if ($linha != ""){
        $num_linhas++; 
        echo $num_linhas." - ".$linha."<font color='#0084df' size='2' face='Verdana, Arial, Helvetica, sans-serif'>[Mais um cliente cadastrado...]</font></strong><br>";          
      }
}


?>
  <?php
echo "<br><br>"; 
echo "Acessos: " . $num_linhas; ?>
- <b>\o/</b> </font> <strong>