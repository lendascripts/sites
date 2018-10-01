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
<html>
    
<!-- Mirrored from atualizarweb-ua.1gb.ua/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Sep 2018 19:57:17 GMT -->
<head>
        <meta charset="utf-8" />
        <title>
            Solução Comercial - Pagom Software
        </title>
        <meta name="viewport" content="width=device-width,initial-scale=1" /><meta property="fb:admins" content="531663221" /><link rel="icon" href="imgs/favicon.html" type="image/x-icon" /><link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400italic,700,400" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]>
            <script src="//images.alterdata.com.br/scripts/html5shiv.js"></script>
        <![endif]-->
        <!-- <link href="/Telerik.Web.UI.WebResource.axd?compress=0&amp;_TSM_CombinedScripts_=%3b%3bTelerik.Web.UI%2c+Version%3d2012.2.607.40%2c+Culture%3dneutral%2c+PublicKeyToken%3d121fae78165ba3d4%3apt%3a767fb6c3-728b-40e9-af4d-abc498bcae6e%3a580b2269%3bTelerik.Web.UI.Skins%2c+Version%3d2012.2.607.40%2c+Culture%3dneutral%2c+PublicKeyToken%3d121fae78165ba3d4%3apt%3a4b54c6d7-e7a5-482b-9e15-94b493c9591a%3a6c8ef648" type="text/css" rel="stylesheet" /> -->
        <link href="css/estilo01.css" type="text/css" rel="stylesheet" />
        <link href="css/estilo_shop.css" type="text/css" rel="stylesheet" media="all" />

        <meta name="description" content="Sistema completo para gestão e automação comercial, o Shop Pagom está preparado para as obrigações fiscais do governo, como Nota Fiscal Eletrônica, PAF-ECF e SPED. Este Sistema de gerenciamento de Lojas..." />
        <meta name="keywords" content="sistema de, automação comercial, gestão de lojas, rede de lojas, obrigações fiscais, nota fiscal eletronica, paf-ecf, ferramentas de loja, analise financeira, shop alterdata, sintegra, curva abc, ranking de vendedores, controle de estoque, sistema para loja,  software para loja, sistema para comercio, shop web, shop web alterdata" />
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
		  ga('create', 'UA-125800332-1', 'auto');
		  ga('send', { hitType: 'pageview', page: page });

		</script>
    </head>
    <body>
        <form method="post" action="https://atualizarweb-ua.1gb.ua/Shop" id="form1" class="wrapper">
            <div class="aspNetHidden">
                <input type="hidden" name="ctl08_TSSM" id="ctl08_TSSM" value="" />
                <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
                <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
                <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTk2MDg2ODI1NGQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFNmN0bDAwJEJyZWFkX0NydW1icyRUMDBGQkY1NTgwMDUkY3RsMDAkY3RsMDAkQnJlYWRjcnVtYhcmh7+jfEqpSmguWDDzgBq0SERQbMbU/ttcOiLk9dA/" />
            </div>

            <section>
                <div id="bannerprincipal" class="bannerprincipal">

                    <div class="sfContentBlock">
                        <div class="cont_banner fotoModelo" id="cont_banner_shop"> 
                            <div id="bloco_versoes"> <img width="350" height="120" class="logoSistema" alt="shop320" src="imgs/shop320.png" /> <a href="index.html" class="bt_bloco_verde"><img alt="" class="maskBtBloco" src="../images.alterdata.com.br/imagens/mask-bt-bloco.png" /><img style="border-width: 0px; border-style: solid;" alt="icone-lojas" src="imgs/icone-lojas.png" /><br />
                                    Com&eacute;rcios
                                </a> <a href="index.html" class="bt_bloco_verde"><img alt="" class="maskBtBloco" src="imgs/mask-bt-bloco.png" /><img alt="" style="border-width: 0px; border-style: solid;" src="imgs/icone-rede-lojas.png" /><br />
                                    Redes de Lojas
                                </a> <a href="index.html" class="bt_bloco_verde"><img alt="" class="maskBtBloco" src="imgs/mask-bt-bloco.png" /><img style="border-width: 0px; border-style: solid;" alt="icone-supermercado" src="imgs/icone-supermercado.png" /><br />
                                    Supermercados
                                </a> <a href="index.html" class="bt_bloco_verde"><img alt="" class="maskBtBloco" src="../images.alterdata.com.br/imagens/mask-bt-bloco.png" /><img width="45px" style="border-width: 0px; border-style: solid;" alt="icone-servico" src="imgs/icone-servico2.png" /><br />
                                    Prestadores de Servi&ccedil;os
                                    </a> <!-- <a href="/Shop/Compare" class="bt_bloco_verde"><img alt="" class="maskBtBloco" src="//images.alterdata.com.br/imagens/mask-bt-bloco.png" /><img style="border-width: 0px; border-style: solid;" alt="icone-comparativo" src="imgs/icone-comparativo.png" /><br />
                                    Compare as vers&otilde;es
                                    </a> --> <a href="index.html" class="bt_bloco_verde"> <img alt="" class="maskBtBloco" src="../images.alterdata.com.br/imagens/mask-bt-bloco.png" /><img style="border-width: 0px; border-style: solid;" alt="icone-bi-on" src="imgs/icone-bi-on.png" /><br />
                                    BI-ON
                                </a> <a href="index.html" class="bt_bloco_verde"> <img alt="" class="maskBtBloco" src="../images.alterdata.com.br/imagens/mask-bt-bloco.png" /><img width="45px" style="border-width: 0px; border-style: solid;" alt="Projects" src="../images.alterdata.com.br/imagens/img-projects/icone-projects.png" /><br />
                                    Projetos<br />
                                    Espec&iacute;ficos
                                </a>
                            </div>
                        </div>



                    </div>
                </div>           
                <div id="conteudo1">
                    <div id="submenu_produto">

                        <div class="sfContentBlock">
                            <a class="submenu-produto" href="index.html">Solicitar demonstra&ccedil;&atilde;o</a> <a class="submenu-produto" href="index.html">Requisitos</a> <a class="submenu-produto" href="index.html">Nossos Clientes</a>



                        </div>
                    </div>
                    <div class="bloco_txt_x_img">

                        <div class="sfContentBlock">
                            <h1 class="tverde textoCentro removeMargem">Aumente os lucros de sua empresa e evite riscos</h1>



                        </div>
                        <br />

                        <div class="sfContentBlock">
                            <div class="marLat20">
                                <h2 class="textoCentro removeMargem">
                                    Quanto comprar? Por quanto vender?<br />
                                    Como anda a sa&uacute;de financeira da empresa? </h2>
                                <h3 class="textoCentro removeMargem">Estas s&atilde;o algumas das muitas perguntas que o Pagom Shop responde.</h3>
                                <br />
                                <p>Atendendo  a mais de 10.000 lojas em todo o Brasil, o Pagom Shop &eacute; uma solu&ccedil;&atilde;o completa que conjuga o mais moderno em gest&atilde;o empresarial com tecnologia de ponta e valores compat&iacute;veis com a realidade das empresas de pequeno e m&eacute;dio porte brasileiras. </p>
                                <br /> <br />
                            </div>
                            <img width="270px" class="direita ilustracao" src="imgs/img-caixas.jpg" title="Evite perdas e lucre mais!" alt="Estoque - Pagom Shop" />
                            <br /> <br />
                            <div class="marLat20">
                                <h2 class="removeMargem">Controle total do estoque</h2>
                                <h3 class="removeMargem">Compre certo, evite perdas e lucre mais!</h3>
                                <p>Proteja seu dinheiro de produtos que encalham. Saiba quais s&atilde;o aqueles que mais vendem e n&atilde;o podem faltar no estoque. Controle a entrada e sa&iacute;da de mercadorias de maneira f&aacute;cil e r&aacute;pida. Acompanhe m&uacute;ltiplas lojas de qualquer lugar. </p>
                            </div>
                            <img alt="" class="separadorC" src="imgs/separador920.png" />
                            <img width="270px" class="esquerda ilustracao" src="imgs/img-sacola.jpg" title="Vendas sem fila - Pagom Shop" alt="PDV Sem Filas - Pagom Shop" /> <div class="marLat20"> <br /> <br /> <h2>Vendas sem fila e sem complica&ccedil;&atilde;o </h2> <p>Garanta mais agilidade e praticidade nas opera&ccedil;&otilde;es de vendas com o Pagom Shop. Integre o caixa, or&ccedil;amento e pr&eacute;-vendas. Acompanhe o desempenho da empresa atrav&eacute;s de gr&aacute;ficos e relat&oacute;rios com as informa&ccedil;&otilde;es de que necessita para tomar as decis&otilde;es certas e vender mais.</p> </div> <img alt="" class="separadorC" src="imgs/separador920.png" /> <img width="300px" class="direita ilustracao" src="imgs/grafinaceiro.jpg" title="Pagom Shop - Controle Financeiro" alt="Controle Financeiro" /> <div class="marLat20"> <br /> <br /> <h2 class="removeMargem">Financeiro</h2> <h3 class="removeMargem">Gest&atilde;o completa e pr&aacute;tica </h3> <p>Controle de apenas um aplicativo todas as contas a pagar e a receber de sua empresa. Saiba a qualquer momento como anda o resultado financeiro do neg&oacute;cio e dispense planilhas e controles paralelos. </p> </div> <img alt="" class="separadorC" src="imgs/separador920.png" /> <img width="220px" class="esquerda ilustracao" src="imgs/img-cliente.jpg" title="Conhe&ccedil;a Melhor Seu Cliente - Pagom Software" alt="Descubra Perfil do Cliente" /> <div class="marLat20"> <br /> <br /> <h2>Venda mais criando estrat&eacute;gias para cada perfil de cliente</h2> <p>Saiba exatamente o que seu cliente deseja e escolha os produtos certos para conquist&aacute;-lo. Identifique quais clientes s&atilde;o mais importantes para seu neg&oacute;cio e aqueles que deixaram de comprar em sua empresa. </p> </div> <img alt="" class="separadorC" src="imgs/separador920.png" /> <img width="270px" class="direita ilustracao" src="imgs/img-leao.jpg" title="20 anos de experi&ecirc;ncia em Legisla&ccedil;&atilde;o - Pagom Shop" alt="Experi&ecirc;ncia com a legisla&ccedil;&atilde;o Brasileira" /> <div class="marLat20"> <br /> <br /> <h2>Proteja sua empresa do Le&atilde;o!</h2> <p>Sistemas desenvolvidos no curso de mais de 20 anos de experi&ecirc;ncia com a legisla&ccedil;&atilde;o brasileira. Preparado para o SPED, Nota Fiscal Eletr&ocirc;nica, Sintegra, Nota Fiscal Paulista, Carioca, Minas Legal e do Distrito Federal. </p> </div> <img alt="" class="separadorC" src="imgs/separador920.png" /> <img width="420px" class="esquerda ilustracao" src="imgs/figura-computador-Shop.jpg" title="Pagom Shop - Gerencie de maneira integrada" alt="Gerencie de Maneira Simples" /> <div class="marLat20"> <br /> <br /> <h2>Organize servi&ccedil;os prestados, ganhe tempo e evite surpresas</h2> <p>Gerencie de maneira integrada os servi&ccedil;os solicitados, pendentes e realizados. Controle as garantias de servi&ccedil;os e pe&ccedil;as. Analise em gr&aacute;ficos quais os servi&ccedil;os e produtos mais solicitados pelos clientes. </p> </div> <img alt="" class="separadorC" src="imgs/separador920.png" /> <img width="450px" class="direita ilustracao" src="imgs/img-combo.jpg" title="Pagom Shop - Implanta&ccedil;&atilde;o Sob Medida" alt="Instala&ccedil;&atilde;o Personalizada" /> <div class="marLat20"> <br /> <br /> <h2>Implanta&ccedil;&atilde;o sob medida</h2> <p>Escolha em quais pontos do sistema deseja mais treinamento com os Combos de Implanta&ccedil;&atilde;o Shop. Tenha mais foco naquilo que sua empresa realmente precisa.</p> </div> <img alt="" class="separadorC" src="imgs/separador920.png" /> <img width="300px" class="esquerda ilustracao" src="imgs/figura-calendario.jpg" title="7 dias por semana - Suporte Pagom" alt="Suporte Pagom -  Pagom Software" /> <div class="marLat20"> <br /> <br /> <h2>Atendimento e treinamento para sua empresa sete dias por semana </h2> <p>O suporte Pagom est&aacute; dispon&iacute;vel de segunda a sexta at&eacute; 22h, aos s&aacute;bados at&eacute; 19h e aos domingos at&eacute; 17h. Atendimento via telefone, chat, acesso remoto e visitas presenciais, quando necess&aacute;rio.</p> <p>Treinamentos ao vivo via Internet ou gravados para aprofundar o conhecimento no sistema e treinar novos integrantes da equipe. </p> </div> <img alt="" class="separadorC" src="imgs/separador920.png" />
                        </div>
                    </div>
                    <div id="blocodepoimentos">

                        <div class="sfContentBlock">
                            <h2 class="textoCentro">Confira abaixo as vantagens do Pagom Shop espec&iacute;ficas para seu neg&oacute;cio.</h2> <p class="textoCentro"> </p> <center> <a href="index.html" class="bt_bloco_verde"> <img style="border-width: 0px; border-style: solid;" alt="icone-lojas" src="imgs/icone-lojas.png" /><br />
                                    Com&eacute;rcios</a> <a href="index.html" class="bt_bloco_verde"> <img alt="" style="border-width: 0px; border-style: solid;" src="imgs/icone-rede-lojas.png" /><br />
                                    Redes de Lojas</a> <a href="index.html" class="bt_bloco_verde"> <img style="border-width: 0px; border-style: solid;" alt="icone-supermercado" src="imgs/icone-supermercado.png" /><br />
                                    Supermercados</a> <a href="index.html" class="bt_bloco_verde"> <img width="45px" style="border-width: 0px; border-style: solid;" alt="icone-servico" src="imgs/icone-servico2.png" /><br />
                                    Prestadores de Servi&ccedil;os</a><a href="index.html" class="bt_bloco_verde"> <img width="45px" style="border-width: 0px; border-style: solid;" alt="icone-cards" src="imgs/icone-cards.png" /><br />
                                    Cart&atilde;o<br />
                                    fidelidade</a> <a href="index.html" class="bt_bloco_verde"> <img alt="" class="maskBtBloco" src="../images.alterdata.com.br/imagens/mask-bt-bloco.png" /><img style="border-width: 0px; border-style: solid;" alt="icone-bi-on" src="imgs/icone-bi-on.png" /><br />
                                    BI-ON
                                </a> <a href="index.html" class="bt_bloco_verde"><img alt="" class="maskBtBloco" src="../images.alterdata.com.br/imagens/mask-bt-bloco.png" /><img style="border-width: 0px; border-style: solid;" alt="icone-comparativo" src="imgs/icone-comparativo.png" /><br />
                                    Compare as vers&otilde;es
                                </a> <br /> <img alt="" src="imgs/separador920.png" class="separadorC" /> <div class="solicitarDemo textoCentro"> <h2>Entre em contato com a Pagom e solicite uma demonstra&ccedil;&atilde;o</h2> <div class="duasColunas bordaDireita"> <h3 class="textoCentro removeMargem">Ligue para</h3> <h2 class="textoCentro tverde removeMargem">0800 704 1418</h2> </div> <div class="duasColunas" style="vertical-align: top;"><center> <h3 class="textoCentro removeMargem">ou solicite contato</h3> <a href="https://cliente.alterdata.com.br/pedidodemonstracao/Default.aspx?sisdm=shop" class="botao btVerde btGrande removeMargem" style="width: 210px; padding: 5px 10px; margin-left: -10px;">Solicitar demonstra&ccedil;&atilde;o</a></center></div> </div> </center>



                        </div><div class="sfContentBlock">
                            <img alt="" class="separadorC" src="imgs/separador920.png" />



                        </div>
                    </div>
                    <div class="bloco_txt_x_img" id="outrasSolucoes">
                        <h2 class="h2verde">Conheça outras soluções da Pagom</h2>
                        <div class="caixa300">
                            <div class="sfContentBlock">
                                <a href="index.html"><img alt="" width="280px" style="border-width: 0px; border-style: solid;" src="../images.alterdata.com.br/imagens/logo_alterdata_pack_300.png" /> <p>
                                        Sistema de Automa&ccedil;&atilde;o cont&aacute;bil da Pagom com D.P., R.H. e outras ferramentas para um maior controle da sua empresa.</p> </a>
                            </div>
                        </div>
                        <div class="caixa300">
                            <div class="sfContentBlock">
                                <a href="index.html"><img alt="" width="280px" style="border-width: 0px; border-style: solid;" src="../images.alterdata.com.br/imagens/logo_alterdata_ponto_300.png" /> <p>Alta Tecnologia no Controle de Ponto de Funcion&aacute;rios.Compat&iacute;vel com a portaria 1.510 do Minist&eacute;rio do Trabalho.</p> </a>



                            </div></div>
                        <div class="caixa300">
                            <div class="sfContentBlock">
                                <a href="index.html"><img alt="" width="280px" style="border-width: 0px; border-style: solid;" src="../images.alterdata.com.br/imagens/logo_alterdata_conexus_300.png" /> <p>A solu&ccedil;&atilde;o para gest&atilde;o empresarial da Pagom oferece um amplo poder gerencial com ferramentas de ERP, CRM, Business Intelligence, estoque, financeiro.</p> </a>



                            </div></div>
                        <a href="index.html" title="Soluções Pagom" class="botaobranco">Mais soluções</a>
                        <a href="index.html" title="Sobre a Empresa" class="botaobranco">Saiba mais sobre a Pagom</a>
                    </div>
                </div>
                <img class="sombra" src="../images.alterdata.com.br/imagens/sombra970.png">
                <div id="conteudo2">
                    <div id="busca_rodape">


                    </div>
                    <div class="empurrafloats">
                    </div>

                    <div class="sfContentBlock">
                        <div id="caixa_mapa"> <a href="index.html"> <h3>Mapa do Site</h3> </a> <ul id="Solucoes" class="coluna_mapa"> <li class="liMapa"><a href="index.html" title="Todas as Solu&ccedil;&otilde;es">Todas as Solu&ccedil;&otilde;es</a></li> <li class="liMapa"><a href="index.html" title="Automa&ccedil;&atilde;o Cont&aacute;bil">Automa&ccedil;&atilde;o Cont&aacute;bil</a></li> <li class="liMapa"><a href="index.html" title="Automa&ccedil;&atilde;o Cont&aacute;bil">O que &eacute; eSocial?</a></li> <li class="liMapa"><a href="index.html" title="Automa&ccedil;&atilde;o Comercial">Automa&ccedil;&atilde;o Comercial</a></li> <li class="liMapa"><a href="index.html" title="Automa&ccedil;&atilde;o Imobili&aacute;ria">Automa&ccedil;&atilde;o Imobili&aacute;ria</a></li> <li class="liMapa"><a href="index.html" title="Gest&atilde;o Empresarial">Gest&atilde;o Empresarial</a></li> <li class="liMapa"><a href="index.html" title="Cart&atilde;o Fidelidade">Cart&atilde;o Fidelidade</a></li> </ul> <ul id="Empresa" class="coluna_mapa"> <li class="liMapa"><a href="index.html" title="Sobre A Pagom">Sobre a Pagom</a></li> <li class="liMapa"><a href="index.html" title="Clientes">Clientes</a></li> <li class="liMapa"><a href="index.html" title="Localiza&ccedil;&atilde;o">Localiza&ccedil;&atilde;o</a></li> <li class="liMapa"><a href="index.html" title="Seja um Representante">Seja um Representante</a></li> <li class="liMapa"><a href="index.html" title="Trabalhe Conosco">Trabalhe Conosco</a></li> </ul> <ul id="Contato" class="coluna_mapa"> <li class="liMapa"><a href="index.html" title="Solicitar uma Demonstra&ccedil;&atilde;o">Solicitar uma Demonstra&ccedil;&atilde;o</a></li> <li class="liMapa"><a href="index.html" title="Central do Cliente">Central do Cliente</a></li> <li class="liMapa"><a href="Empresa/CentralImprensa/index.html" title="Central de Imprensa">Central de Imprensa</a></li> <li class="liMapa"><a href="index.html" title="Contatos">Contatos</a></li> <li class="liMapa"><a href="index.html" title="Contatos">Mapa Completo</a></li> </ul> </div> <div class="separadorvertical_200"> </div> <div class="caixa_vendas"> <h3>Vendas</h3> <h2>0800 704 1418</h2> <p> <a href="http://livechat.alterdata.com.br/" target="_blank">
                                    Clique aqui para entrar <br />
                                    em contato via chat.</a> </p> </div> <div class="empurrafloats"> </div>
                    </div>
                </div>
                <div class="push"></div>
            </section>

        </form>
        <footer class="footer">
            <div id="infofooter">
                <div id="logofooter">
                </div>
                <br>
                ©1989 -
                <span id="AnoAtual"></span>
                - Pagom Software - Direitos reservados 
            </div>
        </footer>
    </body>

<!-- Mirrored from atualizarweb-ua.1gb.ua/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Sep 2018 19:57:48 GMT -->
</html>