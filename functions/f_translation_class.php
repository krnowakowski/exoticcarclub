<?php

class translationClass {
	
	// HEAD - START

	public function head_title($page, $vehicle=null) {
		if($vehicle != null) {
			$id = array_search($vehicle, array_column($GLOBALS['vehicles'], 'slug'));
			$vehicle_data = $GLOBALS['vehicles'][$id];
			$t = $vehicle_data['name'];
		} else {
			switch ($page) {
				//case F_CUSTOMIZE . '/' . get_lang_slug($GLOBALS['id_to_product_translate'], $_SESSION['lang'], P_PET_ID): $t = '{t}customize-tags title{/t}'; break;
				case F_FLEET: $t = '{t}vehicles-title{/t}'; break;
				case F_OFFER: $t = '{t}offer-title{/t}'; break;
				case F_EVENTS: $t = '{t}events-title{/t}'; break;
				case F_ABOUT: $t = '{t}about-us-title{/t}'; break;
				case F_WASZKA: $t = '{t}history-title{/t}'; break;
				case F_PARTNERS: $t = '{t}partners-title{/t}'; break;
				case F_CONTACT: $t = '{t}contact-title{/t}'; break;
				case F_404: $t = '{t}page-unavailable-title{/t}'; break;
				default: $t = '{t}home-title{/t}'; break;
			}
		}
		return $t;
	}

	
	public function head_description($page, $product=null) {
		/*if($product != null) {
			$page .= '/' . $product;
		}*/
		switch ($page) {
			//case F_CUSTOMIZE . '/' . get_lang_slug($GLOBALS['id_to_product_translate'], $_SESSION['lang'], P_PET_ID): $t = '{t}customize-tags title{/t}'; break;
			case F_FLEET: $t = '{t}fleet-description{/t}'; break;
			case F_OFFER: $t = '{t}offer-description{/t}'; break;
			case F_EVENTS: $t = '{t}events-description{/t}'; break;
			case F_ABOUT: $t = '{t}about-us-description{/t}'; break;
			case F_WASZKA: $t = '{t}history-description{/t}'; break;
			case F_PARTNERS: $t = '{t}partners-description{/t}'; break;
			case F_CONTACT: $t = '{t}contact-description{/t}'; break;
			case F_404: $t = '{t}page-unavailable-description{/t}'; break;
			default: $t = '{t}home-description{/t}'; break;
		}
		return $t;
	}
	
	// HEAD - END
	
	public function nav($dbc) {
/*
		$t = '<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
			<li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
			<li><a class="page-scroll" href="#why-us">{t}WHY US{/t}</a></li>
			<li><a class="page-scroll" href="#services">{t}SERVICES{/t}</a></li>
			<li><a class="page-scroll" href="#pricing">{t}PRICING{/t}</a></li>
			<li><a class="page-scroll" href="#portfolio">{t}PORTFOLIO{/t}</a></li>
			<li><a class="page-scroll" href="#contact">{t}CONTACT{/t}</a></li>
			<li><a class="menu-red" href="/' . $_SESSION['lang'] . '/' . get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FREE_QUOTE) . '">{t}FREE QUOTE{/t}</a></li>';
		
		return $t;*/
	}


