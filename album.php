<?php
include 'conexion.php';

    
    require_once 'master.php';
function mostrarContenido(){
    

    global $conexion;
    $album_sql = "SELECT a.nombre AS nombreAlbum, a.fotoAlbum, a.urlVideo, b.nombre FROM album a JOIN banda b ON a.idBanda = b.idBanda WHERE idAlbum =".$_GET['idAlbum'];
    if($album_query = mysqli_query($conexion, $album_sql))
    {
        $album_rs = mysqli_fetch_assoc($album_query);
    }
    
    if(mysqli_num_rows($album_query)== 0)
    {
        echo "No existe este elemento o ha sido eliminado.";
    }
    else
    {
        ?>
<h1><?php echo $album_rs['nombreAlbum'];?></h1>
<?php
do{
    ?>

<div class="col-lg-6">
    <p><img src="imagen/<?php echo $album_rs['fotoAlbum'];?>"</p>    
    <p>Banda: <?php echo $album_rs['nombre']; ?></p>
    <p><iframe width="600" height="400" src="<?php echo $album_rs['urlVideo'];?>"></iframe></p>
</div>
<?php
}
while($album_rs = mysqli_fetch_assoc($album_query));
?>

<?php
    }
    
}



