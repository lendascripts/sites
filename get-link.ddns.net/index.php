<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$DRIVER = 'mysql';
$HOST = 'localhost:3306';
$USER = 'root';
$PASS = '2018';
$BASE = 'getlink';

$config = array();
$S1 = '';
$S2 = '';
$N1 = '';
$N2 = '';

$i = 0;
$f = 0;

if(isset($_POST['addURL']))
{
	$url = md5(rand(111111,999999));
	$db = new PDO($DRIVER.':host='.$HOST.';dbname='.$BASE, $USER, $PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$sql = "INSERT INTO links (url, user) VALUES (?,?)";
	$db->beginTransaction();
		$result = $db->prepare($sql);
		if(! $result->execute(array($url, $_POST['user'])))
		{
			print_r($result->errorInfo());
			exit();
		}
	$db->commit();
	echo $url;
	exit();
}

if(isset($_POST['deleteURL']))
{
	$db = new PDO($DRIVER.':host='.$HOST.';dbname='.$BASE, $USER, $PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$sql = "DELETE FROM links WHERE id = ?";
	$db->beginTransaction();
		$result = $db->prepare($sql);
		if(! $result->execute(array($_POST['linkid'])))
		{
			print_r($result->errorInfo());
			exit();
		}
	$db->commit();
	exit();	
}

if(isset($_POST['addFile']))
{
	$db = new PDO($DRIVER.':host='.$HOST.';dbname='.$BASE, $USER, $PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$sql = "INSERT INTO files (linkid, file, type) VALUES (?, ?, ?)";
	$db->beginTransaction();
		$result = $db->prepare($sql);
		if(! $result->execute(array($_POST['linkid'], 'http://', 'ZIP')))
		{
			print_r($result->errorInfo());
			exit();
		}
	$db->commit();
	exit();	
}

if(isset($_POST['saveFile']))
{
	
	$db = new PDO($DRIVER.':host='.$HOST.';dbname='.$BASE, $USER, $PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$db->beginTransaction();
	$update = $db->prepare("UPDATE files SET file=?, type=? WHERE id=?");
	if(!$update->execute(array($_POST['file'], $_POST['type'], $_POST['id'])))
	{
		print_r($update->errorInfo());
		exit();
	}
	echo $_POST['id'] . '-' . $_POST['file'] . 'saved';
	$db->commit();
	exit();
}

if(isset($_POST['getAccess']))
{

	$path = "../inetpub/logs/LogFiles/W3SVC5";
	$dirsIterator = new RecursiveTreeIterator(new RecursiveDirectoryIterator($path));
	$dirs = array();
	$clickdata = [];

	foreach ($dirsIterator as $pasta => $dirTree) {
		if (is_dir($pasta)) {
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
									if($str == '/'.$_POST['getAccess'])
										$clicks++;
							}
							fclose($handle);
							array_push($clickdata, [ 'data' => $file, 'clicks' => $clicks ]);
						}
				}
			}
			$diretorio->close();
		}
	}

	echo json_encode($clickdata);
	exit();
}

