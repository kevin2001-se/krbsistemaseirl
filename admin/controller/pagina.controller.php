<?php

class WebController {

    public function ObtenerInfoPaginaWeb()
    {
        $web = new WebModel();

        $respuesta = $web->getWeb();

        if (!empty($respuesta)) {
            return $respuesta;
        }else{
            die();
        }
    }

    public function EditarContacto($datos)
    {
        
        if (!empty($datos["correo"]) && !empty($datos["celular"]) && !empty($datos["direccion"])) {
            
            $correo = trim($datos["correo"]);
            $celular = trim($datos["celular"]);
            $direccion = trim($datos["direccion"]);

            $general = new WebModel();

            $data = array(
                'correo' => $correo,
                'celular' => $celular,
                'direccion' => $direccion,
                'telefono' => $datos["telefono"]
            );

            $response = $general->ActualizarContactoWeb($data);

            if ($response == "success") {
                return $response;
            }else{
                return "error";
            }

        }else{
            return "vacios";
        }

    }

    public function EditarGeneral($datos)
    {
        
        if (!empty($datos["nombre"]) && !empty($datos["titulo"]) && !empty($datos["descripcion"]) && !empty($datos["palabras"])) {
            
            $nombre = trim($datos["nombre"]);
            $titulo = trim($datos["titulo"]);
            $descripcion = trim($datos["descripcion"]);

            $general = new WebModel();

            $data = array(
                'nombre' => $nombre,
                'titulo' => $titulo,
                'descripcion' => $descripcion,
                'claves' => $datos["palabras"]
            );

            $response = $general->ActualizarGeneralWeb($data);

            if ($response == "success") {
                return $response;
            }else{
                return "error";
            }

        }else{
            return "vacios";
        }

    }

    public function EditarSociales($datos)
    {
        
        $social = new WebModel();

        $response = $social->ActualizarSocialWeb(json_encode($datos));

        if ($response == "success") {
            return $response;
        }else{
            return "error";
        }

        return print_r(key($datos));

    }

}