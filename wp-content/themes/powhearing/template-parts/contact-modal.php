<?php 

	$entries = get_post_meta( get_the_ID(), 'powhearing', true );

	foreach ( (array) $entries as $key => $entry ) {

		$img = $title = $desc = $caption = '';

		if ( isset( $entry['fName'] ) ) {
			$title = esc_html( $entry['fName'] );
		}

		if ( isset( $entry['lName'] ) ) {
			$desc = wpautop( $entry['lName'] );
		}

		if ( isset( $entry['email'] ) ) {
			$desc = wpautop( $entry['email'] );
		}

		if ( isset( $entry['message'] ) ) {
			$desc = wpautop( $entry['message'] );
		}
	}

?>