if($_SERVER['REQUEST_URI'] != '/' && $_SERVER['REQUEST_URI'] != '/index.php')
{
	$links = [];
	$url = str_replace('/','',$_SERVER['REQUEST_URI']);
	$db = new PDO($DRIVER.':host='.$HOST.';dbname='.$BASE, $USER, $PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$result = $db->query("SELECT * FROM links WHERE url = '".$url."'");
	if($result->rowCount() > 0)
	{
		$result = $result->fetchAll(PDO::FETCH_ASSOC);
		for($i=0;$i<count($result);$i++)
		{
			$links[$i]['id'] = $result[$i]['id'];
			$links[$i]['url'] = $result[$i]['url'];
			$links[$i]['user'] = $result[$i]['user'];
		}
	}
	else
	{
		echo 'A URL não existe';
		exit();
	}
	
	$files = [];
	for($i=0;$i<count($links);$i++)
	{
		$result = $db->query("SELECT * FROM files WHERE linkid = ".$links[$i]['id']."");
		if($result->rowCount() > 0)
		{
			$result = $result->fetchAll(PDO::FETCH_ASSOC);
			for($f=0;$f<count($result);$f++)
			{
				$files[$f]['file'] = $result[$f]['file'];
				$files[$f]['type'] = $result[$f]['type'];
			}
		}
		else
		{
			echo 'Arquivos não encontrados';
			exit();
		}
	}

	$random = rand(0,(count($files)-1));
	$filename = 'download/'.$links[0]['user'].'-'.date('Y').'-'.date('m').'-'.date('d').'-'.date('H').'-'.date('i').'-'.date('s').'.'.strtolower($files[$random]['type']);

	$context = array(
		"ssl"=>array(
			"verify_peer"=>false,
			"verify_peer_name"=>false,
		),
	);
	$content = "";
	$fp = fopen($files[$random]['file'], "rb", false, stream_context_create($context));

	if (!$fp)
	die("Error opening file.");
	while (!feof($fp))
	$content .= fread($fp, 2048);
	fclose($fp);

	$fp=fopen($filename, "w");
	fwrite($fp, $content);
	fclose($fp);

	header("Content-type: application/zip"); 
	header("Content-Disposition: attachment; filename=$filename");
	header("Content-length: " . filesize($filename));
	header("Pragma: no-cache"); 
	header("Expires: 0"); 
	readfile("$filename");

	exit();
}

$links = [];
$db = new PDO($DRIVER.':host='.$HOST.';dbname='.$BASE, $USER, $PASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$result = $db->query("SELECT * FROM links");
if($result->rowCount() > 0)
{
	$result = $result->fetchAll(PDO::FETCH_ASSOC);
	for($i=0;$i<count($result);$i++)
	{
		$links[$i]['id'] = $result[$i]['id'];
		$links[$i]['url'] = $result[$i]['url'];
		$links[$i]['user'] = $result[$i]['user'];
	}
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
	<script>
	$( document ).on( "pagecreate", function() {
		$("#add").click(function() {
			if($('#user').val() != '')
			{
				$.ajax({
					type: 'POST',
					dataType: 'text',
					url: 'index.php',
					data: { addURL: true, user: $('#user').val() }
				})
				.done(function(data) {
					location.reload();
				});
			} 
			else
			{
				$('#user').css('border','1px solid red');
			}
		});
	});
	
	function addFile(linkid) {
		$.ajax({
			type: 'POST',
			dataType: 'text',
			url: 'index.php',
			data: { addFile: true, linkid: linkid }
		})
		.done(function(data) {
			location.reload();
		});
	}
	
	function deleteURL(linkid) {
		var r = confirm("Deseja deletar esse link?");
		if (r == true) {
			$.ajax({
				type: 'POST',
				dataType: 'text',
				url: 'index.php',
				data: { deleteURL: true, linkid: linkid }
			})
			.done(function(data) {
				location.reload();
			});
		}
	}
	
	function save(form) {
		$("#"+form+"").each(function(){
			$(this).find(':input').each(function(){
				if($(this).attr('class') == 'file')
				{
					$.ajax({
						type: 'POST',
						dataType: 'text',
						url: 'index.php',
						data: { saveFile: true, id: $(this).attr('id'), file: $(this).val(), type: $("#type_"+$(this).attr('id')+"").val() }
					})
					.done(function(data) {
						console.log(data);
						alert('Adicionado com sucesso!');
					});
				}
			});
		});
	}
	
	function getAccess(id, url) {
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: 'index.php',
			data: { getAccess: url }
		})
		.done(function(data) {
			var total = new Number(0);
			for(i=0;i<data.length;i++) {
				total += data[i].clicks;
			}
			$('#'+id).find('span').html(' - Quantidade de Cliques: ' + new Intl.NumberFormat("de-DE").format(total));
		});
	}
	</script>
</head>
<body>

<?php
$logado = false;

if (isset($_POST['user']) && isset($_POST['pass']) && $_POST['user'] == 'sampaio' && ($_POST['pass'] == '$!26%8#@' || $_POST['pass'] == '@123456'))
{
	$logado = true;
	$_SESSION['user'] = $_POST['user'];
	$_SESSION['pass'] = $_POST['pass'];
}

if(isset($_SESSION['user']) && isset($_SESSION['pass']))
{
	$logado = true;
	$session = true;
}

if($logado)
{
?>
<div data-role="page">

	<div data-role="header">
		<h1>Painel de Controle</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<fieldset class="ui-grid-a">
			<div class="ui-block-a">
				<input id="user" type="text" placeholder="Usuário" data-theme="a">
			</div>
			<div class="ui-block-b">
				<button type="button" data-icon="gear" data-iconpos="right" data-mini="true" data-inline="true" id="add">Adicionar URL</button>
			</div>
		</fieldset>
		<div data-role="collapsibleset" data-content-theme="a" data-iconpos="right" id="set">
			<?php
				for($i=0;$i<count($links);$i++)
				{
					echo '<div data-role="collapsible" id="set'.($i+1).'" data-collapsed="true">';
					echo '<script>';
					echo 'setTimeout(function() { getAccess("set'.($i+1).'", "'.$links[$i]['url'].'"); }, 1000);';
					echo '</script>';
					
					echo '<h3>'.$links[$i]['user'].' <span> - Quantidade de Cliques: 0</span></h3>';
					echo '<p>URL: <a href="http://'.$_SERVER['HTTP_HOST'] . '/' . $links[$i]['url'].'" target="_blank">http://'.$_SERVER['HTTP_HOST'] . '/' . $links[$i]['url'].'</a></p>';
					echo '<p>URL SSL: <a href="https://'.$_SERVER['HTTP_HOST'] . '/' . $links[$i]['url'].'" target="_blank">https://'.$_SERVER['HTTP_HOST'] . '/' . $links[$i]['url'].'</a></p>';
					
					echo '<form id="link'.($i+1).'" action="index.php" method="post">';
					echo '<fieldset>';
					echo '<legend>Arquivos:</legend>';
					$result = $db->query("SELECT * FROM files WHERE linkid = ".$links[$i]['id']."");
					if($result->rowCount() > 0)
					{
						$result = $result->fetchAll(PDO::FETCH_ASSOC);
						for($f=0;$f<count($result);$f++)
						{
							echo '<fieldset class="ui-grid-a">';
								echo '<div  class="ui-block-a">';
									echo '<fieldset data-role="fieldcontain">';
									  echo '<input class="file" id="'.$result[$f]['id'].'" value="'.$result[$f]['file'].'" type="text" placeholder="URL" data-theme="a">';
									echo '</fieldset>';
								echo '</div>';
								echo '<div class="ui-block-d">';
									echo '<fieldset data-role="fieldcontain">';
										echo '<input id="type_'.$result[$f]['id'].'" value="'.$result[$f]['type'].'" type="text" placeholder="ZIP" maxlength="3" data-theme="a">';
									echo '</fieldset>';
								echo '</div>';
							echo '</fieldset>';
						}
					}
					echo '</fieldset>';
					

					
					echo '<input type="button" onclick="addFile('.$links[$i]['id'].');" value="Adicionar Arquivo" />';
					echo '<input type="button" onclick="save(\'link'.($i+1).'\');" value="Salvar" />';
					echo '<input type="button" onclick="deleteURL('.$links[$i]['id'].');" value="Apagar" />';

					echo '</form>';
					echo '</div>';
				}
			?>
		</div>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Ultima Atualizacao: <?=date('d/m/Y H:i:s');?></h4>
	</div><!-- /footer -->
</div><!-- /page -->
<?php } else { ?>
<div data-role="page">

	<div data-role="header">
		<h1>Painel de Controle</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<form action="index.php" method="post">
			<label>Usuário:</label>
			<input type="text" id="user" name="user" placeholder="Usuário" />
			<br/>
			<label>Senha:</label>
			<input type="password" id="pass" name="pass" placeholder="Senha" />
			<br/>
			<input type="submit" value="entrar" />
		</form>
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Ultima Atualizacao: <?=date('d/m/Y H:i:s');?></h4>
	</div><!-- /footer -->
</div><!-- /page -->
<?php } ?>
</body>
</html>