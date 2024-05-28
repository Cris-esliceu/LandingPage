<?php
    include 'header.php' ;
?>
<h1>Contacto</h1>
<main>
    <section>
            <form class="formulario" action="create_contact.php" method="POST">
                <div>
                    <legend>Contactame enviando tus datos </legend>
                    <div class="contenedor-campos">
                        <div class="campo">
                                <label for=""> Nombre: </label>
                                <input class="input-text" type="text" name="nombre" placeholder="Tu nombre">
                        </div>
                        <div class="campo">
                                <label for="">Telefono</label>
                                <input class="input-text" type="tel" name="telefono" placeholder="Tu telefono">
                        </div>
                        <div class="campo">
                                <label for=""> Correo</label>
                                <input class="input-text" type="email" name="Correo" placeholder="Tu Correo">
                        </div>
                        <div class="campo">
                                <label for="">Mensaje</label>
                                <textarea class="input-text" name="mensaje" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div>
                            <input class="boton" type="submit" value="Enviar">
                    </div>
                </div><!--contenedor-campos-->
                </fieldset>
                
            </form>
        </section>
</main>
<?php
    include 'footer.php';
?>