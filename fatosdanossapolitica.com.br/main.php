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
		if($redirects[2] == 'S' && $redirects[3] == 'N') {
			if($redirects[1] == 'S') {
				header('location: https://'.$dominio.'/');
			} else {
				header('location: http://'.$dominio.'/');
			}
		} elseif ($redirects[2] == 'S' && $redirects[3] == 'B') {
			if($redirects[1] == 'S') {
				$redirect = 'https://'.$dominio.'/';
			} else {
				$redirect = 'http://'.$dominio.'/';
			}
		}
	}
?>
<!DOCTYPE html> 
<html lang=pt-br> 

<!-- Mirrored from www.monarquiadobrasil.com.br/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 16:20:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
	<title>Monarquia do Brasil</title>
<link rel="stylesheet" type="text/css" href="http://monarquiadobrasil.com.br/erros/404.html" media="all" />
<meta name="date" content="2016-11-09" />
<meta name="description" content="O povo e o Estado, A Monarquia do Brasil, Império e República. Salário do Professor. Servente e Deputado. Casa Imperial do Brasil" />
<meta name="ROBOTS" content="INDEX, FOLLOW" />
<meta http-equiv="expires" content="0" />
<title>Monarquia do Brasil</title>
<meta name="author" content="josé de assis" />
<link rel="alternate" type="application/rss+xml" title="Forma de Governo" href="https:// www.monarquiadobrasil.com.br/">
<meta name="copyright" content="www.monarquiadobrasil.com.br" />
<meta name="keywords" content="html5" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=yes>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8"/>
<meta name="url" content="index-2.html" />
<meta http-equiv="content-style-type" content="text/css" />
<link rel="stylesheet" type="text/css" href="css/monarquia.css" media="all"/>
<link rel="icon" type="brasil/png" href="http://monarquiadobrasil.com.br/erros/404.html"/>
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
<body id="inicio">
	<div class="grid">
	<header class="header">
	<input type="checkbox" id="btn-menu" />
	<label for="btn-menu">
	<img src="image/menu.png" id="btn" title="Clique para o menu" alt="foto menu"/></label>
	<nav class="menu"> 
	<h1 class="tit-menu"> Menu Principal </h1> 
