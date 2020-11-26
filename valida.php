<script type="text/javascript">
    function confirmacao(){
        $.notify({
        // options
        message: 'Enviado com sucesso!..' 
        },{
        // settings
        type: 'success'
        });

        return false
    }
    $('.alert').alert();
    </script>

<?php
    session_start();
    $_SESSION['user_log']=null;
    
    include_once "cliente/conexao.php";

    $user=$_POST['login'];
    $pwd=md5($_POST['senha']);
    
    

    if(empty($user)){
        $_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha incorreto!</div>";
        header("Location: index.php");

    }else if(empty($pwd)){
        echo "<script>
                alert ('Digite uma Senha.');
                history.back();
                </script>";
        
            }else{
                $consulta=mysqli_query($conexao, "select * from usuario where cpf_cnpj='$user' and senha='$pwd'");
                $num = mysqli_num_rows($consulta);
        
                 if($num==1){
                     
                     while($percorrer = mysqli_fetch_array($consulta)){
                         $adm = $percorrer['habilitar_login'];
        
                         if($adm ==1){
                            echo "<meta http-equiv='refresh' content='0, url=./admin/'>";
                            $_SESSION['adm'] = $user;
                            $_SESSION['senha'] = $pwd;
        
                         }
                         if($adm == 2){
                            echo "<meta http-equiv='refresh' content='0, url=./cliente/'>";
                            $_SESSION['func'] = $user;
                            $_SESSION['senha'] = $pwd;
        
                         }
                         if($adm == 0){
                            $_SESSION['msg'] = "<div class='alert alert-danger'>Login ou senha incorreto!</div>";
                            header("Location: index.php");
                         }         
                        
                     }
                }else{
                    echo "<meta http-equiv='refresh' content='0, url=index.php'>";
                }
            }
        
        
        
        ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>