	public function vehicles($text)
	{
		switch ($text) {
			case 'engine': $t = '{t}engine{/t}'; break;
			case 'power': $t = '{t}power{/t}'; break;
			case 'lamborghini-aventador-sv-paragraph-1': $t = '{t}lamborghini-aventador-sv-paragraph-1{/t}'; break;
			case 'lamborghini-aventador-sv-paragraph-2': $t = '{t}lamborghini-aventador-sv-paragraph-2{/t}'; break;
			case 'lamborghini-aventador-sv-paragraph-3': $t = '{t}lamborghini-aventador-sv-paragraph-3{/t}'; break;
			case 'lamborghini-aventador-paragraph-1': $t = '{t}lamborghini-aventador-paragraph-1{/t}'; break;
			case 'lamborghini-aventador-paragraph-2': $t = '{t}lamborghini-aventador-paragraph-2{/t}'; break;
			case 'lamborghini-aventador-paragraph-3': $t = '{t}lamborghini-aventador-paragraph-3{/t}'; break;
			case 'lamborghini-urus-paragraph-1': $t = '{t}lamborghini-urus-paragraph-1{/t}'; break;
			case 'lamborghini-urus-paragraph-2': $t = '{t}lamborghini-urus-paragraph-2{/t}'; break;
			case 'lamborghini-urus-paragraph-3': $t = '{t}lamborghini-urus-paragraph-3{/t}'; break;
			case 'lamborghini-huracan-performante-paragraph-1': $t = '{t}lamborghini-huracan-performante-paragraph-1{/t}'; break;
			case 'lamborghini-huracan-performante-paragraph-2': $t = '{t}lamborghini-huracan-performante-paragraph-2{/t}'; break;
			case 'lamborghini-huracan-performante-paragraph-3': $t = '{t}lamborghini-huracan-performante-paragraph-3{/t}'; break;
			case 'mclaren-720s-paragraph-1': $t = '{t}mclaren-720s-paragraph-1{/t}'; break;
			case 'mclaren-720s-paragraph-2': $t = '{t}mclaren-720s-paragraph-2{/t}'; break;
			case 'mclaren-720s-paragraph-3': $t = '{t}mclaren-720s-paragraph-3{/t}'; break;
			case 'aston-martin-vanquish-paragraph-1': $t = '{t}aston-martin-vanquish-paragraph-1{/t}'; break;
			case 'aston-martin-vanquish-paragraph-2': $t = '{t}aston-martin-vanquish-paragraph-2{/t}'; break;
			case 'aston-martin-vanquish-paragraph-3': $t = '{t}aston-martin-vanquish-paragraph-3{/t}'; break;
			case 'ferrari-portofino-paragraph-1': $t = '{t}ferrari-portofino-paragraph-1{/t}'; break;
			case 'ferrari-portofino-paragraph-2': $t = '{t}ferrari-portofino-paragraph-2{/t}'; break;
			case 'ferrari-portofino-paragraph-3': $t = '{t}ferrari-portofino-paragraph-3{/t}'; break;
			case 'maserati-grancabrio-mc-paragraph-1': $t = '{t}maserati-grancabrio-mc-paragraph-1{/t}'; break;
			case 'maserati-grancabrio-mc-paragraph-2': $t = '{t}maserati-grancabrio-mc-paragraph-2{/t}'; break;
			case 'maserati-grancabrio-mc-paragraph-3': $t = '{t}maserati-grancabrio-mc-paragraph-3{/t}'; break;
			case 'ferrari-488-gtb-paragraph-1': $t = '{t}ferrari-488-gtb-paragraph-1{/t}'; break;
			case 'ferrari-488-gtb-paragraph-2': $t = '{t}ferrari-488-gtb-paragraph-2{/t}'; break;
			case 'ferrari-488-gtb-paragraph-3': $t = '{t}ferrari-488-gtb-paragraph-3{/t}'; break;
			case 'ferrari-458-italia-paragraph-1': $t = '{t}ferrari-458-italia-paragraph-1{/t}'; break;
			case 'ferrari-458-italia-paragraph-2': $t = '{t}ferrari-458-italia-paragraph-2{/t}'; break;
			case 'ferrari-458-italia-paragraph-3': $t = '{t}ferrari-458-italia-paragraph-3{/t}'; break;
			case 'chevrolet-corvette-zr1-paragraph-1': $t = '{t}chevrolet-corvette-zr1-paragraph-1{/t}'; break;
			case 'chevrolet-corvette-zr1-paragraph-2': $t = '{t}chevrolet-corvette-zr1-paragraph-2{/t}'; break;
			case 'chevrolet-corvette-zr1-paragraph-3': $t = '{t}chevrolet-corvette-zr1-paragraph-3{/t}'; break;
			case 'chevrolet-camaro-zl1-paragraph-1': $t = '{t}chevrolet-camaro-zl1-paragraph-1{/t}'; break;
			case 'chevrolet-camaro-zl1-paragraph-2': $t = '{t}chevrolet-camaro-zl1-paragraph-2{/t}'; break;
			case 'chevrolet-camaro-zl1-paragraph-3': $t = '{t}chevrolet-camaro-zl1-paragraph-3{/t}'; break;
			case 'porsche-911-turbo-s-cabrio-paragraph-1': $t = '{t}porsche-911-turbo-s-cabrio-paragraph-1{/t}'; break;
			case 'porsche-911-turbo-s-cabrio-paragraph-2': $t = '{t}porsche-911-turbo-s-cabrio-paragraph-2{/t}'; break;
			case 'porsche-911-turbo-s-cabrio-paragraph-3': $t = '{t}porsche-911-turbo-s-cabrio-paragraph-3{/t}'; break;
			case 'porsche-911-turbo-s-paragraph-1': $t = '{t}porsche-911-turbo-s-paragraph-1{/t}'; break;
			case 'porsche-911-turbo-s-paragraph-2': $t = '{t}porsche-911-turbo-s-paragraph-2{/t}'; break;
			case 'porsche-911-turbo-s-paragraph-3': $t = '{t}porsche-911-turbo-s-paragraph-3{/t}'; break;
			case 'porsche-911-4s-cabrio-paragraph-1': $t = '{t}porsche-911-4s-cabrio-paragraph-1{/t}'; break;
			case 'porsche-911-4s-cabrio-paragraph-2': $t = '{t}porsche-911-4s-cabrio-paragraph-2{/t}'; break;
			case 'porsche-911-4s-cabrio-paragraph-3': $t = '{t}porsche-911-4s-cabrio-paragraph-3{/t}'; break;
			case 'porsche-911-targa-4s-paragraph-1': $t = '{t}porsche-911-targa-4s-paragraph-1{/t}'; break;
			case 'porsche-911-targa-4s-paragraph-2': $t = '{t}porsche-911-targa-4s-paragraph-2{/t}'; break;
			case 'porsche-911-targa-4s-paragraph-3': $t = '{t}porsche-911-targa-4s-paragraph-3{/t}'; break;
			case 'porsche-panamera-turbo-2016-paragraph-1': $t = '{t}porsche-panamera-turbo-2016-paragraph-1{/t}'; break;
			case 'porsche-panamera-turbo-2016-paragraph-2': $t = '{t}porsche-panamera-turbo-2016-paragraph-2{/t}'; break;
			case 'porsche-panamera-turbo-2016-paragraph-3': $t = '{t}porsche-panamera-turbo-2016-paragraph-3{/t}'; break;
			case 'porsche-panamera-diesel-paragraph-1': $t = '{t}porsche-panamera-diesel-paragraph-1{/t}'; break;
			case 'porsche-panamera-diesel-paragraph-2': $t = '{t}porsche-panamera-diesel-paragraph-2{/t}'; break;
			case 'porsche-panamera-diesel-paragraph-3': $t = '{t}porsche-panamera-diesel-paragraph-3{/t}'; break;
			case 'nissan-gt-r-nismo-paragraph-1': $t = '{t}nissan-gt-r-nismo-paragraph-1{/t}'; break;
			case 'nissan-gt-r-nismo-paragraph-2': $t = '{t}nissan-gt-r-nismo-paragraph-2{/t}'; break;
			case 'nissan-gt-r-nismo-paragraph-3': $t = '{t}nissan-gt-r-nismo-paragraph-3{/t}'; break;
			case 'bmw-i8-paragraph-1': $t = '{t}bmw-i8-paragraph-1{/t}'; break;
			case 'bmw-i8-paragraph-2': $t = '{t}bmw-i8-paragraph-2{/t}'; break;
			case 'bmw-i8-paragraph-3': $t = '{t}bmw-i8-paragraph-3{/t}'; break;
			case 'mercedes-amg-s63-cabrio-paragraph-1': $t = '{t}mercedes-amg-s63-cabrio-paragraph-1{/t}'; break;
			case 'mercedes-amg-s63-cabrio-paragraph-2': $t = '{t}mercedes-amg-s63-cabrio-paragraph-2{/t}'; break;
			case 'mercedes-amg-s63-cabrio-paragraph-3': $t = '{t}mercedes-amg-s63-cabrio-paragraph-3{/t}'; break;
			case 'mercedes-e63-amg-s-paragraph-1': $t = '{t}mercedes-e63-amg-s-paragraph-1{/t}'; break;
			case 'mercedes-e63-amg-s-paragraph-2': $t = '{t}mercedes-e63-amg-s-paragraph-2{/t}'; break;
			case 'mercedes-e63-amg-s-paragraph-3': $t = '{t}mercedes-e63-amg-s-paragraph-3{/t}'; break;
			case 'mercedes-s400d-paragraph-1': $t = '{t}mercedes-s400d-paragraph-1{/t}'; break;
			case 'mercedes-s400d-paragraph-2': $t = '{t}mercedes-s400d-paragraph-2{/t}'; break;
			case 'mercedes-s400d-paragraph-3': $t = '{t}mercedes-s400d-paragraph-3{/t}'; break;
			case 'maserati-quattroporte-s-q4-paragraph-1': $t = '{t}maserati-quattroporte-s-q4-paragraph-1{/t}'; break;
			case 'maserati-quattroporte-s-q4-paragraph-2': $t = '{t}maserati-quattroporte-s-q4-paragraph-2{/t}'; break;
			case 'maserati-quattroporte-s-q4-paragraph-3': $t = '{t}maserati-quattroporte-s-q4-paragraph-3{/t}'; break;
			case 'mercedes-g500-amg-paragraph-1': $t = '{t}mercedes-g500-amg-paragraph-1{/t}'; break;
			case 'mercedes-g500-amg-paragraph-2': $t = '{t}mercedes-g500-amg-paragraph-2{/t}'; break;
			case 'mercedes-g500-amg-paragraph-3': $t = '{t}mercedes-g500-amg-paragraph-3{/t}'; break;
			case 'maserati-levante-paragraph-1': $t = '{t}maserati-levante-paragraph-1{/t}'; break;
			case 'maserati-levante-paragraph-2': $t = '{t}maserati-levante-paragraph-2{/t}'; break;
			case 'maserati-levante-paragraph-3': $t = '{t}maserati-levante-paragraph-3{/t}'; break;
			case 'bmw-740d-xdrive-paragraph-1': $t = '{t}bmw-740d-xdrive-paragraph-1{/t}'; break;
			case 'bmw-740d-xdrive-paragraph-2': $t = '{t}bmw-740d-xdrive-paragraph-2{/t}'; break;
			case 'bmw-740d-xdrive-paragraph-3': $t = '{t}bmw-740d-xdrive-paragraph-3{/t}'; break;
			case 'mercedes-v-class-paragraph-1': $t = '{t}mercedes-v-class-paragraph-1{/t}'; break;
			case 'mercedes-v-class-paragraph-2': $t = '{t}mercedes-v-class-paragraph-2{/t}'; break;
			case 'mercedes-v-class-paragraph-3': $t = '{t}mercedes-v-class-paragraph-3{/t}'; break;
			case 'ford-fiesta-proto-paragraph-1': $t = '{t}ford-fiesta-proto-paragraph-1{/t}'; break;
			case 'ford-fiesta-proto-paragraph-2': $t = '{t}ford-fiesta-proto-paragraph-2{/t}'; break;
			case 'ford-fiesta-proto-paragraph-3': $t = '{t}ford-fiesta-proto-paragraph-3{/t}'; break;
			case 'cranchi-sixty-fly-paragraph-1': $t = '{t}cranchi-sixty-fly-paragraph-1{/t}'; break;
			case 'cranchi-sixty-fly-paragraph-2': $t = '{t}cranchi-sixty-fly-paragraph-2{/t}'; break;
			case 'cranchi-sixty-fly-paragraph-3': $t = '{t}cranchi-sixty-fly-paragraph-3{/t}'; break;
			case 'helikopter-robinson-44-paragraph-1': $t = '{t}helikopter-robinson-44-paragraph-1{/t}'; break;
			case 'helikopter-robinson-44-paragraph-2': $t = '{t}helikopter-robinson-44-paragraph-2{/t}'; break;
			case 'helikopter-robinson-44-paragraph-3': $t = '{t}helikopter-robinson-44-paragraph-3{/t}'; break;
			case 'eurocopter-ec-135p2-paragraph-1': $t = '{t}eurocopter-ec-135p2-paragraph-1{/t}'; break;
			case 'eurocopter-ec-135p2-paragraph-2': $t = '{t}eurocopter-ec-135p2-paragraph-2{/t}'; break;
			case 'eurocopter-ec-135p2-paragraph-3': $t = '{t}eurocopter-ec-135p2-paragraph-3{/t}'; break;
			default: $t = ''; break;
		}
		return $t;
	}


