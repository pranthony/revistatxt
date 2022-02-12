<div class="articulo__achivo">
    <div class="anteriores tab no-display" id="anteriores">
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
    <div class="historico tab no-display" id="historico">
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
</div>