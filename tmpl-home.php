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
      <!-- <h2 class="hero__subtext">Haris Park</h2> -->
      <h2 class="hero__maintext">A budai polgárság új találkozóhelye</h2>
      <h3 class="hero__discl">Nyitás: 2017 nyarán</h3>
      <a href="#homelead" class="button wow fadeInLeft">Részletek</a>
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
    Egyedi funkciók és adottságok
    <small>akár 150 fős rendezvényekhez</small>
    </h2>
  </div>
</div>
<div class="row wow fadeInUp">
  <div class="columns large-6">
    <p>A Haris Park számos rendezvénytípusnak adhat otthont; üzleti (konferencia, megbeszélés, sajtótájékoztató, termékbemutató, tréning, csapatépítés, üzleti reggeli, részvényes taggyűlés), privát (esküvő, születésnap, bál, családi összejövetel, keresztelő, osztálytalálkozó), vagy kulturális (komolyzenei koncert, vásár, filmvetítés, könyvbemutató, művészeti kiállítás, színházi előadás, divatbemutató, aukciók) eseményeknek - az alábbi adottságokkal fogunk rendelkezni, mire teljesen elkészül a beruházás:</p>
  </div>
  <div class="columns large-6">
    <ul>
      <li>320 nm-es bálterem 9 méteres belmagassággal</li>
      <li>70 nm-es kiállító tér/házasságkötő terem</li>
      <li>tárgyalótermek</li>
      <li>hatalmas ősfás park, mely kültéri rendezvényekre is alkalmas</li>
      <li>80 fős étterem, 12 fős különteremmel</li>
      <li>120 fős kerthelyiség</li>
      <li>tetőtéri bár</li>
      <li>bérelhető, privát BBQ terasz</li>
    </ul>
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
<section class="mapsection">
<div class="row">
  <div class="columns tablet-6 tablet-push-6">
    <div class="ps ps--accent">
      <h2 class="prettytitle wow fadeInRight" >
      Nyártól várjuk Önöket Buda „új-belvárosában”
      <small>a Lövőház utca végén</small>
      </h2>
      <div class="wow fadeInRight ">
        <p>Könnyen megközelíthető helyszín, a Széll Kálmán tértől 10 perc sétára. Autóval érkezőknek számos parkolási lehetőség a saját parkolónkban és a környéken. Nyugodt, természetközeli környezet várja az ide látogatókat, mégis karnyújtásnyira a belvárostól. A környéken sport, kulturális és bevásárlási lehetőségek széles választéka várja.</p>
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