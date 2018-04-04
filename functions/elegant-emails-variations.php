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

function variations_featrues($domain){

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
		
		default: ?>
			
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
		
		default:
			//For local development purposes
			$from = 'From: Elegant Address <enquiries@elegant-address.com>';
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
		
		default:
			$subject = 'Elegant Address Dev Property Presentation';
			break;
	}

	return $subject;

}