<?php
/*
Vehiculo Posts Loop
=====================
*/
?> 
<div class="video-rows container-fluid">
<?php 

    $args = array(
        'post_type' => 'vehiculo',
        'posts_per_page' => -1
    );

    $consulta = new WP_Query($args);

    if($consulta->have_posts()): while($consulta->have_posts()): $consulta->the_post(); ?>
    <div id="post_<?php the_ID()?>" class="row video-rows--video-post">
        <div class="container">
            <div class="col-md-4 description">
                <?php the_content();?>
            </div>
            <div class="col-md-4 gallery">
                <?php while(have_rows('cont_galeria')):the_row();?>
                    <figure class="item-gallery" data-modal="<?php the_sub_field('f_imagen')?>">
                        <img src="<?php the_sub_field('f_imagen')?>" alt="<?php the_title();?>">
                    </figure>
                <?php endwhile ?>
            </div>
            <div class="col-md-4 the-video">
                <video controls>
                    <source src="<?php the_field('f_video')?>" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
</div>