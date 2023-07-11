<?php
$PageTitle = "Gorillaz | Discography";

// Head --> body
require('../layout/head.html');
// Header --> nav
require('../layout/header-nav.html');
?>

<main class="main">

    <!-- Banner: Discography -->
    <section class="section-banner section-banner--discography">
        <div class="section__background section__background--discography">
            <section class="sub-section sub-section--discography">
                <h2 class="sub-section__h2 sub-section__h2--discography">Studio<br>Albums</h2>
            </section>
    
            <section class="sub-section sub-section--discography">
                <h2 class="sub-section__h2 sub-section__h2--discography">Compilation<br>Albums</h2>
            </section>
        </div>
    </section>

    <!-- Space bar -->
    <section class="section__medium section__medium--space-bar">
        <h2 class="section__h2 section__h2--space-bar">Discography</h2>
    </section>
    
    <!--  -->
    <section class="section-full section-full--discography">
        <section class="sub-section sub-section--discography-img">
        </section>
        <section class="sub-section sub-section--discography-text">
            <h2 class="sub-section__h2 sub-section__h2--discography">Studio Albums</h2>
            <article class="sub-section__article">
                <ul class="sub-section__ul">
                    <li class="sub-section__li"><b>Gorillaz</b> (2001)</li>
                    <li class="sub-section__li"><b>Demon Days</b> (2005)</li>
                    <li class="sub-section__li"><b>Plastic Beach</b> (2010)</li>
                    <li class="sub-section__li"><b>The Fall</b> (2010)</li>
                    <li class="sub-section__li"><b>Humanz</b> (2017)</li>
                    <li class="sub-section__li"><b>The Now Now</b> (2018)</li>
                    <li class="sub-section__li"><b>Song Machine, Season 1</b> (2020)</li>
                </ul>
            </article>
        </section>
    </section>
    
    <!-- Section: Album 1 -->
    <section class="section-full section-full__album section-full__album--1">
        <section class="sub-section sub-section__album-img">
            <img src="../img/discography/gorillaz_album.jpg" alt="Gorillaz (Album)" class="sub-section__img sub-section__img--album-img" width="100%" height="100%">
        </section>
        <section class="sub-section sub-section__album-text">
            <h2 class="sub-section__h2 sub-section__h2--album-text">Gorillaz (Album)</h2>
            <article class="sub-section__article">
                <p>
                Gorillaz is the eponymous debut studio by English virtual band Gorillaz. 
                Its was released on 26 March 2001 in the United Kingdom Parlophone and in the United Stated by Virgin Records. 
                The album features contributions from Del The Funky Homosapien (credited as Del Tha Ghost Rapper). 
                Tina Weymouth, Miho Hatori, and Ibrahim Ferrer.
                </p>
            </article>
        </section>
    </section>
     <!-- Section: Album 1 -->
     <section class="section-full section-full__album section-full__album--2">
        <section class="sub-section sub-section__album-img">
            <img src="../img/discography/demon_album.jpg" alt="Demon Days" class="sub-section__img sub-section__img--album-img" width="100%" height="100%">
        </section>
        <section class="sub-section sub-section__album-text">
            <h2 class="sub-section__h2 sub-section__h2--album-text sub-section__h2--album-text-white">Demon Days</h2>
            <article class="sub-section__article">
                <p>
                Demon Days is the second studio album by English Virtual Band Gorillaz. 
                It was released on 11 May 2005 in the United Kingdom by Parlophone and on 23 May 2005 in the United Stated by Virgin Records. 
                Produced by the band, Danger Mouse, Jason Cox, and James Dring, the album features contributions from De La Soul, Neneh Cherry, 
                Martina Topley-Bird, Roots Manuva, MF DOOM, Ike Turner, Bootle Brown, Shaun Ryder, and Dennis Hopper.
                </p>
            </article>
        </section>
    </section>
</main>

<?php
require('../layout/footer.html')
?>