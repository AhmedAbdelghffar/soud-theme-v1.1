<?php
////theme option



///gental settings
//// logo
function prefix_customizer_general_be4( $wp_customize ) {

$wp_customize->add_section('general_be4',array(
    'title'=> 'General Settings'
));

$wp_customize->add_setting('be4_logo',array(
    'default'=> ''
));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo',array(
    'label'      => 'logo',
    'section'    => 'general_be4',
    'settings'   => 'be4_logo'
)));


}


add_action( 'customize_register', 'prefix_customizer_general_be4' );


///social
function prefix_customizer_social( $wp_customize ) {

$wp_customize->add_section('be4-social',array(
    'title'=> 'social'
));

$wp_customize->add_setting('be4_facebook',array(
    'default'=> 'https://www.google.com/'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'facebook-share-control',array(
'label' => 'facebook link',
'section' => 'be4-social',
'settings' => 'be4_facebook',
)));



$wp_customize->add_setting('be4_twitter',array(
    'default'=> 'https://twitter.com'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'twitter-share-control',array(
'label' => 'twitter link',
'section' => 'be4-social',
'settings' => 'be4_twitter',
)));


$wp_customize->add_setting('be4_instagram',array(
    'default'=> 'https://www.instagram.com/'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'instagram-share-control',array(
'label' => 'instagram link',
'section' => 'be4-social',
'settings' => 'be4_instagram',
)));


$wp_customize->add_setting('be4_linkedin',array(
    'default'=> 'https://www.linkedin.com/'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'linkedin-share-control',array(
'label' => 'linkedin link',
'section' => 'be4-social',
'settings' => 'be4_linkedin',
)));



$wp_customize->add_setting('be4_google',array(
    'default'=> 'https://plus.google.com'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'google-share-control',array(
'label' => 'google link',
'section' => 'be4-social',
'settings' => 'be4_google',
)));



$wp_customize->add_setting('be4_youtube',array(
    'default'=> 'https://www.youtube.com/'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'youtube-share-control',array(
'label' => 'youtube link',
'section' => 'be4-social',
'settings' => 'be4_youtube',
)));



}



add_action( 'customize_register', 'prefix_customizer_social' );






////// company summary

function prefix_customizer_company_summary( $wp_customize ) {

$wp_customize->add_section('company_summary',array(
    'title'=> 'company summary'
));

$wp_customize->add_setting('be4_heading',array(
    'default'=> ' '
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'heading-control',array(
'label' => 'heading',
'section' => 'company_summary',
'settings' => 'be4_heading',
)));



$wp_customize->add_setting('be4_text',array(
    'default'=> ''
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'text-control',array(
'label' => 'text',
'section' => 'company_summary',
'settings' => 'be4_text',
'type' => 'textarea'
)));


}



add_action( 'customize_register', 'prefix_customizer_company_summary' );






//// contact info
function prefix_customizer_contact_info( $wp_customize ) {

$wp_customize->add_section('contact_info',array(
    'title'=> 'Contact Info'
));

$wp_customize->add_setting('be4_mail',array(
    'default'=> 'x'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'mail-control',array(
'label' => 'mail',
'section' => 'contact_info',
'settings' => 'be4_mail',
)));



$wp_customize->add_setting('be4_telephone',array(
    'default'=> 'x'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'text-telephone',array(
'label' => 'telephone',
'section' => 'contact_info',
'settings' => 'be4_telephone',

)));



$wp_customize->add_setting('be4_mobile',array(
    'default'=> 'x'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'text-mobile',array(
'label' => 'mobile',
'section' => 'contact_info',
'settings' => 'be4_mobile',

)));


$wp_customize->add_setting('be4_mobile2',array(
    'default'=> 'x'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'text-mobile2',array(
'label' => 'mobile2',
'section' => 'contact_info',
'settings' => 'be4_mobile2',

)));


$wp_customize->add_setting('be4_address',array(
    'default'=> 'x'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'text-address',array(
'label' => 'address',
'section' => 'contact_info',
'settings' => 'be4_address',
)));


$wp_customize->add_setting('be4_copyrights',array(
    'default'=> 'x'
));

$wp_customize->add_control(new Wp_Customize_Control($wp_customize,'text-copyrights',array(
'label' => 'copyrights',
'section' => 'contact_info',
'settings' => 'be4_copyrights',
)));



}



add_action( 'customize_register', 'prefix_customizer_contact_info' );
