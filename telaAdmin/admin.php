<?php
      session_start();
    include_once('C:\xampp\htdocs\conexaoAutistaBeta-main\config.php');  
      //print_r($_SESSION);
      if((!isset($_SESSION['emailUsuario']) == true) and (!sset($_SESSION['senhaUsuario']) == true)){
          unset($_SESSION['emailUsuario']);
          unset($_SESSION['senhaUsuario']);
          header('location: http://localhost\conexaoAutistaBeta-main\telaDeLogin\login.php');
      }
      $logado = $_SESSION['emailUsuario'];
    

    $sql = "SELECT * FROM usuarios ORDER BY idUsuario DESC";

    $result = $conecxao->query($sql);

    print_r($logado);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\style.css">
    <title>Admin</title>
</head>
<body>
<body>
	<table>
		<thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
		</thead>
		<tbody>
        <?php
            while($userData = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$userData['idUsuario']."</td>";
                echo "<td>".$userData['nomeUsuario']."</td>";
                echo "<td>".$userData['emailUsuario']."</td>";
                echo "<td>
                        <a class='btnIcon' href='http://localhost/conexaoAutistaBeta-main/TelaDeEditarCadastro/edit.php?idUsuario=$userData[idUsuario]'> EDITAR</a>
                </td>";
                echo "<td>
                        <a class='btnIcon' href='#'> DELETAR</a>
                </td>";
                echo "</tr>";
            }
            ?>
		</tbody>
	</table>
</body>
</html>