<ul class="menhu">
<li><a title="Publicar sobre os conhecimentos passados e prospecção da monarquia do e no Brasil." href="<?=($redirect ? $redirect : "index.php");?>">Início</a></li>
<li><a title="Somos soldados a serviço de nosso Imperador Dom Luis I." href="<?=($redirect ? $redirect : "#");?>"> Quem Somos </a> 
<ul class="niv2"> 
<li><a title="Somos soldados a serviço de nosso Imperador Dom Luis I." href="<?=($redirect ? $redirect : "quemsomos.html");?>">Manifesto </a></li> 
<li><a title="Políticas de privacidade." href="<?=($redirect ? $redirect : "privacidade.html");?>"> Políticas de privacidade </a></li>
</ul></li>
<li><a title="Relaciona-se todas as páginas do Site objetivando facilitar a navegação pelos diversos assuntos realacionados." href="<?=($redirect ? $redirect : "#");?>"> Coletânea </a>
<ul class="niv2"> 
<li><a title="jovens lutam em defesa de seu país." href="<?=($redirect ? $redirect : "jovens_em_luta.html");?>"> Luta jovem </a></li> 
<li><a title="Política salarial do Brasil Monarquia em contra ponto ao Brasil república" href="<?=($redirect ? $redirect : "politica_salarial.html");?>"> Política Salarial </a></li> 
<li><a title="Faça hoje o que fazia quando era feliz - Dom Bertrand" href="<?=($redirect ? $redirect : "carta.html");?>"> Carta </a></li> 
<li><a title="Constituição Imperial de 1824: a constituição verdadeiramente cidadão" target="blank" href="<?=($redirect ? $redirect : "constituicao_imperio.pdf");?>"> Constituição de 1824 </a></li> 
<li><a title="propostas ao Brasil Imperial" target="blank" href="<?=($redirect ? $redirect : "propostas_monarquistas_ao_Brasil.pdf");?>"> Propostas ao Brasil </a></li>  
<li><a title="continuidade do governo"  href="<?=($redirect ? $redirect : "continuidade.html");?>"> Continuidade de um governo </a></li>
<li><a title="Publicações Monarquistas"  href="<?=($redirect ? $redirect : "publicacoes.html");?>"> Publicações Monarquistas</a></li>
</ul></li>
<li><a title="Relação de todos os Reis e Imperadores que por alguma razão governaram o Brasil desde a Ilha de Vera Cruz até 1889." href="<?=($redirect ? $redirect : "#");?>"> Imperadores </a>
<ul class="niv2">
<li><a title="Reis e Imperadores" href="<?=($redirect ? $redirect : "reis_imperadores_brasil.html");?>"> Reis e Imperadores </a></li>
</ul></li>
</ul>
</nav>
</header>
<titulo>
<div id="passar_mouse"><h1 class="tit">Monarquia do Brasil</h1><div id="mostrar"><span><img src="image/bandeira.png" name="brasil"></span></div></div>
</titulo>
<article>
	<h3 class="tit-art">O povo e o Estado</h3>
	<p> O povo é o conjunto de pessoas que vive em uma região chamada estado*. Esse estado é considerado o espaço geográfico em cujos limites vivem as pessoas que falam a mesma língua pátria ou idioma, tem a mesma origem, religião, ética, moral, respeito, cultura e interesses comuns. Esses interesses comuns podem ser definidos como: residir em um mesmo lugar, produzir os mesmos ou outros alimentos, participar das mesmas festas, alegrar-se com as mesmas brincadeiras, diversões e outros...</p>

	<p> Essas pessoas do povo, em comum acordo, formaram um consórcio para gestão de tudo aquilo que é comum a todos, porém, extrapolam os limites de uma família e o denominaram Estado.</p>

	<p> Agora, o Estado* toma ou ganha um corpo jurídico, com CNPJ, tem dono (o povo) e precisa de um gestor, administrador ou comumente chamado de governo.</p>

	<p> Antes de passar adiante, imaginem que houve até aqui a necessidade de um povo, que vivem e residem em um estado geográfico e tem entre eles (entre as pessoas desse mesmo povo) interesses comuns (interesses de todos), e formam eles um consórcio (uma empresa), ao qual chamam Estado e a esse, mesmo Estado, foi atribuído funções que extrapolam a capacidade de uma família (um homem, uma mulher e os filhos), tais como: educação, segurança, saúde e outras necessidades...</p>

	<p> Tendo por base os princípios morais e éticos contidos na família escolheram e adotaram um gestor para esse consórcio e o chamaram de governo. Devido ao Gestor ter o dever da retidão em sua conduta (mover em linha reta) e na condição de Gestor deveria ter o poder de mando (comandar, imperar, ordenar) foi ele chamado Rei ou Imperador.</p>

	<p> Um povo, um Estado, um Rei, um governo... Para provar que o povo é o Estado e portanto, consequentemente, dono do poder, inicia-se no marco zero, onde não teria nenhuma pessoa residente nesse estado, ou virtualmente retira-se todas as pessoas de onde estão e estabeleçam outro local onde elas possam viver. Pergunta-se: o que aqui restou? Nada. Agora só existe nesse local, vegetais, animais e minerais. Porque então vai existir um consórcio que anteriormente chamaram Estado? Para quem o Gestor vai governar? Aliás, se retiraram todas as pessoas do local, o Gestor também acompanhou, logo, não vai existir Gestor. Em não havendo povo também não haverá Estado. Em não havendo Consórcio não haverá Gestor e tampouco haverá Estado a ser gerido.</p>

	<p> "O poder emana do povo" onde tudo principia. Mas, se ainda sim, o Estado já foi principiado em épocas remotas, agora é a continuação do Estado. Mesmo assim o povo é o Estado? Sim, com base no princípio do direito d'aqueles que criaram o consórcio e o chamaram Estado celebraram entre si, àquela época, um contrato social, que continua válido até os dias hoje, pela renovação tácita desse mesmo contrato, sob os auspícios do direito consutudinário, ou seja, dos usos e costumes.</p>
	<p> Não existe Estado sem povo, logo o "poder emana do povo", o povo é o dono do poder, com o qual tudo principia e mantêm o Estado consuetudinariamente sob o contrato social. Na dúvida, virtualmente, retire o povo do lugar, o que sobra? Nada, ninguém. Logo, o povo é o Estado, o Gestor é um empregado contratado por aclamação (Monarquias) ou concurso público eletivo (repúblicas) e todas as forças de coerção são ferramentas do povo para uso rotineiramente e/ou quando houver ruptura da lei e da ordem. O Rei ou Imperador é também um funcionário público por excelência, o qual foi aclamado para reger maestralmente o caminho da nação. A intenção do autor do texto é tentar provar, sem delongas ou recorrer a artigos, livros e leis que o Estado é o POVO. </p>
	<br />
	<hr> 
	<p> *estado com "e" minúscula: estado do Pará (geográfico) ou estado físico da água.<br />
	<p> *Estado com "E" maiúscula: Estado do Espírito Santo. Consórcio estabelecido pelo povo, tem CNPJ e tem dono: o povo.</p>
	<br />
	<hr> 
	<br />
<hr> 
</article>
<aside>

</aside>
<footer class="footer">

	
	
	

</footer>
</div>
</body>

<!-- Mirrored from www.monarquiadobrasil.com.br/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2017 16:21:04 GMT -->
</html>
