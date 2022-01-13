<?php

    $pagina = new PaginaController();
    $row = $pagina->ObtenerInfoPagina();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="<?php echo $row["titulo"] ?>">
    <meta name="keywords" content="<?php echo $row["palabras_claves"] ?>">
    <meta name="description" content="<?php echo $row["descripcion"] ?>">
    <meta name="author" content="<?php echo $row["nombre_web"] ?>" />
    <meta name="copyright" content="<?php echo $row["nombre_web"] ?>" />
    <meta http-equiv="cache-control" content="no-cache"/>

    <link rel="stylesheet" href="<?php echo URL ?>view/src/theme/css/bootstrap-grid.css">

    <link rel="stylesheet" href="<?php echo URL ?>view/src/theme/css/bootstrap.css">

    <link rel="stylesheet" href="<?php echo URL ?>view/src/font/font-roboto.css">

    <link rel="stylesheet" href="<?php echo URL ?>view/src/css/style.css">

    <script src="<?php echo URL ?>view/src/js/cdnFontAnweson.js"></script>

    <link rel="stylesheet" href="<?php echo URL ?>view/src/css/glide.core.min.css">

    <link rel="shortcut icon" href="<?php echo URLAD ?>img/Logotipo/<?php echo $row["logo_pestana"] ?>"> 

    <title><?php echo $row["titulo"] ?></title>
</head>

<body>

    <div class="wrap-content">

        <?php
        
            include_once "include/navbar.view.php";

            include_once "include/productos.view.php";

            include_once "include/sistema.view.php";

            include_once "include/contacto.view.php";
        
        ?>

        <footer class="bg-footer">
            <p class="m-0"><?php echo $row["titulo"] ?> - <?php echo date("Y") ?></p>
        </footer>

        <?php
            include_once "include/social.view.php";
        ?>

    </div>
    
    <script src="<?php echo URL ?>view/src/theme/js/popper.min.js"></script>
    <script src="<?php echo URL ?>view/src/theme/js/bootstrap.js"></script>
    <script src="<?php echo URL ?>view/src/js/glide.min.js"></script>
    <script src="<?php echo URL ?>view/src/js/jquery.min.js"></script>
    <script src="<?php echo URL ?>view/src/js/main.js"></script>
    <script>
        new Glide('.glide', {}).mount()
    </script>
</body>

</html>