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
				//case F_CUSTOMIZE . '/' . get_lang_slug($GLOBALS['id_to_product_translate'], $_SESSION['lang'], P_PET_ID): $t = 'customize-tags title'; break;
				case F_FLEET: $t = 'Nasza flota'; break;
				case F_OFFER: $t = 'Oferta'; break;
				case F_EVENTS: $t = 'Eventy'; break;
				case F_ABOUT: $t = 'O nas'; break;
				case F_WASZKA: $t = 'Przemek „Waszka” Waszczuk'; break;
				case F_PARTNERS: $t = 'Partnerzy'; break;
				case F_CONTACT: $t = 'Kontakt'; break;
				case F_404: $t = 'Strona nie istnieje'; break;
				default: $t = 'Witaj w świecie Exotic'; break;
			}
		}
		return $t;
	}

	
	public function head_description($page, $product=null) {
		/*if($product != null) {
			$page .= '/' . $product;
		}*/
		switch ($page) {
			//case F_CUSTOMIZE . '/' . get_lang_slug($GLOBALS['id_to_product_translate'], $_SESSION['lang'], P_PET_ID): $t = 'customize-tags title'; break;
			case F_FLEET: $t = 'Nasza flota'; break;
			case F_OFFER: $t = 'Oferta'; break;
			case F_EVENTS: $t = 'Eventy'; break;
			case F_ABOUT: $t = 'O nas'; break;
			case F_WASZKA: $t = 'Przemek „Waszka” Waszczuk'; break;
			case F_PARTNERS: $t = 'Partnerzy'; break;
			case F_CONTACT: $t = 'Kontakt'; break;
			case F_404: $t = 'Strona nie istnieje'; break;
			default: $t = 'Witaj w świecie Exotic'; break;
		}
		return $t;
	}
	
	// HEAD - END
	
	public function nav($dbc) {
/*
		$t = '<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
			<li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
			<li><a class="page-scroll" href="#why-us">WHY US</a></li>
			<li><a class="page-scroll" href="#services">SERVICES</a></li>
			<li><a class="page-scroll" href="#pricing">PRICING</a></li>
			<li><a class="page-scroll" href="#portfolio">PORTFOLIO</a></li>
			<li><a class="page-scroll" href="#contact">CONTACT</a></li>
			<li><a class="menu-red" href="/' . $_SESSION['lang'] . '/' . get_lang_slug($GLOBALS['path_lang_translate'], $_SESSION['lang'], F_FREE_QUOTE) . '">FREE QUOTE</a></li>';
		
		return $t;*/
	}


	public function vehicles($text)
	{
		switch ($text) {
			case 'engine': $t = 'Silnik'; break;
			case 'power': $t = 'Moc'; break;
			case 'lamborghini-aventador-sv-paragraph-1': $t = 'Superveloce został zaprojektowany jako najbardziej sportowy Lamborghini w historii, dzięki ulepszonemu, naturalnie wolnossącemu silnikowi V12, rozwiązaniom inżynieryjnym nastawionym na ekstremalną lekkość oraz połączeniu innowacyjnych funkcji technologicznych, takich jak stricte wyścigowe zawieszenie typu push-rod i dynamiczny układ kierowniczy Lamborghini.'; break;
			case 'lamborghini-aventador-sv-paragraph-2': $t = 'Każdy element SV został opracowany zgodnie z koncepcją „Design to Weight”, z możliwie najniższą wagą i najwyższą możliwą wydajnością, aby uczynić go najszybszym i najbardziej ekscytującym Lamborghini wszechczasów.'; break;
			case 'lamborghini-aventador-sv-paragraph-3': $t = 'Super sportowy samochód w najczystszej formie.'; break;
			case 'lamborghini-aventador-paragraph-1': $t = 'Najwyższa liga supersamochodów. 700 koni mechanicznych, napęd na obie osie, procedura startowa oraz pokłady włókna węglowego i lekkich kompozytów to elementy wyróżniające ten egzotyczny bolid.'; break;
			case 'lamborghini-aventador-paragraph-2': $t = 'Aventador zabierze Cię w świat najszybszych torów wyścigowych, a zarazem najekskluzywniejszych ulic świata.'; break;
			case 'lamborghini-aventador-paragraph-3': $t = 'Ten model to auto dla wybrańców.'; break;
			case 'lamborghini-urus-paragraph-1': $t = 'Dusza supersportowego samochodu i funkcjonalność typowa dla SUV-a: Lamborghini Urus, pierwszy na świecie Super Sport Utility Vehicle. Urus, który można rozpoznać jako autentyczne Lamborghini z jego niepowtarzalnym DNA, jest jednocześnie przełomowym samochodem: ekstremalne proporcje, czysty design Lamborghini i wyjątkowe osiągi czynią go absolutnie wyjątkowym.'; break;
			case 'lamborghini-urus-paragraph-2': $t = 'Charakterystyczna sylwetka Urusa z dynamiczną latającą linią coupé pokazuje jej super sportowe pochodzenie, a jego wyjątkowe proporcje przenoszą siłę, solidność i bezpieczeństwo. Bez wątpienia czynniki decydujące o sukcesie Urusa to zaawansowana konstrukcja, niezwykła dynamika jazdy i ekscytujące osiągi. Wszystkie te funkcje pozwoliły Lamborghini na wprowadzenie pojazdu Super Sport Utility Vehicle, który pozostaje wierny swojemu DNA.'; break;
			case 'lamborghini-urus-paragraph-3': $t = 'Urus wyraża swoją najwyższą wszechstronność również w swojej konstrukcji, która spełnia wymagania szerokiej gamy klientów dzięki pakietom Style, zewnętrznym detalom z włókna węglowego lub pakietowi Off-Road.'; break;
			case 'lamborghini-huracan-performante-paragraph-1': $t = 'Huracán Performante przerobił koncepcję supersportowych samochodów i podniósł pojęcie osiągów do poziomów, których nigdy wcześniej nie było. Pojazd został przeprojektowany w całości pod względem masy, mocy silnika, podwozia, a przede wszystkim poprzez wprowadzenie innowacyjnego systemu aktywnej aerodynamiki: ALA.'; break;
			case 'lamborghini-huracan-performante-paragraph-2': $t = 'Wykorzystanie nagrodzonego Forged Composites®, kształtowanego kutego włókna węglowego opatentowanego przez Automobili Lamborghini, jest naprawdę miłym akcentem i przyczynia się do uczynienia pojazdu jeszcze lżejszym.'; break;
			case 'lamborghini-huracan-performante-paragraph-3': $t = 'Oprócz niezwykłych właściwości technologicznych, wprowadza także nową ideę piękna.'; break;
			case 'mclaren-720s-paragraph-1': $t = 'Brytyjski supersamochód stworzony przez McLaren Automotive, wywodzącą się wprost z wyścigów Formuły 1.'; break;
			case 'mclaren-720s-paragraph-2': $t = 'Brytyjska firma, która zbudowała kultową F1 i legendarną P1, bardziej skupia się na wyciskaniu każdej uncji wydajności ze swoich produktów niż na wygrywaniu konkursów piękności.'; break;
			case 'mclaren-720s-paragraph-3': $t = 'Zrelaksować się. 720S robi obie rzeczy.'; break;
			case 'aston-martin-vanquish-paragraph-1': $t = 'Vanquish stanowi zwieńczenie doświadczeń Astona Martina pod względem konstrukcji i stylistyki. Wykorzystuje narzędzia w postaci większej mocy, zwinności, wydajności i wyższego poziomu luksusu.'; break;
			case 'aston-martin-vanquish-paragraph-2': $t = 'Aston Martin Vanquish to prawdziwie sportowe auto klasy GT stanowiące uosobienie ekstremalnych osiągów bez zbędnej przesady.'; break;
			case 'aston-martin-vanquish-paragraph-3': $t = 'Vanquish to Grand Tourer najwyższej klasy o wysublimowanym wyglądzie.'; break;
			case 'ferrari-portofino-paragraph-1': $t = 'Ferrari Portofino otrzymało tytuł Najlepszego Kabrioletu drugi rok z rzędu.'; break;
			case 'ferrari-portofino-paragraph-2': $t = 'Centro Stile Ferrari dokonało tutaj cudów, tworząc fantastyczną formę coupe, a dzięki składanemu hard-topowi uzyskano wyjątkową elegancję kabrioletu. Nowy design wyraźnie inspirowany modelami 812 Superfast oraz GTC4Lusso.'; break;
			case 'ferrari-portofino-paragraph-3': $t = 'Prezentowany model Ferrari pod maską ma podwójnie doładowany silnik V8, którego pojemność wynosi 3,9 litra. 600KM i 759Nm – Tt dwie wartości muszą dawać niesamowitą radość z jazdy.'; break;
			case 'maserati-grancabrio-mc-paragraph-1': $t = 'Mistrzowski popis włoskich stylistów. Maserati zbudowało auto uniwersalne z otwartym nadwoziem – sprawdzi się zarówno w roli auta podróżników oraz samochodu stricte sportowego.'; break;
			case 'maserati-grancabrio-mc-paragraph-2': $t = 'Audiofile nie muszą korzystać z systemu nagłośnienia – wystarczy otworzyć dach, mocniej wcisnąć pedał gazu, by odpłynąć na długie chwile przy akompaniamencie jednostki V8 autorstwa Ferrari.'; break;
			case 'maserati-grancabrio-mc-paragraph-3': $t = 'No i ten design – prestiż i awangarda kipią z każdego centymetra karoserii Maserati GranCabrio MC.'; break;
			case 'ferrari-488-gtb-paragraph-1': $t = 'Ferrari 488 GTB jest ewolucją Italii. Zmiany są jednak poważne zarówno na nadwoziu, jak i w komorze silnika.'; break;
			case 'ferrari-488-gtb-paragraph-2': $t = 'O ile modyfikacja stylistyki nie szokuje, prawdziwą rewolucją jest to, co stało się z jednostką napędową. Ferrari zastosowało mniejszy silnik. Spadek litrażu nie oznacza redukcji mocy. Przeciwnie — dzięki dwóm turbosprężarkom jednostka ta rozwija 670 KM przy 8000 rpm.'; break;
			case 'ferrari-488-gtb-paragraph-3': $t = 'Dzięki naszej ofercie możesz usiąść za kierownicą jednego z najszybszych samochodów na rynku.'; break;
			case 'ferrari-458-italia-paragraph-1': $t = 'Jeden z najszybszych seryjnie produkowanych samochodów świata. Obecnie jest to wizytówka marki z Maranello, która była przełomowym projektem zaprezentowanym światu w 2009 roku.'; break;
			case 'ferrari-458-italia-paragraph-2': $t = 'Ponad 570 KM pozwala rozpędzić samochód do pierwszej setki w 3,4 sekundy – to najwyższa światowa liga.'; break;
			case 'ferrari-458-italia-paragraph-3': $t = 'Aktywne spoilery, oraz siła docisku generowana przez szereg wlotów, wylotów powietrza oraz lotek sprawiają, że samochód prowadzi się stabilnie nawet przy prędkościach dochodzących do 325 km/h.'; break;
			case 'chevrolet-corvette-zr1-paragraph-1': $t = '„Król powraca. Mocniejszy niż kiedykolwiek wcześniej” – chwali się producent. Faktycznie niewiele aut na rynku oferuje kierowcy ponad 750 koni mechanicznych.'; break;
			case 'chevrolet-corvette-zr1-paragraph-2': $t = 'Zdobywca nagrody 2019 ROAD & TRACK PERFORMANCE CAR OF THE YEAR. ZR1 został zaprojektowany z myślą o jednym celu: wydajności. V-max imponujące 338km/h, 0-100km/h – 3,1sec.'; break;
			case 'chevrolet-corvette-zr1-paragraph-3': $t = 'Jest to super samochód, który jest jednocześnie luksusowy i niesamowicie mocny oraz najbardziej zaawansowany w dotychczasowej historii produkcji ikony jaką jest Corvette.'; break;
			case 'chevrolet-camaro-zl1-paragraph-1': $t = 'Najmocniejsza wersja szóstej generacji współczesnego amerykańskiego muscle cara. Pod maską znajdziemy potężny 6,2-litrowy silnik V8, który generuje moc 640 KM. Jakby Camaro nie było już legendą, ZL1 przenosi dziedzictwo na niesamowitą wysokość jako najmocniejszy Camaro w historii.'; break;
			case 'chevrolet-camaro-zl1-paragraph-2': $t = 'Bogactwo ulepszeń osiągów i nowoczesne technologie – nie wspominając o odważnej nowej stylistyce tylnej części pojazdu – sprawiają, że ten samochód sportowy jest równie niesamowity w drodze do domu, na torze czy wyścigach równoległych.'; break;
			case 'chevrolet-camaro-zl1-paragraph-3': $t = 'W rzeczywistości można powiedzieć, że został zbudowany, aby inspirować konkurencję do osiągania lepszych wyników.'; break;
			case 'porsche-911-turbo-s-cabrio-paragraph-1': $t = 'Porsche 911 Turbo S to flagowy model producenta. Wersja Cabrio pozwala cieszyć się nie tylko niesamowitymi osiągami ale pozwala również czerpać przyjemność z jazdy z otwartym dachem.'; break;
			case 'porsche-911-turbo-s-cabrio-paragraph-2': $t = 'Nowy Turbo S ma 580KM, o 20 więcej niż poprzednik. Przyspieszenie do 100km/h poprawiło się tylko o 0,1s ale 3 sek do pierwszej setki i tak robią wrażenie.'; break;
			case 'porsche-911-turbo-s-cabrio-paragraph-3': $t = 'Dzięki stałemu napędowi na 4 koła Cabrio sprawdzi sie także w sezonie zimowym.'; break;
			case 'porsche-911-turbo-s-paragraph-1': $t = 'Porsche 911 Turbo S – 580-konny potwór, który prowadzi się jak po sznurku, to najmocniejszy wariant Porsche 911 – jeszcze nigdy nie było tak szybkie.'; break;
			case 'porsche-911-turbo-s-paragraph-2': $t = 'Z czasem przyspieszenia 2,9 s od 0 do 100 km/h zbliżyło się do czterokrotnie droższego 918 Spydera.'; break;
			case 'porsche-911-turbo-s-paragraph-3': $t = 'Dzięki stałemu napędowi na 4 koła 911 jest autem z którego możemy korzystać przez cały rok.'; break;
			case 'porsche-911-4s-cabrio-paragraph-1': $t = 'Porsche 911 Carrera 4S Cabriolet – wariant optymalny? Piękne nadwozie, wspaniałe wnętrze i otwierany dach.'; break;
			case 'porsche-911-4s-cabrio-paragraph-2': $t = 'Mocny, a zarazem oszczędny silnik oraz układ jezdny, który zapewnia perfekcyjną trakcję w każdych warunkach.'; break;
			case 'porsche-911-4s-cabrio-paragraph-3': $t = 'Brezentowy dach, który został rozpięty na magnezowym szkielecie zamyka lub otwiera się w zaledwie 13 sekund. Jest to również możliwe podczas jazdy, o ile prędkość nie przekracza 50 km/h.'; break;
			case 'porsche-911-targa-4s-paragraph-1': $t = 'Targa to po włosku tarcza, ale powszechnie przyjęto, że nazwa pochodzi od wyścigu Targa Florio, które Porsche wygrało nie raz, choć akurat model 911 tylko raz.'; break;
			case 'porsche-911-targa-4s-paragraph-2': $t = 'To Porsche jest jak wszystkie 911, a jednak zupełnie inne. Tylko ten aluminiowy pałąk, który powstał w latach 60. dlatego, że za oceanem kabriolet był nie do przyjęcia ze względów bezpieczeństwa oraz bardzo duża tylna szyba odróżniają z zewnątrz targę od klasycznej Carrery.'; break;
			case 'porsche-911-targa-4s-paragraph-3': $t = 'Targa jest kompletnie niepraktyczna, właściwie bezsensowna, ale czy właśnie to nie czyni super samochodów tak bardzo pożądanymi?'; break;
			case 'porsche-panamera-turbo-2016-paragraph-1': $t = 'Nowa Panamera TURBO to połączenie wszystkiego co najlepsze w Porsche. Przednia część zbliżona do Caymana łączy się z tyłem czerpiącym inspirację z 911 poprzez dodatkową parę drzwi, tworząc idealne Gran Turismo na każdą okazję.'; break;
			case 'porsche-panamera-turbo-2016-paragraph-2': $t = 'Znakomite właściwości jezdne oraz bardzo dobre osiągi silnika, pozwalają korzystać z samochodu tak, jakby to było Porsche 911, a jednocześnie podróżować wygodnie, pokonując setki kilometrów w ekspresowym tempie.'; break;
			case 'porsche-panamera-turbo-2016-paragraph-3': $t = 'Oto nowa Panamera TURBO oferowa przez Exotic Car Club Poland, zbudowana na płycie MSB – lżejsza, szybsza i bardziej ekonomiczna. Najmocniejsza wersja Porsche Panamery (Turbo) pokonała okrążenie słynnego toru Nurburgring w czasie 7 min i 38 s (o 14 s szybciej od pierwszej generacji modelu), dzięki czemu obecnie jest drugim najszybszym luksusowym sedanem na świecie.'; break;
			case 'porsche-panamera-diesel-paragraph-1': $t = 'Porsche Panamera Diesel z roku 2016 jako najszybsze auto z dieslem na świecie, w swojej klasie.'; break;
			case 'porsche-panamera-diesel-paragraph-2': $t = 'Porsche Panamera – samochód osobowy typu fastback wytwarzany przez niemiecką markę Porsche od 2009 roku. Nazwa pojazdu podobnie jak Porsche Carrera pochodzi od nazwy legendarnego wyścigu La Carrera Panamericana. Od 2016 roku wprowadzono oferowaną przez ECC II wersję Panamery oznaczoną symbolem 971, która została zaprezentowana w połowie 2016 roku.'; break;
			case 'porsche-panamera-diesel-paragraph-3': $t = 'Panamera 4S Diesel z wysokoprężnym V8 (422 KM i 850 Nm) została po raz pierwszy połączona ze stałym napędem na obie osie. Auto pojedzie maksymalnie 285 km/h i jest obecnie najszybszym na świecie samochodem z silnikiem Diesla. Setka pojawia się w czasie 4,5 s (4,3 s z pakietem Sport Chrono), a średnie zużycie paliwa wynosi 6,7-6,8 l/100 km (176-178 g CO2/km).'; break;
			case 'nissan-gt-r-nismo-paragraph-1': $t = 'Nissan GT-R NISMO zadebiutował na słynnym torze Nürburgring – jednym z najdłuższych i najtrudniejszych obiektów tego typu na świecie, co pokazuje że Nismo jest bezkompromisowym samochodem wyścigowym który możemy użytkować na co dzień.'; break;
			case 'nissan-gt-r-nismo-paragraph-2': $t = 'Silnik zamontowany w NISMO jest owocem doświadczenia zdobytego w wyścigach samochodowych na całym świecie.'; break;
			case 'nissan-gt-r-nismo-paragraph-3': $t = 'Jednostka współpracująca z 6‑biegową dwusprzęgłową przekładnią jest wyposażona w dwie turbosprężarki o dużej przepustowości i średnicy – takie same, jak w samochodach startujących w wyścigach klasy GT3.'; break;
			case 'bmw-i8-paragraph-1': $t = 'BMW i8 to nowy pomysł na samochód sportowy bawarskiej firmy.'; break;
			case 'bmw-i8-paragraph-2': $t = 'Bardziej wydajny – na przykład dzięki inteligentnej lekkiej konstrukcji z karbonu i aerodynamicznej stylistyce. Bardziej ekologiczny – dzięki wysokowydajnej technologii BMW eDrive i materiałom wykończenia wnętrza nadającym się do recyklingu. Bez utraty dynamiki i sportowego wyglądu.'; break;
			case 'bmw-i8-paragraph-3': $t = 'BMW i8 to hybryda plug-in łącząca w sobie zalety innowacyjnych technologii silników elektrycznych i spalinowych. Rezultatem tego połączenia są wyjątkowe właściwości jezdne – przy niezwykle niskich parametrach zużycia paliwa i emisji dwutlenku węgla.'; break;
			case 'mercedes-amg-s63-cabrio-paragraph-1': $t = 'Nowa Klasa S Cabriolet kontynuuje długą tradycję luksusowych kabrioletów Mercedesa.'; break;
			case 'mercedes-amg-s63-cabrio-paragraph-2': $t = 'Już w latach 20. ubiegłego stulecia producent ze Stuttgartu łączył przyjemność z jazdy pod gołym niebem z komfortem i bezpieczeństwem limuzyny.'; break;
			case 'mercedes-amg-s63-cabrio-paragraph-3': $t = 'Wersja AMG dzięki 670 KM i 1000 Nm momentu obrotowego, które zapewnia podwójnie doładowany silnik V8 dodaje temu kabrioletowi jeszcze większą dawkę pikanterii.'; break;
			case 'mercedes-e63-amg-s-paragraph-1': $t = 'Ma idealny napęd, silnik z piekła rodem, fenomenalne zawieszenie i wszystko wskazuje na to, że jest idealną torową bronią.'; break;
			case 'mercedes-e63-amg-s-paragraph-2': $t = 'Z jednej strony jest najdynamiczniejszą seryjnie produkowaną limuzyną.'; break;
			case 'mercedes-e63-amg-s-paragraph-3': $t = 'Z drugiej – spełnia oczekiwania szalonych ludzi, którzy chcą rodzinne luksusowe auto zabrać na tor wyścigowy.'; break;
			case 'mercedes-s400d-paragraph-1': $t = 'Proponujemy Państwu do wynajmu technologiczne cudo. I nie chodzi tu jedynie o rezultat pracy projektantów. Przy najnowszej klasie S równie dużo harowali programiści. Ten samochód ważący około 2 ton jest napakowany elektroniką do granic możliwości.'; break;
			case 'mercedes-s400d-paragraph-2': $t = 'Materiały, oświetlenie Ambiente oraz jakość wykonania wnętrza spełniają wszelkie wymogi luksusowej limuzyny. W takich warunkach można bez zmęczenia pokonywać setki kilometrów bez irytującego klangu silnika, bez szmeru toczących się opon.'; break;
			case 'mercedes-s400d-paragraph-3': $t = 'Klasa S zdaje się unosić kilka milimetrów nad jezdnią, gładko i pewnie pokonując kolejne kilometry.'; break;
			case 'maserati-quattroporte-s-q4-paragraph-1': $t = 'Maserati Quattroporte wyraźnie czerpie z poprzedniego modelu. Charakterystyczny grill i linia boczna to już znaki rozpoznawcze samochodów z Modeny.'; break;
			case 'maserati-quattroporte-s-q4-paragraph-2': $t = 'Lorenzo Ramaciotti, szef stylistów Maserati, tłumaczy, że nowe Quattroporte łączy harmoniczne kształty, dynamikę i włoski styl. Trzeba mu przyznać rację i stwierdzić, że nadal limuzyna Maserati jest jednym z najładniejszych przedstawicieli swojej klasy.'; break;
			case 'maserati-quattroporte-s-q4-paragraph-3': $t = 'Nasz model został wyposażony w jednostkę napędową V6 o mocy 410 KM produkowaną przez Ferrari.'; break;
			case 'mercedes-g500-amg-paragraph-1': $t = 'Mercedes klasy G nowej generacji, choć to zupełnie inny samochód, nie stracił nic z magii produkowanego od 39 lat legendarnego poprzednika.'; break;
			case 'mercedes-g500-amg-paragraph-2': $t = 'Gdziekolwiek ten fantastyczny pojazd pokazuje swoją twarz, spotka się z niczym innym, jak tylko podziwem.'; break;
			case 'mercedes-g500-amg-paragraph-3': $t = 'Jego pasja, doskonałość i moc sprawiają, że każda podróż jest jak zwycięstwo.'; break;
			case 'maserati-levante-paragraph-1': $t = 'To nie jest popularne auto na naszych drogach, ale jeśli masz dość niemieckiej hegemonii w klasie luksusowych SUV-ów i kochasz szlachetne samochody to obierz kierunek na Włochy.'; break;
			case 'maserati-levante-paragraph-2': $t = 'Trójząb na „grillu” oraz „nieśmiertelne” 3 skrzela na przednich nadkolach wystarczą, aby serce zabiło mocniej.'; break;
			case 'maserati-levante-paragraph-3': $t = 'Legendarna marka z Bolonii po raz pierwszy stworzyła samochód klasy SUV. Esencją tego samochodu jest doładowane 3 litrowe V6, które w połączeniu z akustycznym układem wydechowym brzmi wprost niesamowicie.'; break;
			case 'bmw-740d-xdrive-paragraph-1': $t = 'Seria 7 to w nomenklaturze BMW synonim najwyższego samochodowego luksusu. Samochody oznaczone tą cyfrą to bezpośredni konkurenci takich pojazdów, jak Mercedes klasy S czy Audi A8.'; break;
			case 'bmw-740d-xdrive-paragraph-2': $t = 'Limuzyna ma jednocześnie smukłą i elegancką sylwetkę. Wnętrze BMW serii 7 Limuzyna jest klarowne i szlachetne.'; break;
			case 'bmw-740d-xdrive-paragraph-3': $t = 'Tapicerka z luksusowej skóry i multimodalna koncepcja obsługi podkreślają wyśmienitą estetykę i unikalny komfort. A światło ambientowe nadaje wnętrzu niepowtarzalny klimat i idealnie dopełnia harmonijną koncepcję stylistyczną.'; break;
			case 'mercedes-v-class-paragraph-1': $t = 'Atrakcyjne nadwozie zachęca do poznania nowocześnie i przestronnie zaprojektowanego wnętrza w wersji Avantgarde.'; break;
			case 'mercedes-v-class-paragraph-2': $t = 'Wysokogatunkowe, innowacyjne materiały przekształcają je w przyjemną przestrzeń do podróżowania.'; break;
			case 'mercedes-v-class-paragraph-3': $t = 'V-Class to idealny samochód na weekendowy wypad, wakacyjny voyage lub biznesową podróż. Zapewni ona komfortową i bezpieczną podróż dla dużej rodziny, przyjaciół lub partnerów biznesowych.'; break;
			case 'ford-fiesta-proto-paragraph-1': $t = ''; break;
			case 'ford-fiesta-proto-paragraph-2': $t = ''; break;
			case 'ford-fiesta-proto-paragraph-3': $t = ''; break;
			case 'cranchi-sixty-fly-paragraph-1': $t = 'Jeden z najbardziej zaawansowanych technologicznie jachtów na świecie. Bardzo bogate wyposażenie standardowe, nowoczesny design, najwyższej jakości materiały i innowacyjne rozwiązania czynią z tego jachtu pływający dom.'; break;
			case 'cranchi-sixty-fly-paragraph-2': $t = 'Ogromne przeszklone przestrzenie, obszerny mostek z materacami do opalania i wygodne sypialne pełne włoskiego stylu określają luksusowy charakter tej jednostki.'; break;
			case 'cranchi-sixty-fly-paragraph-3': $t = 'Jeżeli szukacie ekskluzywnego jachtu o unikalnym stylu to Sixty Fly jest idealną propozycją dla Was.'; break;
			case 'helikopter-robinson-44-paragraph-1': $t = 'Czteromiejscowy lekki helikopter produkowany przez Robinson Helicopter Company, posiada sprawdzony i niezawodny 6-cio cylindrowy silnik Lycoming IO-540 z wtryskiem paliwa.'; break;
			case 'helikopter-robinson-44-paragraph-2': $t = 'Szeroka gama wyposażenia dodatkowego zawierająca, m.in. klimatyzację, autopilota i zaawansowaną awionikę oraz 4-osobowa kabina sprawia, że jest to uniwersalny śmigłowiec mogący służyć zarówno do lotów turystycznych czy biznesowych.'; break;
			case 'helikopter-robinson-44-paragraph-3': $t = ''; break;
			case 'eurocopter-ec-135p2-paragraph-1': $t = 'Podróż dwusilnikowym, klimatyzowanym, luksusowym śmigłowcem typu Eurocopter EC 135P2+ może być chwilą odetchnienia i odpoczynku w drodze na ważne spotkanie.'; break;
			case 'eurocopter-ec-135p2-paragraph-2': $t = 'Komfort i intymna atmosfera sprzyjają też twórczej pracy – ciężko się skupić, gdy obok nas siedzi gadatliwy nieznajomy, a stewardesa co chwilę pyta czy coś jeszcze podać.'; break;
			case 'eurocopter-ec-135p2-paragraph-3': $t = 'Czarter śmigłowca daje możliwość całkowitej prywatności – czy podróżuje się w pojedynkę czy z grupą swoich współpracowników.'; break;
			default: $t = ''; break;
		}
		return $t;
	}


	public function footer_site_map($text)
	{
		switch ($text) {
			case 'Nasza flota': $t = 'Nasza flota'; break;
			case 'Oferta': $t = 'Oferta'; break;
			case 'Kontakt': $t = 'Kontakt'; break;
			case 'O nas': $t = 'O nas'; break;
			case 'Partnerzy': $t = 'Partnerzy'; break;
			case 'Telefon': $t = 'Telefon'; break;
			case 'Śledź nas na Facebooku': $t = 'Śledź nas na Facebooku'; break;
			case 'Śledź nas na Instagramie': $t = 'Śledź nas na Instagramie'; break;
			case 'Śledź nas na Youtube': $t = 'Śledź nas na Youtube'; break;
			default: $t = ''; break;
		}
		return $t;		
	}


	public function faq($q,$id)
	{
		if ($q === 'q') {
			switch ($id) {
				case 1: $t = 'Ile wynosi kaucja za samochód?'; break;
				case 2: $t = 'Czy kaucja jest zwrotna?'; break;
				case 3: $t = 'Jakie formy płatności akceptujemy?'; break;
				case 4: $t = 'Czy wystawiamy faktury VAT?'; break;
				case 5: $t = 'Jakie dokumenty są niezbędne, aby wynająć samochód?'; break;
				case 6: $t = 'Czy samochody posiadają ubezpieczenie?'; break;
				case 7: $t = 'Gdzie mogę odebrać samochód?'; break;
				case 8: $t = 'Czy mogę wynajętym samochodem wyjechać poza granice Polski?'; break;
				case 9: $t = 'Czy wypożyczone samochody posiadają limit kilometrów?'; break;
				case 10: $t = 'Czy na wynajętym samochodzie znajdują się naklejki z naszym logo?'; break;
				case 11: $t = 'Czy samochód może prowadzić inna osoba niż ta, która jest wskazana w umowie najmu?'; break;
				case 12: $t = 'Nie, samochód może prowadzić wyłącznie osoba, która została wskazana w umowie najmu samochodu.'; break;
				case 13: $t = 'Co muszę zrobić podczas awarii samochodu lub kolizji?'; break;
				default: $t = ''; break;
			}
		} else {
			switch ($id) {
				case 1: $t = 'Wysokość kaucji uzależniona jest od modelu samochodu oraz okresu wynajmu.'; break;
				case 2: $t = 'Tak, wpłacona kaucja za samochód jest zwrotna w całości, pod warunkiem, że wypożyczony samochód zostanie zwrócony do nas bez uszkodzeń i w wyznaczonym czasie.'; break;
				case 3: $t = 'Akceptujemy płatność gotówką, przelew internetowy oraz płatność kartą kredytową lub debetową. Honorujemy także płatności kartami zagranicznymi.'; break;
				case 4: $t = 'Tak, wystawiamy faktury VAT.'; break;
				case 5: $t = 'Do wynajęcia samochodu wymagane jest prawo jazdy potwierdzające uprawnienia do kierowania samochodem oraz drugi dokument potwierdzający tożsamość: dowód osobisty lub paszport. Osoba wynajmująca musi mieć ukończone 21 lat.'; break;
				case 6: $t = 'Tak! Wszystkie nasze samochody posiadają pełny pakiet ubezpieczeń.'; break;
				case 7: $t = 'Samochód można odebrać w siedzibie naszej wypożyczalni lub na terenie Warszawy. Oferujemy także możliwość podstawienia pojazdu w dowolne miejsce. Skontaktuj się z nami i umów dogodne dla siebie miejsce odbioru samochodu.'; break;
				case 8: $t = 'Tak, pod warunkiem wcześniejszego zgłoszenia takiej wyprawy.'; break;
				case 9: $t = 'Tak, samochody mają limit kilometrów, który uzgodnimy podczas rozmowy telefonicznej. Opłata za każdy nadkilometr uzależniona jest od modelu wynajętego samochodu.'; break;
				case 10: $t = 'Nie. Wynajmujesz samochód bez żadnych naklejek.'; break;
				case 11: $t = 'Nie, samochód może prowadzić wyłącznie osoba, która została wskazana w umowie najmu samochodu.'; break;
				case 12: $t = 'Tak, każdy wynajmowany samochód posiada zatankowany do pełna bak paliwa i należy go zwrócić w takim samym stanie. W przeciwnym razie, osoba wynajmująca samochód zostanie obciążona dodatkowymi kosztami.'; break;
				case 13: $t = 'W przypadku wyżej wskazanych zdarzeń wymagany jest niezwłoczny kontakt z naszym biurem : [+48] 720 400 600 lub [+48] 720 400 800.'; break;
				default: $t = ''; break;
			}

		}
		return $t;		
	}


	public function interesting_facts()
	{
		$id = rand(1, 13);
		switch ($id) {
			case 1: $t = 'Czy wiesz, że kilkadziesiąt luksusowych samochodów należących do marek Bentley, Porsche czy McLaren można znaleźć w szklanym, 15-piętrowym budynku w Singapurze? Budynek przypomina automaty z napojami i przekąskami, które można spotkać na uczelniach, dworcach czy w galeriach handlowych. Zresztą nie bez powodu, bo wspomniane auta są udostępniane klientom zainteresowanym ich… wynajmem. Konkretny model można wypożyczyć w sposób niewiele różniący się od zakupu napoju w klasycznym automacie.'; break;
			case 2: $t = 'Czy wiesz jak powstała marka Lamborghini? Ferruccio Lamborghini, przedsiębiorca i (początkowo) producent ciągników rolniczych, a przy tym (niezadowolony) właściciel jednego z modeli Ferrari, zgłosił się do Enza Ferrari z propozycją wprowadzenia zmian konstrukcyjnych w jego pojazdach. Ponieważ Enzo nie był jednak zainteresowany dyskusjami z nikomu wówczas nieznanym „traktorzystą”, ten ostatni postanowił rozpocząć produkcję samochód sportowych według swojej własnej wizji. Już rok później pojawiło się jego legendarne Lamborghini 350 GT.'; break;
			case 3: $t = 'Czy wiesz dlaczego przedłużany Lincoln Town Car jest tak popularną limuzyną? Lincoln Town Car w wersji przedłużanej to zdecydowanie najpopularniejsza limuzyna na wynajem, i to praktycznie w każdej części świata. Za taki stan rzeczy odpowiada fakt, że ten stosunkowo niedrogi model jest ostatnim amerykańskim autem klasy wyższej, które posiada nadwozie osadzone na ramie – pozwalające na jego dość łatwe wydłużenie. W przypadku samochodów z nadwoziem samonośnym, taka operacja jest bardziej czaso- i kapitałochłonna.'; break;
			case 4: $t = 'Czy wiesz, że klaksony Audi zawiodły w Indiach? W zdecydowanej większości krajów, klaksony używane są sporadycznie i charakteryzują się długą, wieloletnią żywotnością. Jednym z wyjątków są Indie, gdzie w ciągu jednego dnia trąbi się częściej, niż gdzie indziej przez kilka lat. Wiele lat temu, ofiarą tej niepowtarzalnej specyfiki indyjskiego ruchu drogowego padło Audi. Otóż po debiucie marki na rynku indyjskim szybko okazało się, że standardowe klaksony montowane w jej modelach ulegają błyskawicznemu zużyciu. Konkretniej mówiąc, już po kilku tygodniach nadawały się do wyrzucenia!'; break;
			case 5: $t = 'Czy wiesz skąd tyle porzuconych samochodów luksusowych w Dubaju? W Zjednoczonych Emiratach Arabskich niespłacanie długów jest traktowane jako poważne przestępstwo. Sęk w tym, że prawo upadłościowe tego kraju obejmuje wyłącznie przedsiębiorstwa i członków zarządów – osoba fizyczna nie może ogłosić bankructwa. Jeśli obywatel tego kraju kupuje na kredyt drogie zabawki i z czasem, wskutek pogorszenia sytuacji finansowej, nie jest w stanie ich spłacać – idzie po prostu do więzienia. Dlatego wielu spośród nadmiernie zadłużonych Dubajczyków woli porzucić swoje auto (czasem z kluczykiem w stacyjce!) i wyjechać z kraju, niż w nim pozostać i ponieść surowe konsekwencje.'; break;
			case 6: $t = 'Czy wiesz, że w skład floty policyjnych radiowozów w Dubaju wchodzą między innymi Ferrari, Lamborghini i Bentleye? Oczywiście wszystko po to, by umożliwić policjantom ściganie superszybkich pojazdów szalejących po ulicach miasta.'; break;
			case 7: $t = 'Czy wiesz, że silniki montowane w BMW M5 pracują tak cicho, że producent zdecydował się… sztucznie zwiększyć ich głośność. W głośnikach auta odtwarzane są fałszywe głosy silnika, które mają na celu „przypominać” kierowcy, że znajduje się w superszybkim, sportowym wozie.'; break;
			case 8: $t = 'Czy wiesz ile aut dziennie produkuje Ferrari, a ile Toyota? Według ostrożnych szacunków łączna liczba samochodów na świecie sięga ok. 1,1 miliarda. Co oczywiste jednak, najbardziej znani producenci aut w bardzo różnym stopniu przyczyniają się do wzrostu tej wielkości. Najmniejszy udział mają oczywiście marki skupione na produkcji samochodów luksusowych – przykładowo, obecnie powstaje średnio zaledwie 14 egzemplarzy Ferrari dziennie. Natomiast z taśm produkcyjnych największych przedsiębiorstw motoryzacyjnych, takich jak Toyota, każdego dnia zjeżdża 13 tys. samochodów – co i tak nie jest szczytem jej mocy wytwórczych.'; break;
			case 9: $t = 'Czy wiesz na ile minut jazdy z maksymalną prędkością wystarczy pełny bak paliwa w Bugatti Veyronie? Zbiornik paliwa w Bugatti Veyronie ma pojemność 26 galonów (niespełna 99 litrów). Choć wydaje się to całkiem pokaźną wielkością, utrzymując podczas jazdy przez cały czas prędkość maksymalną – czyli 254 mph (408 km/h), auto szybko opróżniłoby cały bak. W zasadzie to bardzo szybko, bo już po 12 minutach!'; break;
			case 10: $t = 'Czy wiesz, że najwięcej marek samochodów luksusowych i premium należy do Volkswagena? Do koncernu Volkswagen Group należy obecnie 12 marek zależnych. Są wśród nich przede wszystkim producenci samochodów luksusowych i premium: Porsche, Audi, Bugatti, Bentley czy Lamborghini. Dominację Volkswagena w branży motoryzacyjnej jeszcze lepiej obrazują poniższe statystyki: do tej marki należy co trzeci pojazd sprzedawany w Niemczech i co dziesiąty na całym świecie.'; break;
			case 11: $t = 'Czy wiesz, że Rolls Royce kiedyś robił za śmieciarkę? Blisko 100 lat temu, londyński salon sprzedaży Rolls Royce odwiedził indyjski książę, Maharaja Jai Singh. Wygląd księcia najwyraźniej nie sugerował, że jest on bardzo majętną osobą, ponieważ sprzedawca dał mu do zrozumienia, iż nie stać go na żaden z tych luksusowych samochodów. To bardzo uraziło księcia – tak bardzo, że kupił ich aż dziesięć, a następnie wysłał do Indii i nakazał wykorzystywać do zbierania śmieci.'; break;
			case 12: $t = 'Czy wiesz, że 3/4 wyprodukowanych Rolls Royce-ów jest nadal w użytku? Brytyjska marka samochodowa Rolls Royce działa już od ponad 110 lat. Mimo wszystko jednak, aż 3/4 spośród wszystkich wyprodukowanych przez nią pojazdów nadal pozostaje w użytku.'; break;
			case 13: $t = 'Czy wiesz, które auto jest najdroższe na świecie i ile kosztuje? I znów ta brytyjska marka, kojarząca się z luksusem i bogactwem. Aktualnie, mianem najdroższego auta na świecie może poszczycić się Rolls Royce Sweptail, który powstał na specjalne zamówienie jednego ze stałych klientów tej firmy. Budowa samochodu trwała aż 4 lata, co szczególnie nie dziwi, bo większość jego elementów została wykonana ręcznie. I choć nie podano oficjalnej ceny auta, to jednak specjaliści oszacowali, że ten luksusowy wóz jest wart ok. 12,8 milionów dolarów.'; break;
			default: $t = ''; break;
		}
		return $t;		
	}


	public function page_unavailable($phrase)
	{
		switch ($phrase) {
			case 'page-unavailable': $t = 'Ups, wygląda na to, że taka strona nie istnieje'; break;
			case 'interesting-facts': $t = 'Ale skoro już tu trafiłeś, to korzystając z okazji zdradzimy Ci pewną ciekawostkę'; break;
			case 'back-to-home': $t = 'Wróć na stronę główną'; break;
			default: $t = ''; break;
		}
		return $t;		
	}
	

}

?>