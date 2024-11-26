<?php
    session_start();
    unset($_SESSION['emailUsuario']);
    unset($_SESSION['senhaUsuario']);
    header('location: http://localhost\conexaoAutistaBeta-main\telaDeLogin\login.php');
?>