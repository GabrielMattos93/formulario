<?php
/*******************************************************************
* Copyright 2015 Codeadik All rights reserved.
* Item: Easy PHP Contact Form Script
******************************************************************/

	include dirname(__FILE__) . '/class/EasyContact.class.php';
	
	
	/* ======  CONFIGURAÇÕES PARA FORMULÁRIO DE CONTATO ===== */
	
	/* Coloque seu email aqui. Ex: seusiteemail@domain.com */
	
	$yourEmail = 'contato@brutecode.com.br'; 
	
	$contactTemplate = 'premium';
	
	$autoResponder = true;
	
	$defaultSubject = 'Solicitação de Orçamento';
 	
	
	/* =====  Redirection Configuration after Successful Submission - (Uses Javascript) ===== */
	//If $enableRedirection is true, it redirects to specific URL specify in $redirectToURL. 
	//If $enableRedirection is false, it will display ($successMessage) on the same page of contact form.
	$enableRedirection = false;
	
	$redirectToURL = '#';
	 
	$successMessage = 'Obrigado! Sua mensagem foi enviada com sucesso, em breve retornamos o contato';
	
	
	
	
	/* =====  Error Message Configuration  ===== */
	$emptyField = 'Este campo é obrigatório';
	
	$invalidEmail  = 'Formato de endereço de e-mail inválido!';
	
	$invalidCaptcha = 'Por favor, insira o código captcha correto!';
	
	$maxAllowedCharacter = 'O caractere máximo permitido é ';
	
	$invalidFileExtension = 'Extensão de arquivo não é permitida';
	
	$maxAllowedFileSize = 'O tamanho do arquivo excede mais de ';
	
	$invalidPhoneNumber = 'Número de telefone inválido, aceita apenas dígitos e caracteres de telefone';
	
	
	
	
	/* Settings for SMTP Authentication - See Documentation for more Details*/
	/* Set to true if you want SMTP Authentication for sending email.
	/* Set to false if you want to use the default PHP mail() for sending email */
	$smtpEnable = true;
	
	/* If you enable the SMTP authentication, you must configure the data below */
	$smtpServer = 'mail.brutecode.com.br';   
	$smtpPort = 465;                    
	$smtpUsername = 'contato@brutecode.com.br'; 
	$smtpPassword = 'gabriel1993';  
	$smtpEncryption = 'ssl';               
	/* End of SMTP Authentication configuration */
	
	
	/* =====  Our Easy PHP Contact Form class  ===== */
	$easyForm = new EasyContact;
	 
	/* =====  Customize your form below. See the documentation included  ===== */
	/* =====  Add many fields as you want  ===== */
	/* =====  They are displayed according to their arrangement here  ===== */
	
	$easyForm->createTextBox('fullname', 'Nome Completo', false, 70);
	$easyForm->createTextBox('businessname', 'Nome da Empresa', false, 70);

    $easyForm->createTextBox('fullname', 'Nome Completo', false, 70);

	$easyForm->createEmail('Email', 70);
	
	$easyForm->createPhone('telephone', 'Whatsapp', true, 20);
	
    $easyForm->createComboBox('serv', 'Nossos serviços', true);
		$easyForm->addComboBoxOption('serv', 'Desenvolvimento de Landing Page');
		$easyForm->addComboBoxOption('serv', 'Desenvolvimento de Site Profissional');
	    $easyForm->addComboBoxOption('serv', 'Desenvolvimento de E-commerce');
		$easyForm->addComboBoxOption('serv', 'Softwares de Gestão e CRMs');
		$easyForm->addComboBoxOption('serv', 'Gestão de Tráfego e Ads');
     	$easyForm->addComboBoxOption('serv', 'Gestão de Redes Sociais');
     	$easyForm->addComboBoxOption('serv', 'Criação de Logotipo');
     	$easyForm->addComboBoxOption('serv', 'Cartão Digital Interativo');
		
		$easyForm->createTextArea('message', 'Conte nos um pouco sobre sua empresa e o principal objetivo deste projeto', true, 5000);

		$easyForm->createLocationDetection('Localização', true);
	
	
	//New Feature in v2.3!
	
	
	/* END OF CREATING FIELDS */

	/* Note: Don't change the configuration below */
	session_start(); 
	$validFormDisplay = true;
	include dirname(__FILE__) . '/class/class.phpmailer.php';
	$phpMailer = new PHPMailer();
	if ($smtpEnable)
		$phpMailer->isSMTP();                                     
	$phpMailer->Host = $smtpServer;  
	$phpMailer->Port = $smtpPort;
	$phpMailer->SMTPSecure = $smtpEncryption;
	$phpMailer->SMTPAuth = true;               
	$phpMailer->Username = $smtpUsername;     
	$phpMailer->Password = $smtpPassword;                          
	$phpMailer->isHTML(true); 
	$phpMailer->CharSet = 'UTF-8';
	
	$formEnctype = '';
	if ($easyForm->hasFileUpload)
		$formEnctype = 'enctype="multipart/form-data"';
	
	include dirname(__FILE__) . '/autoresponder.php';
	include dirname(__FILE__) . '/process.php';
?>