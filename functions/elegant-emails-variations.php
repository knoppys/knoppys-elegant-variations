<?php

function get_host(){

	$siteurl = get_site_url();
	$parse = parse_url($siteurl);
	$domain = $parse['host'];

	return $domain;

}

//This function sipulates hte path for the header logo in the presentation email
function variations_email_logo($domain){

	switch ($domain) {
		case 'elegant-address.com':
			echo get_site_url().'/wp-content/uploads/logo.png';
			break;

		case 'elegant-ski.com':
			echo get_site_url().'/wp-content/uploads/logo.png';
			break;

		case 'elegant-barbados.com':
			echo get_site_url().'/wp-content/uploads/logo.png';
			break;
		
		default:
			//For local development purposes
			echo 'http://www.elegant-address.com/wp-content/uploads/logo.png';
			break;
	}

}
function variations_contact_details($domain){

	switch ($domain) {
		case 'elegant-address.com': ?>

		<div style="cursor:auto;color:#000000;font-family:Arial,Helvetica, Arial, sans-serif;font-size:14px;line-height:22px;text-align:center;">
			<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="http://www.elegant-address.com" style="color: #bc8536" target="_blank"><span style="color: #bc8536">www.elegant-address.com</span></a></span></p>
			<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="mailto:enquiries@elegant-address.com" style="color: #bc8536" target="_blank"><span style="color: #bc8536">enquiries@elegant-address.com</span></a></span></p>
			<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="tel:441244629963" style="color: #bc8536" target="_blank"><span style="color: #bc8536">+44 (0) 1244 629 963</span></a></span></p>
		</div>
			
		<?php break;

		case 'elegant-ski.com': ?>

			<div style="cursor:auto;color:#000000;font-family:Arial,Helvetica, Arial, sans-serif;font-size:14px;line-height:22px;text-align:center;">
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="http://www.elegant-ski.com" style="color: #bc8536" target="_blank"><span style="color: #bc8536">www.elegant-ski.com</span></a></span></p>
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="mailto:ski@elegant-address.com " style="color: #bc8536" target="_blank"><span style="color: #bc8536">ski@elegant-address.com </span></a></span></p>
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="tel:441244629963 " style="color: #bc8536" target="_blank"><span style="color: #bc8536">+44 (0) 1244 629963 </span></a></span></p>
			</div>

		<?php break;

		case 'elegant-barbados.com': ?>

			<div style="cursor:auto;color:#000000;font-family:Arial,Helvetica, Arial, sans-serif;font-size:14px;line-height:22px;text-align:center;">
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="http://www.elegant-barbados.com" style="color: #bc8536" target="_blank"><span style="color: #bc8536">www.elegant-barbados.com</span></a></span></p>
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="mailto:enquiries@elegant-barbados.com" style="color: #bc8536" target="_blank"><span style="color: #bc8536">enquiries@elegant-barbados.com</span></a></span></p>
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="tel:441244629963 " style="color: #bc8536" target="_blank"><span style="color: #bc8536">+44 (0) 1244 629963 </span></a></span></p>
			</div>

		<?php break;
		
		default:
		//For local development purposes
		?>

			<div style="cursor:auto;color:#000000;font-family:Arial,Helvetica, Arial, sans-serif;font-size:14px;line-height:22px;text-align:center;">
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="http://www.elegant-ski.com" style="color: #bc8536" target="_blank"><span style="color: #bc8536">Local Dev</span></a></span></p>
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="mailto:ski@elegant-address.com " style="color: #bc8536" target="_blank"><span style="color: #bc8536">localdev@elegant-address.com </span></a></span></p>
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="tel:441244629963 " style="color: #bc8536" target="_blank"><span style="color: #bc8536">+44 (0) 1244 629963 </span></a></span></p>
			</div>

		<?php break;
	}

}

