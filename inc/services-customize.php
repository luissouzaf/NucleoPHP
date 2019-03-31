<?php
function services_customize( $wp_customize ) {
	$wp_customize->add_section('services-section', array(
		'title' => 'Serviços'
	) );

// --------------------------------------------------
//  ITEM 1
// -------------------------------------------------- 
	// $wp_customize->add_setting( 'services-item-image-1');

	// $wp_customize->add_control( new WP_Customize 'services-item-title-control-1', array(
	// 	'label'=> 'Serviços Item Título 1',
	// 	'section'=> 'services-section',
	// 	'settings'=> 'services-item-title-1'
	// ) ) );



	$wp_customize->add_setting( 'services-item-title-1', array(
		'default'=> 'Editais e Leis de Incentivo'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-title-control-1', array(
		'label'=> 'Serviços Item Título 1',
		'section'=> 'services-section',
		'settings'=> 'services-item-title-1'
	) ) );

	$wp_customize->add_setting( 'services-item-text-1', array(
		'default'=> 'criamos e/ou formatamos projetos concorrentes a seleções públicas e privadas, via edital ou leis de incentivo à cultura.'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-text-control-1', array(
		'label'=> 'Serviços Item Descrição 1',
		'section'=> 'services-section',
		'settings'=> 'services-item-text-1',
		'type'=> 'textarea'
	) ) );

// --------------------------------------------------
//  ITEM 2
// -------------------------------------------------- 
	$wp_customize->add_setting( 'services-item-title-2', array(
		'default'=> 'Desenvolvimento de Projetos Culturais'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-title-control-2', array(
		'label'=> 'Serviços Item Título 2',
		'section'=> 'services-section',
		'settings'=> 'services-item-title-2'
	) ) );

	$wp_customize->add_setting( 'services-item-text-2', array(
		'default'=> 'executamos projetos de impacto social através da cultura, coordenando todas as fases produtivas (pré-produção, produção e pós-produção).'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-text-control-2', array(
		'label'=> 'Serviços Item Descrição 2',
		'section'=> 'services-section',
		'settings'=> 'services-item-text-2',
		'type'=> 'textarea'
	) ) );

// --------------------------------------------------
//  ITEM 3
// -------------------------------------------------- 
	$wp_customize->add_setting( 'services-item-title-3', array(
		'default'=> 'Marketing Cultural'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-title-control-3', array(
		'label'=> 'Serviços Item Título 3',
		'section'=> 'services-section',
		'settings'=> 'services-item-title-3'
	) ) );

	$wp_customize->add_setting( 'services-item-text-3', array(
		'default'=> 'realizamos planejamento de mídia a partir da configuração de cada projeto cultural e dos objetivos específicos do patrocinador.'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-text-control-3', array(
		'label'=> 'Serviços Item Descrição 3',
		'section'=> 'services-section',
		'settings'=> 'services-item-text-3',
		'type'=> 'textarea'
	) ) );

// --------------------------------------------------
//  ITEM 4
// -------------------------------------------------- 
	$wp_customize->add_setting( 'services-item-title-4', array(
		'default'=> 'Gestão de Responsabilidade Social'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-title-control-4', array(
		'label'=> 'Serviços Item Título 4',
		'section'=> 'services-section',
		'settings'=> 'services-item-title-4'
	) ) );

	$wp_customize->add_setting( 'services-item-text-4', array(
		'default'=> 'gerenciamento estratégico do setor, planejando as áreas de atuação e selecionando projetos de acordo com os princípios das organizações parceiras.'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-text-control-4', array(
		'label'=> 'Serviços Item Descrição 4',
		'section'=> 'services-section',
		'settings'=> 'services-item-text-4',
		'type'=> 'textarea'
	) ) );

// --------------------------------------------------
//  ITEM 5
// -------------------------------------------------- 
	$wp_customize->add_setting( 'services-item-title-5', array(
		'default'=> 'Divulgação de Eventos Culturais'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-title-control-5', array(
		'label'=> 'Serviços Item Título 5',
		'section'=> 'services-section',
		'settings'=> 'services-item-title-5'
	) ) );

	$wp_customize->add_setting( 'services-item-text-5', array(
		'default'=> 'veiculação por meio de mídias sociais, a fim de promover ações voltadas à cultura.'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-text-control-5', array(
		'label'=> 'Serviços Item Descrição 5',
		'section'=> 'services-section',
		'settings'=> 'services-item-text-5',
		'type'=> 'textarea'
	) ) );

// --------------------------------------------------
//  ITEM 6
// --------------------------------------------------
	$wp_customize->add_setting( 'services-item-title-6', array(
		'default'=> 'Agenciamento de Artistas'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-title-control-6', array(
		'label'=> 'Serviços Item Título 6',
		'section'=> 'services-section',
		'settings'=> 'services-item-title-6'
	) ) );

	$wp_customize->add_setting( 'services-item-text-6', array(
		'default'=> 'captação de recursos, elaboração de portfólios e releases, suporte administrativo, divulgação das obras, produção de eventos.'
	) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'services-item-text-control-6', array(
		'label'=> 'Serviços Item Descrição 6',
		'section'=> 'services-section',
		'settings'=> 'services-item-text-6',
		'type'=> 'textarea'
	) ) );




}
add_action( 'customize_register', 'services_customize' );