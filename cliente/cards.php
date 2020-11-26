<?php
session_start();
if (!isset($_SESSION["func"]) and !isset($_SESSION["senha"])) {
    header("Location: ../index.php");
    exit;
}
include_once("conexao.php");
include_once("bloqueio.php");
$usuario = $_SESSION["func"];

$pesquisar= $usuario;
$resultado="SELECT * FROM usuario WHERE cpf_cnpj LIKE '$pesquisar';";
$relatorio=mysqli_query($conexao,$resultado);

while($dados=mysqli_fetch_assoc($relatorio)){
$cpf = $dados ['cpf_cnpj'];
$nome = $dados ['nome'];
$rg = $dados ['rg_ie'];
}

      $pesquisar= $usuario;
			$resultado="SELECT * FROM cliente WHERE cpf_cnpj LIKE '$pesquisar';";
			$relatorio=mysqli_query($conexao,$resultado);

			while($dados=mysqli_fetch_assoc($relatorio)){
		 $cpf = $dados ['cpf_cnpj'];
     $nome = $dados ['nome_razao'];
     $rg = $dados ['rg_ie'];
     $email = $dados ['email'];
     $telefone = $dados ['telefone'];
     $celular = $dados ['celular'];
     $rua = $dados ['rua'];
     $numero = $dados ['numero'];
     $complemento = $dados ['complemento'];
     $bairro = $dados ['bairro'];
     $cep = $dados ['cep'];
     $cidade = $dados ['cidade'];
     $estado = $dados ['estado'];
      }
      ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="http://localhost/like/img/logoPNG.png">

  <title>Like Hotel Hotel</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">Like Hotel Hotel<sup>º</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Painel</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Cliente Hotel
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Meus Dados</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Meus Dados:</h6>
            <a class="collapse-item" href="index.php">Principal</a>
            <a class="collapse-item" href="opcionais.php">Opcionais</a>
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" value="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerta
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">Setembro 12, 2020</div>
                    <span class="font-weight-bold">Visual Novo</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">Setembro 7, 2020</div>
                    Desconto R$20,00
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">Setembro 2, 2020</div>
                    Promoção verão 2020
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Alertas</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nome;?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configurações
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Painel</h1>
          </div>


          <!-- Content Row -->

              <!-- Illustrations -->
              <div class="" style="margin:-20px 20px 80px 0px;padding:100px;background-color:#fff;border-radius:10px">
                <div class="col  form-group">
                  <h2 class="display-4 text-center">Cadastro do Cliente</h2><br><br>
                  <form action="?go=cadastrar" method="POST">
                    <div class="row">
                      <div class="col-4 form-group">
                        <label for="">Cpf / Cnpj</label>
                        <input type="text" class="form-control" id="cpf _cnpj" name="cpf_cnpj" value="<?php echo $cpf; ?>" maxlength="20" disabled>
                      </div>

                      <div class="col form-group">
                        <label for="">Nome Completo / Razão Social</label>
                        <input type="text" class="form-control" id="nome_razao" name="nome_razao" value="<?php echo $nome; ?>" disabled>
                      </div>
                      <div class="col-2 form-group">
                        <label for="">Rg / Ie</label>
                        <input type="text" class="form-control" id="rg_ie" name="rg_ie" value="<?php echo $rg; ?>" disabled>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-8 form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                      </div>
                      <div class="col form-group">
                        <label for="">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone; ?>" required maxlength="15">
                      </div>
                      <div class="col form-group">
                        <label for="">Celular</label>
                        <input type="text" class="form-control" id="celular" name="celular" value="<?php echo $celular; ?>" required maxlength="15">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-9 form-group">
                        <label for="">Rua</label>
                        <input type="text" class="form-control" id="rua" name="rua" value="<?php echo $rua; ?>" required>
                      </div>
                      <div class="col form-group">
                        <label for="">Numero</label>
                        <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $numero; ?>" maxlength="6" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col form-group">
                        <label for="">Bairro</label>
                        <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $bairro; ?>" required>
                      </div>
                      <div class="col form-group">
                        <label for="">Complemento</label>
                        <input type="text" class="form-control" id="complemento" name="complemento" value="<?php echo $complemento; ?>" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col form-group">
                        <label for="">Cep</label>
                        <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $cep; ?>" maxlength="10" required>
                      </div>
                      <div class="col form-group">
                        <label for="">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $cidade; ?>" required>
                      </div>
                      <div class="col-2 form-group">
                        <label for="">Estado</label>
                        <input type="text" class="form-control" id="estado" name="estado" value="<?php echo $estado; ?>" maxlength="2" required>
                      </div>
                    </div><br>
                    <div class="row">
                      <div class="col-8"></div>
                      <div class="col-2 text-center">
                        <input type="submit" value="Editar" class="btn bg-primary btn-block text-white">
                      </div>
                      <div class="col-2 text-center">
                        <a href="./"> <input type="button" value="Voltar" class="btn bg-warning btn-block text-white"></a>
                      </div>
                    </div>
                  </form>
                  <br>
                  <div class="row">
                    <div class="col-10"></div>
                    <div class="col-2">
                    <img src="http://localhost/like/img/logoPNG.png" width="50" height="50" class="img-center img-fluid rounded float-right">
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>


          <div class="row">

