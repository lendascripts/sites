<?php
$S1 = '';
$N1 = '';
$S2 = '';
$N2 = '';
$B1 = '';
$S2 = '';
$N2 = '';
if(isset($_POST['salvar']))
{
	$dominio = $_POST['dominio'];
	$https = $_POST['https'];
	$redirect1 = $_POST['redirect1'];
	$redirect2 = $_POST['redirect2'];
	$fp = fopen('redirect.txt', 'w+');
	fwrite($fp, $dominio . ';' . $https . ';' . $redirect1 . ';' . $redirect2);
	fclose($fp);
	
	echo 'Domínio: ' . $dominio . '<br>';
	if($https == 'S')
	{
		$S1 = 'checked="checked"';
		echo 'HTTPS Ativado <br>';
	}
	else
	{
		$N1 = 'checked="checked"';
		echo 'HTTPS Desativado <br>';
	}
	
	if($redirect1 == 'B')
	{
		$B1 = 'checked="checked"';
		echo 'Botão de Redirecionamento ' . $_SERVER['HTTP_HOST'] . ' Ativado <br>';
	}
	else
	{
		if($redirect1 == 'S') {
			$S2 = 'checked="checked"';
			echo 'Redirect ' . $_SERVER['HTTP_HOST'] . ' Ativado <br>';			
		} else {
			$N2 = 'checked="checked"';
			echo 'Redirect ' . $_SERVER['HTTP_HOST'] . ' Desativado <br>';
		}
	}
	
	if($redirect2 == 'S') {
		$S3 = 'checked="checked"';
		echo 'Muda Domínio ' . $_SERVER['HTTP_HOST'] . ' Ativado <br>';			
	} else {
		$N3 = 'checked="checked"';
		echo 'Muda Domínio ' . $_SERVER['HTTP_HOST'] . ' Desativado <br>';
	}
}
else
{	
	$handle = @fopen("redirect.txt", "r");
	$redirects = fgets($handle, 4096);
	$redirects = explode(';', $redirects);
	fclose($handle);
	$dominio = $redirects[0];
	if($redirects[1] == 'S')
		$S1 = 'checked="checked"';
	else
		$N1 = 'checked="checked"';
	if($redirects[2] == 'B')
		$B1 = 'checked="checked"';
	else
		if($redirects[2] == 'S')
			$S2 = 'checked="checked"';
		else
			$N2 = 'checked="checked"';
	if($redirects[3] == 'S')
		$S3 = 'checked="checked"';
	else
		$N3 = 'checked="checked"';
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
DOMÍNIO:<br>
<input type="text" name="dominio" id="dominio" value="<?=$dominio;?>" /><br>
HTTPS ?<br>
<fieldset data-role="controlgroup" data-type="horizontal">
	<input type="radio" name="https" id="S1" value="S" <?=$S1;?>>
	<label for="S1">Sim</label>
	<input type="radio" name="https" id="N1" value="N" <?=$N1;?>>
	<label for="N1">Nao</label>
</fieldset>
<br>
Acionar Redirecionamento ? <br>
<fieldset data-role="controlgroup" data-type="horizontal">
	<legend><?=$_SERVER['HTTP_HOST'];?></legend>
	<input type="radio" name="redirect1" id="S2" value="S" <?=$S2;?>>
	<label for="S2">Sim</label>
	<input type="radio" name="redirect1" id="N2" value="N" <?=$N2;?>>
	<label for="N2">Nao</label>
</fieldset>
Mudar Dominio ? <br>
<fieldset data-role="controlgroup" data-type="horizontal">
	<input type="radio" name="redirect2" id="S3" value="S" <?=$S3;?>>
	<label for="S3">Sim</label>
	<input type="radio" name="redirect2" id="N3" value="N" <?=$N3;?>>
	<label for="N3">Nao</label>
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