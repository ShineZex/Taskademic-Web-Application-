<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Disciplinas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <style>
        button {

            border-radius: 5px;
            border: 1px solid #006600;
            background-color: #339900;
            color: #fff;
            height: 50px;
            width: 250px;
            font-size: 20px;
        }

    </style>

</head>

<body background="img/task2.jpg">
    <header style="margin-top: 15px;">
        <img alt="logo" src="img/taskademic.png" style="width: 230px; height: 95px; ">
        <nav class="topnav">
            <a href="tarefas.php">Tarefas</a>
            <a href="cursos.php">Cursos</a>
            <a class="active" href="disciplinas.php">Disciplinas</a>
            <div style="display: inline; float: right;">

                <a href="home.php"><img src="img/logout.png" alt="logOut" style="width: 20px; display: inline; margin-top: 0px; vertical-align: top;">&nbsp;&nbsp;&nbsp;Logout</a>
            </div>
            <a style="float: right;" href="perfil.php">
                <img src='img/user.png' alt="user" style="width: 22px; display: inline; margin-top: 0px; vertical-align: top;">&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['nome'];?>
            </a>
        </nav>
    </header>
    <div align="center" style="margin-top: 5%">
        <a href="ad_disciplinas.php"><button><b>Adicionar Disciplina/s</b></button></a><br><br>
        <a href="listar_disciplinas.php"><button><b>Listar e Eliminar Disciplina/s</b></button></a><br>
    </div>
</body>

</html>
