<?php

    if(!empty($_GET['idUsuario']))
    {
        include_once('C:\xampp\htdocs\conexaoAutistaBeta-main\config.php');

        $idUsuario = $_GET['idUsuario'];

        $sqlSelect = "SELECT * FROM usuarios WHERE idUsuario =$idUsuario";

        $result = $conecxao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM usuarios WHERE idUsuario =$idUsuario";
            $resultDelete = $conecxao->query($sqlDelete);
        }
    }
    header('Location: http://localhost/conexaoAutistaBeta-main/telaAdmin/admin.php')
?>