	public function footer_site_map($text)
	{
		switch ($text) {
			case 'Nasza flota': $t = '{t}Nasza flota{/t}'; break;
			case 'Oferta': $t = '{t}Oferta{/t}'; break;
			case 'Kontakt': $t = '{t}Kontakt{/t}'; break;
			case 'O nas': $t = '{t}O nas{/t}'; break;
			case 'Partnerzy': $t = '{t}Partnerzy{/t}'; break;
			case 'Telefon': $t = '{t}Telefon{/t}'; break;
			case 'Śledź nas na Facebooku': $t = '{t}Śledź nas na Facebooku{/t}'; break;
			case 'Śledź nas na Instagramie': $t = '{t}Śledź nas na Instagramie{/t}'; break;
			case 'Śledź nas na Youtube': $t = '{t}Śledź nas na Youtube{/t}'; break;
			default: $t = ''; break;
		}
		return $t;		
	}


	public function faq($q,$id)
	{
		if ($q === 'q') {
			switch ($id) {
				case 1: $t = '{t}faq-question-1{/t}'; break;
				case 2: $t = '{t}faq-question-2{/t}'; break;
				case 3: $t = '{t}faq-question-3{/t}'; break;
				case 4: $t = '{t}faq-question-4{/t}'; break;
				case 5: $t = '{t}faq-question-5{/t}'; break;
				case 6: $t = '{t}faq-question-6{/t}'; break;
				case 7: $t = '{t}faq-question-7{/t}'; break;
				case 8: $t = '{t}faq-question-8{/t}'; break;
				case 9: $t = '{t}faq-question-9{/t}'; break;
				case 10: $t = '{t}faq-question-10{/t}'; break;
				case 11: $t = '{t}faq-question-11{/t}'; break;
				case 12: $t = '{t}faq-question-12{/t}'; break;
				case 13: $t = '{t}faq-question-13{/t}'; break;
				default: $t = ''; break;
			}
		} else {
			switch ($id) {
				case 1: $t = '{t}faq-answer-1{/t}'; break;
				case 2: $t = '{t}faq-answer-2{/t}'; break;
				case 3: $t = '{t}faq-answer-3{/t}'; break;
				case 4: $t = '{t}faq-answer-4{/t}'; break;
				case 5: $t = '{t}faq-answer-5{/t}'; break;
				case 6: $t = '{t}faq-answer-6{/t}'; break;
				case 7: $t = '{t}faq-answer-7{/t}'; break;
				case 8: $t = '{t}faq-answer-8{/t}'; break;
				case 9: $t = '{t}faq-answer-9{/t}'; break;
				case 10: $t = '{t}faq-answer-10{/t}'; break;
				case 11: $t = '{t}faq-answer-11{/t}'; break;
				case 12: $t = '{t}faq-answer-12{/t}'; break;
				case 13: $t = '{t}faq-answer-13{/t}'; break;
				default: $t = ''; break;
			}

		}
		return $t;		
	}


