# Formulário PHP OO

Projeto Easy PHP Contact

 ***

### Versão do PHP 

PHP 7.0

### Frameworks e Bibliotecas

Bootstrap 4
/PHPMailer

### Configuração

Para configurar o formulário é muito simples: 

1- Acesse a pasta forms/easy_budget/inc

Na pasta inc você vai encontrar todos os arquivos de configuração e a pasta das classes. 

2- Configurando o recebimento de email.

inc/config.php  

- Primeiro na linha 14 informe o email que vai receber o contato do usuário

- Logo abaixo você verá as seguintes variáveis: 

 $contactTemplate = "Selecione o tema de acordo com o arquivo css"
 $autoResponder = "Se for ultilizar o autoresponde deixe true, caso contrário, coloque false"
 $defaultSubject = "Este será o assunto que vai aparecer pra você (admin) quando o cliente enviar os dados no formulário"
