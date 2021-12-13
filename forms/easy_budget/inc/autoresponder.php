<?php

/*Endereço de e-mail usado para enviar e-mail de resposta automática * /
/ * Altere para o seu endereço de e-mail		*/
$emailResponder = 'contato@brutecode.com.br';


//You only need to configure smtp responder settings if $smtpEnable is set to true in config.php
$smtpServerResponder = "mail.brutecode.com.br";   
$smtpPortResponder = 465;                    
$smtpUsernameResponder = "contato@brutecode.com.br"; 
$smtpPasswordResponder = "gabriel1993";
$smtpEncryptionResponder = 'ssl';  
//End smtp responder settings


/* autoresponder subject */
$respondSubject = 'Obrigado! Recebemos Sua Solicitação.';


/* autoresponder message */
/* This accepts multi-language and html format */
$respondMessage = '
Opa, Tudo bem?

Eu sou o Gabriel Mattos, Desenvolvedor Web na Brutecode e gostaria de agradecer por solicitar uma proposta em nosso site.
Nós criamos a Brutecode | Desenvolvimento Web com a missão de fornecer soluções web de qualidade e um atendimento de excelência que seja referência no mercado.

Adoraria saber o que você está achando do atendimento realizado até aqui e se há algo que possamos melhorar.
Se tiver alguma dúvida, por favor, fale com a gente. Ficarei feliz em ajudar!

Grande abraço,

Gabriel Mattos
Desenvolvedor Web
Brutecode | Desenvolvimento Web
contato@brutecode.com.br
www.brutecode.com.br
';

	/*Don't Change below code. 
	This may bypass spamfilter and delivered the mail in inbox*/
	$respondMessage .= '<br/><br/>Recebido: '. date("d-m-Y H:i:s");
	
	/* Note: Don't change the configuration below */
	$smtpMailResponder = new PHPMailer();
	if ($smtpEnable)
		$smtpMailResponder->isSMTP();                                     
	$smtpMailResponder->Host = $smtpServerResponder;  
	$smtpMailResponder->Port = $smtpPortResponder;
	$smtpMailResponder->SMTPAuth = true;    
	$smtpMailResponder->Username = $smtpUsernameResponder; 
	$smtpMailResponder->Password = $smtpPasswordResponder;                          
	$smtpMailResponder->SMTPSecure = $smtpEncryptionResponder;   
	if ($smtpEnable)                      
		$smtpMailResponder->From = $smtpUsernameResponder;
	else
		$smtpMailResponder->From = $emailResponder;
	$smtpArrEmail = explode('@', $smtpMailResponder->From);
	$smtpMailResponder->FromName = $smtpArrEmail[0];
	$smtpMailResponder->isHTML(true);
	$smtpMailResponder->CharSet = 'UTF-8';

				
?>