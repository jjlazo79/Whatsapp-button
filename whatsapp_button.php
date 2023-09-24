<?php

/**
 * Add WhatsApp button to footer
 *
 * @return string
 */
function add_whasapp_button_to_footer()
{
	if ( wp_is_mobile() ){
		$whatsapp_protocol = 'api.whatsapp.com';
	}
	else{
		$whatsapp_protocol = 'web.whatsapp.com';
	}

	$phone = 34646283938;
	$message = 'Hola, me gustaría recibir más información acerca de ';

	$output = '<a id="whatsapp_button"
                target="_blank"
                href="https://' . $whatsapp_protocol . '/send?phone=' . $phone . '&text='. urlencode($message) .'&type=phone_number&app_absent=0"
                style="bottom: 20px;right: 20px;position: fixed;display: inline-block;padding: 16px 16px 10px;border-radius: 50px;/* line-height: 0; */background-color: #25D366;color: #fff;text-decoration: none;font-family: sans-serif;font-size: 16px;"
                title="¿Necesitas ayuda?">
            <svg width="36px" height="36px" class="nta-whatsapp-default-avatar" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path style="fill:#EDEDED;" d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0
                    S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z"></path>
                <path style="fill:#55CD6C;" d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662
                    c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234
                    c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z"></path>
                <path style="fill:#FEFEFE;" d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297
                    c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048
                    c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359
                    c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248
                    c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062
                    l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945"></path>
            </svg>
        </a>';

	return $output;
}
add_action('wp_footer', 'add_whasapp_button_to_footer');


/**
 * SOLO HTML
 */
echo '
<script>
const deviceType = () => {
	const ua = navigator.userAgent;
	if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
		// Tablet
		return "https://api.whatsapp.com";
	}
	else if (/Mobile|Android|iP(hone|od)|IEMobile|BlackBerry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua))
	{
		// Mobile
		return "https://api.whatsapp.com";
	}
	// Desktop
	return "https://web.whatsapp.com";
};
</script>

<a target="_blank"
	onclick="window.open(deviceType()+'/send?phone=34646&text=Hola%2C+me+gustar%C3%ADa+resolver+algunas+dudas&type=phone_number&app_absent=0', '_blank')"
	style="bottom: 20px; right: 20px; position: fixed; display: inline-block; padding: 16px 16px 10px; border-radius: 50px; background-color: #25D366; color: #fff; text-decoration: none; font-family: sans-serif; font-size: 16px; cursor: pointer;z-index:99;"
	title="¿Necesitas ayuda?">
	<svg width="36px" height="36px" class="nta-whatsapp-default-avatar" version="1.1" id="Layer_1"
		xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
		<path style="fill:#EDEDED;" d="M0,512l35.31-128C12.359,344.276,0,300.138,0,254.234C0,114.759,114.759,0,255.117,0
            S512,114.759,512,254.234S395.476,512,255.117,512c-44.138,0-86.51-14.124-124.469-35.31L0,512z"></path>
		<path style="fill:#55CD6C;" d="M137.71,430.786l7.945,4.414c32.662,20.303,70.621,32.662,110.345,32.662
            c115.641,0,211.862-96.221,211.862-213.628S371.641,44.138,255.117,44.138S44.138,137.71,44.138,254.234
            c0,40.607,11.476,80.331,32.662,113.876l5.297,7.945l-20.303,74.152L137.71,430.786z"></path>
		<path style="fill:#FEFEFE;"
			d="M187.145,135.945l-16.772-0.883c-5.297,0-10.593,1.766-14.124,5.297
            c-7.945,7.062-21.186,20.303-24.717,37.959c-6.179,26.483,3.531,58.262,26.483,90.041s67.09,82.979,144.772,105.048
            c24.717,7.062,44.138,2.648,60.028-7.062c12.359-7.945,20.303-20.303,22.952-33.545l2.648-12.359
            c0.883-3.531-0.883-7.945-4.414-9.71l-55.614-25.6c-3.531-1.766-7.945-0.883-10.593,2.648l-22.069,28.248
            c-1.766,1.766-4.414,2.648-7.062,1.766c-15.007-5.297-65.324-26.483-92.69-79.448c-0.883-2.648-0.883-5.297,0.883-7.062
            l21.186-23.834c1.766-2.648,2.648-6.179,1.766-8.828l-25.6-57.379C193.324,138.593,190.676,135.945,187.145,135.945"></path>
	</svg>
</a>
