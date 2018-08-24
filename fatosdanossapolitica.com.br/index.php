<?php
	$handle = @fopen("redirect.txt", "r");
 	if($handle)
	{
		$redirects = fgets($handle, 4096);
		$redirects = explode(';', $redirects);
		fclose($handle);
		$dominio = $redirects[0];
		$dominio = str_replace('http://','',$dominio);
		$dominio = str_replace('https://','',$dominio);
		if($redirects[2] == 'S' && $redirects[3] == 'S') {
			if($redirects[1] == 'S') {
				header('location: https://'.$dominio.'/');
			} else {
				header('location: http://'.$dominio.'/');
			}
		}
	}
?>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
	<meta name="author" content="Kerdna"/>
	<title>Monarquia do Brasil</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
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
<FRAMESET ROWS="2,*" FRAMEBORDER="0" FRAMESPACING="0">
<FRAME SRC="blank.html" NAME="superior" NORESIZE SCROLLING="NO">
<FRAME SRC="main.php" NAME="central" MARGINWIDTH="0" MARGINHEIGHT="0" NORESIZE SCROLLING="YES">
</FRAMESET>
<noframes>
<body>
</body>
</noframes>
</frameset>
</html>