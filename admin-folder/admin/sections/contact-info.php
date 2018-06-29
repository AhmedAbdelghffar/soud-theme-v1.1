<?php

Redux::setSection( $opt_name, array(
    'title'  => __( 'Contact Info', 'redux-framework-demo' ),
    'id'     => 'contact_ifno',
    'desc'   => __( 'Web Site Contact Information', 'redux-framework-demo' ),
    'icon'   => 'el el-home',
    'fields' => array(

        array(
            'id'       => 'social-network',
            'type'     => 'sortable',
            'title'    => __( 'Social Media Links', 'redux-framework-demo' ),
            'label' => true,
            'mode'     => 'text',
            'options' => array(
               'facebook' => 'Enter facebook Url',
               'twitter' => 'Enter twitter Url',
               'instagram' => 'Enter instagram Url',
               'linkedin' => 'Enter linkedin Url',
               'google-plus' => 'Enter google plus Url',
               'youtube' => 'Enter youtube Url')
        ),

        array(
            'id'       => 'phone',
            'type'     => 'text',
            'title'    => __( 'Phone', 'redux-framework-demo' )
        ),

        array(
            'id'       => 'address',
            'type'     => 'text',
            'title'    => __( 'Address', 'redux-framework-demo' )
        ),

        array(
            'id'       => 'mail',
            'type'     => 'text',
            'title'    => __( 'mail', 'redux-framework-demo' )
        )



    )
) );






/*Redux::setSection( $opt_name, array(
    'title'  => __( 'Basic Field', 'redux-framework-demo' ),
    'id'     => 'basic',
    'desc'   => __( 'Basic field with no subsections.', 'redux-framework-demo' ),
    'icon'   => 'el el-home',
    'fields' => array(
        array(
            'id'       => 'opt-text',
            'type'     => 'text',
            'title'    => __( 'Example Text', 'redux-framework-demo' ),
            'desc'     => __( 'Example description.', 'redux-framework-demo' ),
            'subtitle' => __( 'Example subtitle.', 'redux-framework-demo' ),
        )
    )
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Basic Fields', 'redux-framework-demo' ),
    'id'    => 'basic',
    'desc'  => __( 'Basic fields as subsections.', 'redux-framework-demo' ),
    'icon'  => 'el el-home'
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Text', 'redux-framework-demo' ),
    'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="http://docs.reduxframework.com/core/fields/text/" target="_blank">http://docs.reduxframework.com/core/fields/text/</a>',
    'id'         => 'opt-text-subsection',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'text-example',
            'type'     => 'text',
            'title'    => __( 'Text Field', 'redux-framework-demo' ),
            'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            'desc'     => __( 'Field Description', 'redux-framework-demo' ),
            'default'  => 'Default Text',
        ),
    )
) );

Redux::setSection( $opt_name, array(
    'title'      => __( 'Text Area', 'redux-framework-demo' ),
    'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="http://docs.reduxframework.com/core/fields/textarea/" target="_blank">http://docs.reduxframework.com/core/fields/textarea/</a>',
    'id'         => 'opt-textarea-subsection',
    'subsection' => true,
    'fields'     => array(
        array(
            'id'       => 'textarea-example',
            'type'     => 'textarea',
            'title'    => __( 'Text Area Field', 'redux-framework-demo' ),
            'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
            'desc'     => __( 'Field Description', 'redux-framework-demo' ),
            'default'  => 'Default Text',
        ),
    )
) );*/
