<!DOCTYPE html>

<?phpsession_start();
    ///*
    if(isset($_SESSION["Rol"])){
        if($_SESSION["Rol"]==0) {
            header("location:cliente.php");
        }
    }else{
        header("location:cerrar.php");
    }
 ?>  

<html>

    <head>

        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta charset="UTF-8">
        <title>Eliminar</title>

    </head>

    <body>
    <div id="contenedor">

        <?php
            include 'conexion.php';
            $con=new Conectar();
            $con->ConectarBD();
            $sql="delete from boletos where Serial='".$_GET["boleto"]."'";
            $result=$con->getConexion()->query($sql);
            echo '<h1 class="titulos">Se ha borrado correctamente el registro seleccionado<br><br></h1> <a href="listado.php">Volver</a>';
           
        ?>
    </div>
    </body>
    
</html>