function variations_features($domain){

	switch ($domain) {
		case 'elegant-address.com': ?>
				
				<li data-id="panoramic_sea_view">Panoramic Sea View</li>
				<li data-id="sea_view">Sea View</li>
				<li data-id="walk_to_beach">Walk To Beach</li>
				<li data-id="walk_to_shop">Walk To Shop</li>
				<li data-id="aircon_full">Aircon Full</li>
				<li data-id="heated_pool">Heated Pool</li>
				<li data-id="Guardian">Guardian</li>
				<li data-id="spa">Spa</li>
				<li data-id="gym">Gym</li>
				<li data-id="beach_access">Beach Access</li>
				<li data-id="heli_pad">Heli Pad</li>
				<li data-id="golf">Golf</li>
				<li data-id="water_front">Water Front</li>
				<li data-id="skytv">Sky TV</li>
				<li data-id="wifi">WiFi</li>
				<li data-id="Parking">Parking</li>
				<li data-id="small_sea_view">Small Sea View</li>
				<li data-id="indoor_pool">Indoor Pool</li>

			<?php break;

		case 'elegant-ski.com': ?>

				<li data-id="ski_in_ski_out">Ski in ski out</li>
				<li data-id="close_to_slopes">Close to slopes</li>
				<li data-id="close_to_centre">Close to centre</li>
				<li data-id="hot_tub">Mountain views</li>
				<li data-id="pool">Pool</li>
				<li data-id="parking">Parking</li>
				<li data-id="Guardian">Guardian</li>
				<li data-id="gym">Gym</li>			

			<?php break;

		case 'elegant-barbados.com': ?>

				<li data-id="reference">Reference</li>
				<li data-id="number_of_beds">Number of beds</li>
				<li data-id="sleeps">Sleeps</li>
				<li data-id="price">Price</li>
				<li data-id="size">Size</li>
				<li data-id="heated_pool">Heated Pool</li>
				<li data-id="indoor_pool">Indoor Pool</li>
				<li data-id="small_sea_view">Small Sea View</li>
				<li data-id="sea_view">Sea View</li>
				<li data-id="panoramic_sea_view">Panoramic Sea View</li>
				<li data-id="air_con_full">Air Con Full</li>
				<li data-id="air_con_partial">Air Con Partial</li>
				<li data-id="wifi">Wifi</li>
				<li data-id="sky_tv">Sky TV</li>
				<li data-id="parking">Parking</li>
				<li data-id="guardian">Guardian</li>
				<li data-id="walk_to_beach">Walk to beach</li>
				<li data-id="walk_to_shop">Walk to shop</li>
				<li data-id="tennis">Tennis</li>
				<li data-id="spa">Spa</li>
				<li data-id="gym">Gym</li>
				<li data-id="helipad">Helipad</li>
				<li data-id="beach_access">Beach access</li>
				<li data-id="type_name">Property Type</li>
				<li data-id="level">Level</li>
				<li data-id="number_of_baths">Number of bathrooms</li>
		

			<?php break;
		
		default: ?>
			
				<li data-id="reference">Reference</li>
				<li data-id="number_of_beds">Number of beds</li>
				<li data-id="sleeps">Sleeps</li>
				<li data-id="price">Price</li>
				<li data-id="size">Size</li>
				<li data-id="heated_pool">Heated Pool</li>
				<li data-id="indoor_pool">Indoor Pool</li>
				<li data-id="small_sea_view">Small Sea View</li>
				<li data-id="sea_view">Sea View</li>
				<li data-id="panoramic_sea_view">Panoramic Sea View</li>
				<li data-id="air_con_full">Air Con Full</li>
				<li data-id="air_con_partial">Air Con Partial</li>
				<li data-id="wifi">Wifi</li>
				<li data-id="sky_tv">Sky TV</li>
				<li data-id="parking">Parking</li>
				<li data-id="guardian">Guardian</li>
				<li data-id="walk_to_beach">Walk to beach</li>
				<li data-id="walk_to_shop">Walk to shop</li>
				<li data-id="tennis">Tennis</li>
				<li data-id="spa">Spa</li>
				<li data-id="gym">Gym</li>
				<li data-id="helipad">Helipad</li>
				<li data-id="beach_access">Beach access</li>
				<li data-id="type_name">Property Type</li>
				<li data-id="level">Level</li>
				<li data-id="number_of_baths">Number of bathrooms</li>

			<?php break;
	}

}

//This function stipulates the from address for the headers in the emails
function variations_from_address($domain){

	switch ($domain) {
		case 'elegant-address.com':
			$from = 'From: Elegant Address <enquiries@elegant-address.com>';
			break;

		case 'elegant-ski.com':
			$from = 'From: Elegant Address <ski@elegant-address.com>';
			break;

		case 'elegant-barbados.com':
			$from = 'From: Elegant Address <enquiries@elegant-barbados.com>';
			break;
		
		default:
			//For local development purposes
			$from = 'From: Elegant Address <enquiries@elegant-barbados.com>';
			break;
	}

	return $from;

}

