<!doctype html>
<html lang="pt-br">
<head>
  <title>Requerimento IFPE</title>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/formulario.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

</head>
<!--cabecalho  -->
<body>
  <div id="hearder">
    <div class="barra">
      <div class="large-12 medium-12 small-12">
        <div class="container large-2 medium-2 small-2 columns">
          <div id="logo-reitoria"><img src="img/logo-reitoria.png "></div>
          <div id="logo-cradt"><img src="img/logo-cradt.png "></div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
<?php
require_once("phpmailer/class.phpmailer.php");

function smtpmailer($para, $de, $de_nome, $assunto, $corpo, $arquivo = NULL) {
  global $error;
  $mail = new PHPMailer();
  $mail->Body = $corpo;
  $mail->Subject = $assunto;
  $mail->IsHTML(true);
  $mail->CharSet = 'UTF-8';
  $mail->SetFrom($de, $de_nome);
  $mail->AddAddress($para);
  $mail->AddAttachment($arquivo['tmp_name'], $arquivo['name']);
  if(!$mail->Send()) {
    $error = 'Mail error: '.$mail->ErrorInfo; 
    return false;
  } else {
    $error = 'Mensagem enviada!';
    return true;
  }
}

$campus = "Igarassu";
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$fone = $_POST['fone'];
$email_from = $_POST['email'];
$curso = $_POST['curso'];
$periodo = $_POST['periodo'];
$turno = $_POST['turno'];
$item = $_POST['itens'];
$obs = $_POST['obs'];
$outros = $_POST['outros'];
// $email = 'cradt@igarassu.ifpe.edu.br'; 
$arquivo = $_FILES['fileUpload'];
$assunto = "[REQ] $item";

$mensagem = "<b>- Requerimento do Aluno -</b><br><br>
<b>Campus: </b>" . $campus . "<br> 
<b>Nome do Aluno(a): </b>" . $nome ."<br>
<b>Matricula: </b>" . $matricula ."<br>
<b>Periodo: </b>" . $periodo ."<br>
<b>Curso: </b>" . $curso ."<br>
<b>Turno: </b>" . $turno ."<br>
<b>Telefone: </b>" . $fone ."<br>
<b>CPF: </b>" . $cpf ."<br>
<b>Identidade: </b>" . $rg ."<br>
<b>E-mail: </b>" . $email_from ."<br>    
<b>Item: </b>" . $item ."<br> 
<b>Outros: </b>" . $outros ."<br>    
<b>Observacoes: </b>" . $obs ."<br>
";

$destinatario = "cradt@igarassu.ifpe.edu.br";
$remetente = $email_from;
$nome_remetente = $nome;

if (isset($_FILES['fileUpload']) && !empty($_FILES['fileUpload'])) {
  if (smtpmailer($destinatario, $remetente, $nome_remetente, $assunto, $mensagem, $arquivo)) {
    echo "<div class='page-header'>
        <h3>O seu requerimento foi submetido com sucesso!</h3>
      </div>";
  }
} else {
  if (smtpmailer($destinatario, $remetente, $nome_remetente, $assunto, $mensagem)) {
    echo "<div class='page-header'>
        <h3>O seu requerimento foi submetido com sucesso!</h3>
      </div>";
  }
}
if (!empty($error) && $error != "Mensagem enviada!") echo $error;
?>
<div class="col-md-12">
    <a href="index.php" class="btn btn-primary">Voltar</a>
</div>
</div>
</body>
</html>