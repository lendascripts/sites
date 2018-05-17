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
		//$loader = @fopen('http://'.$dominio.'/loader.txt','r');
		//if($loader)
		//{
			if($redirects[2] == 'S')
				if($redirects[1] == 'S')
					header('location: https://'.$dominio.'/');
				else
					header('location: http://'.$dominio.'/');
		//}
	}
?>
<!DOCTYPE html> 
<html lang="pt-br" dir="ltr">
   <!-- Mirrored from brasil-colonia.info/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 13:10:13 GMT -->
   <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
   <head>
      <base/>
      <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
      <meta name="author" content="Kerdna"/>
      <meta name="generator" content="Joomla! - Open Source Content Management"/>
      <title>Brasil Colônia - Brasil Colônia</title>
      <link href="index.html" rel="canonical"/>
      <link href="templates/jsn_dome_pro/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
      <link rel="stylesheet" href="cache/jsn_dome_pro/uncss-78fcace5f7993dc1488e8289456e237e.css"/>
      <style type="text/css">
         div.jsn-modulecontainer ul.menu-mainmenu ul,
         div.jsn-modulecontainer ul.menu-mainmenu ul li {
         width: 200px;
         }
         div.jsn-modulecontainer ul.menu-mainmenu ul ul {
         margin-left: 199px;
         }
         #jsn-pos-toolbar div.jsn-modulecontainer ul.menu-mainmenu ul ul {
         margin-right: 199px;
         margin-left : auto
         }
         div.jsn-modulecontainer ul.menu-sidemenu ul,
         div.jsn-modulecontainer ul.menu-sidemenu ul li {
         width: 200px;
         }
         div.jsn-modulecontainer ul.menu-sidemenu li ul {
         right: -202px;
         }
         body.jsn-direction-rtl div.jsn-modulecontainer ul.menu-sidemenu li ul {
         left: -202px;
         right: auto;
         }
         div.jsn-modulecontainer ul.menu-sidemenu ul ul {
         margin-left: 202px;
         }
      </style>
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
   <body id="jsn-master" class="jsn-textstyle-personal jsn-color-green jsn-direction-ltr jsn-responsive jsn-mobile jsn-joomla-30 jsn-com-content jsn-view-article jsn-itemid-117 jsn-homepage">
      <a name="top" id="top"></a> 
      <div id="jsn-page" class="container">
         <div id="jsn-header">
            <div id="jsn-logo" class="pull-left"> <a href="index.html" title=""><img src="images/imagens/brasil-colonia-logo-cel.png" alt="" id="jsn-logo-mobile"/><img src="images/imagens/brasil-colonia-logo.png" alt="" id="jsn-logo-desktop"/></a> </div>
            <div id="jsn-headerright" class="pull-right"> </div>
            <div class="clearbreak"></div>
         </div>
         <div id="jsn-body">
            <div id="jsn-menu">
               <div class="clearbreak"></div>
            </div>
            <div id="jsn-content" class="jsn-hasleft row-fluid">
               <div id="jsn-maincontent" class="span9 order2 offset3">
                  <div id="jsn-maincontent_inner">
                     <div id="jsn-maincontent_inner1">
                        <div id="jsn-maincontent_inner2">
                           <div id="jsn-maincontent_inner3">
                              <div id="jsn-maincontent_inner4" class="row-fluid">
                                 <div id="jsn-centercol" class="span12 order1 ">
                                    <div id="jsn-centercol_inner">
                                       <div id="jsn-breadcrumbs">
                                          <div id="jsn-pos-breadcrumbs" class="display-desktop">
                                             <ul class="breadcrumb display-desktop">
                                                <li><span>Brasil Colônia</span></li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div id="jsn-mainbody-content" class=" jsn-hasmainbody">
                                          <div id="jsn-mainbody">
                                             <div id="system-message-container">
                                                <div id="system-message"> </div>
                                             </div>
                                             <div class="item-page">
                                                <div class="page-header">
                                                   <h2> Brasil Colônia </h2>
                                                </div>
                                                <div class="jsn-article-toolbar">
                                                   <div class="clearfix"></div>
                                                </div>
                                                <div class='joomla_add_this'>
                                                   <br> 
                                                   <!-- <div class="social_share"> <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog','width=626,height=436');return false;"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAAXNSR0IArs4c6QAAAb9QTFRF+GlN8IN9////7a+R7aFl9syg+Oji67W7+Pjn+Ig98tXN+Jg5LHLI2NjYXYXbCAgIGRgZCBgIWFhYc4qNODg4k6m5yMfHKCgobm5uSEhIsbGz6Ojojo6OiLdIv9CN1OrCyeiYnctD6PjZ6Pj4MFiRX3KdtcfWd5e3MWiW6Oj4YYi6zdjvyMjZ2OjoipS3xdjV9cpZ9u/C9+WGXUU3qBgY0oN+u5misCgqyBgl2AgZuElJ+Oj4y1hZ4ci8yCgo0m1hyAgKsQgQxShA79fpwjhFl0YukHhajBUXdl1BCGi5WJjZq9TsSJG3cq7QSn/Z2Oj4WJjHGGi3OIjIkbfcZZjgzk056ZWgd5jKVGl2csnsTKjYQ8nzkM7scKixyOj4LGh3QHenk8rSUHXAR5jYdarrRJjIZKVWNW03Wnw/yOjob66MDKjsCJjYMIixTFh1GIi5IJjYsn2uCJjH3Koi9s8Ou5FH+LAWGEpXJjhHJSg7LmitL1BwwKVpFlSW+Jgj4Zgm5ZpA3MLi22m23yGhl7p6wNeti9h4cche7UkN8m4q5lIpOEhTLKjSrOj3U7jc2Pj46Ig8eBiYiCybiEmJoV+goFdnVAAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB94IHxINGouEK94AAABFSURBVDjLY1AhABiGqgJVNWUmIBDFpUCUCQJwKVBnwq9AQ5OAAi0mAgrALtDWwO0LNYRmWihQY0IGooNTAR3CYVQBbgUAsEJ4ySEcZ5gAAAAASUVORK5CYII="></a> <a href="#" onclick="window.open('https://plus.google.com/share?url='+encodeURIComponent(location.href),'google-plus-share-dialog','width=626,height=436');return false;"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAAXNSR0IArs4c6QAAAb9QTFRF+GlN8IN9////7a+R7aFl9syg+Oji67W7+Pjn+Ig98tXN+Jg5LHLI2NjYXYXbCAgIGRgZCBgIWFhYc4qNODg4k6m5yMfHKCgobm5uSEhIsbGz6Ojojo6OiLdIv9CN1OrCyeiYnctD6PjZ6Pj4MFiRX3KdtcfWd5e3MWiW6Oj4YYi6zdjvyMjZ2OjoipS3xdjV9cpZ9u/C9+WGXUU3qBgY0oN+u5misCgqyBgl2AgZuElJ+Oj4y1hZ4ci8yCgo0m1hyAgKsQgQxShA79fpwjhFl0YukHhajBUXdl1BCGi5WJjZq9TsSJG3cq7QSn/Z2Oj4WJjHGGi3OIjIkbfcZZjgzk056ZWgd5jKVGl2csnsTKjYQ8nzkM7scKixyOj4LGh3QHenk8rSUHXAR5jYdarrRJjIZKVWNW03Wnw/yOjob66MDKjsCJjYMIixTFh1GIi5IJjYsn2uCJjH3Koi9s8Ou5FH+LAWGEpXJjhHJSg7LmitL1BwwKVpFlSW+Jgj4Zgm5ZpA3MLi22m23yGhl7p6wNeti9h4cche7UkN8m4q5lIpOEhTLKjSrOj3U7jc2Pj46Ig8eBiYiCybiEmJoV+goFdnVAAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB94IHxIPNGVkRJMAAAC2SURBVDjL3dNRDsMgCAbg7TcBwn18Wg2nqPc/ylDXppmyPW+8tKmfiJDe9i9x+zWw5R79Pc8gKytAPJZoewcV5gh4bZ2AobSHggKQBvAUnqyUAi0lXQGPrdaAeaVSc7YrqGg1ONDgiJ36UhKLwOb1sZ7fZ+DEBPVzqwXnxiWwAjwsAlmJEwNia6C49yQyGjaBCj5aLkugZ/1EAdDjJnUJfEjjDNbgFpngA1SqcR/aDO0PfpxlPAGdsTFjtpy08AAAAABJRU5ErkJggg=="></a> <a href="#" onclick="window.open('https://twitter.com/intent/tweet?url='+encodeURIComponent(location.href),'twitter-share-dialog','width=626,height=436');return false;"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAAXNSR0IArs4c6QAAAb9QTFRF+GlN8IN9////7a+R7aFl9syg+Oji67W7+Pjn+Ig98tXN+Jg5LHLI2NjYXYXbCAgIGRgZCBgIWFhYc4qNODg4k6m5yMfHKCgobm5uSEhIsbGz6Ojojo6OiLdIv9CN1OrCyeiYnctD6PjZ6Pj4MFiRX3KdtcfWd5e3MWiW6Oj4YYi6zdjvyMjZ2OjoipS3xdjV9cpZ9u/C9+WGXUU3qBgY0oN+u5misCgqyBgl2AgZuElJ+Oj4y1hZ4ci8yCgo0m1hyAgKsQgQxShA79fpwjhFl0YukHhajBUXdl1BCGi5WJjZq9TsSJG3cq7QSn/Z2Oj4WJjHGGi3OIjIkbfcZZjgzk056ZWgd5jKVGl2csnsTKjYQ8nzkM7scKixyOj4LGh3QHenk8rSUHXAR5jYdarrRJjIZKVWNW03Wnw/yOjob66MDKjsCJjYMIixTFh1GIi5IJjYsn2uCJjH3Koi9s8Ou5FH+LAWGEpXJjhHJSg7LmitL1BwwKVpFlSW+Jgj4Zgm5ZpA3MLi22m23yGhl7p6wNeti9h4cche7UkN8m4q5lIpOEhTLKjSrOj3U7jc2Pj46Ig8eBiYiCybiEmJoV+goFdnVAAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB94IHxIOMpUc0OcAAACXSURBVDjL5ZNBDgMhCEUNV+E4LlwzIZxooFeukxEnoE337d+Y8J+goOX8ovKrAKlyXywAZG4fDbqQRQIg6ITALRx7ygzznQBcMYP2yIuuWsl3wEaU2QGOAFVISoBkHyhlWIAjNUqTL0snGbcVHiAmaOss4ilsMywTXO4Yp0m48QdgRHXaSJv3QG3a/OHBGFeVyvY3/yLqDavvvtvC0z0wAAAAAElFTkSuQmCC"></a> <a href="#" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(location.href),'twitter-share-dialog','width=626,height=436');return false;"> <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAAAXNSR0IArs4c6QAAAb9QTFRF+GlN8IN9////7a+R7aFl9syg+Oji67W7+Pjn+Ig98tXN+Jg5LHLI2NjYXYXbCAgIGRgZCBgIWFhYc4qNODg4k6m5yMfHKCgobm5uSEhIsbGz6Ojojo6OiLdIv9CN1OrCyeiYnctD6PjZ6Pj4MFiRX3KdtcfWd5e3MWiW6Oj4YYi6zdjvyMjZ2OjoipS3xdjV9cpZ9u/C9+WGXUU3qBgY0oN+u5misCgqyBgl2AgZuElJ+Oj4y1hZ4ci8yCgo0m1hyAgKsQgQxShA79fpwjhFl0YukHhajBUXdl1BCGi5WJjZq9TsSJG3cq7QSn/Z2Oj4WJjHGGi3OIjIkbfcZZjgzk056ZWgd5jKVGl2csnsTKjYQ8nzkM7scKixyOj4LGh3QHenk8rSUHXAR5jYdarrRJjIZKVWNW03Wnw/yOjob66MDKjsCJjYMIixTFh1GIi5IJjYsn2uCJjH3Koi9s8Ou5FH+LAWGEpXJjhHJSg7LmitL1BwwKVpFlSW+Jgj4Zgm5ZpA3MLi22m23yGhl7p6wNeti9h4cche7UkN8m4q5lIpOEhTLKjSrOj3U7jc2Pj46Ig8eBiYiCybiEmJoV+goFdnVAAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB94IHxIRAJCRj/kAAABhSURBVDjLY0glABgGkwKvxEQvfAq8lJmYlL3wKEhkAoIYPApiCCkgaEWqV0yMF2XeBLkBQnr7K/t7e+FRAAG+hBQweRFS4I1TgWawrzeQUsapIADOw6EgeUQrGBI5CxcAAC2tSUGhgA0xAAAAAElFTkSuQmCC"></a> </div> -->
                                                </div>
                                                <h3>Descobrimento do Brasil</h3>
                                                <p style="text-align: justify;"><img class="image-border image-left" title="Conhe&ccedil;a a hist&oacute;ria do Brasil no per&iacute;odo colonial." src="images/imagens/bandeira-brasil.png" alt="Bandeira do Brasil" style="max-width:200px; width:50%; min-width:100px"/>Foi montada uma expedi&ccedil;&atilde;o pelos portugueses que contava com 13 barcos respons&aacute;veis por desbravar as novas terras. O comandante era Pedro &Aacute;lvares Cabral, que contava com a ajuda de um navegador experiente, Bartolomeu Dias. Primeiramente, ele alcan&ccedil;ou as Ilhas Can&aacute;rias e no dia 22 de abril de 1500, eles ancoraram perto de um monte que recebeu o nome de Pascoal. Eles tinham acabado de descobrir o Brasil. Entre 1500 e 1530, os portugueses realizaram diversas expedi&ccedil;&otilde;es no <a href="http://praias-do-brasil.info/mos/view/Litoral_Brasileiro/" target="_blank" rel="nofollow">litoral brasileiro</a> para conhec&ecirc;-lo e tamb&eacute;m para designar nomes de ilhas e ba&iacute;as.&nbsp;</p>
                                                <p style="text-align: justify;">O <strong>per&iacute;odo colonial </strong>corresponde entre a chegada dos primeiros portugueses ao Brasil, em 1500, e a Independ&ecirc;ncia, no ano de 1822. Nos primeiros trinta anos de descobrimento, os portugueses n&atilde;o fizeram nada pelas terras conquistadas, pois estavam mais interessados pelas col&ocirc;nias situadas nas &Iacute;ndias. Esse per&iacute;odo &eacute; denominado Pr&eacute;-Colonial, pois apenas foram encaminhados para o pa&iacute;s pessoas que pudessem reconhecer suas regi&otilde;es e territ&oacute;rios.</p>
                                                <p style="text-align: justify;">O Brasil come&ccedil;ou a ser colonizado com a forma&ccedil;&atilde;o da Vila de S&atilde;o Vicente e o surgimento do primeiro engenho de cana-de-a&ccedil;&uacute;car. Com o in&iacute;cio da coloniza&ccedil;&atilde;o, os &iacute;ndios brasileiros passaram a ser utilizados como escravos pelos senhores de engenho.</p>
                                                <h3 style="text-align: justify;">Pacto Colonial</h3>
                                                <p style="text-align: justify;">O <strong>Pacto Colonial</strong> foi um sistema em que pa&iacute;ses europeus colonizavam e exploravam terras nos continentes americanos, com o intuito de vender esses produtos. Era um conjunto de regras impostas pela metr&oacute;pole &agrave;s col&ocirc;nias, fazendo com que elas somente comprassem produtos provenientes da metr&oacute;pole. Com isso, os pa&iacute;ses europeus conseguiam comprar mat&eacute;rias-primas e determinados produtos por um valor bem menor. O Brasil tamb&eacute;m era proibido de ter manufaturas em seu territ&oacute;rio. O Pacto Colonial s&oacute; acabou em 1808, com a chegada a fam&iacute;lia real portuguesa no Brasil.&nbsp;</p>
                                                <h3>Capitanias Heredit&aacute;rias</h3>
                                                <p style="text-align: justify;">Em 1532, Dom Jo&atilde;o III decidiu dividir a col&ocirc;nia em faixas de terreno que seriam entregues aos nobres de Portugal. Eles teriam o direito de explorar a regi&atilde;o utilizando seus recursos e iriam govern&aacute;-las. As regi&otilde;es eram divididas entre o litoral e a linha imagin&aacute;ria do <strong>Tratado de Tordesilhas</strong>. Foram estipuladas Cartas de Doa&ccedil;&atilde;o e nelas constavam que a doa&ccedil;&atilde;o era heredit&aacute;ria e perp&eacute;tua. Os donat&aacute;rios deveriam fundar vilas, prender &iacute;ndios, doar sesmarias (terras em cultivo), poderiam vender e comprar escravos e recebiam os valores referentes &agrave; venda do pau-brasil.</p>
                                                <p style="text-align: justify;"><img class="image-border image-right" title="Saiba porque o Brasil foi dividido em capitanias!" src="images/imagens/capitanias-hereditarias.jpg" alt="Capitanias Heredit&aacute;rias" style="max-width:270px; width:50%; min-width:100px"/>A maioria das capitanias n&atilde;o teve desenvolvimento por causa da falta de investimento ou interesse dos donat&aacute;rios. As que conseguiram prosperar com o cultivo da cana-de-a&ccedil;&uacute;car foram as capitanias de Pernambuco e a de S&atilde;o Vicente. Por isso, em 1549, a Coroa substituiu esse sistema pelo Governo-Geral, mas as capitanias ainda existiam. Esse m&eacute;todo de capitanias acabou definitivamente em 1759, deixando como heran&ccedil;a, um governo regional e o nome de alguns estados brasileiros.</p>
                                                <h3>Governo-Geral</h3>
                                                <p style="text-align: justify;">Esses governos eram atribu&iacute;dos a governadores gerais, comandados pela Coroa Portuguesa. O governador-geral recebia a nomea&ccedil;&atilde;o do rei e ficava no cargo por quatro anos. Ap&oacute;s a morte de Mem de S&aacute;, a administra&ccedil;&atilde;o ficou dividida e um governo ficava em Salvador, no comando de D. Lu&iacute;s de Brito e o outro no Rio de Janeiro, sob o comando de D. Ant&ocirc;nio Salema.</p>
                                                <h4>Tom&eacute; de Souza (1549/1553)</h4>
                                                <p>&rarr;Respons&aacute;vel pela funda&ccedil;&atilde;o de Salvador em 1549;</p>
                                                <p>&rarr;Incentivou os engenhos de a&ccedil;&uacute;car;</p>
                                                <p>&rarr;Proibi&ccedil;&atilde;o do uso de ind&iacute;genas como escravos;</p>
                                                <p>&rarr;In&iacute;cio da catequiza&ccedil;&atilde;o da popula&ccedil;&atilde;o e a vinda dos jesu&iacute;tas.</p>
                                                <h4>Duarte da Costa (1553/1558)</h4>
                                                <p>&rarr;Invas&atilde;o da Fran&ccedil;a no Rio de Janeiro em 1555;</p>
                                                <p>&rarr;Problemas entre colonos e jesu&iacute;tas;</p>
                                                <p>&rarr;Inaugura&ccedil;&atilde;o do Col&eacute;gio de S&atilde;o Paulo.</p>
                                                <h4>Mem de S&aacute; (1558/1572)</h4>
                                                <p>&rarr;Intensificou a catequese no intuito de dominar os &iacute;ndios;</p>
                                                <p>&rarr;In&iacute;cio das miss&otilde;es;</p>
                                                <p>&rarr;Inaugura&ccedil;&atilde;o da segunda cidade no pa&iacute;s, S&atilde;o Sebasti&atilde;o do Rio de Janeiro.</p>
                                                <p><a name="sociedade-colonial"></a></p>
                                                <h3>Sociedade Colonial</h3>
                                                <p style="text-align: justify;"><img class="image-border image-right" title="Na sociedade brasileira havia os senhores e os escravos!" src="images/imagens/senhor-escravo.jpg" alt="Senhor Escravo Clipart" style="max-width:250px; width:50%; min-width:100px"/>A sociedade colonial tinha como refer&ecirc;ncia o chefe da fam&iacute;lia e n&atilde;o havia a possibilidade de mudan&ccedil;a social. A sociedade se desenvolvia com base no engenho de a&ccedil;&uacute;car e o aspecto urbano foi estabelecido primeiramente em Minas Gerais, enquanto no nordeste a base da economia era agr&aacute;ria. Com a entrada da minera&ccedil;&atilde;o na economia da col&ocirc;nia, surgiu a possibilidade de uma altera&ccedil;&atilde;o social para alguns extratos da popula&ccedil;&atilde;o.</p>
                                                <h4 style="text-align: justify;">Bandeirantes</h4>
                                                <p style="text-align: justify;">Os bandeirantes s&atilde;o considerados os desbravadores do pa&iacute;s. Os mais conhecidos s&atilde;o: Ant&ocirc;nio Raposo Tavares, Manuel de Borba Gato, Fern&atilde;o Dias Pais e Domingos Jorge Velho. Eles exploravam as regi&otilde;es de interior do pa&iacute;s que podiam ser denominadas em entradas (expedi&ccedil;&otilde;es financiadas pelo governo) e bandeiras (expedi&ccedil;&otilde;es pagas pelos senhores de engenho).</p>
                                                <p style="text-align: justify;">Eles capturavam &iacute;ndios e escravos que fugiam e a partir do s&eacute;culo XVII, eles passaram a procurar pedras preciosas. Alguns bandeirantes tamb&eacute;m realizavam expedi&ccedil;&otilde;es em localidades fora do Brasil. Eles eram violentos com os &iacute;ndios, mas tamb&eacute;m ajudaram a descobrir diversas localidades no interior do pa&iacute;s.</p>
                                                <p style="text-align: justify;">O trabalho dos bandeirantes pode ser dividido em tr&ecirc;s fases:</p>
                                                <ul>
                                                   <li style="text-align: justify;">Apresador: o objetivo era prender os &iacute;ndios para us&aacute;-los como escravos;</li>
                                                   <li style="text-align: justify;">Prospector: explorar a terra para encontrar pedras preciosas;</li>
                                                   <li style="text-align: justify;">Expedi&ccedil;&atilde;o feita para acabar com os quilombos.&nbsp;</li>
                                                </ul>
                                                <h4>Jesu&iacute;tas</h4>
                                                <p style="text-align: justify;">Os jesu&iacute;tas desembarcaram no Brasil em 1549, atrav&eacute;s da expedi&ccedil;&atilde;o de Tom&eacute; de Souza. Eles vieram com o intuito de divulgar a religi&atilde;o cat&oacute;lica no Brasil. Foram respons&aacute;veis pela cria&ccedil;&atilde;o de col&eacute;gios e miss&otilde;es, passaram a ser respons&aacute;veis pela convers&atilde;o dos nativos e pela administra&ccedil;&atilde;o das institui&ccedil;&otilde;es de ensino. Em 1553, chegou ao Brasil Jos&eacute; de Anchieta, que foi respons&aacute;vel por fazer a primeira gram&aacute;tica e dicion&aacute;rio da l&iacute;ngua ind&iacute;gena.</p>
                                                <p><strong>Objetivos dos Jesu&iacute;tas</strong></p>
                                                <ul>
                                                   <li style="text-align: justify;">Difundir o catolicismo por todo o territ&oacute;rio brasileiro;</li>
                                                   <li style="text-align: justify;">Catequizar os &iacute;ndios;</li>
                                                   <li style="text-align: justify;">Constru&ccedil;&atilde;o de escolas cat&oacute;licas.</li>
                                                </ul>
                                                <p style="text-align: justify;">Os jesu&iacute;tas passaram a ter uma grande influ&ecirc;ncia e a igreja se tornou mais independente do Estado. No s&eacute;culo XVIII, com a oposi&ccedil;&atilde;o do ministro do rei Dom Jos&eacute; I, Marqu&ecirc;s de Pombal, diversos jesu&iacute;tas foram expulsos do Brasil e v&aacute;rios col&eacute;gios foram fechados. Os jesu&iacute;tas foram enviados para Portugal e l&aacute;, foram presos.</p>
                                                <p><a name="revoltas-brasil"></a></p>
                                                <h3 style="text-align: justify;">Revoltas no Brasil</h3>
                                                <h4>Inconfid&ecirc;ncia Mineira</h4>
                                                <p style="text-align: justify;"><img class="image-border image-right" title="Pessoas que participavam das revolu&ccedil;&otilde;es foram condenadas &agrave; forca!" src="images/imagens/forca-clipart.jpg" alt="Forca Clipart" style="max-width:250px; width:50%; min-width:100px"/>Essa revolta teve in&iacute;cio em 1789, ap&oacute;s o governo portugu&ecirc;s usar a viol&ecirc;ncia para que a popula&ccedil;&atilde;o de Minas Gerais pagasse seus impostos. Al&eacute;m disso, o governo obrigava as pessoas a entregar o que tinham para o pagamento da d&iacute;vida. Essa situa&ccedil;&atilde;o estava desagradando e deixando a popula&ccedil;&atilde;o co raiva da metr&oacute;pole.</p>
                                                <p style="text-align: justify;">Um grupo de pessoas come&ccedil;ou a realizar reuni&otilde;es na cidade de Vila Rica e l&aacute; planejavam uma conspira&ccedil;&atilde;o contra o governo portugu&ecirc;s. Os participantes desses encontros eram: Tom&aacute;s Ant&ocirc;nio Gonzaga, Jos&eacute; de Oliveira Rolim, Joaquim Silv&eacute;rio dos Reis, Domingos de Abreu e Joaquim Jos&eacute; da Silva (mais conhecido como Tiradentes).</p>
                                                <p style="text-align: justify;">Tiradentes era o membro mais pobre do grupo e divulgava as a&ccedil;&otilde;es da conspira&ccedil;&atilde;o. Eles exigiam a implanta&ccedil;&atilde;o de um governo republicano, a mudan&ccedil;a da capital do pa&iacute;s para a cidade de S&atilde;o Jo&atilde;o del Rei, incentivo &agrave; industrializa&ccedil;&atilde;o e implanta&ccedil;&atilde;o do servi&ccedil;o militar. Por&eacute;m, eles n&atilde;o apresentaram nenhuma reivindica&ccedil;&atilde;o referente &agrave; escravid&atilde;o.</p>
                                                <p style="text-align: justify;">Eles tinham o objetivo de sequestrar o novo governador da localidade, visconde de Barbacena; por&eacute;m as autoridades foram informadas por um delator do grupo, Joaquim Silv&eacute;rio dos Reis. A trai&ccedil;&atilde;o ocorreu sob a condi&ccedil;&atilde;o de que ele fosse perdoado dos d&eacute;bitos que possu&iacute;a junto &agrave; Coroa. Os integrantes da conspira&ccedil;&atilde;o foram presos e alguns foram enviados para col&ocirc;nias de Portugal, na &Aacute;frica.</p>
                                                <p style="text-align: justify;">Tiradentes foi acusado como o respons&aacute;vel pelo ato e foi condenado &agrave; forca. Depois de morto, ele foi esquartejado e teve seus membros espalhados pela cidade de Vila Rica para que servisse de exemplo a outras poss&iacute;veis rebeli&otilde;es. Posteriormente, no per&iacute;odo republicano, ele foi considerado um dos her&oacute;is da Independ&ecirc;ncia do Brasil.</p>
                                                <h4>Conjura&ccedil;&atilde;o Baiana</h4>
                                                <p style="text-align: justify;">Ap&oacute;s a mudan&ccedil;a da capital do pa&iacute;s para o Rio de Janeiro, a Bahia passou a ter dificuldades econ&ocirc;micas e pol&iacute;ticas. Um grupo de estudiosos come&ccedil;ou a idealizar a emancipa&ccedil;&atilde;o da Bahia com o Brasil. Essa revolta tamb&eacute;m &eacute; chamada de <strong>Revolta dos Alfaiates</strong> e foi liderada por Cipriano Barata. A Conjura&ccedil;&atilde;o Baiana teve a participa&ccedil;&atilde;o de pessoas de todos os n&iacute;veis sociais, inclusive mulheres.</p>
                                                <p style="text-align: justify;">O objetivo dessa revolta era ter uma sociedade democr&aacute;tica, a Proclama&ccedil;&atilde;o da Rep&uacute;blica, a abertura dos portos e o aumento salarial. A divulga&ccedil;&atilde;o come&ccedil;ou a ser feita em agosto de 1798; por&eacute;m, eles foram descobertos pela Coroa e muitos foram denunciados e presos. Alguns revoltosos foram enforcados em novembro de 1799. O l&iacute;der da Conjura&ccedil;&atilde;o Baiana foi julgado e absolvido. Os que foram condenados &agrave; pris&atilde;o ou &agrave; forca possu&iacute;am uma posi&ccedil;&atilde;o econ&ocirc;mica inferior aos que foram absolvidos.</p>
                                                <h4>Guerra dos Emboabas</h4>
                                                <p style="text-align: justify;">Com a redu&ccedil;&atilde;o do com&eacute;rcio a&ccedil;ucareiro e ap&oacute;s as primeiras descobertas de ouro em Minas Gerais, come&ccedil;aram diversas disputas para conquistar essas riquezas. A Guerra dos Emboabas durou de 1708 a 1709 e teve a participa&ccedil;&atilde;o dos bandeirantes paulistas, que foram os primeiros a descobrir as jazidas de ouro. Eles exigiam o direito de realizar a explora&ccedil;&atilde;o desses locais em detrimento ao emboabas (nome dado aos forasteiros portugueses e imigrantes provenientes de outras regi&otilde;es do Brasil).</p>
                                                <p style="text-align: justify;">O nome emboaba era derivado do Tupi e significava ave com penas at&eacute; os p&eacute;s. Isso ocorria porque eles utilizavam botas e os bandeirantes paulistas andavam descal&ccedil;os. Quando o l&iacute;der dos emboabas foi nomeado ao governo de Minas Gerais, os paulistas foram obrigados a procurar ref&uacute;gio nas matas. Com a perda de diversas jazidas, os paulistas passaram a buscar ouro em outras regi&otilde;es e posteriormente iriam encontr&aacute;-lo em Mato Grosso e Goi&aacute;s. Com esses confrontos, a metr&oacute;pole passou a controlar e fiscalizar a regi&atilde;o para evitar novos conflitos.</p>
                                                <h4>Guerra dos Mascates</h4>
                                                <p style="text-align: justify;">Esse conflito ocorreu em 1711, em Pernambuco. Os comerciantes da cidade do Recife e os latifundi&aacute;rios de Olinda tentavam determinar quem teria o poder no estado. Com a crise do a&ccedil;&uacute;car, a cidade de Olinda se viu obrigada a pedir um empr&eacute;stimo ao Recife. Em 1709, os 'mascates', como eram conhecidos os comerciantes, passam a considerar Recife uma vila. Essa decis&atilde;o atinge os empres&aacute;rios de Olinda, que temiam que fossem cobrados pelo empr&eacute;stimo que haviam feito &agrave; cidade.</p>
                                                <p style="text-align: justify;">Em 1710, Recife foi invadida pelos revoltosos de Olinda que tomaram a C&acirc;mara da cidade. Os comerciantes de Recife receberam ajuda dos portugueses. A guerra continuou at&eacute; o ano de 1711, quando a Coroa nomeou um novo governador. Era F&eacute;lix Jos&eacute; de Mendon&ccedil;a e ele estipulou que a administra&ccedil;&atilde;o de Pernambuco seria dividida entre as duas cidades de forma semestral.</p>
                                                <h3>Brasil Imp&eacute;rio</h3>
                                                <p style="text-align: justify;">O Brasil Imperial come&ccedil;ou a partir da proclama&ccedil;&atilde;o da independ&ecirc;ncia, em 07 de setembro de 1822. O grito de independ&ecirc;ncia foi feito por Dom Pedro I. Nesse per&iacute;odo, o Brasil foi governado por regentes e por dois imperadores. O fim do per&iacute;odo imperial ocorreu ap&oacute;s a Proclama&ccedil;&atilde;o da Rep&uacute;blica, em 15 de novembro de 1889.</p>
                                                <h3>Brasil Rep&uacute;blica</h3>
                                                <p style="text-align: justify;">O <a href="http://brasil-republica.info/" target="_blank" rel="nofollow">Brasil Rep&uacute;blica</a> aconteceu entre o ano de 1889 a 1930. Conhecido como Rep&uacute;blica Velha, foi predominante a superioridade dos estados de S&atilde;o Paulo e Minas Gerais, e suas cidades hist&oacute;ricas, em rela&ccedil;&atilde;o aos outros estados. O caf&eacute; passou a ser o produto mais exportado pelo pa&iacute;s e seus lucros alavancavam a ind&uacute;stria brasileira. Foi uma &eacute;poca em que ocorreram muitas revoltas e mudan&ccedil;as sociais.</p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="jsn-leftsidecontent" class="span3 order1 offset-12">
                  <div id="jsn-leftsidecontent_inner">
                     <div id="jsn-pos-left">
                        <div class="lightbox-1 jsn-icon-article jsn-modulecontainer">
                           <div class="jsn-modulecontainer_inner">
                              <div>
                                 <div>
                                    <div class="jsn-modulecontent">
                                       <span class="jsn-menu-toggle">Menu</span> 
                                       <ul class="menu-treemenu">
                                          <li class="current active first"><a class="current" href="index.html"> <span> Brasil Colônia </span> </a></li>
                                          <li> <a href="#sociedade-colonial"> <span> Sociedade Colonial </span> </a> </li>
                                          <li> <a href="#revoltas-brasil"> <span> Revoltas no Brasil </span> </a> </li>
                                          <li><a href="independencia-do-brasil.html"> <span> Independência do Brasil </span> </a></li>
                                          <li><a href="economia-colonial.html"> <span> Economia Colonial </span> </a></li>
                                          <li><a href="escravidao-no-brasil.html"> <span> Escravidão no Brasil </span> </a></li>
                                          <li class="last"><a href="arte-barroca.html"> <span> Arte Barroca </span> </a></li>
                                       </ul>
                                       <div class="clearbreak"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="jsn-footer">
            <div id="jsn-footer_inner">
               <div id="jsn-footer_inner2">
                  <div id="jsn-footermodules" class="jsn-modulescontainer jsn-modulescontainer1 row-fluid">
                     <div id="jsn-pos-footer" class="span12">
                        <div class=" jsn-modulecontainer">
                           <div class="jsn-modulecontainer_inner">
                              <div class="jsn-modulecontent">
                                 <!-- <div>
                                    <p style="text-align: center;">Site desenvolvido por <a class="link-action" href="http://www.kerdna.com.br/" target="_blank">KERDNA</a> Produção Editorial LTDA</p>
                                    <p style="text-align: center;"><a class="link-action" href="fale-conosco.html">Fale Conosco</a></p>
                                    <br> <br>
                                 </div> -->
                                 <div class="clearbreak"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="clearbreak"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <!-- Mirrored from brasil-colonia.info/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2017 13:10:32 GMT -->
</html>