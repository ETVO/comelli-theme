<?php

/**
 * Customizer controls and options
 * 
 * @package WordPress
 */

use Kirki\Util\Helper;

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Do not proceed if Kirki does not exist.
if (!class_exists('Kirki')) {
    return;
}

Kirki::add_config(
    'theme_options_config',
    [
        'option_type' => 'theme_mod',
        'capability'  => 'manage_options',
    ]
);

/**
 * Add a panel
 */
$panel_id = 'theme_options';
new \Kirki\Panel(
    $panel_id,
    [
        'priority'    => 10,
        'title'       => __('Opções Comelli'),
    ]
);

$sections = [
    'rodape'    => __('Rodapé'),
    'contato'   => __('Contato e Redes'),
    'about'     => __('Sobre Nós'),
];

$section_title_class = 'customize-section-title';

/**
 * Add all sections
 */
foreach($sections as $section_id => $title) {
    $section_args = [
        'title' => $title,
        'panel' => $panel_id
    ];

    new \Kirki\Section( 
        $section_id, 
        $section_args
    );

}


/** ----- Rodapé ----- */

$section = 'rodape';

new \Kirki\Field\Image(
    [
        'settings'  => 'footer_logo',
        'label'     => esc_html__('Logo Rodapé'),
        'section'   => $section,
        'default'   => '',
    ]
);



/** ----- Contato e Redes ----- */

$section = 'contato';

new \Kirki\Field\Generic(
	[
		'settings'    => 'contato_title',
		'section'     => $section,
        'default'   => 'Contato',
		'choices'     => [
			'element' => 'h3',
			'class'   => $section_title_class,
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'info_phone',
		'label'    => __('Telefone'),
		'section'  => $section,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'info_whatsapp',
		'label'    => __('WhatsApp'),
		'section'  => $section,
	]
);

new \Kirki\Field\Editor(
	[
		'settings' => 'info_address',
		'label'    => __('Endereço'),
		'section'  => $section,
	]
);

new \Kirki\Field\Generic(
	[
		'settings'    => 'redes_title',
		'section'     => $section,
        'default'   => 'Redes Sociais',
		'choices'     => [
			'element' => 'h3',
			'class'   => $section_title_class,
		],
	]
);

new \Kirki\Field\Repeater(
    [
        'settings'    => 'social_icons',
		'label'       => __('Ícones Redes Sociais'),
		'section'     => $section,
        'button_label' => esc_html__('Adicionar nova'),
        'row_label' => [
            'type'  => 'field',
            'value' => __('Ícone'),
            'field' => 'icon',
        ],
		'default'     => [
			[
                'icon' => 'facebook',
                'url'  => 'https://www.facebook.com/',
            ],
            [
                'icon' => 'instagram',
                'url'  => 'https://www.instagram.com/',
            ],
		],
		'fields'      => [
			'icon' => [
                'type' => 'text',
                'label' => __('Ícone'),
                'description' => __('Utilize os ícones do') . ' Bootstrap Icons',
            ],
            'url'  => [
                'type' => 'text',
                'label' => __('Link'),
            ],
		],
    ]
);



/** ----- Sobre Nós ----- */

$section = 'about';


new \Kirki\Field\Generic(
	[
		'settings'    => 'quem_somos_title',
		'section'     => $section,
        'default'   => 'Quem Somos',
		'choices'     => [
			'element' => 'h3',
			'class'   => $section_title_class,
		],
	]
);

new \Kirki\Field\Editor(
	[
		'settings' => 'quem_somos',
		'label'    => __('Quem Somos'),
		'section'  => $section,
	]
);

new \Kirki\Field\Generic(
	[
		'settings'    => 'diferenciais_title',
		'section'     => $section,
        'default'   => 'Diferenciais',
		'choices'     => [
			'element' => 'h3',
			'class'   => $section_title_class,
		],
	]
);


new \Kirki\Field\Repeater(
    [
        'settings'    => 'diferenciais_lista',
		'label'       => __('Diferenciais'),
		'section'     => $section,
        'button_label' => esc_html__('Adicionar novo'),
        'row_label' => [
            'type'  => 'field',
            'value' => __('Diferencial'),
            'field' => 'desc',
        ],
		'default'     => [
		],
		'fields'      => [
			'icon' => [
                'type' => 'text',
                'label' => __('Ícone'),
                'description' => __('Utilize os ícones do') . ' Bootstrap Icons',
            ],
            'desc'  => [
                'type' => 'text',
                'label' => __('Descrição'),
            ],
		],
    ]
);

new \Kirki\Field\Image(
    [
        'settings'  => 'diferenciais_image',
        'label'     => esc_html__('Imagem'),
        'section'   => $section,
        'default'   => '',
    ]
);