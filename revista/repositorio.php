<?php require 'include/head.html' ?>
    <body id="body">
        <?php require "./include/header.html"; ?>
        <main class="contenedor">
            <section class="articulo">
                <div class="anteriores tab" id="anteriores">
                    <div class="path">
                        <a href="">
                            <h4>Inicio</h4>
                        </a>
                        <span>/</span>
                        <p class="destino">Repositorio</p>
                    </div>
                    <!--Dejar un espacio para un texto de presentacion-->
                    <p>

                    </p>
                    <img src="" alt="">
                    <h3 class="titulo-h3"></h3>
                    <ul class="actual__articulos">

                        <!--Iterar los articulos aqui-->
                        <li class="contenedor__articulo">
                            <a class="articulo__link" href="#">
                                <h4></h4>
                            </a>
                            <p class="articulo__autor"></p>
                            <a href="" class="articulo__recurso"></a>
                        </li>

                    </ul>
                </div>
            </section>
            <?php require 'include/aside.html' ?>
        </main>
        <?php require 'include/footer.html' ?>
    </body>
</html>