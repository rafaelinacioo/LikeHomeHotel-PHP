<?php
    $conexao=@mysqli_connect("localhost","root","","like_hotel");
    mysqli_select_db($conexao,"like_hotel") or die ("Erro no Sistema codigo 00011..322");
    if(!$conexao){
           die("Falha na conexão".mysqli_connect_error());
    }else
?>