<?php
include "conect.php";

if (count($_POST)) {
	// Recebendo valores
	$nome = $_POST['nome'];
	$diretor = $_POST['diretor'];
	$nota = $_POST['nota'];


		//fazendo a inserção
		$sql = "insert into base (nome, diretor, nota) values('$nome','$diretor','$nota')";      
		$rs = mysql_query($sql, $db);

		if (!$rs){
		erro_banco();

		}else{
		mysql_close($db);
}}


 
include("phpmailer/class.phpmailer.php");   
/*CORPO DO E-MAIL*/   
$html = "   
<html>   
<body>   
Olá ".$_POST['nome'].", seu filme foi inserido</a><br><br>  
Atenciosamente,<br>  
Admin.  
</body>   
</html>";   
/*INSTANCIA A OBJETOS*/   
$mail = new PHPMailer();   
/*MANDAR VIA SMTP*/   
$mail->IsSMTP();   
/*SERVIDOR SMTP*/   
$mail->Host = "mail.com.br";   
/*HABILITA SMTP AUTENTICADO - NAO ALTERAR */   
$mail->SMTPAuth = true;   
/*USUARIO DESTE SERVIDOR SMTP*/   
$mail->Username = "lucasasterio@hotmail.com.br";   
/*SENHA USUARIO DESTE SERVIDOR SMTP*/   
$mail->Password = "123";   
/*E-MAIL UTILIZADO PARA ENVIO, PODER SER O MESMO DO USERNAME*/   
$mail->From = 'lucasasterio@hotmail.com.br';   
$mail->FromName = 'lucasasterio@hotmail.com.br'; 
/*WRAP SET O TAMANHO DO TEXTO POR LINHA*/   
$mail->WordWrap = 50;   
/*ENVIAR EM HTML*/   
$mail->IsHTML(true);   
/*INFORMANDO O E-MAIL DO REMETENTE*/   
$mail->AddReplyTo('lucasasterio@hotmail.com.br','lucasasterio@hotmail.com.br');   
/*LISTA DE ENDEREÇOS QUE DEVE SER MANDADO O E-MAIL*/   
$mail->AddAddress($_POST['email'],'Sr(a).'.$_POST['nome']);   
$msg = $html;   
/*O ASSUNTO DO E-MAIL*/   
$mail->Subject = "Confirmacao de Cadastro";   
/*ADICIONANDO O HTML NO CORPO DO E-MAIL*/   
$mail->Body = $msg;   
/*DEFININDO A LINGUAGEM*/   
$mail->SetLanguage("br", "phpmailer/language/");   
/*ENVIANDO E RETORNANDO STATUS DO ENVIO*/   
if(!$mail->Send()){   
/*ERRO NO ENVIO*/   
echo "Ocorreu um erro no envio do e-mail. Erro: ".$mail->ErrorInfo; 
exit;  
}   
/*FECHA ENVIO DE PHPMAILER*/  
?>






<script language= "JavaScript">
location.href="../index.php"
</script>




<?php
function erro_banco(){
	echo mysql_errno().' : '.mysql_error();
die(0);
}
?>
