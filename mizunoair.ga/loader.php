<?php
$config = array();
if(isset($_POST['salvar']))
{
	$config[] = $_POST['download'];
	$config[] = $_POST['tipoarquivo'];
	
	$config[] = $_POST['url1'];
	$config[] = $_POST['url2'];
	$config[] = $_POST['url3'];
	$config[] = $_POST['url4'];
	$config[] = $_POST['url5'];
	$config[] = $_POST['url6'];
	


	$fp = fopen('loader.txt', 'w+');
	fwrite($fp, $config[0].PHP_EOL);
	fwrite($fp, $config[1].PHP_EOL);
	fwrite($fp, $config[2]);

	fclose($fp);
	
	if($config[0] == 'S')
		$S1 = 'checked="checked"';
	else
		$N1 = 'checked="checked"';
	
	if($config[1] == 'S')
		$S2 = 'checked="checked"';
	else
		$N2 = 'checked="checked"';
}
else
{	
	$handle = @fopen("loader.txt", "r");
	while (($buffer = fgets($handle, 4096)) !== false)
		array_push($config, trim($buffer));
	fclose($handle);

	if($config[0] == 'S')
		$S1 = 'checked="checked"';
	else
		$N1 = 'checked="checked"';
	if($config[1] == 'S')
		$S2 = 'checked="checked"';
	else
		$N2 = 'checked="checked"';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loader</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<div data-role="page">

	<div data-role="header">
		<h1>Painel de Controle</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<form method="post">
		URL de Download: <br>
		<input type="text" name="url1" value="<?=$config[2];?>" /><br/>
		<br>
		Ativar Download? <br>
		<fieldset data-role="controlgroup" data-type="horizontal">
			<input type="radio" name="download" id="S1" value="S" <?=$S1;?>>
			<label for="S1">Sim</label>
			<input type="radio" name="download" id="N1" value="N" <?=$N1;?>>
			<label for="N1">Nao</label>
		</fieldset>
		Tipo do Arquivo: <br>
		<fieldset data-role="controlgroup" data-type="horizontal">
			<input type="radio" name="tipoarquivo" id="S2" value="S" <?=$S2;?>>
			<label for="S2">EXE</label>
			<input type="radio" name="tipoarquivo" id="N2" value="N" <?=$N2;?>>
			<label for="N2">ZIP</label>
		</fieldset>
		<input type="submit" name="salvar" value="salvar" />
		</form>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Ultima Atualizacao: <?=date('d/m/Y H:i:s');?></h4>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>