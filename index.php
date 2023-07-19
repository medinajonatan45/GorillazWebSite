<?php
$ICO_route = 'img/ico/favicon.ico';
$CSS_route = 'css/styles.css';

// Head --> body
require('layout/head.html');
?>
<section class="hero">
    <section class="hero__section hero__section--img">
        <img src="img/hero/hero_img.png" alt="Gorillaz Portada" class="hero__img hero__img--img" width="100%" height="100%">
    </section>

    <section class="hero__section hero__section--logo">
        <figure class="hero__figure">
            <img src="img/logos/gorillaz-white.png" alt="" class="hero__img" width="100%" height="100%">
            <figcaption class="hero__figcaption">
                <a href="pages/home.php" class="hero__a marker">Enter site</a>
            </figcaption>
        </figure>
    </section>
</section>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<!-- Animation -->
<script src="js/animation-hero.js"></script>
</body>
</html>