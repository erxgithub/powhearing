<?php
add_action( 'cmb2_admin_init', 'cmb2_product_modal');
/**
 * Define the metabox and field configurations.
 */
function cmb2_product_modal() {
    // Start with an underscore to hide fields from custom fields list
    $prefix = '_product_modal_';
    $cmb = new_cmb2_box( array(
        'id'           => 'product_modal',
        'title'        => 'Product Modal',
        'object_types' => array( 'page' ), // post type
        //'show_on'      => array( 'key' => 'page-template', 'value' => 'page-organizations.php' ),
        'show_on'      => array( 'key' => 'page-template',
            'value' => array('front-page.php','page-organizations.php',
                'page-individuals.php', 'live-events-page.php')
         ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'default',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );
    $group_field_id = $cmb->add_field( array(
        'id'          => 'product_modal_repeat_group',
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
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
    ) );

    $cmb->add_group_field( $group_field_id, array(
		'name' => 'Image',
		'id'   => 'image',
		'type' => 'file',
	) );

	$cmb->add_group_field( $group_field_id, array(
		'name' => 'Description Title',
		'id'   => 'description-title',
		'type' => 'text',
	) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Content',
        'id'   => 'content',
        'type' => 'textarea',
    ) );
}
?>