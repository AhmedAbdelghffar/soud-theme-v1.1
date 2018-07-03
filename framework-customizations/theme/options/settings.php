<?php



$options = array(
     'box_id' => array(
        'type' => 'box',
        'options' => array(
            'option_1'  => array( 'type' => 'text' ),
            'option_2'  => array( 'type' => 'text' ),
             'option_3' => array(
                'type'  => 'switch',
                'value' => 'hello',
                'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                'label' => __('Label', '{domain}'),
                'desc'  => __('Description', '{domain}'),
                'help'  => __('Help tip', '{domain}'),
                'left-choice' => array(
                    'value' => 'goodbye',
                    'label' => __('Goodbye', '{domain}'),
                ),
                'right-choice' => array(
                    'value' => 'hello',
                    'label' => __('Hello', '{domain}'),
                ),
            ),
            'option_4'  => array(
                'type'  => 'multi',
                'value' => array(
                    'option-1' => 'value 1',
                    'option-2' => 'value 2',
                ),
                'attr'  => array(
                    'class' => 'custom-class',
                    'data-foo' => 'bar',
                    /*
                    // Add this class to display inner options separators
                    'class' => 'fw-option-type-multi-show-borders',
                    */
                ),
                'label' => __('Label', '{domain}'),
                'desc'  => __('Description', '{domain}'),
                'help'  => __('Help tip', '{domain}'),
                'inner-options' => array(
                    'option_1' => array( 'type' => 'text' ),
                    'option_2' => array( 'type' => 'textarea' ),
                )
            )
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