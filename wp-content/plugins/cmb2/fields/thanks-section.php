<?php

add_action( 'cmb2_admin_init', 'cmb2_thanks');
/**
 * Define the metabox and field configurations.
 */
function cmb2_thanks() {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_thanks_';

    $cmb = new_cmb2_box( array(
        'id'           => 'thanks',
        'title'        => 'Thanks',
        'object_types' => array( 'page' ), // post type
        //'show_on'      => array( 'key' => 'page-template', 'value' => 'page-organizations.php' ),
        'show_on'      => array( 'key' => 'page-template',
            'value' => 'front-page.php'
         ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $group_field_id = $cmb->add_field( array(
        'id'          => 'thanks_repeat_group',
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

    $cmb->add_group_field( $group_field_id, array(
		'name' => 'Image (Open Quote)',
		'id'   => 'image1',
		'type' => 'file',
	) );

    $cmb->add_group_field( $group_field_id, array(
		'name' => 'Image (Close Quote)',
		'id'   => 'image2',
		'type' => 'file',
	) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Heading',
        'id'   => 'heading',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Message',
        'id'   => 'message',
        'type' => 'textarea',
    ) );
}

?>
