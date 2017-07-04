<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lineasavanzadas
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
    <div class="row-100">
      <div class="columns medium-12 barra-top-footer"></div>
      <div class="columns medium-12 bg-info-footer">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo-blanco.png" alt="Logo Lineas Avanzadas">
        <p>
          <strong>Carrera 52 N° 72 -114 Local 28 y 30B</strong><br>
          Cel: 310 6652338  - 313 6834637 - Tel: 3587812 - Fax: 3565859
        </p>
      </div>
      <div class="columns medium-12 barra-bottom-footer">
        <p>© 2017 Líneas Avanzadas  - Todos los derechos reservados</p>
      </div>
    </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
