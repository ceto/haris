<?php use Roots\Sage\Titles; ?>
<header class="hentry__header">
    <h1 class="hentry__title"><?= Titles\title(); ?></h1>
    <div class="hentry__meta"><?php get_template_part('templates/entry-meta'); ?></div>
</header>
<?php
$the_post_array=get_extended($post->post_content);
if ($the_post_array[extended]!=='') :?>
    <div class="hentry__lead lead">
        <p><?php echo $the_post_array[main]; ?></p>
    </div>
<?php endif; ?>