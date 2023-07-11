<?php
$PageTitle = "Gorillaz | About";

// Head --> body
require('../layout/head.html');
// Header --> nav
require('../layout/header-nav.html');
?>

<main class="main">

    <section class="section-full section-full--about">
        <section class="sub-section sub-section--about-img">
            <div class="sub-section__background"></div>
        </section>

        <section class="sub-section sub-section--about-text">
            <section class="sub-section__background sub-section__background--about-text">
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
    </section>

    <!-- Space bar -->
    <section class="section__medium section__medium--space-bar">
        <h2 class="section__h2 section__h2--space-bar">Band</h2>
    </section>

    <section class="section section--about">
        <section class="section__medium section__medium--about-character-1">
            <div class="sub-section__description sub-section__description--about sub-section__description--about--character-1">
                <h2 class="sub-section__h2 sub-section__h2--character">2-D</h2>
                <article class="sub-section__article">
                    <p>
                        Stuart Harold Pot (also known as 2-D) is the lead vocalist and keyboardist of Gorillaz.
                        2D was born in West Sussex, England on May 23, 1978. 
                        On August 15, 1997, when Stuart was 19. his life changed forever when he met his future bandmate <b>Murdoc</b>
                        , after he was hit by Murdoc´s car. Happening again later, Murdoc then nicknamed Stuart '2-D' from his "Two Dents" in his head.
                    </p>
                </article>
            </div>

            <div class="sub-section__photo">
                <img src="../img/about/2D.png" alt="2-D" class="sub-section__img" width="100%" height="100%">
            </div>
        </section>

        <section class="section__medium section__medium--about-character-2">
            <div class="sub-section__photo sub-section__photo--screen-big">
                <img src="../img/about/murdoc.png" alt="Murdoc" class="sub-section__img" width="100%" height="100%">
            </div>

            <div class="sub-section__description sub-section__description--about sub-section__description--about--character-2">
                <h2 class="sub-section__h2 sub-section__h2--character">Murdoc</h2>
                <article class="sub-section__article">
                    <p>
                        Murdoc Alphonse "Faust" Niccals is the official bass player, self-proclaimed leader and founder of Gorillaz.
                        Murdoc was born in Staffordshire, England on June 6, 1966. On August 15, 1997.
                        Murdoc and a gang of criminals were on a crime spree in a stolen Vauxhall Astra.
                        Their next was a music shop where 2-D was wroking at. This where 2-D and Murdoc meets.
                    </p>
                </article>
            </div>
            <div class="sub-section__photo sub-section__photo--screen-small">
                <img src="../img/about/murdoc.png" alt="Murdoc" class="sub-section__img" width="100%" height="100%">
            </div>
        </section>

        <section class="section__medium section__medium--about-character-3">
            <div class="sub-section__description sub-section__description--about sub-section__description--about--character-3">
                <h2 class="sub-section__h2 sub-section__h2--character">Noodle</h2>
                <article class="sub-section__article">
                    <p>
                        Noodle is the official lead guitarist of Gorillaz. Noodle was born in Osaka, Japan on October 31, 1990.
                        She spent a portion of her childhood in Japan as a subject of a classified Japanese super soldier project.
                        Noodle arrived at the doorstep of Gorilaz´s studios, Kong Studios, in 198, in a FedEx crate.
                        Once inside the studio, she sprung out of the box performing a guitar solo.
                    </p>
                </article>
            </div>

            <div class="sub-section__photo">
                <img src="../img/about/noodle.png" alt="Noodle" class="sub-section__img" width="100%" height="100%">
            </div>
        </section>

        <section class="section__medium section__medium--about-character-4">
            <div class="sub-section__photo sub-section__photo--screen-big">
                <img src="../img/about/russel.png" alt="Russel" class="sub-section__img" width="100%" height="100%">
            </div>

            <div class="sub-section__description sub-section__description--about sub-section__description--about--character-4">
                <h2 class="sub-section__h2 sub-section__h2--character">Russel</h2>
                <article class="sub-section__article">
                    <p>
                        Russel Hobbs (also known as Russ) is the official drummer of Gorillaz.
                        Russel was born in New York, USA. One rainly night outside a 7-Eleven store, Russel´s friends were killed in a drive-by shooting by a 
                        gang driving a black Humvee. Spirits of Russel's best friend Del the Ghost Rapper possesed Russel.
                        After the incident, he was sent to the UK where he first encountered Murdoc.
                    </p>
                </article>
            </div>
            <div class="sub-section__photo sub-section__photo--screen-small">
                <img src="../img/about/russel.png" alt="Russel" class="sub-section__img" width="100%" height="100%">
            </div>
        </section>

    </section>

</main>

<?php
require('../layout/footer.html')
?>