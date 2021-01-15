<?PHP
/**
 * Plugin Name: plugin-form
 * Author: Cristian Cruz Hernandez
 * Description: Formulario persoanlizado
 * shortcode [kenay_plugin_form]
 */

add_shortcode('kenay_plugin_form', 'KENAY_PLUGIN_FORM');

function KENAY_PLUGIN_FORM()

{

  ob_start();
?>
  <form action=" <?php get_the_permalink(); ?>" method="post"

  class="cuestionario"
      <div class="form-input">

      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" required="required">

      <div class="form-input">
            <label for='correo'>Correo</label>
            <input type="email" name="correo" id="correo" required>
        </div>
        <div class="form-input">
            <label for="nivel_html">¿cual es tu nivel en desarrollo?</label>
           	<br> <input type="radio" name="nivel_desarrollo" value="1" required> Nada
            <br><input type="radio" name="nivel_desarrollo" value="2" required> Estoy 
                aprendiendo
            <br><input type="radio" name="nivel_desarrollo" value="3" required> Tengo 
                experiencia
            <br><input type="radio" name="nivel_desaroollo" value="4" required> experto
        </div>
        <div class="form-input">
            <label for="nivel_css">¿nivel de excel?</label>
						<br><input type="radio" name="nivel_excel"value="1" required> Nada
            <br><input type="radio" name="nivel_excel" value="2" required> Estoy 
                aprendiendo
            <br><input type="radio" name="nivel_excel" value="3" required> Tengo 
                experiencia
            <br><input type="radio" name="nivel_excel" value="4" required> experto
        </div>
        <div class="form-input">
            <label for="nivel_js">¿Cuál es tu nivel de Word?</label>
           	<br> <input type="radio" name="nivel_word" value="1" required> Nada
            <br><input type="radio" name="nivel_word" value="2" required> Estoy 
                aprendiendo
            <br><input type="radio" name="nivel_word" value="3" required> Tengo 
                experiencia
            <br><input type="radio" name="nivel_word" value="4" required> experto
        </div>
        <div class="form-input">
            <label for="aceptacion">La información facilitada se tratará 
            con respeto.</label>
            <input type="checkbox" id="aceptacion" name="aceptacion"
value="1" required> Entiendo y acepto las condiciones
        </div>
        <div class="form-input">
            <input type="submit" value="Enviar">
        </div>
    </div>
  </form>
<?php
  return ob_get_clean();

}


 



