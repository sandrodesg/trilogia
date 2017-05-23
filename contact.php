  <?php
    error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
    session_start();
    include_once("conexao.php");

    ?>

<!DOCTYPE html>
<html lang="pt-br">
<title>Portal Trilogia</title>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"> 
<link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
<link href="Hover-master/css/hover.css" rel="stylesheet" media="all">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="css/estilo.css">
<link rel="stylesheet" href="css/estilo_contact.css">
<script type="text/javascript" src="js/.js"></script>
<body>

  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php" title="HOME">HOME</a></li>
          <li><a href="#" title="IK&P">IK&P</a></li>
          <li><a href="#" title="CLÍNICA">CLÍNICA</a></li>
          <li><a href="#" title="STOP">STOP</a></li>
          <li><a href="#" title="ESCOLA TRILOGIA">ESCOLA TRILOGIA</a></li>
          <li><a href="#" title="PRÓTON">PRÓTON</a></li>
          <li><a href="#" title="HOTEL">HOTEL</a></li>
          <li><a href="#" title="MED&ODONTOLOGIA">MED&ODONTOLOGIA</a></li>
          <li><a href="#" title="CLARION">CLARION</a></li>
          <li><a href="#" title="PROJETOS SOCIAIS">PROJETOS SOCIAIS</a></li>
          <li><a href="#" title="KEPPE MOTOR">KEPPE MOTOR</a></li>
          <li><a href="#" title="HOME">KMS</a></li>
          <li><a href="faq.php" title="FAQ">FAQ</a></li>
          <li><a href="contact.php" title="CONTACT">CONTACT</a></li>

        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
   
   <div class="container">
   <section>
    <div class="row">
      <div class="col-md-9 contato">
        <h1>CONTACT</h1>
                <p>Se você tiver dúvidas ou precisar de informações, por favor,<br>escreva na caixa a seguir:</p>

          <form action="insere_form.php" method="POST">
          <input id="alt" name="email" type="email" class="form-control input-lg"  for="formGroupInputLarge" placeholder="E-mail"><br><br>
          <textarea  name="msg" class="form-control" for="formGroupInputLarge" id="" cols="30" rows="12" placeholder="Your message here"></textarea>
          <input id="enviar" type="submit" class="btn btn-lg" value="enviar">
        </form>
          

             <?php
            if(isset($_SESSION['msgCad'])){
              echo $_SESSION['msgCad'];
              unset($_SESSION['msgCad']);
              
            }
           ?>

      </div>

      <div class="col-md-3">
        <h2>ADRESS</h2>
        <h3>xxxxxxxxx</h3><br>
        <h2>TELEFONE</h2>
        <h3>xxxx-xxxx</h3>
        <h3>xxxx-xxxx</h3>


      </div>
    </div>
    </section>
   </div>
   <footer>
     <div class="row footer">
       <div class="col-md-2">
        <ul class="onborder">
          <li><b>MAPA DEL SITIO</b></li>
          <li>HOME</li>
          <li>INSTITUTO IK&P</li>
          <li>CLÍNICA PSICANÁLISE</li>
          <li>ESCOLA TRILOGIA</li>
          <li>STOP</li>
        </ul>
       </div>

         <div class="col-md-2">
         <ul class="onborder">
          <li>EDITORA PRÓTON</li>
          <li>PROJETOS SOCIAIS</li>
          <li>GRANDE HOTEL TRILOGIA</li>
          <li>CLÍNICA PSICANÁLISE</li>
          <li>KEPPE MOTOR</li>
          <li>PSICOSSOMÁTICA</li>
        </ul>
       </div>

         <div class="col-md-2">
           <ul>
          <li>CLARION VIAGENS</li>
          <li>KEPPE MOTOR SHOP</li>
          <br>
          <li><b>FAQ</li>
          <li>ABOUT US</li>
          <li>CONTACT US</b></li>
        </ul>
        </div>
        <div class="col-md-4">
          <div id="missao">
            <h4 class="pull-right"><b>A MISSÃO DA KEPPE & PACHECO</b></h4>
            <h5 class="pull-right">
              A missão da Associação Keppe e Pacheco é promover a recuperação da humanidade através da conscientização da psico-sócio-patologia, visando resgatar a bondade a verdade e a beleza, que são a verdadeira essência dos seres humanos.
            </h5>
          </div>
          
         </div>
         <div class="col-md-2">
         <img id="logo" class="image-responsive" src="img/logo.png" alt="Logo Stop" title="Logo Stop">
       </div>
       <div class="col-md-12" id="direitos">
         <h3 class="text-center">Copyright 2016 Instituto Keppe & Pacheco | Todos os direitos Reservados</h3>
       </div>
     </div>
      
     </footer>
   </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>