<?php
    function theme_31w_customize_register($wp_customize) {
        // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
        $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'theme_31w'),
        'priority' => 30,
        ));
    
    //////////////////////////////////////////////////////author
    
        $wp_customize->add_setting('hero_author', array(
        'default' => __('Massimo Trimboli', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
        ));
    
    $wp_customize->add_control('hero_author', array(
        'label' => __('author', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
        ));
    
        $wp_customize->add_setting('hero_subtitle', array(
        'default' => __('Your success starts here.', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'theme_31w'),
        'section' => 'hero_section',
        'type' => 'text',
    ));

    ///////////////////////////////// courriel
    $wp_customize->add_setting('hero_email', array(
      'default' => __('email@email.com.', 'theme_31w'),
      'sanitize_callback' => 'sanitize_text_field',
  ));
  
  $wp_customize->add_control('hero_email', array(
      'label' => __('hero email', 'theme_31w'),
      'section' => 'hero_section',
      'type' => 'text',
  ));

  ///////////////////////////////// numero de telephone
  $wp_customize->add_setting('hero_phone', array(
    'default' => __('123-456-7890', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('hero_phone', array(
    'label' => __('hero phone', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
));

///////////////////////////////// adresse
$wp_customize->add_setting('hero_adress', array(
  'default' => __('123 rue adresse ville', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field',
));

$wp_customize->add_control('hero_adress', array(
  'label' => __('hero adress', 'theme_31w'),
  'section' => 'hero_section',
  'type' => 'text',
));
    
    //////////////////////////////////////////////////// background
    
    $wp_customize->add_setting('hero_background', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
        'label' => __('Hero Background Image', 'theme_31w'),
        'section' => 'hero_section',
    )));
    
    /////////////////////////// couleur texte hero
    
    $wp_customize->add_setting('hero_text_color', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_text_color', array(
      'label' => __('couleur texte hero', 'theme_31w'),
      'section' => 'hero_section',
    )));

    /////////////////////////// couleur svg hero
    
    $wp_customize->add_setting('hero_svg_color', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_svg_color', array(
      'label' => __('couleur svg hero', 'theme_31w'),
      'section' => 'hero_section',
    )));
    
    
    
    /////////////////////////////////////////////////////////////////// nouvelle section
    $wp_customize->add_section('footer_section', array(
      'title' => __('footer Section', 'theme_31w'),
      'priority' => 30,
      ));
    
      /////////// champ mission
    
      $wp_customize->add_setting('footer_mission', array(
        'default' => __('mission du club de voyage', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
        ));
    
    $wp_customize->add_control('footer_mission', array(
        'label' => __('mission', 'theme_31w'),
        'section' => 'footer_section',
        'type' => 'text',
        ));
    
    
    //////////////////////////////////////////////////// couleur texte footer
    
    $wp_customize->add_setting('footer_text_color', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_text_color', array(
      'label' => __('couleur texte footer', 'theme_31w'),
      'section' => 'footer_section',
    )));

    /////////////////////////// couleur svg footer
    
    $wp_customize->add_setting('footer_svg_color', array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_svg_color', array(
      'label' => __('couleur svg footer', 'theme_31w'),
      'section' => 'footer_section',
    )));




    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /////////////////////////////////////////////////////////////////////////// section 404
    $wp_customize->add_section('p404_section', array(
      'title' => __('p404 Section', 'theme_31w'),
      'priority' => 30,
      ));


      /////////////// ajout message
      $wp_customize->add_setting('p404_title', array(
        'default' => __('404', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
        ));
    
    $wp_customize->add_control('p404_title', array(
        'label' => __('title', 'theme_31w'),
        'section' => 'p404_section',
        'type' => 'text',
        ));

        ///////////////////ajout sous-titre 404
        /////////////// ajout message
      $wp_customize->add_setting('p404_subtitle', array(
        'default' => __('404', 'theme_31w'),
        'sanitize_callback' => 'sanitize_text_field'
        ));
    
    $wp_customize->add_control('p404_subtitle', array(
        'label' => __('subtitle', 'theme_31w'),
        'section' => 'p404_section',
        'type' => 'text',
        ));

        ////////////////// couleur texte 404
        $wp_customize->add_setting('p404_text_color', array(
          'default' => '',
          'sanitize_callback' => 'esc_url_raw',
        ));
        
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'p404_text_color', array(
          'label' => __('couleur texte 404', 'theme_31w'),
          'section' => 'p404_section',
        )));


        /////////////////////// image background
        $wp_customize->add_setting('p404_background', array(
          'default' => '',
          'sanitize_callback' => 'esc_url_raw',
      ));
      
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'p404_background', array(
          'label' => __('404 Background Image', 'theme_31w'),
          'section' => 'p404_section',
      )));
    
    }
    
    add_action('customize_register', 'theme_31w_customize_register');
?>