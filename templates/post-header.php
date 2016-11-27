<?php use Roots\Sage\Titles; ?>
<header class="postheader">
  <div class="row">
    <div class="columns">
      <h1 class="postheader__title"><?= Titles\title(); ?></h1>
      <?php
        $the_post_array=get_extended($post->post_content);
        if ($the_post_array[extended]!=='') :?>
        <p class="lead postheader__lead">
          <?php echo $the_post_array[main]; ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
</header>