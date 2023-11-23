
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyTutos</title>
    <link rel="stylesheet" href="css/styles2.css">
    <link rel="stylesheet" href="css/perfil.css">
    <script src="../../js/script2.js" type="text/javascript" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Noto+Sans:wght@400;600&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div id="cuerpo">
        <div id="marca">
            <nav id="navegacion">
                <div id="logo">
                    <a href="#"><img src="img/logod.png" alt="Logo pai"></a>
                </div>
                <ul class="menu">
                <li class="menuitem">
                        <h3>bienvenido <?php echo $_SESSION['NOMBRE_COMPLETO'];  ?></h3>
                    </li>
                    <li class="menuitem">
                        <a href="index.php" class="nav-link">Inicio</a>
                    </li>
                    <li class="menuitem">
                        <a href="#monitores" class="nav-link">Monitores</a>
                    </li>
                    <li class="menuitem">
                        <a href="#eventos" class="nav-link">Eventos</a>
                    </li>
                    <li class="menuitem">
                        <a href="perfil.php" class="nav-link">Ver perfil</a>
                    </li>
                    <li class="menuitem">
                        <a href="../controlador/action/act_logout.php" class="nav-link">cerrar sesion</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="grid">
            <div id="fondos">
            </div>
            <div id="perfil">
                <p id="moni">VER PERFIL</p>
                
               <div id="datosusuario" border ="1">
                 <form action="">
                     <label for=""><strong>id</strong></label> <input id="id_usuario" type="text" name="id_usuario" readonly>
                     <label for=""><strong>nombre</strong></label><input id="nombre" type="text" name="nombre" readonly>
                     <label for=""><strong> username</strong></label> <input id="username" type="text" name="username" readonly>
                 </form>
                </div>
                
                

                
        </div>
    </div> 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/perfil.js"></script>
</body>
</html>

