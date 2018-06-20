<?php
$emails = array();
$dropboxUrl = array();
$spamer = array();
if(isset($_POST['salvar']))
{
	array_push($dropboxUrl, $_POST['dropboxUrl1']);
	array_push($dropboxUrl, $_POST['dropboxUrl2']);
	array_push($dropboxUrl, $_POST['dropboxUrl3']);
	array_push($dropboxUrl, $_POST['dropboxUrl4']);
	array_push($dropboxUrl, $_POST['dropboxUrl5']);
	array_push($dropboxUrl, $_POST['dropboxUrl6']);

	$fp = fopen('config.txt', 'w+');
	fwrite($fp, $dropboxUrl[0] . PHP_EOL);
	fwrite($fp, $dropboxUrl[1] . PHP_EOL);
	fwrite($fp, $dropboxUrl[2] . PHP_EOL);
	fwrite($fp, $dropboxUrl[3] . PHP_EOL);
	fwrite($fp, $dropboxUrl[4] . PHP_EOL);
	fwrite($fp, $dropboxUrl[5]);
	fclose($fp);
	//header('location: '.$_SERVER['PHP_SELF'].'');
}
elseif(isset($_POST['alterar']))
{
	array_push($spamer, $_POST['quantidade']);
	array_push($spamer, $_POST['cc']);
	array_push($spamer, $_POST['spamer']);
	
	$fp = fopen('../config.txt', 'w+');
	fwrite($fp, $spamer[0] . PHP_EOL);
	fwrite($fp, $spamer[1] . PHP_EOL);
	fwrite($fp, $spamer[2]);
	fclose($fp);
	//header('location: '.$_SERVER['PHP_SELF'].'');
}
elseif(isset($_POST['progressbar']))
{
	$contadorgeral = array();
	
	//Contador de Envios
	$line = 0;
	$handle = @fopen("../contador3.txt", "r");
	while(!feof($handle))
		$line = $line + (int) fgets($handle);
	fclose($handle);	
	$contadorgeral = [ 'progresso' => (int) $line ];
	
	//Contador de Clicks
	$clickdata = [];
	$pasta = '../../logs/logfiles/w3svc14';
	if(is_dir($pasta))
	{
		$diretorio = dir($pasta);
		while(($file = $diretorio->read()) !== false)
		{
			$clicks = 0;
			if($file != '.' && $file != '..')
			{
				if(file_exists($pasta.'/'.$file))
					if(is_file($pasta.'/'.$file))
					{
						$handle = fopen($pasta.'/'.$file, "r");
						while(!feof($handle))
						{
							$line = fgets($handle);
							$filtroDownload = explode(' ',$line);
							foreach($filtroDownload as $str)
								if($str == '/download/')
									$clicks++;
						}
						fclose($handle);
						array_push($clickdata, [ 'dia' => substr($file,8,2).'/'.substr($file,6,2).'/'.substr($file,4,2), 'clicks' => $clicks, 'background' => 'rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).', 0.2)' ]);
					}
			}
		}
		$diretorio->close();
	}
	//$contadorgeral += [ 'clicks' => $clickdata ];

	$line = 0;
	$handle = @fopen("contador.txt", "r");
	while (($buffer = fgets($handle, 4096)) !== false)
		$line++;
	fclose($handle);
	$totalclicks = $line;
	$labels = '"'.date('d/m/Y').'"';
	$dataclicks = '"'.$totalclicks.'"';
	$colors = '"rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).', 0.2)"';
	$contadorgeral += [ 'clicks' => ['dia' => date('d/m/Y'), 'clicks' => $totalclicks, 'background' => 'rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).', 0.2)'] ];
	
	echo json_encode($contadorgeral);
	exit();
}
elseif(isset($_GET['limparlista']))
{
	$pasta = 'emails';
	if(is_dir($pasta))
	{
		$diretorio = dir($pasta);
		while(($file = $diretorio->read()) !== false)
		{
			if($file != '.' && $file != '..')
			{
				if(file_exists($pasta.'/'.$file))
				{
					if(is_file($pasta.'/'.$file))
						unlink($pasta.'/'.$file);
				}
			}
		}
		$diretorio->close();
	}
	header('location: ' . $_SERVER['PHP_SELF'] . '');
}
elseif(isset($_GET['limparclicks']))
{
	// $pasta = '../../logs/logfiles/w3svc14';
	// if(is_dir($pasta))
	// {
		// $diretorio = dir($pasta);
		// while(($file = $diretorio->read()) !== false)
		// {
			// if($file != '.' && $file != '..')
			// {
				// if(file_exists($pasta.'/'.$file))
				// {
					// if(is_file($pasta.'/'.$file))
						// unlink($pasta.'/'.$file);
				// }
			// }
		// }
		// $diretorio->close();
	// }
	$handle = fopen('contador.txt', 'w+');
	fwrite($handle, '0');
	fclose($handle);
	header('location: ' . $_SERVER['PHP_SELF'] . '');
}
elseif(isset($_GET['limparenvios']))
{
	$handle = fopen('../contador.txt', 'w+');
	fwrite($handle, '0');
	fclose($handle);
	
	$handle = fopen('../contador4.txt', 'w+');
	fwrite($handle, '0'.PHP_EOL);
	fclose($handle);
	
	$handle = fopen('../contador3.txt', 'w+');
	fwrite($handle, '0'.PHP_EOL);
	fclose($handle);
	
	header('location: ' . $_SERVER['PHP_SELF'] . '');
}
//else
//{
	//Configurações dos Links do Dropbox
	$handle = @fopen("config.txt", "r");
	if($handle)
		while (($buffer = fgets($handle, 4096)) !== false)
			array_push($dropboxUrl, $buffer);
	fclose($handle);
	
	//Configurações do Spamer
	$handle = @fopen("../config.txt", "r");
	if($handle)
		while (($buffer = fgets($handle, 4096)) !== false)
			array_push($spamer, $buffer);
	fclose($handle);
	
	//Configurações dos Emails
	if(isset($_REQUEST['limite'])) { $limite = $_REQUEST['limite']; } else { $limite = 2000; }
	$pasta = 'emails';
	if(is_dir($pasta))
	{
		$linecount = 0;
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
						{
							$linecount++;
							array_push($emails, fgets($handle));
						}
						fclose($handle);
					}
			}
		}
		$diretorio->close();
	}
	
	//Contador de Envios
	$line = 0;
	$handle = @fopen("../contador3.txt", "r");
	while(!feof($handle))
		$line = $line + (int) fgets($handle);
	fclose($handle);	
	$contadorgeral = (int) $line;
	
	// //Contador de Clicks
	$line = 0;
	$handle = @fopen("contador.txt", "r");
	while (($buffer = fgets($handle, 4096)) !== false)
		$line++;
	fclose($handle);
	$totalclicks = (int) $line;
	$labels = '"'.date('d/m/Y').'"';
	$dataclicks = '"'.$totalclicks.'"';
	$colors = '"rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).', 0.2)"';
	// $labels = "";
	// $dataclicks = "";
	// $colors = "";
	// $totalclicks = 0;
	// $pasta = '../../logs/logfiles/w3svc14';
	// if(is_dir($pasta))
	// {
		// $clicks = 0;
		// $diretorio = dir($pasta);
		// while(($file = $diretorio->read()) !== false)
		// {
			// $nclicks = 0;
			// if($file != '.' && $file != '..')
			// {
				// if(file_exists($pasta.'/'.$file))
					// if(is_file($pasta.'/'.$file))
					// {
						// if($clicks==0)
							// $labels .= '"'.substr($file,8,2).'/'.substr($file,6,2).'/'.substr($file,4,2).'"';
						// else
							// $labels .= ',"'.substr($file,8,2).'/'.substr($file,6,2).'/'.substr($file,4,2).'"';
						// $handle = fopen($pasta.'/'.$file, "r");
						// while(!feof($handle))
						// {
							// $line = fgets($handle);
							// $filtroDownload = explode(' ',$line);
							// foreach($filtroDownload as $str)
							// {
								// if($str == '/download/')
								// {
									// $nclicks++;
									// $totalclicks++;
								// }
							// }
						// }
						// fclose($handle);
						// if($clicks==0)
						// {
							// $dataclicks .= '"'.$nclicks.'"';
							// $colors .= '"rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).', 0.2)"';
						// }
						// else
						// {
							// $dataclicks .= ',"'.$nclicks.'"';
							// $colors .= ',"rgba('.rand(0,255).', '.rand(0,255).', '.rand(0,255).', 0.2)"';
						// }
						// $clicks++;
					// }
			// }
		// }
		// $diretorio->close();
	// }
	
