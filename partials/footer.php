<?php

/**
 * Footer component
 * 
 * @package WordPress
 */

$footer_logo = get_theme_mod('footer_logo');

$social = get_theme_mod('social_icons');

$phone = get_theme_mod('info_phone');
$whatsapp = get_theme_mod('info_whatsapp');
$address = get_theme_mod('info_address');

$chars = ['(', ')', ' ', '-', '+'];
$phone_url = 'tel:' . str_replace($chars, '', $phone);
$whatsapp_url = str_replace($chars, '', $whatsapp);
if (substr('$whatsapp_url', 0, 2) != '55') $whatsapp_url = '55' . $whatsapp_url;
$whatsapp_url = 'https://api.whatsapp.com/send/?phone=' . $whatsapp_url;

$address_url = "https://google.com/maps/place/" . htmlspecialchars(strip_tags(str_replace('</p>', '+', $address)));


?>

<footer>
    <div class="footer-content py-5">
        <div class="container">
            <div class="inner d-flex justify-content-between flex-column flex-lg-row w-100 m-0 text-center text-lg-start">
                <div class="">
                    <div class="logo-wrap mx-auto mx-lg-0">
                        <a href="<?php echo home_url(); ?>">
                            <img class="logo" src="<?php echo get_theme_mod('footer_logo'); ?>" alt="">
                        </a>
                        <div class="social-icons mt-3 mt-lg-4">
                            <?php foreach ($social as $link) : ?>
                                <a href="<?php echo $link['url']; ?>" title="<?php echo $link['icon']; ?>" target="_blank">
                                    <span class="bi bi-<?php echo $link['icon']; ?>"></span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="my-2 my-lg-0">
                    <div class="nav-wrap">
                        <div class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="footerMenuDropdown">
                                <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'    => 'footer_menu',
                                        'depth'             => 2,
                                        'container_class'   => '',
                                        'menu_class'        => 'navbar-nav',
                                        'walker'            => new BS_Menu_Walker()
                                    )
                                );
                                ?>
                            </div>
                        </div>
                        <div class="address">
                            <a href="<?php echo $address_url; ?>" target="_blank">
                                <?php echo $address; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="contact-wrap">
                        <div class="contact-icons">
                            <a href="<?php echo $phone_url; ?>" title="<?php echo __('Telefone') ?>" class="contact" target="_blank">
                                <span class="icon bi-telephone-fill"></span>
                                <span class="text"><?php echo $phone; ?></span>
                            </a>
                            <a href="<?php echo $whatsapp_url; ?>" title="<?php echo __('WhatsApp') ?>" class="contact" target="_blank">
                                <span class="icon bi-whatsapp"></span>
                                <span class="text"><?php echo $whatsapp; ?></span>
                            </a>
                        </div>
                        <a href="<?php echo $whatsapp_url; ?>" class="whatsapp-button" target="_blank">
                            <span class="icon bi-whatsapp"></span>
                            <span>Comelli Zap</span>
                        </a>
                    </div>
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