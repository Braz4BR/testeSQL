<?php
    include_once('C:\xampp\htdocs\conexaoAutistaBeta-main\config.php');

    if(isset($_POST['update'])){
        $idUsuario = $_POST['idUsuario'];
        $nomeUsuario = $_POST['nomeUsuario'];
        $emailUsuario = $_POST['emailUsuario'];

        $sqlUpdate = "UPDATE usuarios SET nomeUsuario='$nomeUsuario', emailUsuario='$emailUsuario' WHERE idUsuario='$idUsuario'";

        $result = $conecxao->query($sqlUpdate);
    }
        header('location: http://localhost\conexaoAutistaBeta-main\TelaDeEditarCadastro\edit.php');
?>