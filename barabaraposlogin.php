<?php
        session_start();
        if (!isset($_SESSION['login'])) {
            header('location: login.php');
            echo "pare de tentar burlar o site";
        } else {
            include_once "conexao.php";
            $consultar = $conn->prepare("SELECT * FROM usuario WHERE id_cadastro = :id");
            $consultar->bindValue(":id", $_SESSION['login']);
            $consultar->execute();
            $row = $consultar->fetch();
        }
?>

<!DOCTYPE html>
<html>
<head>
    <title>BaraBara</title>
    <style>
        body {
            background-color: black;
            color: purple;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: purple;
            color: black;
            text-align: center;
            padding: 10px;
        }

        h1 {
            margin: 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul a {
            text-decoration: none;
            color: purple;
            padding: 10px 20px;
        }

        nav ul a:hover {
            background-color: purple;
            color: black;
        }

        footer {
            background-color: purple;
            color: black;
            text-align: center;
            padding: 10px;
        }


    </style>
        <meta charset = "UTF-8">

</head>
<body>
    <header>
        <h1>Faça uma Doação</h1>
    </header>

    <nav>
        <ul>
            <?php echo "Olá $row[nm_usuario]";?>
            <a href="sobrenospos.html">Sobre Nós</a>
            <a href="contatopos.html">Contato</a>
            <a href="sair.php">Sair</a>
            <a href="publicacoes.php">Publicar Ou Conferir Causas</a>
            <a href="config_usuario.php">Configurações De Usuario</a>
        </ul>
    </nav>

    <footer>
        <p>&copy; BaraBara</p>
    </footer>
</body>
</html>
