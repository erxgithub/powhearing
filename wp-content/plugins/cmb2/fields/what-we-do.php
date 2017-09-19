<?php

add_action( 'cmb2_admin_init', 'cmb2_wwd');
/**
* Define the metabox and field configurations.
*/
function cmb2_wwd() {
   // Start with an underscore to hide fields from custom fields list
   $prefix = '_wwd_';

   $cmb = new_cmb2_box( array(
       'id'           => 'wwd_heading',
       'title'        => 'What we do',
       'object_types' => array( 'page' ), // post type
       'show_on'      => array( 'key' => 'page-template', 'value' => 'front-page.php' ),
       'context'      => 'normal', //  'normal', 'advanced', or 'side'
       'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
       'show_names'   => true, // Show field names on the left
   ) );

   $group_field_id = $cmb->add_field( array(
       'id'          => 'wwd_repeat_group',
       'type'        => 'group',
       // 'repeatable'  => false, // use false if you want non-repeatable group
       'options'     => array(
           'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
           'add_button'    => __( 'Add Another Entry', 'cmb2' ),
           'remove_button' => __( 'Remove Entry', 'cmb2' ),
           'sortable'      => true, // beta
           // 'closed'     => true, // true to have the groups closed by default
       ),
   ) );



// Head
   $cmb->add_group_field( $group_field_id, array(
       'name' => 'Head',
       'id'   => 'head',
       'type' => 'text',
   ) );

// Title1
   $cmb->add_group_field( $group_field_id, array(
    'name' => 'Title1',
    'id'   => 'title1',
    'type' => 'text',
) );

// Title2
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Title2',
    'id'   => 'title2',
    'type' => 'text',
) );

// Content1
   $cmb->add_group_field( $group_field_id, array(
    'name' => 'Content1',
    'id'   => 'content1',
    'type' => 'textarea',
) );

// Content12
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Content2',
    'id'   => 'content2',
    'type' => 'textarea',
) );

// Image1
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Image1',
    'id'   => 'image1',
    'type' => 'file',
) );

// Image2
$cmb->add_group_field( $group_field_id, array(
    'name' => 'Image2',
    'id'   => 'image2',
    'type' => 'file',
) );

}?>
