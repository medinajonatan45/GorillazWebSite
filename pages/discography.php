<?php
$PageTitle = "Discography";

// Head --> body
require('../layout/head.html');
// Header --> nav
require('../layout/header-nav.html');
?>

<main class="main">

    <section class="section-banner section-banner--discography">
        <div class="section__background section__background--discography">
            <section class="sub-section sub-section--discography">
                <h2>Studio<br>Albums</h2>
            </section>
    
            <section class="sub-section sub-section--discography">
                <h2>Compilation<br>Albums</h2>
            </section>
        </div>
    </section>

    <!-- Space bar -->
    <section class="section__medium section__medium--space-bar">
        <h2 class="section__h2 section__h2--space-bar">Discography</h2>
    </section>
    
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

</main>

<?php
require('../layout/footer.html')
?>