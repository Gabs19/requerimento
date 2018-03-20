<!doctype html>
<html lang="pt-br">
<head>
  <title>Requerimento IFPE</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/formulario.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

</head>
<!--cabeçalho  -->
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
    <div class="page-header">
      <h1>Requerimento - Aluno(a)</h1>
      <span><small id="message">Os campos com <b>*</b>São Obrigatórios</small></span>
    </div>
    <form method="POST" action="envio.php" enctype="multipart/form-data"> 
      <div class="col-md-2">
        <label>Campus </label>
        <input type="text" class="form-control" name="campus" value="Igarassu" disabled>
      </div>
      <div class="col-md-7">
        <label>Nome do(a) Aluno(a) <b>*</b></label>
        <input type="text"  name="nome" class="form-control" placeholder="nome" required>
      </div>
      <div class="col-md-3">
        <label>Matrícula <b>*</b></label>
        <input class="form-control" type="text" name="matricula" placeholder="Matrícula" required>
      </div>
      <div class="col-md-3">
        <label>CPF <b>*</b></label>
        <input  class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF" required>
      </div>
      <div class="col-md-3">
        <label>Identidade <b>*</b></label>
        <input  class="form-control" type="text" name="rg" id="rg" placeholder="Identidade" required>
      </div>
      <div class="col-md-3">
        <label>Telefone <b>*</b></label>
        <input class="form-control" id="tel" type="text" name="fone" placeholder="Telefone" required>
      </div>
      <div class="col-md-3">
        <label>E-mail <b>*</b></label>
        <input  class="form-control" type="text" name="email" placeholder="E-mail" required>
      </div>
      <div class="col-md-3">
        <label>Curso </label>
        <select class="form-control" name="curso"> 
          <option disabled selected>-- Curso --</option> 
          <option value="Informatica">Informatica para Internet</option>
          <option value="Logistica">Logistica</option>
        </select>
      </div>
      <div class="col-md-3">
        <label>Periodo </label>
        <input class="form-control" type="number" min="1" max="3" name="periodo">
      </div>
      <div class="col-md-3">
        <label>Turno </label>
        <select  class="form-control" name="turno">
         <option disabled selected> -- Turno -- </option> 
         <option value="Manhã">Manhã</option> 
         <option value="Tarde">Tarde</option>
       </select>
           </div>
           <div class="col-md-3">
      <label>Itens <b>*</b></label>
      <select  class="form-control" name="itens" required>
       <option disabled selected> --- Itens --- </option> 
       <option value="Cancelamento">Cancelamento de Matrícula</option> 
       <option value="Declaracao">Declaração de Matrícula ou Vinculo</option>
       <option value="Diploma">Diploma</option>
       <option value="Historico">Histórico Escolar</option>
       <option value="Falta">Justificativa de Falta</option>
       <option value="Reabertura">Reabertura de Matrícula</option>
       <option value="Trancamento">Trancamento de Matrícula</option>
           </select>
         </div>
   <div class="col-md-12">
    <label>Anexo - Formatos aceitos (PDF, JPG, JPEG, PNG, DOC)</label>
    <input type="file" name="fileUpload" placeholder="Anexo">
  </div>
  <div class="col-md-6">
    <label>Observações </label>
    <textarea class="form-control" rows="5" name="obs" width="300px" placeholder="Observações"></textarea>
  </div>
  <div class="col-md-6">
    <label>Outros </label>
    <textarea class="form-control" rows="5" name="outros" placeholder="Outros"></textarea>
  </div>
  <div class="col-md-12">
    <input type="submit" id="last-element" class="btn btn-success" value="Enviar">
    <input type="reset" id="last-element" class="btn btn-default" value="Limpar">
  </div>
</form>
</div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script> -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<script type="text/javascript" src="js/mask.js"></script>
</body>
</html>