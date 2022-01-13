<section id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
            
                <h2>CONTACTO</h2>
                <hr>
                <br>
                <p><?php echo $row["descripcion"] ?></p>

                <span class="d-block mb-2">
                    <b>Email: </b> <?php echo $row["correo_recibo"] ?>
                </span>
                <span class="d-block mb-2">
                    <b>Telefono Principal: </b> <?php echo $row["numero_wsp"] ?>
                </span>
                <?php
                if(!empty($row["telf_secundario"]) || $row["telf_secundario"] != null) :
                ?>
                <span class="d-block mb-2">
                    <b>Telefono Secundario: </b> <?php echo $row["telf_secundario"] ?>
                </span>
                <?php
                endif;
                ?>
                <span class="d-block">
                    <b>Dirección :</b>
                    <?php echo $row["direccion"] ?>
                </span>

            </div>
            <div class="col-md-6">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5518.446298135991!2d-77.06830875747121!3d-12.034515081700592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cece044a875f%3A0x6c7f811f3061d8ab!2sJir%C3%B3n%20Juan%20Crespo%20Y%20Castillo%202025%2C%20Cercado%20de%20Lima%2015081!5e0!3m2!1ses!2spe!4v1639321775350!5m2!1ses!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
        </div>
    </div>
</section>