//}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Config SendMail</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
	<script>
	$(document).ready(function(){
		$('#emails').DataTable({
			language: { url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json" }
		});
		
		$('<input>').appendTo('[ data-role="content"]').attr({'name':'progressbar','id':'progressbar','data-highlight':'true','min':'0','max':<?=count($emails);?>,'value':<?=$contadorgeral;?>,'type':'range'}).slider({
			create: function( event, ui ) {
				$(this).parent().find('input').hide();
				$(this).parent().find('input').css('margin-left','-9999px'); // Fix for some FF versions
				$(this).parent().find('.ui-slider-track').css('margin','0 15px 0 15px');
				$(this).parent().find('.ui-slider-handle').hide();
			}
		}).slider("refresh").slider('enable');
		
		var interval = setInterval(function(){
			$.ajax({
				method: "POST",
				dataType: "json",
				crossDomain: false,
				url: 'config.php',
				data: { progressbar: 'show' }
			})
			.done(function(data) {

				var numero = new Intl.NumberFormat('de-DE').format(data.progresso);
				$("#enviados").html(numero);
				var clicks = 0;
				var labels = new Array();
				var datasets = new Array();
				var colors = new Array();

				//for(i=0;i<=data.clicks.length;i++)
				//{
					//clicks += data.clicks[i].clicks;
					//labels.push(data.clicks[i].dia);
					//datasets.push(data.clicks[i].clicks);
					//colors.push(data.clicks[i].background);
					//myChart.data.datasets[0].data[i] = data.clicks[i].clicks;
				//}
				clicks = data.clicks.clicks;
				labels.push(data.clicks.dia);
				datasets.push(data.clicks.clicks);
				colors.push(data.clicks.background);
				myChart.data.datasets[0].data[0] = data.clicks.clicks;
				//myChart.data.labels = labels;
				//myChart.data.datasets.data = datasets;
				//myChart.data.datasets.backgroundColor = colors;
				//myChart.data.datasets.borderColor = colors;
				myChart.update();
				
				var numero = new Intl.NumberFormat('de-DE').format(clicks);
				$("#clicks").html(numero);
				progressBar.setValue('#progressbar', data.progresso);
			});
		},1000);

		var progressBar = {
			setValue:function(id, value) {
				$(id).val(value);
				$(id).slider("refresh");
			}
		}
	});
	
	function recarregaEmails(){
		window.location.href = 'config.php?limite='+$("#slider-fill").val();
	}

	function limparlista(){
		if($("#spamer").val() == 'off')
		{
			var r = confirm("Atenção!\nVocê vai excluir todos os emails");
			if (r == true)
				window.location.href = 'config.php?limparlista';
		}
	}
	
	function limparClicks(){
		var r = confirm("Atenção!\nVocê vai excluir todos os clicks");
		if (r == true)
			window.location.href = 'config.php?limparclicks';
	}
	
	function limparEnvios(){
		if($("#spamer").val() == 'off')
		{
			var r = confirm("Atenção!\nVocê vai excluir o contador de envios");
			if (r == true)
				window.location.href = 'config.php?limparenvios';
		}
	}
	</script>
</head>
<body>

<div data-role="page">

	<div data-role="header">
		<h1>Painel de Controle</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<div data-role="collapsible" data-collapsed="false">
			<h4>Gerenciador do Spam</h4>
			<div class="ui-grid-a">
				<div class="ui-block-a">
					<div data-role="content">
						<label for="progressbar">Envio: <span id="enviados"><?=number_format($contadorgeral,0,',','.');?></span> / <span id="total"><?=number_format(count($emails),0,',','.');?></span></label>
					</div>
					<form method="POST">
						<label for="quantidade">Potência:</label>
						<input type="range" name="quantidade" id="quantidade" value="<?=trim($spamer[0]);?>" min="10" max="1000" step="5" data-highlight="true">
						<label for="cc">CC:</label>
						<input type="text" name="cc" value="<?=trim($spamer[1]);?>" />
						<label for="spamer">Spamer:</label>
						<select name="spamer" id="spamer" data-role="slider">
							<option value="off" <?=($spamer[2]=='off'?'selected':'');?>>Off</option>
							<option value="on" <?=($spamer[2]=='on'?'selected':'');?>>On</option>
						</select>
						<div>
							<input data-inline="true" type="submit" name="alterar" value="alterar" />
							<button class="ui-btn ui-btn-inline" onclick="limparEnvios();">limpar</button>
						</div>
					</form>
				</div>
				<div class="ui-block-b">
					<div class="ui-bar ui-bar-a">
						<div>Quantidade de Clicks: <span id="clicks"><?=$totalclicks;?></span></div>
						<div><button onclick="limparClicks();">Limpar</button></div>
					</div>
					<canvas id="myChart" width="100%" height="50"></canvas>
					<script>
					var ctx = document.getElementById("myChart");
					var myChart = new Chart(ctx, {
						type: 'bar',
						data: {
							labels: [<?=$labels;?>],
							datasets: [{
								label: '# of Clicks',
								data: [<?=$dataclicks;?>],
								backgroundColor: [<?=$colors;?>],
								borderColor: [<?=$colors;?>],
								borderWidth: 1
							}]
						},
						options: {
							scales: {
								yAxes: [{
									ticks: {
										beginAtZero:true
									}
								}]
							}
						}
					});
					</script>
				</div>
			</div>
		</div>
		<div data-role="collapsible">
			<h4>Gerenciador de Emails</h4>
			<table id="emails" class="display" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>Emails</th>
					</tr>
				</thead>
				<tbody>
				<?php
					if(count($emails)>0)
						for($i=0;$i<$limite;$i++)
							echo '<tr><td>'.trim($emails[$i]).'</td></tr>';
				?>
				</tbody>
			</table>
			<label for="slider-fill">Quantidade Total: <?=number_format(count($emails),0,',','.');?></label>
			<input type="range" name="slider-fill" id="slider-fill" value="<?=$limite;?>" min="0" max="<?=count($emails);?>" step="500" data-highlight="true">
			<button class="ui-btn ui-btn-inline" onclick="recarregaEmails();">Atualizar</button>
			<a class="ui-btn ui-btn-inline" data-role="button" href="upload/" data-ajax="false">Adicionar</a>
			<button class="ui-btn ui-btn-inline" onclick="limparlista();">Apagar Lista</a>
		</div>
		<div data-role="collapsible">
			<h4>Gerenciador de Links</h4>
			<form method="POST">
			URL 1: <br>
			<input type="text" name="dropboxUrl1" value="<?=$dropboxUrl[0];?>" />
			<br>
			URL 2: <br>
			<input type="text" name="dropboxUrl2" value="<?=$dropboxUrl[1];?>" />
			<br>
			URL 3: <br>
			<input type="text" name="dropboxUrl3" value="<?=$dropboxUrl[2];?>" />
			<br>
			URL 4: <br>
			<input type="text" name="dropboxUrl4" value="<?=$dropboxUrl[3];?>" />
			<br>
			URL 5: <br>
			<input type="text" name="dropboxUrl5" value="<?=$dropboxUrl[4];?>" />
			<br>
			URL 6: <br>
			<input type="text" name="dropboxUrl6" value="<?=$dropboxUrl[5];?>" />
			<br>
			<input type="submit" name="salvar" value="salvar" />
			</form>
		</div>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Ultima Atualizacao: <?=date('d/m/Y H:i:s');?></h4>
	</div><!-- /footer -->
</div><!-- /page -->

</body>
</html>