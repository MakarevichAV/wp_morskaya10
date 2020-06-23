<?php
/**
 * morskaya10 Theme Customizer
 *
 * @package morskaya10
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function morskaya10_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'morskaya10_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'morskaya10_customize_partial_blogdescription',
			)
		);
	}

	// custom
	// Цвет ссылок меню на главной
	$wp_customize->add_setting('morskaya10_nav_color', array(
		'default' => '#ffffff',
		'transport'=>'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'morskaya10_nav_color',
			array(
				'label' => 'Цвет ссылок меню на главной',
				'section' => 'colors',
				'settings' => 'morskaya10_nav_color'
			)
		)
	);

	// Цвет телефона и email на главной
	$wp_customize->add_setting('morskaya10_contact_color', array(
		'default' => '#ffffff',
		'transport'=>'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'morskaya10_contact_color',
			array(
				'label' => 'Цвет телефона и email на главной',
				'section' => 'colors',
				'settings' => 'morskaya10_contact_color'
			)
		)
	);

	// Цвет заголовка на главной
	$wp_customize->add_setting('morskaya10_h1_color', array(
		'default' => '#ffffff',
		'transport'=>'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'morskaya10_h1_color',
			array(
				'label' => 'Цвет заголовка на главной',
				'section' => 'colors',
				'settings' => 'morskaya10_h1_color'
			)
		)
	);

	// Цвет галочек на главной
	$wp_customize->add_setting('morskaya10_mark_color', array(
		'default' => '#ffffff',
		'transport'=>'postMessage'
	));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'morskaya10_mark_color',
			array(
				'label' => 'Цвет галочек на главной',
				'section' => 'colors',
				'settings' => 'morskaya10_mark_color'
			)
		)
	);

	// custom section
	$wp_customize->add_section('morskaya10_site_data', array(
		'title' => 'Информация сайта',
		'priority' => 0
	));
		$wp_customize->add_setting('morskaya10_phone1', array(
			'default' => '+7 (916) 853-06-33',
			'transport'=>'postMessage'
		));
		$wp_customize->add_control(
			'morskaya10_phone1',
			array(
				'label' => 'Телефон1',
				'section' => 'morskaya10_site_data',
				'type' => 'text'
			)
		);

		$wp_customize->add_setting('morskaya10_phone2', array(
			'default' => '+7 (903) 757-29-15',
			'transport'=>'postMessage'
		));
		$wp_customize->add_control(
			'morskaya10_phone2',
			array(
				'label' => 'Телефон2',
				'section' => 'morskaya10_site_data',
				'type' => 'text'
			)
		);

		$wp_customize->add_setting('morskaya10_email', array(
			'default' => 'mos551@yandex.ru',
			'transport'=>'postMessage'
		));
		$wp_customize->add_control(
			'morskaya10_email',
			array(
				'label' => 'Email',
				'section' => 'morskaya10_site_data',
				'type' => 'text'
			)
		);

		$wp_customize->add_setting('morskaya10_h1', array(
			'default' => 'Россия, Крым/п. Витино/Гостевой дом "Морская, 10"'
		));
		$wp_customize->add_control(
			'morskaya10_h1',
			array(
				'label' => 'Заголовок',
				'section' => 'morskaya10_site_data',
				'type' => 'textarea'
			)
		);

		$wp_customize->add_setting('morskaya10_marks', array(
			'default' => 	'300 метров до песчанного пляжа
							/Чистый воздух. Уютный зелёный двор
							/Мангал, Пинг-Понг
							/Бесплатная парковка
							/Детская площадка
							/Акции 2020 (Весна - Осень)
							/Wi-Fi'
		));
		$wp_customize->add_control(
			'morskaya10_marks',
			array(
				'label' => 'Галочки',
				'section' => 'morskaya10_site_data',
				'type' => 'textarea'
			)
		);

}
add_action( 'customize_register', 'morskaya10_customize_register' );

function morskaya10_customize_css(){
	?>
		<style type="text/css">
			.for-main .main-head .wrapper a { 
				color: <?php echo get_theme_mod('morskaya10_nav_color'); ?>; 
			}
			.for-main .top-head p a,
			header .top-head .wrapper .contacts div i {
				color: <?php echo get_theme_mod('morskaya10_contact_color'); ?>;
			}
			.picture .wrapper .hero-info h1 {
				color: <?php echo get_theme_mod('morskaya10_h1_color'); ?>;
			}
			.picture .wrapper .hero-info ul li {
				color: <?php echo get_theme_mod('morskaya10_mark_color'); ?>;
			}
		</style>
	<?php
}
add_action( 'wp_head', 'morskaya10_customize_css');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function morskaya10_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function morskaya10_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function morskaya10_customize_preview_js() {
	wp_enqueue_script( 'morskaya10-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'morskaya10_customize_preview_js' );
