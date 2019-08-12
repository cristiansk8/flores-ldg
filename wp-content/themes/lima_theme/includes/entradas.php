<section>
  <div class="home-news--wrapper">
  <?php
    $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
    $query = new WP_Query( $args );
    while ( $query->have_posts() ) : $query->the_post();

  ?>
    <article class="home-news--item">

        <a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url('medium'); ?>" alt=""> </a>
        <div class="home-news--overlay">
          <span class="overlap-bg" style="background-color: blue"></span>
          <div class="over-text">
            <span class="over-text--center">

              <a href="<?php the_permalink(); ?>" class="more-link">
                Leer Más
                <span class="more-icon"></span>
              </a>
            </span>
          </div>
        </div>
      <div class="home-news--caption">
        <h3>
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h3>
        <h4>
          <?php the_time('F j, Y'); ?>
        </h4>
      </div>
    </article>
  <?php
    endwhile;
    wp_reset_query();
  ?>
</div>
</section>
