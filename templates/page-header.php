<?php use Roots\Sage\Titles; ?>
<section class="hero hero--narrow">
  <div class="hero__content">
    <div class="row">
      <div class="columns">
        <h2><?= Titles\title(); ?></h2>
      </div>
    </div>
  </div>
</section>
<?php if (is_page() ) : ?>
<div class="pagehead row ps">
  <div class="columns">
    <header>
      <h1 class="prettytitle"><?= Titles\title(); ?></h1>
    </header>
    <?php
    $the_post_array=get_extended($post->post_content);
    if ($the_post_array[extended]!=='') :?>
        <div class="lead">
            <p><?php echo $the_post_array[main]; ?></p>
        </div>
    <?php endif; ?>
  </div>
</div>
<?php endif; ?>