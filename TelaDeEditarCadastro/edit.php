<?php
    if(!empty($_GET['idUsuario'])){

        
        include_once('C:\xampp\htdocs\conexaoAutistaBeta-main\config.php');

        $idUsuario = $_GET['idUsuario'];

        $sqlSelect = "SELECT * FROM usuarios WHERE idUsuario = '$idUsuario'";

        $result = $conecxao->query($sqlSelect);

        if($result->num_rows > 0){

            while($user_data = mysqli_fetch_assoc($result)){

            $nomeUsuario = $user_data['nomeUsuario'];
            $emailUsuario = $user_data['emailUsuario'];
            }
        }else{
            header('location: http://localhost\conexaoAutistaBeta-main\telaAdmin\admin.php');
        }
        

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
    <title>Editar Cadastro</title>
</head>

<body>


    <div class="controlGeral">

        <form class="form_main" action="http://localhost\conexaoAutistaBeta-main\sistemaSenhas\saveEdit.php" method="POST">
            <p class="heading">Edit Cadastro</p>
            <div class="inputContainer">
                <img viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAtUlEQVR4nO2SMQrCQBBFH9hYWmijps4h9BZ6Dc/geSKBlOI5tNRCaw0mXdKsCCOEJY5CRmz2wa9m979iBgJGREAKlJIMiC3Lb4DzksusM2lL+SsbC0GpCIpfC+4WgkwRJBaCWBbql1+BKUZEstBCkliWB97SA+bAGhi2zEcym8nbr+kDK+DSuJgjsAAGkiVwaszP8uf5V2UCHJS7dx+yB8aaYNeh3Em2mqA2EFSawBnlf4IAPg+2rZMxUS9otwAAAABJRU5ErkJggg=="
                    alt="user--v1" class="inputIcon">
                <input placeholder="Nome Completo" id="username" class="inputField" type="text" name="nomeUsuario" value="<?php echo $nomeUsuario ?>" required>
            </div>

            <div class="inputContainer">
                <img viewBox="0 0 16 16" fill="#2e2e2e" height="16" width="16"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAABVElEQVR4nO3Vv0qbYRTH8Y9DijgIdnCoIBShIFLwIlx6Ab0C2zqKk9DJrfES3JyKi046dlNQpEiHUBSxiEkJ2OIgKkLrK5ETeY35IzEJCjnw4z2c5zzn+7zPX7r2HOwF5vEbSYtVQDYYN07SZmVLoHwHQEfC2cVWGwA7oZJ/G/yOj/jRAsBPzGAzFbuT8Afv8B6/mgDk8QkTKFa03Uu+isXrxTROHgA4xRz6MIt/VXJqdl7FAF4G+LxKziUWMIh+LNepV3ek+xiL8zaMRfwPLUZM5Ow3qFW3MRejzaAnir4NiVgmcnLNgvbwCq+xgXWMpm6UEXzDNt48AFZzyoYwGQtdjl/gc+iiYjNMRp9aU3gvcIhxfG1ie69E34NGoNJV8SG+SZMqYqrKObx1/mIpdlTySF1hDcdpUCGcsxYAkgqVaxY69Ux8KT982dSfte3h69rTtmu4aZikJN1IiQAAAABJRU5ErkJggg=="
                    alt="new-post" class="inputIcon">
                <input placeholder="Email" id="username" class="inputField" type="email" value="<?php echo $emailUsuario ?>" name="emailUsuario" required>
            </div>
            <input id="button" value="Atualizar" type="submit" name="update">
            <input type="hidden" name="id" value="<?php echo $idUsuario ?>">
        </form>

    </div>


    <div class="divControlImg">


        <img src="IMG/fotoCadastro.webp" class="imgDestaquePage" alt="">
        <a href="http://localhost\conexaoAutistaBeta-main\index.html"><img src="IMG/Logo Conexão Autista 2.png" alt="Logo" class='logo' /></a>
    </div>


</body>

</html>