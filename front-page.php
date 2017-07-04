<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lineasavanzadas
 */

/*
* Template Name: Inicio
*/

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" >
    
      <?php get_template_part('template-parts/slider'); ?>

      <div class="row expanded services-home">
        
        <div class="columns large-6 left-bg-service">

          <div class="row">
            <div class="columns large-12">
              <h2><strong>Principales</strong> Servicios</h2>
                
              <div class="row">
                <div class="columns large-6">
                  <ul>
                    <li>Copia de planos</li>
                    <li>Señalizaciones</li>
                    <li>Reinders</li>
                    <li>Anillados</li>
                    <li>Laminado</li>
                  </ul>
                </div>

                <div class="columns large-6">
                  <ul>
                    <li>Impresión EN plotter</li>
                    <li>Sellos</li>
                    <li>Publicidad</li>
                    <li>Empastes</li>
                    <li>otros</li>
                  </ul>
                </div>
              </div>            

            </div>
          </div>

        </div>

        <div class="columns large-6 right-bg-service">
          <div class="row">
            <div class="columns large-12">
            <h2>Destacados</h2>
            <ul>
              <li>Articulo promocionales</li>
              <li>Artículos publicitarios</li>
              <li>Avisos en acrílicos</li>
              <li>Banderas</li>
              <li>Banners</li>
              <li>Bolígrafos</li>
              <li>Botones publicitarios</li>
              <li>Calcomanías</li>
              <li>Camisetas</li>
              <li>Camiseta para propaganda</li>
              <li>Carpetas</li>
              <li>Cerramientos</li>
              <li>Diseño grafico</li>
              <li>Grabados laser</li>
              <li>Impresión digital</li>
              <li>Manillas</li>
              <li>Mochilas</li>
              <li>Pancartas</li>
              <li>Pasacalles</li>
              <li>Pendones</li>
              <li>Señalización e identificación</li>
              <li>Serigrafía</li>
            </ul>
            
            </div>
          </div>

        </div>

      </div>

<div class="row infolineas ">
  <div class="column medium-12">
  
   <h1>Lineas Avanzadas</h1>

    <div class="row">
      <div class="columns medium-7">
        <p>LINEAS AVANZADAS  es un CENTRO DE SERVICIO Y COPIADO, orientado a satisfacer las más exigentes normas del mercado, con una trayectoria comercial de más de 22 años.<br><br>

Actualmente contamos con una excelente respuesta por parte de nuestros clientes como Firmas de Construcción, Ingeniería, Bancos, Cooperativas, Instituciones y Buffet de Abogados.<br><br>

La Misión  es atender a todo público de una forma amable, oportuna, eficiente y con excelente calidad, atendidos con un personal capacitado para satisfacer sus necesidades  en el mercado de plano, plotter, copiado, impresiones laser,  sellos, señalización y publicidad.<br><br>

Proyectamos nuestros servicios unidos a la tecnología y procedimientos innovadores con calidad.<br><br>

Es la oportunidad de tener un buen servicio a un bajo costo en la hora indicada.
</p>
      </div>
      <div class="columns medium-5">
        <img src="wp-content/uploads/2017/07/centrocopiado.jpg" alt="">
      </div>
    </div>
  </div>
</div>



<div class="row-100 servicios-home">
  <div class="column">
    
    <h1>Servicios</h1>

    <div id="owl-servicios" class="owl-carousel">

      <div class="imgservicios">
        <img src="<?php echo get_template_directory_uri(); ?>/img/maquina1.jpg" alt="Lineas avanzadas">
        <h3>COPIA DE PLANOS</h3>
      </div>

      <div class="imgservicios">
        <img src="<?php echo get_template_directory_uri(); ?>/img/maquina2.jpg" alt="Lineas avanzadas">
        <h3>FOTOCOPIA A COLOR</h3>
      </div>

      <div class="imgservicios">
        <img src="<?php echo get_template_directory_uri(); ?>/img/maquina3.jpg" alt="Lineas avanzadas">
        <h3>IMPRESIÓN DE PLOTTER </h3>
      </div>

      <div class="imgservicios">
        <img src="<?php echo get_template_directory_uri(); ?>/img/maquina4.jpg" alt="Lineas avanzadas">
        <h3>SEÑALIZACION</h3>
      </div>

      <div class="imgservicios">
        <img src="<?php echo get_template_directory_uri(); ?>/img/maquina1.jpg" alt="Lineas avanzadas">
        <h3>COPIA DE PLANOS</h3>
      </div>

      <div class="imgservicios">
        <img src="<?php echo get_template_directory_uri(); ?>/img/maquina2.jpg" alt="Lineas avanzadas">
        <h3>FOTOCOPIA A COLOR</h3>
      </div>

    </div>


  </div>
</div>
     
  

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();
