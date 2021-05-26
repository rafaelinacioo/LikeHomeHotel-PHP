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

$pesquisar = $usuario;
$resultado = "SELECT * FROM opcional WHERE cpf LIKE '$pesquisar';";
$relatorio = mysqli_query($conexao, $resultado);

while ($dados = mysqli_fetch_assoc($relatorio)) {
  $estacao = $dados['estacao'];
  $item = $dados['item'];
  $temperadura = $dados['temperadura'];
  $viagem = $dados['viagem'];
  $filhos = $dados['filhos'];
  $animais = $dados['animais'];
  $esporte = $dados['esporte'];
  $imersiva = $dados['imersiva'];
  $local = $dados['local'];
  $delivery = $dados['delivery'];
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
  <link rel="shortcut icon" href="../img/logoPNG.png">

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
            <a class="collapse-item" href="cards.php">Principal</a>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nome; ?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="cards.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
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

          <?php


?> 

          <!-- Illustrations -->
          <div class="" style="margin:-20px 20px 80px 0px;padding:100px;background-color:#fff;border-radius:10px">
            <div class="col  form-group">
              <h2 class="display-4 text-center">Opcionais</h2><br><br>
              <form action="?go=cadastrar" method="POST">
                <div class="row">
                  <div class="col-4 form-group">
                  <?php
                    function selected( $value, $selected ){
                        return $value==$selected ? ' '.$selected.'' : '';
                    }?>
                    <label for="">Qual estação do ano você prefere? </label>
                  
                    <select class="form-control" name="estacao" id="estacao">
                      <option value="0"<?=($estacao == '0')?'selected':''?>>Escolha:</option>
                      <option value="1"<?=($estacao == '1')?'selected':''?>> Verão</option>
                      <option value="2"<?=($estacao == '2')?'selected':''?>> Outono</option>
                      <option value="3"<?=($estacao == '3')?'selected':''?>> Inverno</option>
                      <option value="4"<?=($estacao == '4')?'selected':''?>> Primavera</option>
                    </select>
                  </div>

                  <div class="col-2 form-group">
                    <label for="">Alérgico algum item?</label>
                    <input type="text" class="form-control" id="item" name="item" value="<?php echo $item; ?>">
                  </div>
                  <div class="col form-group">
                    <label for="">Qual a temperatura que o cliente gosta de estar no quarto?</label>
                    <input type="text" class="form-control" id="temperadura" name="temperadura" value="<?php echo $temperadura; ?>">
                  </div>

                </div>
                <div class="row">
                  <div class="col-4 form-group">
                    <label for="">Você está por viagem? </label>
                    <select class="form-control" name="viagem" id="viagem">
                      <option value="0"<?=($viagem == '0')?'selected':''?>>Escolha:</option>
                      <option value="1"<?=($viagem == '1')?'selected':''?>>Trabalho</option>
                      <option value="2"<?=($viagem == '2')?'selected':''?>>Lazer</option>
                      <option value="3"<?=($viagem == '3')?'selected':''?>>Estudos</option>
                      <option value="4"<?=($viagem == '4')?'selected':''?>>Outros</option>
                    </select>
                  </div>
                  <div class="col form-group">
                    <label for="">Você traz animais?</label>
                    <input type="text" class="form-control" id="animais" name="animais" required maxlength="15" value="<?php echo $animais; ?>">
                  </div>
                  <div class="col form-group">
                    <label for="">Você traz os seus filhos?</label>
                    <input type="text" class="form-control" id="filhos" name="filhos" required maxlength="15" value="<?php echo $filhos; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-8 form-group">
                    <label for="">Atividade que gosta de praticar?</label>
                    <input type="text" class="form-control" id="esporte" name="esporte" required value="<?php echo $esporte; ?>">
                  </div>
                  <div class="col-4 form-group">
                    <label for="">Gostaria de uma experiència imersiva na cultura local? </label>
                    <select class="form-control" name="imersiva" id="imersiva">
                      <option value="0"<?=($imersiva == '0')?'selected':''?>>Escolha:</option>
                      <option value="1"<?=($imersiva == '1')?'selected':''?>>Sim</option>
                      <option value="2"<?=($imersiva == '2')?'selected':''?>>Não</option>
                      <option value="3"<?=($imersiva == '3')?'selected':''?>>Talvez</option>
                      <option value="4"<?=($imersiva == '4')?'selected':''?>>Outros</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col form-group">
                    <label for="">Você possui um meio de se locomover pela cidade?</label>
                    <input type="text" class="form-control" id="local" name="local" required value="<?php echo $local; ?>">
                  </div>
                  <div class="col-4 form-group">
                    <label for="">Gostaria de entregas delivery no quarto?</label>
                    <select class="form-control" name="delivery" id="delivery" >
                      <option value="0"<?=($delivery == '0')?'selected':''?>>Escolha:</option>
                      <option value="1"<?=($delivery == '1')?'selected':''?>>Sim</option>
                      <option value="2"<?=($delivery == '2')?'selected':''?>>Não</option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-8"></div>
                  <div class="col-2 text-center">
                    <input type="submit" value="Salvar" class="btn bg-primary btn-block text-white">
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
                  <img src="../img/logoPNG.png" width="50" height="50" class="img-center img-fluid rounded float-right">
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

            $estacao=$_POST['estacao'];
            $item=$_POST['item'];
            $temperadura=$_POST['temperadura'];
            $viagem=$_POST['viagem'];
            $animais=$_POST['animais'];
            $filhos=$_POST['filhos'];
            $esporte=$_POST['esporte'];
            $imersiva=$_POST['imersiva'];
            $local=$_POST['local'];
            $delivery=$_POST['delivery']; 
            date_default_timezone_set('America/Bahia');
            $data= date ('Y-m-d');
            $hora= date ('H:i:s');


            // UPDATE cliente SET `cpf_cnpj` = '12345678909', `nome_razao` = 'Rafael Inacio', `rg_ie` = '000.000.000-01', `email` = 'fatec@adsmanha.com', `telefone` = '(19) 99706-32381', `rua` = 'Rua fatec ', `numero` = '10', `bairro` = 'centro', `complemento` = 'escola', `cep` = '13848-000', `cidade` = 'Mogi Mirim', `estado` = 'SP' WHERE (`id_cliente` = '1');
            mysqli_query($conexao, " update opcional set 
            `estacao`='$estacao', 
            `item`='$item',
            `temperadura`='$temperadura',
            `viagem`='$viagem',
            `animais`='$animais',
            `filhos`='$filhos',
            `esporte`='$esporte',
            `imersiva`='$imersiva',
            `local`='$local',
            `delivery`='$delivery',
            `data` ='$data',
            `hora` = '$hora'
             WHERE (`cpf` = '$cpf')");
            echo "<script>
      alert('Cadastrada Alterado!');
         </script>";
            echo "<meta http-equiv='refresh' content='0, url=opcionais.php'>";
          }
          ?>

          <?php
          $pesquisar = $_SESSION["func"];;
          $resultado = "SELECT * FROM cliente WHERE cpf_cnpj LIKE '$pesquisar';";
          $relatorio = mysqli_query($conexao, $resultado);

          while ($dados = mysqli_fetch_assoc($relatorio)) {
            $cpf = $dados['cpf_cnpj'];
            $nome = $dados['nome_razao'];
            $rg = $dados['rg_ie'];
            $email = $dados['email'];
            $telefone = $dados['telefone'];
            $celular = $dados['celular'];
            $rua = $dados['rua'];
            $numero = $dados['numero'];
            $complemento = $dados['complemento'];
            $bairro = $dados['bairro'];
            $cep = $dados['cep'];
            $cidade = $dados['cidade'];
            $estado = $dados['estado'];
            date_default_timezone_set('America/Bahia');
            $data = date('Y-m-d');
            $hora = date('H:i:s');
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