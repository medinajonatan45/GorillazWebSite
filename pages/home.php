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

</main>

<?php
require('../layout/footer.html')
?>