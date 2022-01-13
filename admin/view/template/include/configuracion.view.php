<?php
    $pagina = new WebController();
    $row = $pagina->ObtenerInfoPaginaWeb();
    
?>
<section class="content-header">
    <h1>
        Configuración
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Configuración</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">

    <div class="row">

    <div class="col-md-6">

        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">LOGOTIPOS</h3>
            </div>

            <form role="form">

              <div class="box-body">
                <div class="form-group">
                  <label for="nombre">Logo de Sitio Web</label>
                  <p class="float-end">
                    <img src="<?php echo URLAD?>img/Logotipo/<?php echo $row["logo_pagina"] ?>" class="img-thumbnail" width="200px">
                    <input type="hidden" id="logo_actual" value="<?php echo $row["logo_pagina"] ?>">
                  </p>
                  <input type="file" name="logo" id="logo">
                  <p class="help-block">Tamaño recomendado 250px * 100px</p>
                </div>

                <div class="form-group">
                  <label for="nombre">Icono de Sitio Web</label>
                  <p class="float-end">
                    <img src="<?php echo URLAD?>img/Logotipo/<?php echo $row["logo_pestana"] ?>" class="img-thumbnail" width="50px">
                    <input type="hidden" id="icono_actual" value="<?php echo $row["logo_pestana"] ?>">
                  </p>
                  <input type="file" name="icono" id="icono">
                  <p class="help-block">Tamaño recomendado 100px * 100px</p>
                </div>

              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary float-end">Guardar Cambios</button>
              </div>
            </form>
        </div>

        <div class="box box-warning loaded-form">
            <div class="box-header with-border">
              <h3 class="box-title">CONTACTO</h3>
            </div>

            <form action="" autocomplete="off" id="contactoForm">

              <div class="box-body">

                <div class="form-group">
                  <label>Correo Electronico - Email:</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-envelope"></i>
                    </div>
                    <input type="email" class="form-control" required placeholder="Ejem: mail@example.com" name="correo" id="correo" value="<?php echo $row["correo_recibo"] ?>">
                  </div>

                </div>

                <div class="form-group">
                  <label>Telefono Principal:</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" class="form-control" required placeholder="Ejem: +51958235485" name="celular" id="celular" value="<?php echo $row["numero_wsp"] ?>">
                  </div>

                </div>

                <div class="form-group">
                  <label>Telefono Secundario (Opcional):</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" class="form-control" placeholder="Ejem: +51958235485 o 423-8756" name="telefono" id="telefono" value="<?php echo $row["telf_secundario"] ?>">
                  </div>

                </div>

                <div class="form-group">
                  <label>Dirección Particular:</label>

                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-map-pin"></i>
                    </div>
                    <input type="text" class="form-control" required placeholder="Ejem: Av. Example 1578, Lima, Perú" name="direccion" id="direccion" value="<?php echo $row["direccion"] ?>">
                  </div>

                </div>

              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary float-end">Guardar Cambios</button>
              </div>
            </form>

            <div class="loaders">
                
            </div>

        </div>

    </div>

    <div class="col-md-6">

        <div class="box box-danger loaded-form">
            <div class="box-header with-border">
              <h3 class="box-title">INFORMACIÓN PRINCIPAL</h3>
            </div>

            <div autocomplete="off">
              <div class="box-body">

                <div class="form-group">
                  <label for="nombre">Nombre de Sitio Web</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Ingrese Nombre de Sitio Web" value="<?php echo $row["nombre_web"] ?>">
                </div>

                <div class="form-group">
                  <label for="nombre">Titulo de Sitio Web</label>
                  <input type="text" class="form-control" id="titulo" placeholder="Ingrese Titulo de Sitio Web" value="<?php echo $row["titulo"] ?>">
                </div>

                <div class="form-group">
                  <label>Descripción de la Web</label>
                  <textarea class="form-control" rows="3" placeholder="Descripción" id="descripcion"><?php echo $row["descripcion"] ?></textarea>
                </div>

                
                <div class="form-group d-flex d-column">
                  <label>Palabras Claves</label>
                  <?php
                  $plabras_claves = (empty($row["palabras_claves"])) ? "" : $row["palabras_claves"] ;
                  ?>
                  <input type="text" value="<?php echo $plabras_claves ?>" data-role="tagsinput" class="form-control tags_palabras">
                </div>

              </div>

              <div class="box-footer">
                <button class="btn btn-primary float-end" id="guardarGeneral">Guardar Cambios</button>
              </div>
            </div>

            <div class="loaders">
                
            </div>

        </div>

        <div class="box box-success loaded-form">
            <div class="box-header with-border">
              <h3 class="box-title">REDES SOCIALES</h3>
            </div>
            
            <form action="" autocomplete="off" id="editarRedes">

              <div class="box-body">

              <?php
                $social = json_decode($row["redes_sociales"],true);
              ?>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-facebook-f"></i>
                    </div>
                    <input type="text" class="form-control" name="facebook" id="facebook" value="<?php echo $social["facebook"] ?>" placeholder="Ejem: https://www.facebook.com/ExampleWeb">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-twitter"></i>
                    </div>
                    <input type="text" class="form-control" name="twitter" id="twitter" value="<?php echo $social["twitter"] ?>" placeholder="Ejem: https://twitter.com/ExampleWeb">
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-youtube"></i>
                    </div>
                    <input type="text" class="form-control" name="youtube" id="youtube" value="<?php echo $social["youtube"] ?>" placeholder="Ejem: https://www.youtube.com/c/Example">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-whatsapp"></i>
                    </div>
                    <input type="text" class="form-control"
                    name="whatsapp" id="whatsapp" value="<?php echo $social["whatsapp"] ?>" placeholder="Ejem: https://wa.link/example">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-instagram"></i>
                    </div>
                    <input type="text" class="form-control" name="instagram" id="instagram" value="<?php echo $social["instagram"] ?>" placeholder="Ejem: https://www.instagram.com/example/">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-telegram"></i>
                    </div>
                    <input type="text" class="form-control" name="telegram" id="telegram" value="<?php echo $social["telegram"] ?>" placeholder="Ejem: https://telegram/o/?example=tg">
                  </div>
                </div>

              </div>
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary float-end">Guardar Cambios</button>
              </div>

            </form>

            <div class="loaders">
                
            </div>

        </div>

    </div>

</section>