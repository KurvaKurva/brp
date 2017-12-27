<?php
include ("conexion.php");
require_once 'zebra_pagination.php';

function mostrarContenido(){
    global $conexion;
    $query = "SELECT * FROM album;";
$res = $conexion->query($query);
$registros = mysqli_num_rows($res);
$perPage = 2;
$pagination = new Zebra_Pagination();
$pagination->records($registros);
$pagination->records_per_page($perPage);
$consulta = 'SELECT a.nombre AS nombreAlbum,b.nombre AS nombreBanda, a.lanzamiento, a.fotoAlbum, a.anio, b.pais, b.genero, a.idAlbum FROM `album` AS a JOIN banda AS b ON a.idBanda = b.idBanda GROUP BY a.lanzamiento DESC LIMIT '.(($pagination->get_page()-1)*$perPage).', '.$perPage;
//$consulta = "SELECT * FROM album ORDER BY lanzamiento DESC LIMIT " .(($pagination->get_page() -1) *$perPage).', '.$perPage;
$resultado = $conexion->query($consulta);
//var_dump($consulta);die;
?>
<h1>Catálogo</h1>
<?php

while($row = mysqli_fetch_array($resultado)){
    ?>
    <div class="col-lg-6">
    <p><img class="thumb" src="imagen/<?php echo $row['fotoAlbum']; ?>"/></p>
    <p>Álbum: <?php echo $row['nombreAlbum']; ?></p>
    <p>Banda: <?php echo $row['nombreBanda']; ?></p>
    <p>Género: <?php echo $row['genero']; ?></p>        
    <?php
          $info = strtolower(str_replace(' ', '-', $row['nombreAlbum']));
//          var_dump($row['idAlbum']);
    ?>
    <!--<p><a href="index.php?idAlb=<?php echo $info;?>">Ver</a></p>-->
    <!--<p><a href="index.php?idAlb=<?php echo $row['idAlbum']?>">Ver</a></p>-->
    <!--<p><a href="album.php?album&idAlb=<?php echo $row['idAlbum'];?>">Ver </a></p>-->
    <p><a id="<?php echo "album-".$row['idAlbum'];?>" href="album.php">Ver</a></p>
    <p><?php echo $row['idAlbum'];?></p>
    
</div>
    <?php
}
$pagination->render();
}
require_once 'master.php';
?>
<script type="text/javascript">
//    $(document).ready(){
//        $('a ')
//    }
//sasd
</script>


