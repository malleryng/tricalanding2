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
            <div class="call">
                <h2>Con Trical limpiamos para</h2>
                <h2> fortalecer y dar vida a tu suelo</h2>
            </div>
            <div class="bajada">
            REALIZAMOS UN CONTROL INTEGRADO DE PLAGAS Y ENFERMEDADES, SIENDO UN APORTE BIONUTRICIONAL A TU CULTIVO.
            </div>
            <div class="explica">
            Nuestro propósito es dejar el suelo con las condiciones óptimas de salud y sanidad, a fin de que obtengas <span> la mejor producción de tus cultivos. </span>
            </div>
        </div> <!-- herotext -->
    </div> <!-- hero -->
    <div class="heromovil">
            <div class="textomovil">
                <div class="callmovil">
                    <h2>Con Trical limpiamos para fortalecer y dar vida a tu suelo</h2>
                </div>
                <div class="bajadamovil">
                REALIZAMOS UN CONTROL INTEGRADO DE PLAGAS Y ENFERMEDADES, SIENDO UN APORTE BIONUTRICIONAL A TU CULTIVO.
                </div>
                <div class="explicamovil">
                Nuestro propósito es dejar el suelo con las condiciones óptimas de salud y sanidad, a fin de que obtengas <span> la mejor producción de tus cultivos. </span>
                </div>
            </div> <!-- textomovil -->
    </div>

    <div class="infografia">
    <img class="" src="<?php echo get_template_directory_uri() . '/img/infografia.jpg' ?>" alt=""> 
    </div>

    <div class="features">
        <div class="featBaj"><p>No esterilices tu suelo al fumigarlo</p>  <p>conoce la serie triform de Trical</p> </div>
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
</div>
</body>
<?php wp_footer() ?>
</html>