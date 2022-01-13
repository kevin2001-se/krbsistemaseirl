<?php

class ProductosController {

    public function ListarProductos()
    {
        $producto = new Productos();
        $lista = $producto->getListarProductos();
        return $lista;
    }

    public function CrearProducto($datos)
    {
        if (!empty($datos["nombre"]) && !empty($datos["stock"]) && !empty($datos["precio"])) {
            
            $nombre = trim($datos["nombre"]);

            if (!empty($datos["file"])) {
               
                list($ancho, $alto) = getimagesize($datos["file"]["tmp_name"]);

                $nuevoAncho = 227;
                $nuevoAlto = 227;

                $directorio = "../view/src/img/Products/";

                $nombreImagen = /*str_replace(" ","-",strtolower($nombre))*/ rand();

                if ($datos["file"]["type"] == "image/jpeg") {
                    
                    $fotoProducto = $nombreImagen . ".jpg";

                    $rutaAlmacenar = $directorio . $nombreImagen . ".jpg";

                    $origen = imagecreatefromjpeg($datos["file"]["tmp_name"]);

                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                    imagejpeg($destino, $rutaAlmacenar);

                }else if ($datos["file"]["type"] == "image/png") {

                    $fotoProducto = $nombreImagen . ".png";
        
                    $rutaAlmacenar = $directorio .$nombreImagen . ".png";
        
                    $origen = imagecreatefrompng($datos["file"]["tmp_name"]);
        
                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
        
                    imagealphablending($destino, FALSE);
        
                    imagesavealpha($destino, TRUE);
        
                    imagecopyresampled($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
        
                    imagepng($destino, $rutaAlmacenar);
        
                }else {
                    return "error-image";
                }

            } else {
                return "image-vacia";
            }

            $producto = new Productos();

            $producto->nombre = $nombre;
            $producto->stock = $datos["stock"];
            $producto->precio = $datos["precio"];
            $producto->foto = $fotoProducto;
            $producto->creador = $datos["user"];

            $response = $producto->crearProductos();

            return $response;

        }else {
            return "campo-vacio";
        }
    }

    public function EliminarProducto($data)
    {
        if (!empty($data)) {
            
            $producto = new Productos();

            $producto -> codigo = $data;

            $obtener = $producto->ObtenerProducto();

            if (isset($obtener["id_producto"])) {
            
                $ruta = "../view/src/img/Products/".$obtener["foto_producto"];

                $respuesta = $producto->EliminarProducto();

                if ($respuesta == "success") {
                    unlink($ruta);
                    return "success";
                }else{
                    return "error";
                }

            }else{

                return "error";

            }

        }else{

            return "error";

        }
    }

public function ObtenerProducto($id)
    {
        if (!empty($id)) {
            
            $producto = new Productos();

            $producto -> codigo = $id;

            $obtener = $producto->ObtenerProducto();

            if (isset($obtener["id_producto"]) && !empty($obtener["id_producto"])) {
                
                return $obtener;

            }else{

                return "error";

            }

        }else{

            return "error";

        }
    }

    public function EditarProducto($datos)
    {
        if (!empty($datos["id"]) || !empty($datos["nombre"]) || !empty($datos["stock"]) || !empty($datos["precio"])) {
            
            $nombre = trim($datos["nombre"]);

            if (!empty($datos["file"])) {
               
                list($ancho, $alto) = getimagesize($datos["file"]["tmp_name"]);

                $nuevoAncho = 227;
                $nuevoAlto = 227;

                $directorio = "../view/src/img/Products/";

                $nombreImagen = rand();

                if ($datos["file"]["type"] == "image/jpeg") {
                    
                    $fotoProducto = $nombreImagen . ".jpg";

                    $rutaAlmacenar = $directorio . $nombreImagen . ".jpg";

                    $origen = imagecreatefromjpeg($datos["file"]["tmp_name"]);

                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

                    imagejpeg($destino, $rutaAlmacenar);

                    $ImagenEliminar = $directorio.$datos["foto_antigua"];

                    unlink($ImagenEliminar);

                }else if ($datos["file"]["type"] == "image/png") {

                    $fotoProducto = $nombreImagen . ".png";
        
                    $rutaAlmacenar = $directorio .$nombreImagen . ".png";
        
                    $origen = imagecreatefrompng($datos["file"]["tmp_name"]);
        
                    $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
        
                    imagealphablending($destino, FALSE);
        
                    imagesavealpha($destino, TRUE);
        
                    imagecopyresampled($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
        
                    imagepng($destino, $rutaAlmacenar);

                    $ImagenEliminar = $directorio.$datos["foto_antigua"];

                    unlink($ImagenEliminar);
        
                }else {
                    return "error-image";
                }

            } else {
                $fotoProducto = $datos["foto_antigua"];
            }

            $producto = new Productos();

            $producto->codigo = $datos["id"];
            $producto->nombre = $nombre;
            $producto->stock = $datos["stock"];
            $producto->precio = $datos["precio"];
            $producto->foto = $fotoProducto;
            $producto->actualizador = $datos["user"];

            $response = $producto->editarProductos();

            return $response;

        }else {
            return "campo-vacio";
        }
    }



}


