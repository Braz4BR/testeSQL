<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['emailUsuario']) && !empty($_POST['senhaUsuario'])){
        //acessa
        include_once('C:\xampp\htdocs\conexaoAutistaBeta-main\config.php');
        $emailUsuario = $_POST['emailUsuario'];
        $senhalUsuario = $_POST['senhaUsuario'];

        $sql = "SELECT * FROM usuarios WHERE emailUsuario = '$emailUsuario' and senhaUsuario = '$senhalUsuario'";

        $result = $conecxao->query($sql);

        //print_r($result);

        if(mysqli_num_rows($result) < 1){
            //print_r('não Existe');
            unset($_SESSION['emailUsuario']);
            unset($_SESSION['senhaUsuario']);
            header('location: http://localhost\conexaoAutistaBeta-main\telaDeLogin\login.php');
        }else{
            //print_r('Existe');
            $_SESSION['emailUsuario'] = $emailUsuario;
            $_SESSION['senhaUsuario'] = $senhalUsuario;
            header('location: http://localhost\conexaoAutistaBeta-main\telaHomeFunctions\home.php');
        }

    }else{
        header('location: http://localhost\conexaoAutistaBeta-main\telaDeLogin\login.php');
    }
?>