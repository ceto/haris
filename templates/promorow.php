<?php
  //$sticky = get_option( 'sticky_posts' );
  $the_stickyposts = new WP_Query( array(
    'posts_per_page'      => 1,
    //'post__in'            => $sticky,
    //'ignore_sticky_posts' => 1,
  )); ?>
<?php if ( /*$sticky[0] && -*/ $the_stickyposts->post_count>0 ) : $the_stickyposts->the_post(); ?>
  <aside class="promorow promorow--nobg ps ps--narrow ps--dark">
    <div class="row">
      <div class="columns">
        <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <a href="<?php the_permalink(get_option( 'page_for_posts' )); ?>" style="float:right;"><small>Összes hír &hellip;</small></a>
      </div>
    </div>
  </aside>
<?php endif; wp_reset_query(); ?>
