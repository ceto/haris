<?php
/**
* Template Name: Home Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
<section class="hero hero--home">
  <div class="hero__content">
    <div class="row">
      <div class="columns">
      <svg class="hero__logo"><use xlink:href="#icon-haris-park"></use></svg>
      <h2 class="hero__maintext"><?php the_field('herotitle'); ?></h2>
      <h3 class="hero__discl"><?php the_field('herosubtitle'); ?></h3>
    </div>
  </div>
</div>
</section>
<?php get_template_part('templates/promorow'); ?>
<section class="ps homelead">
<div class="row">
  <div class="columns">
    <h2 class="prettytitle prettytitle--centered wow fadeInUp" >
      <?php the_field('leadsectitle'); ?>
    </h2>
  </div>
</div>
<div class="row wow fadeInUp">
  <div class="columns medium-9 large-8 medium-centered">
    <?php the_content(); ?>
    <a href="#" class="homeintromore"><i class="icon icon--plus"></i></a>
  </div>
</div>
</section>
<?php if (is_user_in_role( 'administrator' ) || is_user_in_role( 'confidental' )) :?>
  <section class="homeabout ps ps--dark">
    <div class="row">
      <div class="columns">
        <h2 class="prettytitle wow fadeInRight">
          <?php the_field('cardsectitle'); ?>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="columns tablet-9 tablet-centered large-12">
        <div class="row small-up-2 large-up-4">
          <?php while ( have_rows('cards') ) : the_row(); ?>
            <div class="column">
              <div class="card card--simple">
                <figure class="card__illustration">
                  <?php
                    $image = get_sub_field('illustration');
                    echo wp_get_attachment_image($image['id'], 'large' );
                  ?>
                </figure>
                <h4 class="card__title"><?php the_sub_field('title'); ?></h4>
                <div class="card__text"><?php the_sub_field('description'); ?></div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </section>
  <section id="homedata" class="ps homedata" data-magellan-target="homedata">
    <div class="row">
      <div class="columns medium-10 large-8">
        <h2 class="prettytitle wow fadeInRight" >
          <?php the_field('funcsectitle'); ?>
        </h2>
      </div>
    </div>
    <div class="row wow fadeInUp">
      <div class="columns large-6">
        <?php the_field('funccolumn1'); ?>
      </div>
      <div class="columns large-6">
        <?php the_field('funccolumn2'); ?>
      </div>
    </div>
    <div class="row wow fadeInUp">
      <div class="columns large-6">
        <p>
          <a href="#" class="button">Mutasd a látványterveket</a>
          <a href="<?php the_permalink(18); ?>" class="button success">Rekonstrukció részletei</a>
        </p>
      </div>
    </div>
  </section>
<?php else: ?>
  <?php get_template_part('templates/confidental'); ?>
<?php endif; ?>
<section class="mapsection">
<div class="row">
  <div class="columns tablet-6 tablet-push-6">
    <div class="ps ps--accent">
      <h2 class="prettytitle wow fadeInRight" >
      <?php the_field('mapsectitle'); ?>
      </h2>
      <div class="wow fadeInRight ">
        <?php the_field('mapseccontent'); ?>
      </div>
    </div>
  </div>
</div>
<div id="thegmap" class="thegmap"></div>
</section>
<?php endwhile; ?>
<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('thegmap'), {
          center: {lat: 47.513919, lng: 19.020709},
          zoom: 14,
          styles: [{featureType: "landscape",stylers: [{saturation: -100}, {lightness: 65}, {visibility: "on"}]}, {featureType: "poi",stylers: [{saturation: -100}, {lightness: 51}, {visibility: "simplified"}]}, {featureType: "road.highway",stylers: [{saturation: -100}, {visibility: "simplified"}]}, {featureType: "road.arterial",stylers: [{saturation: -100}, {lightness: -10}, {visibility: "on"}]}, {featureType: "road.local",stylers: [{saturation: -100}, {lightness: -15}, {visibility: "on"}]}, {featureType: "transit",stylers: [{saturation: -100}, {visibility: "simplified"}]}, {featureType: "administrative.province",stylers: [{visibility: "off"}]}, {featureType: "water",elementType: "labels",stylers: [{visibility: "on"}, {lightness: -25}, {saturation: -100}]}, {featureType: "water",elementType: "geometry",stylers: [{hue: "#ffff00"}, {lightness: -25}, {saturation: -97}]}]
        });
        var myLatLng = new google.maps.LatLng(47.513919, 19.020709);
        var officeMarker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          animation: google.maps.Animation.DROP,
        });
      }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU2eP9tKPcwZkaemthP8-4t6IBCZY4K04&callback=initMap"
    async defer></script>