<?php
/**
* Template Name: Home Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
<section class="hero hero--home">
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
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
<section class="homenews ps ps--narrow ps--dark">
<div class="row">
  <div class="columns">
    <strong>2016. október 19.:</strong> <a href="#">Elkezdtődött a budai lövőház báltermének tetőtér rekonstrukciója</a><a href="<?php the_permalink(get_option( 'page_for_posts' )); ?>" style="float:right;"><small>Összes hír &hellip;</small></a>
  </div>
</div>
</section>
<section class="ps homelead">
<div class="row">
  <div class="columns">
    <h2 class="prettytitle prettytitle--centered wow fadeInUp" >
    Rendezvényközpont és étterem a Marczibányi téren
    <small>Tisztelgés a késő reformkori budai polgárság találkozóhelyének</small>
    </h2>
  </div>
</div>
<div class="row wow fadeInUp">
  <div class="columns medium-9 large-8 medium-centered">
    <p>2017-ben megnyílik a Haris Park Buda szívében a Marczibányi téren, melyben vendéglátó egységek és egy rendezvényközpont kapnak helyet. Egy igazi közösségi tér, amely történetéhez hűen a budai értelmiség és polgárság találkozóhelye, környékbeliek kedvelt kerthelyisége, elegáns bálok otthona.</p>
    <p>Missziónk, hogy a magas színvonalú szolgáltatás mellett jó viszonyt ápoljunk a környéken lakókkal és környezetünkkel, a fenntarthatóságra és az elérhetőségre kiemelt figyelmet fordítva (napkollektorok a tetőn, közel 5000 m2 zöldfelület, társadalmi felelősség-vállaláshoz kötődő programok). Az eredeti funkciójának megfelelően helyreállítjuk a társasági életet szolgáló épületrészeket, a régi kerthelyiséget, mely remélhetőleg hamarosan a budaiak törzshelyévé válik.</p>
    <p>Célunk, hogy visszatérjen a budai polgárok társasági élet irányi igénye, melyet XXI. századi  minőségben szolgálunk ki.</p>
    <a href="#" class="homeintromore"><i class="icon icon--plus"></i></a>
  </div>
</div>
</section>
<section id="about" class="ps ps--dark">
<div class="row">
  <div class="columns">
    <h2 class="prettytitle wow fadeInRight">
    Üzleti és családi események
    <small>az évszázados gesztenyefák alatt</small>
    </h2>
  </div>
</div>
<div class="row">
  <div class="columns tablet-9 tablet-centered large-12">
    <div class="row small-up-2 large-up-4 whatwedogrid">
      <div class="column">
        <div class="card card--simple">
          <figure class="card__illustration ">
            <img src="http://placehold.it/640x480/?text=illustration" alt="">
          </figure>
          <h4 class="card__title">
          Konferenciák és üzleti rendezvények
          </h4>
          <div class="card__text"><p>Komplexumunk elkészültével alkalmas lesz csendes és hangulatos kerti  és többfunkciós beltéri rendezvények befogadására.  Tárgyalóink alkalmasak a kisebb létszámú megbeszélések, tréningek, workshopok megrendezésére. Termeink hatalmas ablakai megfelelően sötétíthetőek, klimatizáltak, hang és fénytechnikával felszereltek.</p></div>
        </div>
      </div>
      <div class="column">
        <div class="card card--simple">
          <figure class="card__illustration ">
            <img src="http://placehold.it/640x480/?text=illustration" alt="">
          </figure>
          <h4 class="card__title">
          Pompás bálok és esküvők otthona
          </h4>
          <div class="card__text"><p>Történelmi báltermünk 150 főnek biztosít kényelmes elrendezést bálokhoz, esküvőkhöz, gálavacsorákhoz. Nyári hónapokban hatalmas kertünkben is lehet ünnepelni, a természetben, mégis percekre a belvárostól. Kisebb, kápolnai hangulatot idéző oldalszárnyunk intimebb esküvők meghitt helyszíne.</p></div>
        </div>
      </div>
      <div class="column">
        <div class="card card--simple">
          <figure class="card__illustration ">
            <img src="http://placehold.it/640x480/?text=illustration" alt="">
          </figure>
          <h4 class="card__title">
          Étterem és tetőtéri bár
          </h4>
          <div class="card__text"><p>Adózva a hely szellemének, a már lassan 100 éve megnyílt Kastély vendéglő helyén lesz egy 80 fős, magas színvonalú étterem, ahol a házias magyar konyha remekeit élvezhetik vendégeink. Az emeleten privát különtermek, és nyáron egy szabadtéri tetőbár növeli a gasztronómiai élményszerzés lehetőségét.</p></div>
        </div>
      </div>
      <div class="column">
        <div class="card card--simple">
          <figure class="card__illustration ">
            <img src="http://placehold.it/640x480/?text=illustration" alt="">
          </figure>
          <h4 class="card__title">
          Kerthelyiség az ősfás parkban
          </h4>
          <div class="card__text"><p>Termetes gesztenyefák, japán csüngőakác, évszázados mogyorófák és sok más csodás fa öleli körbe a 120 fős kerthelyiségünket, melyet egy kültéri konyha szolgál ki könnyed, nyári különlegességekkel. Bízunk benne, hogy a környék lakói szívesen betérnek majd hozzánk egy kávéra, családi ebédre vagy romantikus vacsorára az árnyas parkba.</p></div>
        </div>
      </div>
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
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU2eP9tKPcwZkaemthP8-4t6IBCZY4K04&callback=initMap"
    async defer></script>