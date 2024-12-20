<?php
    session_start();
    //print_r($_SESSION);

    if((!isset($_SESSION['emailUsuario']) == true) and (!sset($_SESSION['senhaUsuario']) == true)){
        unset($_SESSION['emailUsuario']);
        unset($_SESSION['senhaUsuario']);
        header('location: http://localhost\conexaoAutistaBeta-main\telaDeLogin\login.php');
    }
    $logado = $_SESSION['emailUsuario'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="IMG/Logo Conexão Autista 2.png" type="image/x-icon">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Home</title>
</head>

<body>
    <header>
        <nav class="navegacao">

            <div class="ftLogo">
                <img src="img/Logo Conexão Autista 2.png" alt="">
                <a href="#" class="logo">CONEXÃO AUTISTA</a>
            </div>
            <div class="control">
            <ul class="menu">
                <li class="navItem"><a href="/telaDiario/diario.html">Diário</a></li>
                <li class="navItem"><a href="/telaRemedios/remedios.html">Remédios</a></li>
                <li class="navItem"><a href="/telaHumor/humor.html">Humor</a></li>
                <li class="navItem"><a href="/telaCompromissos/compromissos.html">Compromissos</a></li>
                <li class="navItem"><a  href="/telaDePerfil/perfil.html"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAABtElEQVR4nO2WvUoDQRSFP0gUFIxR+1RGQRsxvoWNIKYyrYi1Jr6AjRbBmNIXsFZQEyP4AloZYxt7wZ8uJCsDd2FZ3J2ZHUWEHDiwsHvuubNz596BIf4Z5oEKcAM8AZ9C9dwEysDcbxivAC3AM6RKsPATxiNAHRhYmPtUmhqQTmo+BdwmMP7ub2STrLz1A+Y+74BRmwTqmoBdYB2YEK4BHY3m2KbgBhrz6Ygt68bo+sCySQItzUrUyqOwodGqo6o9556G6pdHIWOgz8clUHFMYNJAvxeXQNMggCq4KBQN9I24BJ4NAnSk4MKYAV4M9ZF4NzzXXSm4jLBoaO6Jh3MCngPfXLfAc6SanE5F6DnyOi6Bskb8CpwDB8AOsCncB06AC/kmLsZukkb0IB1QDSkdUsAqcJ+kESHjMyh4BMawxzjQtvn9PgqhYXRIchyFhtGSqbAWEF46JHAViFO1EaZDW7GVwHw71H6tr2bZUBKnQM5Al5Nvg+bWVzIfabnJ9CVYDzgDSsCCVHxKnkvyrhfY86rLpTSIRTn/ps2maXr7sUVe5nlDWuqHsC1HTDWZWeuoQ/CH+AKQzYNiWYJvQAAAAABJRU5ErkJggg==" alt="test-account"></a></li>
            </ul>
            <ul>
                <li><a href="http://localhost\conexaoAutistaBeta-main\sistemaSenhas\sair.php"><button>SAIR</button></a></li>
            </ul>
        </div>
        </nav>
    </header>
    <?php
    echo "<h2>Bem vindo, $logado!</h2>";
    ?>
    <a href="http://localhost\conexaoAutistaBeta-main\telaAdmin\admin.php"><button type="button">ADMIN</button></a>
    <script src="script.js"></script>
</body>

</html>