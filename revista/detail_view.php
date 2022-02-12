<?php $url = $_GET['id']; 

?>
<?php require 'include/head.html' ?>
    <body id="body">
        <?php require "include/header.html"; ?>
        <main class="contenedor">
            <section class="articulo">
                <?php
                require 'clases/service.php';
                $revista = new Crud();
                $rv = $revista->readById('Revista', $url);
                $articulos = $revista->readFromRv($url);
                ?>
                <h3 class="titulo-h3"> <?= $rv->titulo ?> </h3>
                <hr><br>
                <div class="detail__content">
                    
                    <a class="content__picture" href="./pdf/<?= $rv->pdf_link ?>" target="_blanck">
                        <div id="content-image">
                            <img class="w-100p content__image"  src="./img/portadas/<?= $rv->imagen ?>.jpg" alt="">
                            <!-- <img src="./img/view-eye" alt="" id="view-eye" class="no-display"> -->
                            <script>
                                let image = document.querySelector(".content__image");
                                image.addEventListener("mouseover", ()=>{{
                                    image.src = "./img/view-eye.png";
                                }})
                                image.addEventListener("mouseout", ()=>{{
                                    image.src = "./img/portadas/<?= $rv->imagen ?>.jpg";
                                }})
                            </script>
                        </div>
    
                        <div class="picture__button"><i class="fas fa-file-pdf"></i> PDF</div>
                    </a>
                    <p class="content__description">Lorem ipsum dolor sit amet.0</p>
                    
                </div>
                
                <br>
                <h3 class="titulo-h3">Índice</h3>
                <hr>
                <div class="detail__indice">
                    
                    <?php
                    
                    foreach ($articulos as $articulo) { ?>
                        <div class="indice__item">
                            <p><?=$articulo->titulo?></p>
                            
                            <p><?=$articulo->pag_inicio?></p>
                        </div>
                    <?php } 
                        $revista->closeConnection();
                    ?>
                </div>
            </section>
            <?php require 'include/aside.html' ?>
        </main>
        <?php require 'include/footer.html' ?>
    </body>
    <script src="./index.js">
    </script>
</html>

