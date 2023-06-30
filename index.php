<?php
$PageTitle = "Gorillaz Web Site";
require('layout/head.html')
?>

<section class="hero">
    <section class="hero__section hero__section--img">
        <img src="img/hero/img3.png" alt="Gorillaz Portada" class="hero__img hero__img--img" width="100%" height="100%">
    </section>

    <section class="hero__section hero__section--logo">
        <figure class="hero__figure">
            <img src="img/logos/gorillaz-white.png" alt="" class="hero__img" width="100%" height="100%">
            <figcaption class="hero__figcaption">
                <a href="pages/inicio.php" class="hero__a">Enter site</a>
            </figcaption>
        </figure>
    </section>
</section>
<?php
require('layout/footer.html')
?>