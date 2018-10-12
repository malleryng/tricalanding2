<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="<?php    bloginfo('html_type');?>">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head();?>
</head>
<body>
<div class="container">
    <div class="hero">
        <div class="heroimg"></div>
        <div class="herotxt">
            <div class="titulo">
                <h2>POR MUCHOS AÑOS SE HA PENSADO </h2>
                <h2>QUE LA FUMIGACIÓN ESTERILIZA EL SUELO</h2>
            </div>
            <div class="call">
                <h2>Hoy Trical rompe estos paradigmas</h2>
                <h2>con la serie Triform</h2>
            </div>
            <div class="bajada">
            Nuestro objetivo es eliminar los efectos de las sustancias alelopáticas, erradicando del suelo nemátodos fitoparásitos, hongos y bacterias fitopatógenas para el control de plagas y enfermedades.
            </div>
        </div> <!-- herotext -->
    </div> <!-- hero -->
    <div class="heromovil">
            <div class="textomovil">
                <div class="titulomovil">
                    <!-- <h3>POR MUCHOS AÑOS SE HA PENSADO </h3> -->
                    <h3>POR MUCHOS AÑOS SE HA PENSADO <br>QUE LA FUMIGACIÓN ESTERILIZA EL SUELO</h3>
                </div>
                <div class="callmovil">
                    <h2>Hoy Trical rompe estos paradigmas</h2> <h3>con la serie Triform</h3>
                </div>
                <div class="bajadamovil">
                Nuestro objetivo es eliminar los efectos de las sustancias alelopáticas, erradicando del suelo nemátodos fitoparásitos, hongos y bacterias fitopatógenas para el control de plagas y enfermedades.
                </div>
            </div> <!-- textomovil -->
    </div>
    <div class="tituloinfografia">
        <h2>La Fumigación del suelo ¿Cómo funciona?</h2>
    </div>
    <div class="infografia">
        <img class="" src="<?php echo get_template_directory_uri() . '/img/infografia.jpg' ?>" alt=""> 
    </div>

    <div class="my-slider">
        <div><img class="" src="<?php echo get_template_directory_uri() . '/img/slideuno.jpg' ?>" alt=""> </div>
        <div><img class="" src="<?php echo get_template_directory_uri() . '/img/slidedos.jpg' ?>" alt=""></div>
        <div><img class="" src="<?php echo get_template_directory_uri() . '/img/slidetres.jpg' ?>" alt=""></div>
    </div>
    <!-- or ul.my-slider > li -->

     <div class="features">
        <div class="featBaj"> <h3>Conoce la serie triform de Trical</h3> </div>
    </div> <!-- features -->

    <div class="contacto">
        <div class="informacion">
        <img class="" src="<?php echo get_template_directory_uri() . '/img/compromiso.svg' ?>" alt=""> 
        <div class="textoinfo">
            <p>Nuestros productos <br>  No alteran el equilibrio <br> De los microorganismos <br> Benéficos del suelo</p>
        </div>

        </div>
            <div class="formulario">
                <div class="contTit">CONTÁCTANOS</div>
                <?php
                global $post;
                $content = $post->post_content;
                echo do_shortcode( '[contact-form-7 id="8" title="Form1"]' );
                ?>
            </div> <!-- features -->
        </div>
    <footer>
    <div class="trical">
        <img src="<?php echo get_template_directory_uri() . '/img/logoTricalFooter.png' ?>"  alt="">
        <p>EXPERTOS EN FUMIGACIÓN <br> Y SALUD DEL SUELO</p>
    </div> <!-- trical -->
    <div class="mapa">
        <img src="<?php echo get_template_directory_uri() . '/img/mundo.png' ?>"  alt="">
        <p>Más de 60 años de experiencia <br> desde EEUU al mundo.</p>
    </div> <!-- mapa -->
    <a class="email" href="mailto:consultas@trical.cl">
        <img src="<?php echo get_template_directory_uri() . '/img/email.png' ?>"  alt="">
        <p>consultas@trical.cl</p>
    </a> <!-- email -->
    </footer>

    <div class="dekaz">
    <div class="contenedor">
        <a href="http://www.dekaz.cl" target="_blank">
            <p> Diseñado por</p>
            <img class="" src="<?php echo get_template_directory_uri() . '/img/isodk.svg' ?>" alt=""> 
            <p>Dekaz</p>
        </a>
    </div> <!-- contenedor -->
</div> <!-- dekaz -->

</div>
</body>
<?php wp_footer() ?>
</html>