//This function returns the correct subject line for the email
function variations_email_subject($domain){

	switch ($domain) {
		case 'elegant-address.com':
			$subject = 'Elegant Address Property Presentation';
			break;

		case 'elegant-ski.com':
			$subject = 'Elegant Address Ski Property Presentation';
			break;

		case 'elegant-barbados.com':
			$subject = 'Elegant Address Barbados Property Presentation';
			break;
		
		default:
			$subject = 'Elegant Address Barbados Property Presentation';
			break;
	}

	return $subject;

}

//This function get the agent name from the post meta in SKI and SOF, 
//remaining sites are taken from the agent taxonomy
function variations_agents($domain){

	switch ($domain) {
		case 'elegant-address.com':
			$meta_values = get_meta_values( 'agent_name', 'properties' ); 
			foreach ($meta_values as $meta_value) { ?>
				<li data-id="<?php echo strtolower(str_replace(array(" ", "'"), '', $meta_value)); ?>"><?php echo $meta_value; ?></li>
			<?php }
			break;

		case 'elegant-ski.com':
			$meta_values = get_meta_values( 'agent_name', 'properties' ); 
			foreach ($meta_values as $meta_value) { ?>
				<li data-id="<?php echo strtolower(str_replace(array(" ", "'"), '', $meta_value)); ?>"><?php echo $meta_value; ?></li>
			<?php }
			break;

		case 'elegant-barbados.com':
			$termsArgs = array( 'taxonomy' => 'propertyagent' ); 
			$terms = get_terms($termsArgs);
			foreach ($terms as $term) { ?>
				<li data-id="<?php echo 'term_'.$term->term_id; ?>"><?php echo $term->name; ?></li>
			<?php }
			break;
			
		default:
			$termsArgs = array( 'taxonomy' => 'propertyagent' ); 
			$terms = get_terms($termsArgs);
			foreach ($terms as $term) { ?>
				<li data-id="<?php echo 'term_'.$term->term_id; ?>"><?php echo $term->name; ?></li>
			<?php }
			break;
	}

}

//This function get the right tenure type from the post meta in SKI and SOF,
//The barbados site is made up from service_type not sale_or_rent
function variations_tenure($domain){

	switch ($domain) {
		case 'elegant-address.com':
			$meta_values = get_meta_values( 'sale_or_rent', 'properties' ); 
			foreach ($meta_values as $meta_value) { ?>
				<li data-id="<?php echo strtolower(str_replace(array(" ", "'"), '', $meta_value)); ?>"><?php echo $meta_value; ?></li>
			<?php }
			break;

		case 'elegant-ski.com':
			$meta_values = get_meta_values( 'sale_or_rent', 'properties' ); 
			foreach ($meta_values as $meta_value) { ?>
				<li data-id="<?php echo strtolower(str_replace(array(" ", "'"), '', $meta_value)); ?>"><?php echo $meta_value; ?></li>
			<?php }
			break;

		case 'elegant-barbados.com':
			$termsArgs = array( 'taxonomy' => 'servicetype' ); 
			$terms = get_terms($termsArgs);
			foreach ($terms as $term) { ?>
				<li data-id="<?php echo 'term_'.$term->term_id; ?>"><?php echo $term->name; ?></li>
			<?php }
			break;
		
		default:
			$termsArgs = array( 'taxonomy' => 'servicetype' ); 
			$terms = get_terms($termsArgs);
			foreach ($terms as $term) { ?>
				<li data-id="<?php echo 'term_'.$term->term_id; ?>"><?php echo $term->name; ?></li>
			<?php }
			break;
	}

}

/******************
This idecides which images to use for the property thubnail
***********************************************************/
function variations_thumbnail($ID, $size){

	if (get_the_post_thumbnail_url($ID)) {
		$url = get_the_post_thumbnail_url($ID, $size);
	} elseif (!get_the_post_thumbnail_url($ID) && get_field('image_1',$ID)) {
		$url = get_field('image_1',$ID);
	} elseif (!get_the_post_thumbnail_url($ID) && !get_field('image_1',$ID)){
		$url = get_template_directory_uri().'/images/no-image'.$size.'.png';
	}
	return $url;
}
