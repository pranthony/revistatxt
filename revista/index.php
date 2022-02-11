<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="./estilos.css">
    <title>Lava | RevistaTXT</title>
</head>
    <body id="body">
        <?php require "./include/header.html"; ?>
        <main class="contenedor">
            <section class="articulo">
                <?php require 'include/inicio.php' ?>
                <?php require 'include/acerca.html' ?>
                <?php require 'include/actual.php' ?>
                <?php require 'include/archivo.php' ?>
                <?php require 'include/normas.html' ?>
                <?php require 'include/informacion.html' ?>
            </section>
            <?php require 'include/aside.html' ?>
        </main>
        <?php require 'include/footer.html' ?>
    </body>
    <script src="index.js">
    </script>
</html>