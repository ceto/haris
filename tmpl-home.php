<?php
/**
* Template Name: Home Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
<section id="homehero" class="ps ps--accent homehero" data-magellan-target="homehero">
  <div class="row">
    <div class="columns">
      <br><br><br>
      <h2 class="prettytitle wow fadeInRight" >
      Haris Park - <br>A budai polgárság új találkozóhelye
      <small>Nyitás: 2017 nyarán</small>
      </h2>
      <a href="#homelead" class="large button success wow fadeInLeft">Részletek</a>
    </div>
  </div>
</section>
<section class="homenews ps ps--narrow ps--dark">
  <div class="row">
    <div class="columns small-3 medium-2">
      <strong>Beruházás hírei</strong>
    </div>
    <div class="columns small-9 medium-10">
      <small><strong>2016. október 19.:</strong></small> <a href="#">Elkezdtődött a budai lövőház báltermének tetőtér rekonstrukciója</a><a href="<?php the_permalink(get_option( 'page_for_posts' )); ?>" style="float:right;"><small>Összes hír &hellip;</small></a>
    </div>
  </div>
</section>
<section id="homelead" class="ps homelead" data-magellan-target="homelead">
  <div class="row">
    <div class="columns">
      <h2 class="prettytitle wow fadeInRight" >
      Rendezvényközpont és étterem a Marczibányi téren
      <small>Tisztelgés a késő reformkori budai polgárság találkozóhelyének</small>
      </h2>
    </div>
  </div>
  <div class="row wow fadeInLeft">
    <div class="columns medium-10 large-8 medium-push-2">
      <p>2017-ben megnyílik a Haris Park Buda szívében a Marczibányi téren, melyben vendéglátó egységek és egy rendezvényközpont kapnak helyet. Egy igazi közösségi tér, amely történetéhez hűen a budai értelmiség és polgárság találkozóhelye, környékbeliek kedvelt kerthelyisége, elegáns bálok otthona.</p>
      <p>Missziónk, hogy a magas színvonalú szolgáltatás mellett jó viszonyt ápoljunk a környéken lakókkal és környezetünkkel, a fenntarthatóságra és az elérhetőségre kiemelt figyelmet fordítva (napkollektorok a tetőn, közel 5000 m2 zöldfelület, társadalmi felelősség-vállaláshoz kötődő programok). Az eredeti funkciójának megfelelően helyreállítjuk a társasági életet szolgáló épületrészeket, a régi kerthelyiséget, mely remélhetőleg hamarosan a budaiak törzshelyévé válik.</p>
      <p>Célunk, hogy visszatérjen a budai polgárok társasági élet irányi igénye, melyet XXI. századi  minőségben szolgálunk ki.</p>
      <a href="#" class="homeintromore"><i class="icon icon--plus"></i></a>
    </div>
  </div>
</section>
<!-- <section id="work" class="works" data-magellan-target="work">
  <?php //get_template_part('templates/home', 'works'); ?>
</section> -->
<section id="about" class="ps ps--accent" data-magellan-target="about">
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
  <div class="row wow fadeInLeft">
    <div class="columns medium-10 large-8">
      <p>A Haris Park számos rendezvénytípusnak adhat otthont; üzleti (konferencia, megbeszélés, sajtótájékoztató, termékbemutató, tréning, csapatépítés, üzleti reggeli, részvényes taggyűlés), privát (esküvő, születésnap, bál, családi összejövetel, keresztelő, osztálytalálkozó), vagy kulturális (komolyzenei koncert, vásár, filmvetítés, könyvbemutató, művészeti kiállítás, színházi előadás, divatbemutató, aukciók) eseményeknek - az alábbi adottságokkal fogunk rendelkezni, mire teljesen elkészül a beruházás:</p>
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
      <p>
        <a href="#" class="button success">Mutasd a látványterveket</a>
        <a href="<?php the_permalink(18); ?>" class="button warning">Rekonstrukció részletei</a>
      </p>
    </div>
  </div>
</section>
<section id="homelocation" class="ps ps--accent homelocation" data-magellan-target="homelocation">
  <div class="row">
    <div class="columns medium-10 large-8 large-push-4">
      <h2 class="prettytitle wow fadeInRight" >
      Nyártól várjuk Önöket Buda „új-belvárosában”
      <small>a Lövőház utca végén</small>
      </h2>
      <div class="wow fadeInRight ">
        <p>Könnyen megközelíthető helyszín, a Széll Kálmán tértől 10 perc sétára. Autóval érkezőknek számos parkolási lehetőség a saját parkolónkban és a környéken. Nyugodt, természetközeli környezet várja az ide látogatókat, mégis karnyújtásnyira a belvárostól. A környéken sport, kulturális és bevásárlási lehetőségek széles választéka várja.</p>
      </div>
    </div>
    <div class="columns medium-10 large-4 large-pull-8">
      <img src="http://placehold.it/640x768/?text=map" alt="">
    </div>
  </div>
</section>
<?php endwhile; ?>
<?php get_template_part('templates/keyboard'); ?>