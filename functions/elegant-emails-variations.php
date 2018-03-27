<?php
//This function sipulates hte path for the header logo in the presentation email
function variations_email_logo(){

	$siteurl = get_site_url();
	$parse = parse_url($siteurl);
	$domain = $parse['host'];

	switch ($domain) {
		case 'elegant-address.com':
			echo 'http://elegant-address.com/wp-content/uploads/logo.png';
			break;

		case 'elegant-ski.com':
			echo 'http://elegant-ski.com/wp-content/uploads/Untitled.png';
			break;
		
		default:
			//For local development purposes
			echo 'http://elegant-address.com/wp-content/uploads/logo.png';
			break;
	}

}
function variations_contact_details(){

	$siteurl = get_site_url();
	$parse = parse_url($siteurl);
	$domain = $parse['host'];

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
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="http://www.elegant-ski.com" style="color: #bc8536" target="_blank"><span style="color: #bc8536">www.elegant-ski.com</span></a></span></p>
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="mailto:ski@elegant-address.com " style="color: #bc8536" target="_blank"><span style="color: #bc8536">ski@elegant-address.com </span></a></span></p>
				<p><span style="font-size: 16px;line-height: 1.5;font-weight: bold"><a href="tel:441244629963 " style="color: #bc8536" target="_blank"><span style="color: #bc8536">+44 (0) 1244 629963 </span></a></span></p>
			</div>

		<?php break;
	}

}