<?php

/**
 * Footer component
 * 
 * @package WordPress
 */

$footer_logo = get_theme_mod('footer_logo');

$social = get_theme_mod('info_social');

$phone = get_theme_mod('info_telefone');
$whatsapp = get_theme_mod('info_whatsapp');
$address = get_theme_mod('info_endereco');

$chars = ['(', ')', ' ', '-', '+'];
$phone_link = str_replace($chars, '', $phone);
$whatsapp_link = str_replace($chars, '', $whatsapp);

$address_map = "https://google.com/maps/place/" . htmlspecialchars(strip_tags(str_replace('</p>', '+', $address)));

if (substr('$whatsapp_link', 0, 2) != '55') $whatsapp_link = '55' . $whatsapp_link;

?>

<footer>
    <div class="footer-content py-5">
        <div class="inner">
            <div class="logo">
                <img src="" alt="">
                <div class="social-icons">
                    
                </div>
            </div>
        </div>

    </div>
    <div class="footer-bottom d-flex py-3">
        <span class="container text-center text-uppercase">
            <?php echo date('Y'); ?> © <a class="highlight" href="<?php echo home_url(); ?>">Comelli Construções</a>
            <br class="d-sm-none" />
            <span class="d-none d-sm-inline-block">&nbsp;&bull;&nbsp;</span>

            <small class="d-sm-none">Todos os Direitos Reservados</small>
            <span class="d-none d-sm-inline-block">Todos os Direitos Reservados</span>

            <br class="d-md-none" />
            <span class="d-none d-md-inline-block">&nbsp;&bull;&nbsp;</span>
            Desenvolvido por <a href="https://imobmark.com.br/" target="_blank">Imobmark</a>
        </span>
    </div>
</footer>