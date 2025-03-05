<!DOCTYPE html>
<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['precio'])) && ($_POST['precio'] != '')) {

    include "models/modelo.php";
    //include "controllers/controlador.php";
    if(preg_match('/^\d{0,8}(\.\d{1,4})?$/', $_POST['precio'])){
        if(preg_match('/[a-zA-Z]+/', $_POST['nombre'])){
            $nuevo = new Productos();
            $asd = $nuevo->setProducto($_POST['nombre'], $_POST['precio']);
        }else{
            echo "<script>alert('El nombre solo debe llevar letras');</script>";
        }
    }else{
        echo "<script>alert('El precio no cumple con el formato');</script>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
            <header class="text-center">
                <h1>Ejemplo de Tienda MVC con PHP</h1>
                <hr/>
                <p class="lead">Creamos una base de datos de los productos<br/>
                    que podría tener una tienda y <br/>
                    operamos con ella utilizando la estructura MVC</p>
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="POST" class="col-lg-5">
                        <h3>Nuevo Producto</h3>                
                        Nombre: <input type="text" name="nombre" class="form-control"/>    
                        Precio: <input type="text" name="precio" class="form-control"/>    
                        <br/>
                        <input type="submit" value="Crear" class="btn btn-success"/>
                <div class="col-lg-12 text-center">
                    <hr/>
                    <h3>Listado de productos</h3>
                    <a href="/views/vista.php"><i class="fa fa-align-justify"></i> Acceder al listado de productos</a>
                    <hr/>
                </div>
                </form>
                </div> 
            </div>
            <footer class="col-lg-12 text-center">
                ADSO-PROYECTO DE PAGINA <?php echo date("Y"); ?>
            </footer>
    </div>
</body>
</html>