	public function interesting_facts()
	{
		$id = rand(1, 13);
		switch ($id) {
			case 1: $t = '{t}interesting-fact-1{/t}'; break;
			case 2: $t = '{t}interesting-fact-2{/t}'; break;
			case 3: $t = '{t}interesting-fact-3{/t}'; break;
			case 4: $t = '{t}interesting-fact-4{/t}'; break;
			case 5: $t = '{t}interesting-fact-5{/t}'; break;
			case 6: $t = '{t}interesting-fact-6{/t}'; break;
			case 7: $t = '{t}interesting-fact-7{/t}'; break;
			case 8: $t = '{t}interesting-fact-8{/t}'; break;
			case 9: $t = '{t}interesting-fact-9{/t}'; break;
			case 10: $t = '{t}interesting-fact-10{/t}'; break;
			case 11: $t = '{t}interesting-fact-11{/t}'; break;
			case 12: $t = '{t}interesting-fact-12{/t}'; break;
			case 13: $t = '{t}interesting-fact-13{/t}'; break;
			default: $t = ''; break;
		}
		return $t;		
	}


	public function page_unavailable($phrase)
	{
		switch ($phrase) {
			case 'page-unavailable': $t = '{t}page-unavailable{/t}'; break;
			case 'interesting-facts': $t = '{t}interesting-facts{/t}'; break;
			case 'back-to-home': $t = '{t}back-to-home{/t}'; break;
			default: $t = ''; break;
		}
		return $t;		
	}
	

}

?>