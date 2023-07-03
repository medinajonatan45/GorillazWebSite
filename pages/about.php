<?php
$PageTitle = "Home";

// Head --> body
require('../layout/head.html');
// Header --> nav
require('../layout/header-nav.html');
?>

<main class="main">
    <!-- Banner Pricipal About -->
    <section class="banner banner--about">
        <img src="../img/about/about_img.png" alt="Banner About" class="banner__img" width="100%" height="100%">
    </section>
    
    <!-- Banner Secundario About -->
    <section class="section-full section-full--banner-about-2">

        <section class="section-full__text">
            <img src="../img/logos/song_machine-white.png" alt="" class="section-full__img" width="100%" height="100%">
        </section>

        <section class="section-full__profiles">
            <ul class="section-full__ul section-full__ul--banner-about-2">
                <li class="section-full__li"><img src="../img/about/mini_murdoc.png" alt="Murdoc" class="section-full__img" width="100%" height="100%"></li>
                <li class="section-full__li"><img src="../img/about/mini_noodle.png" alt="Noodle" class="section-full__img" width="100%" height="100%"></li>
                <li class="section-full__li"><img src="../img/about/mini_2d.png" alt="2-D" class="section-full__img" width="100%" height="100%"></li>
                <li class="section-full__li"><img src="../img/about/mini_russel.png" alt="Russel" class="section-full__img" width="100%" height="100%"></li>
            </ul>
        </section>
    </section>
    
    <section class="section-big section-big--about">
        <section class="sub-section sub-section--about-img">
            <div class="sub-section__background"></div>
        </section>

        <section class="sub-section sub-section--about-text">
            <section class="sub-section__text">
                <article class="sub-section__article">
                    <p>
                    Gorillaz is a virtual band created in 1998 by <b>Damon Albarn</b> and <b>Jamie Hewlett</b>
                    that consist of four fictional animated band members: 2-D, Murdoc Niccals,
                    Russel Hobbs and Noodle.
                    </p>
                </article>
            </section>
            <section class="sub-section__title">
                <h2 class="sub-section__h2">Band Members</h2>
                <article class="sub-section__article">
                    <ul class="sub-section__ul">
                        <li class="sub-section__li">2-D</li>
                        <li class="sub-section__li">Murdoc</li>
                        <li class="sub-section__li">Noodle</li>
                        <li class="sub-section__li">Russel</li>
                    </ul>
                </article>
            </section>
        </section>
    </section>

</main>

<?php
require('../layout/footer.html')
?>