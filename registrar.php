<?php include_once("./cliente/conexao.php"); ?>

<!DOCTYPE html>
<html lang="en">

<script type="text/javascript">
    $("#cpf_cnpj").blur(function(event){
				if ($(this).val().length == 14){
					$("#cpf_cnpj").mask("000.000.000-00")
				}else{
					$("#cpf_cnpj").mask("00.000.000/0000-00")
				}
			});
    </script>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="http://localhost/like/img/logoPNG.png">

  <title>Like Home Hotel</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-login-image2"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">
                  Crie a sua conta aqui!</h1>
              </div>
              <form action="?go=cadastrar" method="POST">

                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="nome" name="nome" placeholder="Nome Completo / Razão Social" required>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="cpf_cnpj" name="cpf_cnpj" placeholder="CPF/CNPJ" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="rg_ie" name="rg_ie" placeholder="RG/IE" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="senha" name="senha" placeholder="Senha" required>
                  </div>
                </div>
                <div class="col-sm mb-4 mb-sm-0">
                  <input type="submit" value="Cadastrar" class="btn bg-primary btn-block text-white">
                </div>
                <hr>
              </form>
                              <div class="col-sm mb-4 mb-sm-0">
                <a href="./index.php"><input type="submit" value="Voltar" class="btn bg-danger btn-block text-white"></a>                  
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php


    if (@$_GET['go'] == 'cadastrar') {

      $nome = $_POST['nome'];
      $cpf_cnpj = $_POST['cpf_cnpj'];
      $rg_ie = $_POST['rg_ie'];
      $senha = md5($_POST['senha']);
      $habilitar = "0";
      date_default_timezone_set('America/Bahia');
      $data = date('Y-m-d');
      $hora = date('H:i:s');


      mysqli_query($conexao, "insert into usuario(
    nome,
    cpf_cnpj,
    rg_ie,
    senha,
    habilitar_login,
    data,
    hora
    )
    values(
        '$nome',
        '$cpf_cnpj',
        '$rg_ie',
        '$senha',
        '$habilitar',
        '$data',               
        '$hora'                
        )");

      mysqli_query($conexao, "insert into opcional(
          cpf,
          data,
          hora
          )
          values(
              '$cpf_cnpj',
              '$data',               
              '$hora'                
              )");


      mysqli_query($conexao, "insert into cliente(
                cpf_cnpj,
                nome_razao,
                rg_ie,
                data,
                hora
                )
                values(
                    '$cpf_cnpj',
                    '$nome',
                    '$rg_ie',
                    '$data',               
                    '$hora'                
                    )");
      echo "<script>
    alert('Usuário cadastrado com sucesso');
    </script>";

      echo "<meta http-equiv='refresh' content='0, url=index.php'>";
    }


    ?>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>