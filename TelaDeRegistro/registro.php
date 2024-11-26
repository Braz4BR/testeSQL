<?php
    if(isset($_POST['submit'])){
        //print_r($_POST['nomeUsuario']);
        //print_r($_POST['emailUsuario']);
        //print_r($_POST['senhaUsuario']);
        
        include_once('C:\xampp\htdocs\conexaoAutistaBeta-main\config.php');
        $nomeUsuario = $_POST['nomeUsuario'];
        $emailUsuario = $_POST['emailUsuario'];
        $senhaUsuario = $_POST['senhaUsuario'];
        $senhaReplyUser = $_POST['senhaReplyUser'];

        $result = mysqli_query($conecxao,"INSERT INTO  usuarios(nomeUsuario,emailUsuario,senhaUsuario,senhaReplyUser) VALUES ('$nomeUsuario','$emailUsuario','$senhaUsuario','$senhaReplyUser')");

        header('location: http://localhost\conexaoAutistaBeta-main\telaDeLogin\login.php');
    }
?>

<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="CSS/style.css">
    <script defer src="app.js"></script>
    <link rel="shortcut icon" href="IMG/Logo Conexão Autista 2.png" type="image/x-icon">
    <title>Cadastre-se</title>
</head>

<body>


    <div class="controlGeral">
        <form class="form_main" action="registro.php" method="POST">
            <p class="heading">Cadastro</p>
            <div class="inputContainer">
                <img viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAtUlEQVR4nO2SMQrCQBBFH9hYWmijps4h9BZ6Dc/geSKBlOI5tNRCaw0mXdKsCCOEJY5CRmz2wa9m979iBgJGREAKlJIMiC3Lb4DzksusM2lL+SsbC0GpCIpfC+4WgkwRJBaCWBbql1+BKUZEstBCkliWB97SA+bAGhi2zEcym8nbr+kDK+DSuJgjsAAGkiVwaszP8uf5V2UCHJS7dx+yB8aaYNeh3Em2mqA2EFSawBnlf4IAPg+2rZMxUS9otwAAAABJRU5ErkJggg=="
                    alt="user--v1" class="inputIcon">
                <input placeholder="Nome Completo" id="username" class="inputField" type="text" name="nomeUsuario" required>
            </div>

            <div class="inputContainer">
                <img viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAABVElEQVR4nO3Vv0qbYRTH8Y9DijgIdnCoIBShIFLwIlx6Ab0C2zqKk9DJrfES3JyKi046dlNQpEiHUBSxiEkJ2OIgKkLrK5ETeY35IzEJCjnw4z2c5zzn+7zPX7r2HOwF5vEbSYtVQDYYN07SZmVLoHwHQEfC2cVWGwA7oZJ/G/yOj/jRAsBPzGAzFbuT8Afv8B6/mgDk8QkTKFa03Uu+isXrxTROHgA4xRz6MIt/VXJqdl7FAF4G+LxKziUWMIh+LNepV3ek+xiL8zaMRfwPLUZM5Ow3qFW3MRejzaAnir4NiVgmcnLNgvbwCq+xgXWMpm6UEXzDNt48AFZzyoYwGQtdjl/gc+iiYjNMRp9aU3gvcIhxfG1ie69E34NGoNJV8SG+SZMqYqrKObx1/mIpdlTySF1hDcdpUCGcsxYAkgqVaxY69Ux8KT982dSfte3h69rTtmu4aZikJN1IiQAAAABJRU5ErkJggg=="
                    alt="new-post" class="inputIcon">
                <input placeholder="Email" id="username" class="inputField" type="email"name="emailUsuario"required>
            </div>
            <div class="inputContainer">
                <svg viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16" xmlns="http://www.w3.org/2000/svg"
                    class="inputIcon">
                    <path
                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                    </path>
                </svg>
                <input placeholder="Senha" id="password" class="inputField" type="password" name="senhaUsuario"required>
            </div>

            <div class="inputContainer">
                <svg viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16" xmlns="http://www.w3.org/2000/svg"
                    class="inputIcon">
                    <path
                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                    </path>
                </svg>
                <input placeholder="Confirmar senha" id="password" class="inputField" type="password" name="senhaReplyUser"required>
            </div>

            <p class="chamadaParaLogin">Já possui uma conta? <a href="\telaDeLogin\login.html" class="linkParaLogin">faça login agora!</a></p>
            <input id="button" value="Registrar-se!"type="submit" value="" name="submit">
        </form>
    </div>


    <div class="divControlImg">


        <img src="IMG/fotoCadastro.webp" class="imgDestaquePage" alt="">
        <a href="http://localhost\conexaoAutistaBeta-main\index.html"><img src="IMG/Logo Conexão Autista 2.png" alt="Logo" class='logo' /></a>
    </div>


</body>

</html>