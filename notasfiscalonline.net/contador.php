<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//if(isset($_POST['viewData']))
//{
	$pasta = '../logs/logfiles/w3svc11';
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
							$line = fgets($handle);
							$filtroDownload = explode(' ',$line);
							foreach($filtroDownload as $str)
								if($str == '/download/')
									$linecount++;
						}
						fclose($handle);
					}
			}
		}
		$diretorio->close();
	}
//}
//else
//{
?>
<!DOCTYPE HTML>
<html>
<head>  
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: false,
	title:{
		text: "Cliques: <?=$linecount;?>",
		horizontalAlign: "left"
	},
	data: [{
		type: "doughnut",
		startAngle: 60,
		//innerRadius: 60,
		indexLabelFontSize: 17,
		//indexLabel: "{label} - #percent%",
		//toolTipContent: "<b>{label}:</b> {y} (#percent%)",
		dataPoints: [
			{ y: <?=$linecount?>, label: "Clicks" }
			//{ y: 67, label: "Inbox" },
			//{ y: 28, label: "Archives" },
			//{ y: 10, label: "Labels" },
			//{ y: 7, label: "Drafts"},
			//{ y: 15, label: "Trash"},
			//{ y: 6, label: "Spam"}
		]
	}]
});
chart.render();

}
</script>
<meta http-equiv="refresh" content="5">
</head>
<body>
<div id="chartContainer" style="height: 100%; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
<?php //} ?>