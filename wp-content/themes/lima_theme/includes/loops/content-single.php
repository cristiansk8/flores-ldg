<?php
/*
The Single Posts Loop
=====================
*/
?>

<?php if(have_posts()): while(have_posts()): the_post();
/* grab the url for the full size featured image */
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
?>

    <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
        <header>
            <h2><?php the_title()?></h2>
            <h4>
                <em>
                    <span class="text-muted author"><?php _e('Escrito por', 'bst'); echo " "; the_author() ?>,</span>
                    <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
                </em>
            </h4>
            <!--<p class="text-muted" style="margin-bottom: 30px;">
                <i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Filed under', 'bst'); ?>: <?php the_category(', ') ?><br/>
                <i class="glyphicon glyphicon-comment"></i>&nbsp; <?php _e('Comments', 'bst'); ?>: <?php comments_popup_link(__('None', 'bst'), '1', '%'); ?>
            </p>-->
        </header>
        <section>
          <div class="">
            <img src="<?php echo $featured_img_url; ?>" alt="" width="100%" height="auto">
              <div class="">
                <?php the_content()?>
                <?php wp_link_pages(); ?>
              </div>


          </div>

        </section>
    </article>
<?php comments_template('/includes/loops/comments.php'); ?>
<?php endwhile; ?>
<?php else: get_template_part('includes/loops/content', 'none'); ?>
<?php endif; ?>
