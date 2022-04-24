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

<footer class="d-none">
    <div class="footer-bottom d-flex py-3">
        <span class="container text-center text-uppercase">
            <?php echo date('Y'); ?> © GPR Investimentos Imobiliários&nbsp;&bull;&nbsp;Desenvolvido por <a href="https://imobmark.com.br/" target="_blank">Imobmark</a>
        </span>
    </div>
</footer>