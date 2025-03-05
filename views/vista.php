<!DOCTYPE html>
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
                <p class="lead">Creamos una base de datos de los productos <br/>
                    que podría tener una tienda y <br/>
                    operamos con ella utilizando la estructura MVC</p>
            </header>
            <div class="col-lg-12 text-center">
                <hr/>
                <h3>Listado de productos</h3>
                <br>
                <table class="table">
                    <tr>
                        <td><strong>ID</strong></td>
                        <td><strong>PRODUCTO</strong></td>
                        <td><strong>PRECIO</strong></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                        ?>
                        <tr>
                            <td><?php echo $datos[$i]["id"]; ?></td>
                            <td><?php echo $datos[$i]["Nombre"]; ?></td>
                            <td>$<?php echo $datos[$i]["Precio"]; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <a href="/index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
                <hr/>
            </div> 
            <footer class="col-lg-12 text-center">
               ADSO-VELEZ <?php echo date("Y"); ?>
            </footer>
    </div>
</body>
</html>