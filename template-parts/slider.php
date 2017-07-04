
<div class="orbit binicio" data-orbit data-use-m-u-i="true">
  
  <ul class="orbit-container">

  <div class="wrapper-slide large-centered">

    <button class="orbit-previous"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
    <button class="orbit-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>

  </div>

    <?php $args=array(
      // Banner Inicial
      'post_type' => 'slider',
      'orderby' => 'menu_order',
      'order' => 'ASC',
      'posts_per_page' => -1); 
    ?>

    <?php $slider = new WP_Query($args); $contslide = 0;?>


    <?php while($slider->have_posts()): $slider->the_post(); ?>



    <?php $image = get_field('imagen'); ?>
    <img src="<?php echo $image['url']; ?>" alt="">

      <?php if ($contslide == 0): ?>
      
        <li class="is-active orbit-slide binicio" style="background: url(<?php echo $image['url']; ?>) center top no-repeat"><a href="<?php the_field(vinculo); ?>"><img src="<?= get_template_directory_uri(); ?>/img/bg.png"></a></li>
      
      <?php else: ?>

        <li class="orbit-slide" style="background: url(<?php echo $image['url']; ?>) center top no-repeat"><a href="<?php the_field(vinculo); ?>"><img src="<?= get_template_directory_uri(); ?>/img/bg.png"></a></li>
      
      <?php endif ?>

    <?php endwhile; wp_reset_postdata(); ?>

  </ul>
  

</div>
