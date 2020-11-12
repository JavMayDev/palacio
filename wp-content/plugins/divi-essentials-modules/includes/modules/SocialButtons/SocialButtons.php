<?php

class DIES_SocialButtons extends ET_Builder_Module {

	public $slug       = 'dies_social_buttons';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://twitter.com/ayaxdev',
		'author'     => 'AyaxDev',
		'author_uri' => 'https://twitter.com/ayaxdev',
	);

	// Init all the options
	public function init() {
		$this->name = esc_html__( 'Botones - Redes sociales', 'dies-divi-essentials-modules' );
		$this->advanced_fields = array(
			'background'            => array(
				'css' => array(
					'main'      => '%%order_class%% a.icon',
					'important' => 'all',
				),
			),
			'link_options'          => false,
		);
	}

	
	public function get_fields() {

		$my_tab_slug = 'Redes sociales';

		return array(
			'whatsapp' => array(
				'label'           	=> esc_html__( 'Whatsapp', 'dies-divi-essentials-modules' ),
				'type'            	=> 'text',
				'option_category' 	=> 'basic_option',
				'description'     	=> esc_html__( 'Aquí puedes agregar tu número de celular.', 'dies-divi-essentials-modules' ),
				'default_on_front'  => '+52',
				
			),
			'facebook' => array(
				'label'           	=> esc_html__( 'Facebook', 'dies-divi-essentials-modules' ),
				'type'            	=> 'text',
				'option_category' 	=> 'basic_option',
				'description'     	=> esc_html__( 'Agrega el URL (link) a tu facebook.', 'dies-divi-essentials-modules' ),
				'default_on_front'  => '#',
			),
			'size_range' => array(
				'label'           => esc_html__( 'Tamaño de iconos', 'dies-divi-essentials-modules' ),
				'type'            => 'range',
				'toggle_slug'     => 'input',
			),
		);
	}

	function get_advanced_fields_config() {
		$advanced_fields = array();


		// Background for every icon
		$advanced_fields['background'] = array(
			'has_background_color_toggle'   => false, // default. Warning: to be deprecated
			'use_background_color'          => true, // default
			'use_background_color_gradient' => true, // default
			'use_background_image'          => true, // default
			'use_background_video'          => true, // default
		);
		
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['facebook'] );
	}
}

new DIES_SocialButtons;
