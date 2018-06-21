<?php
$testa = $_POST['veio'];
if(isset($_REQUEST['testemail']))
{


	$filename = 'myfile';
    $path = '.';
    $file = $path . "/" . $filename;

    $mailto = $_REQUEST['testemail'];
    $subject = 'Subject';
    $message = 'My message';

    $content = file_get_contents($file);
    $content = chunk_split(base64_encode($content));

    // a random hash will be necessary to send mixed content
    $separator = md5(time());

    // carriage return type (RFC)
    $eol = "\r\n";

    // main header (multipart mandatory)
    $headers = "From: name <test@test.com>" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;

    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;

    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";

    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        echo "mail send ... OK"; // or use booleans here
    } else {
        echo "mail send ... ERROR!";
        print_r( error_get_last() );
    }

	//$headers .= "To: ".$_REQUEST['testemail']."\r\n";
	//$headers .= "From: NFe <nfe@notasfiscais.com.br>\r\n";
	//$headers .= "Cc: ".$_REQUEST['testemail']."\r\n";
	//$headers .= "Bcc: ".$_REQUEST['testemail']." \r\n";
    //$headers .= "MIME-Version: 1.0\r\n";
    //$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	//$headers .= "X-Mailer: Microsoft Office Outlook 14\r\n";
	
	//if(mail($_REQUEST['testemail'],"Email de Teste", "Mensagem de Teste", $headers))
	//	echo 'Email Enviado';
}
if($testa != "") {
	$message = $_POST['html'];
	$subject = $_POST['assunto'];
	$nome = $_POST['nome'];
	$de = $_POST['de'];
	$to = $_POST['emails'];
	

	//$headers .= "To: ".$cc." \r\n";
	$headers .= "From: ".$nome." <".$de.">\r\n";
	//$headers .= "Cc: ".$cc." \r\n";
	//$headers .= "Bcc: ".$cc." \r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headers .= "X-Mailer: Microsoft Office Outlook, Build 17.551210\r\n";
	$headers .= "X-Priority: 1\n";
	
	$message = stripslashes($message);

	$email = explode(",", $to);
	$send = '';
	for($i=0;$i<count($email);$i++)
	{
		if(mail($email[$i], $subject, $message, $headers))
			$send .= $email[$i].'[V]';
		else
			$send .= $email[$i].'[F]';
	}
	echo $send;
} else {
	echo 'Hello World';
}
?>