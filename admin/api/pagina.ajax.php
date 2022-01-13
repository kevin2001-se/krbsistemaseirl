<?php

session_start();
require_once "../config/variables.config.php";
require_once "../config/db.config.php";
require_once "../controller/pagina.controller.php";
require_once "../model/pagina.model.php";

class AjaxWeb {

    public $datos;

    public function EditarWebGeneral()
    {
        
        $data = $this->datos;

        $web = new WebController();

        $response = $web->EditarGeneral($data);

        echo $response;

    }

    public function EditarWebContacto()
    {
        $data = $this->datos;

        $web = new WebController();

        $response = $web->EditarContacto($data);

        echo $response;
    }

    public function EditarWebSociales()
    {
        $data = $this->datos;

        $web = new WebController();

        $response = $web->EditarSociales($data);

        echo $response;
    }

}

if (isset($_POST["nombre"]) && isset($_POST["titulo"])) {
    
    $web = new AjaxWeb();

    $web->datos = array(
        'nombre' => $_POST["nombre"],
        'titulo' => $_POST["titulo"],
        'descripcion' => $_POST["descripcion"],
        'palabras' => $_POST["palabras"],
    );

    $web->EditarWebGeneral();

}else if(isset($_POST["correo"]) && isset($_POST["celular"])) {

    $web = new AjaxWeb();

    $telefono = (!empty($_POST["telefono"])) ? $_POST["telefono"] : "" ;

    $web->datos = array(
        'correo' => $_POST["correo"],
        'celular' => $_POST["celular"],
        'telefono' => $telefono,
        'direccion' => $_POST["direccion"],
    );

    $web->EditarWebContacto();

}if (isset($_POST["facebook"])) {
    
    $web = new AjaxWeb();

    $facebook = (!empty($_POST["facebook"])) ? $_POST["facebook"] : "" ;
    $twitter = (!empty($_POST["twitter"])) ? $_POST["twitter"] : "" ;
    $youtube = (!empty($_POST["youtube"])) ? $_POST["youtube"] : "" ;
    $whatsapp = (!empty($_POST["whatsapp"])) ? $_POST["whatsapp"] : "" ;
    $instagram = (!empty($_POST["instagram"])) ? $_POST["instagram"] : "" ;
    $telegram = (!empty($_POST["telegram"])) ? $_POST["telegram"] : "" ;

    $web->datos = array(
        'facebook' => $facebook,
        'twitter' => $twitter,
        'youtube' => $youtube,
        'whatsapp' => $whatsapp,
        'instagram' => $instagram,
        'telegram' => $telegram
    );

    $web->EditarWebSociales();

}