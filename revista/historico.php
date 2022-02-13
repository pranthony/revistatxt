<?php require 'include/head.html' ?>
    <body id="body">
        <?php require "./include/header.html"; ?>
        <main class="contenedor">
            <section class="articulo">
                <div class="historico tab" id="historico">
                    <div class="path">
                        <a href="">
                            <h4>Inicio</h4>
                        </a>
                        <span>/</span>
                        <p class="destino">Histórico</p>
                    </div>
                    <p>

                    </p>
                    <br>
                    <!--Iterar los elementos historicos aqui-->
                    <ul class="historico__revista">
                    <?php 
                        require './clases/service.php';
                        $data = new Crud();
                        
                        foreach ($data->readAll('Revista') as $value) {?>  
                            <li>
                                <a href="detail_view.php?id=<?php echo $value->id_revista; ?>">
                                    <img src="./img/portadas/<?php echo $value->imagen;?>.jpg" alt="" class="w-100p h-100p">
                                    <h4 class=""><?php echo $value->imagen;?></h4>
                                </a>
                            </li>
                            
                        <?php } 
                        $data->closeConnection();
                        ?> 
                    </ul> 
                    <br>


                </div>
            </section>
            <?php require 'include/aside.html' ?>
        </main>
        <?php require 'include/footer.html' ?>
    </body>

</html>