<div class="col-lg-12 mb-4">


  <?php


  if (@$_GET['go'] == 'cadastrar') {

$email=$_POST['email'];
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$complemento=$_POST['complemento'];
$cep=$_POST['cep'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado']; 
date_default_timezone_set('America/Bahia');
$data= date ('Y-m-d');
$hora= date ('H:i:s');


    // UPDATE cliente SET `cpf_cnpj` = '12345678909', `nome_razao` = 'Rafael Inacio', `rg_ie` = '000.000.000-01', `email` = 'fatec@adsmanha.com', `telefone` = '(19) 99706-32381', `rua` = 'Rua fatec ', `numero` = '10', `bairro` = 'centro', `complemento` = 'escola', `cep` = '13848-000', `cidade` = 'Mogi Mirim', `estado` = 'SP' WHERE (`id_cliente` = '1');
mysqli_query($conexao, " update cliente set
email='$email',
telefone='$telefone',
celular='$celular',
rua='$rua',
numero='$numero',
bairro='$bairro',
complemento='$complemento',
cep='$cep',
cidade='$cidade',
estado='$estado',
data ='$data',
hora = '$hora'
WHERE (`cpf_cnpj` = '$cpf')");
    echo "<script>
        alert('Cadastrada Alterado!');
           </script>";
    echo "<meta http-equiv='refresh' content='0, url=cards.php'>";
  }
  ?>

  <?php
        $pesquisar= $_SESSION["func"];;
        $resultado="SELECT * FROM cliente WHERE cpf_cnpj LIKE '$pesquisar';";
        $relatorio=mysqli_query($conexao,$resultado);
  
        while($dados=mysqli_fetch_assoc($relatorio)){
       $cpf = $dados ['cpf_cnpj'];
       $nome = $dados ['nome_razao'];
       $rg = $dados ['rg_ie'];
       $email = $dados ['email'];
       $telefone = $dados ['telefone'];
       $celular = $dados ['celular'];
       $rua = $dados ['rua'];
       $numero = $dados ['numero'];
       $complemento = $dados ['complemento'];
       $bairro = $dados ['bairro'];
       $cep = $dados ['cep'];
       $cidade = $dados ['cidade'];
       $estado = $dados ['estado'];
       date_default_timezone_set('America/Bahia');
       $data= date ('Y-m-d');
       $hora= date ('H:i:s');
        }
  ?>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; ADS MANHA GRUPO 5</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Pronto para partir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione "Sair" abaixo se você estiver pronto para encerrar sua sessão atual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="sair.php">Sair</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>