<?php



$options = array(
     'box_id' => array(
        'type' => 'box',
        'options' => array(
            'option_1'  => array( 'type' => 'text' ),
            'option_2'  => array( 'type' => 'text' )
        ),
        'title' => __('Box Title', '{domain}'),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    
        /**
         * When used in Post Options on the first array level
         * the ``box`` container accepts additional parameters
         */
        //'context' => 'normal|advanced|side',
        //'priority' => 'default|high|core|low',
    ),

    //tabs
    'tab_id' => array(
        'type' => 'tab',
        'options' => array(
            'option_id'  => array( 'type' => 'text' ),
        ),
        'title' => __('Tab Title', '{domain}'),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    ),
    'tab_id_2' => array(
        'type' => 'tab',
        'options' => array(
            'option_id_2'  => array( 'type' => 'text' ),
        ),
        'title' => __('Tab Title #2', '{domain}'),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    ),


    //groub
    'group_id' => array(
        'type' => 'group',
        'options' => array(
            'option_groub'  => array( 'type' => 'text' ),
            'option_groub2'  => array( 'type' => 'text' ),
        ),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    ),


    //popup
    'popup_id' => array(
        'type' => 'popup',
        'options' => array(
            'option_popup'  => array( 'type' => 'text' ),
            'option_popup2'  => array( 'type' => 'text' )
        ),
        'title' => __('Button and Popup Title', '{domain}'),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        'modal-size' => 'small', // small, medium, large
        'desc' => __('Button Description', '{domain}'),
    ),

);