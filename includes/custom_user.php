<?php

// Custom user
function contact_methods($contactmethods) {
	// Remove we what we don't want
	unset( $contactmethods[ 'aim' ] );
	unset( $contactmethods[ 'yim' ] );
	unset( $contactmethods[ 'jabber' ] );

	// Add some useful ones
	$contactmethods[ 'phone' ] = 'Cell Phone';
	$contactmethods[ 'twitter' ] = 'Twitter Username';
	$contactmethods[ 'facebook' ] = 'Facebook Profile URL';
	$contactmethods[ 'linkedin' ] = 'LinkedIn Public Profile URL';
	$contactmethods[ 'googleplus' ] = 'Google+ Profile URL';

	return $contactmethods;
}
add_filter( 'user_contactmethods', 'contact_methods' );

/*
// Add Extra Fields
function show_profile_fields($user) { ?>
	<h3>Extra information</h3>
	<table class="form-table">
		<tr>
			<th><label for="twitter">Twitter</label></th>
			<td>
				<input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
				<span class="description">Please enter your Twitter username without "@".</span>
			</td>
		</tr>
	</table>
<?php }
add_action( 'show_user_profile', 'show_profile_fields' );
add_action( 'edit_user_profile', 'show_profile_fields' );

function save_profile_fields($user_id) {
	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;

	// Copy and paste this line for additional fields
	// Make sure to change 'twitter' to the field ID
	update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
}
add_action( 'personal_options_update', 'save_profile_fields' );
add_action( 'edit_user_profile_update', 'save_profile_fields' );
*/

?>