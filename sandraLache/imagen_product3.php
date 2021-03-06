<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de interaccion con DB</title>
    <style type="text/css">
    @import url("css/mycss.css");
    </style>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
*{
    margin: 0;
    padding: 0;
    width: 100%;
}
body{
    
    background: rgb(233, 242, 255);
    
}
.file_gran{
    width: 100%;
    height: 100%;
}

.enlace_nav a{
    color: #000;
}
.enlace_nav{
    border: solid 1px;
    width: 100px;
    border-top-left-radius: 9px;
    border-top-right-radius: 9px;
    box-shadow: 5px 5px 5px #555;
    justify-content: center;
    background: #fff;
}
.file_gran ul{
    display: flex;
    list-style: none;
    text-align: center;
}
.cuadro_vista{
    width: 90%;
    height: auto;
    background: #fff;
    position: relative;
    z-index: 100;
    box-shadow: 5px 5px 20px #555;
    border-radius: 20px;
}
.ul_nav_pro{
    padding-left: 120px;
}
.contenido_cuadro{
    border: solid;
    width: 90%;
    height: 140px;
    border-radius: 20px;
    padding: 20px;
    
}
.contenido_cuadro img{
    width: 100px;
    height: 100px;
    display: block;
}
.cuadro_pre_img{
    width: 100px;
    height: 100px;
    float: left;

}
.cuadro_pre_text{
    width: 76%;
    float: right;
}
.cuadro_pre_text a{
    width: 100px;
}
</style>
</head>
<body>
    <div class="conter">
    <div id="cabecera">
        <img src="images/swirl.png" width="1188" id="img1">
    </div>
    <div class="file_gran">
        <ul class="ul_nav_pro">
            <li class="enlace_nav"><a href="">Portafolio</a></li>
            <li class="enlace_nav"><a href="">Belleza</a></li>
            <li class="enlace_nav"><a href="">Nutricion</a></li>
            <li class="enlace_nav"><a href="">Destacados</a></li>
        </ul>
        <ul>
            <center>
            <li class="cuadro_vista">
                        <div id="contenido">

                            <?php
                            include "conexion.php";                                                
                                                
                            $sentencia="SELECT * FROM portafolio";
                            $resultado=mysql_query($sentencia);
                            while($filas=mysql_fetch_assoc($resultado))
                            {
                            ?>


                            <div class="contenido_cuadro">
                            <div class="cuadro_pre">
                                <div class="cuadro_pre_img">
                                    <img id='img_pro2' src="/SandraLache/images/<?php echo $filas['imgen']; ?>">
                                </div>
                                <div class="cuadro_pre_text">
                                    <ul>
                                        <li>id</li>
                                        <li>Nombre</li>
                                        <li>invima</li>
                                        <li>laboratorio</li>
                                        <li>precio</li>
                                    </ul>
                                    <ul>
                                        <li><?php echo $filas['id']; ?></li>
                                        <li><?php echo $filas['nombre']; ?></li>
                                        <li><?php echo $filas['invima']; ?></li>
                                        <li><?php echo $filas['laboratorio']; ?></li>
                                        <li><?php echo $filas['precio']; ?></li>
                                    </ul>
                                    <ul>
                                        <td> <a href="imagen_product.php?id=<?php echo $filas['id']; ?>"><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>
                                    </ul>
                                </div>
                            </div>
                            </div>


                            <?php
                            }
                            ?>


                        </div>

            </li>
            </center>
        </ul>
    </div>

    <div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>
    </div>
</body>
</html>