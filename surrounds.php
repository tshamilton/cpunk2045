<?php
include 'utility.php';

function surroundings() {
	global $surrounds;
	global $cfg;

	/*$these_blocks = rand($cfg['MIN_BUILDINGS'], $cfg['MAX_BUILDINGS'])*/
	$these_blocks = rand(3, 6);
	$build = array_rand($surrounds, $these_blocks);

	foreach ($surrounds as $bk => $bv) {
		if (in_array($bk, $build)) { 
			$surrounds[$bk] = building();
			$surrounds[$bk]['Title'] .= " - ".$bk;
		}
	else { /*$surrounds[$bk] = rubble();*/ }
	}
	pretty_var($surrounds, 'ccccff');
}

function building() {
	global $cfg;
	global $aux;

	$out = array();
	$block = array(
		'PharmacyS',				'Consumer ElectronicsM',					'Art Dealer/GalleryS',
		'Auto/Robotics RepairM',	'Storage UnitsL',							'WarehouseL',
		'Legal FirmX',				'Religious BuildingS',						'Capsule HotelL',
		'Data Storage FacilityX',	'Cheap Housing ProjectX',					'Grocery StoreS',
		'Elevated RailS',			'Road OverpassL',							'Fast Food FranchiseS',
		'Police PrecinctL',			'School/CollegeM',							'Government BuildingL',
		'GarageS',					'Parking BlockS',							'Office BlockX',
		'Public Transport HubS',	'HospitalM',								'ClinicS',
		'Department StoreM',		'Body Augmentation Clinic/Beauty SalonS',	'Luxury ApartmentsL',
		'New Media CompanyM',		'Industrial/FactoryM',						'Security TechM',
		'Vehicle ShowroomM',		'Fashion BoutiqueS',						'Commercial CyberneticsM',
		'MallM',					'VR-cade/Braindance ShopS',					'GymS',
		'LeisureplexM',				'Apartment Block/Hab StackX',				'NightclubS',
		'UnderpassS',				'HotelL',									'RipperdocS',
		'3D Fab/Small FactoryS',	'Courier/Bulk Transport CompanyM',			'BarS',
		'RestaurantS',				'Pop-up MarketS',							'Coffee ShopS',
		'Taxi FirmM',				'Pocket ParkS',								'Suburban HousingS',
		'Movie TheatreS',			'Weapons or Tech SalesM',					'Multi-level Car ParkM',
		'BankL',					'AntiquesS',								'Goods and ServicesM',
		'BrothelS'
	);

	$b_title = $block[array_rand($block)];
	$building_size = substr($b_title, -1, 1);
	$b_title = substr($b_title, 0, -1);
	$b_text = "";
	$preset_flag = 0;

	switch($building_size) {
		case 'S': $building_size = rand(1,3); break;
		case 'M': $building_size = rand(1,6); break;
		case 'L': $building_size = rand(1,15); break;
		case 'X': $building_size = rand(1,50); break;
	}
	$b_text = "<b>Floors:</b> ".$building_size;

	/*if(rand(1,100) <= $cfg['PRESET_BUILD'])*/
	if(rand(1,100) <= 70) {
		switch($b_title) {
			case('3D Fab/Small Factory'):
				$preset = array(
					"<b><i>Schmitt Machining &amp; Service</i></b><br/> ".rand(1, 5)." occupants. Family owned machine &amp; welding factory.",
					"<b><i>Cedric's Robot Shop</i></b><br/> ".rand(1, 5)." occupants. Used robotics repair shop run by eccentric inventor.",
					"<b><i>Iwasaki Consumer Robotics</i></b><br/> ".rand(1, 6)." occupants. Robotics sales and service shop that's geared towards low to medium cost options for household use.",
					"<b><i>Karnataka Electronics</i></b><br/> ".rand(3, 8)." occupants. Indian run electronics sales and repair shop. You can almost always get a lower end cyberdeck here at a reasonable rate. The owners live in the flat above the shop.",
					"<b><i>Geraldo's Electronic Solutions</i></b><br/> Computer repair/synthetic drug dealer."
				);
				break;
			case('Antiques'):
				$preset = array(
					"<b><i>Albescu\'s Pawn</i></b><br/> ".rand(3, 8)." occupants. Dirty pawn shop located below some even filthier apartment buildings. Broken English at best spoken here. Good place to sell stolen hardware and guns (30% value) as the stuff gets shipped out of the city quickly.",
					"<b><i>Yesterday\'s Junk</i></b><br/> ".rand(3, 8)." occupants. Musty old junk shop with interesting book/comic collection from last century."
				);
				break;
			case('Apartment Block/Hab Stack'):
				$preset = array(
					"<b><i>Condale Apartments</i></b><br/> ".rand(68, 155)." occupants. Squalid, poorly lit small complex of simple one room apartments. A serial killer (unknown to authorities) named Kendric Mathers lives here.",
					"<b><i>Elm Ridge Apartments</i></b><br/> ".rand(70, 240)." occupants. Rundown apartment complex ridden with crime.",
					"<b><i>Novak Apartments</i></b><br/> ".rand(40, 135)." occupants. Aging apartment complex filled with starving tech laborers."
				);
				break;
			case('Art Dealer/Gallery'):
				$preset = array(
					"<b><i>Hinata Studio Gallery</i></b><br/> Art studio/gallery rumored to also deal in stolen artwork."
				);
				break;
			case('Auto/Robotics Repair'):
				$preset = array(
					"<b><i>Rusty's 24 Towing &amp; Service</i></b><br/> Wrecker Service",
					"<b><i>Taylor Fuel Station</i></b><br/> Gas Station"
				);
				break;
			case('Bank'):
				$preset = array(
					"<b><i>Yori Banking</i></b><br/> Regional offices for multi-national banking firm.",
					"<b><i>Today's Pay</i></b><br/> Check Advance/Title Loan Agency.",
					"<b><i>Connor Investments</i></b><br/> ".rand(3, 8)." occupants. Investment agency owned by a group of folks well connected to the Irish mobsters.",
					"<b><i>Kinzel & Sons</i></b><br/> Investment broker that engages in suspected loan sharking.",
					"<b><i>Kirchoff Financial Services</i></b><br/> Investment agency front for money laundering.",
					"<b><i>Nirbhar Investments</i></b><br/> Investment firm known to back nuclear energy.",
					"<b><i>Ridlon South</i></b><br/> Regional office for mining investment firm.",
					"<b><i>Rollison Investments</i></b><br/> Investment firm rumored to finance illegal arms brokers.",
					"<b><i>Camilla Banking & Loan</i></b><br/> Small corporate owned bank.",
					"<b><i>Fat Wallet Easy Loans</i></b><br/> Title Loan Agency.",
					"<b><i>Larry's Check Advance</i></b><br/> Check Advance Loan Agency.",
					"<b><i>Next Week's Check</i></b><br/> Check Advance Loan Agency."
				);
				break;
			case('Bar'):
				$preset = array(
					"<b><i>Barney's Place</i></b><br/> Dive Bar.",
					"<b><i>Belter's</i></b><br/> ".rand(7, 65)." occupants. Local dive bar that's open from 10am to 2am. Mostly your 45 and up crowd here, often sporting few if any upgrades. A few older low level mobsters (mostly Irish Americans) are known to frequent this place. Fairly calm as drunken/violent patrons are taken around back and given the \"special house treatment\".",
					"<b><i>Bubbly Joe's</i></b><br/> Dive Bar",
					"<b><i>Butcher's Place</i></b><br/> Biker Bar",
					"<b><i>Chipper's</i></b><br/> Dive Bar",
					"<b><i>Clegg's Place</i></b><br/> Rough and rowdy biker ridden billards hall.",
					"<b><i>Keely's Lounge</i></b><br/> ".rand(12, 70)." occupants. Dive bar that's frequented by Irish American wise guys, skinheads, blue collar goons, and university flunk outs.",
					"<b><i>Danny Boy's</i></b><br/> Irish Themed Dive Bar.",
					"<b><i>Dirty Mack's</i></b><br/> Dive Bar.",
					"<b><i>Fancy Nancy's</i></b><br/> ".rand(3, 32)." occupants. Biker bar/pool hall with a reputation for brutal brawls and unofficial strip shows.",
					"<b><i>Gutter's Saloon</i></b><br/> Biker Bar.",
					"<b><i>Johnny Fiver's</i></b><br/> Popular punk, rockabilly, and blues themed dive bar.",
					"<b><i>Kip's Beer &amp; Billards</i></b><br/> Irish Themed Pool Hall and Bar.",
					"<b><i>Koga Tiki</i></b><br/> Tropical themed lounge owned by a wealthy tech inventor.",
					"<b><i>Leidulf's</i></b><br/> Viking/European themed bar and local micro-brewery.",
					"<b><i>McGillicody's Pub</i></b><br/> Dive bar/eatery frequented by Irish mafia members.",
					"<b><i>On The Ball</i></b><br/> Pool Hall/Arcade.",
					"<b><i>Racker's Billards</i></b><br/> Pool Hall.",
					"<b><i>Rat Muffler's</i></b><br/> Biker Bar.",
					"<b><i>The Stolen Horse</i></b><br/> Retro \"honkey tonk\" frequented by muscle for hire thugs.",
					"<b><i>Trixie's Place</i></b><br/> Strip Club."
				);
				break;
			case('Body Augmentation Clinic/Beauty Salon'):
				$preset = array(
					"<b><i>Cassandra's Nails &amp; More</i></b><br/> Nail & Pedicure Salon.",
					"<b><i>Chauncy's</i></b><br/> Barber Shop.",
					"<b><i>Coco's Look</i></b><br/> Hair Salon.",
					"<b><i>Comb &amp; Cuts</i></b><br/> Barber Shop.",
					"<b><i>Fab Mane Hair Clinic</i></b><br/> ".rand(3, 8)." occupants. Beauty clinic specializing in natural and lab grown hair implants.",
					"<b><i>Fei Long Tattoos</i></b><br/> ".rand(5, 10)." occupants. Tattoo shop that also provides unlicensed cosmetic augmentations.",
					"<b><i>Herodotus Genetic Options</i></b><br/> ".rand(3, 8)." occupants. Genetics manipulation clinic that specializes in halting/setting back the effects of aging. Their services are costly but generally (85%) effective.",
					"<b><i>Mindi's Tanning</i></b><br/> Tanning Salon.",
					"<b><i>The Gentleman's Cut</i></b><br/> Barber Shop.",
					"<b><i>Vicky's Salon</i></b><br/> Hair, Nail, and Pedicure Salon.",
					"<b><i>Wanda's Salon</i></b><br/> Beauty Salon.",
					"<b><i>White Crane Nails & Tanning</i></b><br/> Nail/Tanning Salon."
				);
				break;
			case('Brothel'):
				$preset = array(
					"<b><i>Blue Evening Escort Agency</i></b><br/> Escort Service.",
					"<b><i>Caged Heat</i></b><br/> Gentleman's club owned by a notorious drug dealer",
					"<b><i>Casablanca Blue</i></b><br/> ".rand(12, 30)." occupants. Private gentlemen's club where higher society criminals settle issues peacefully.",
					"<b><i>Formal Presentations</i></b><br/> Escort Service.",
					"<b><i>Healing Stones Therapy Clinic</i></b><br/> Massage Parlor.",
					"<b><i>Inner Joy Massage</i></b><br/> ".rand(5, 10)." occupants. Seedy massage parlor known to provide a 'happy ending' experience. Fairly safe from being busted as a few of the local finest get free services here once a week.",
					"<b><i>Orchid Pink Salon</i></b><br/> ".rand(3, 8)." occupants. Hair, nail, and skin salon in the front with erotic filming and prostitution going on in the back. The Orchid Pink is owned by Mr. Nakano, a local crime lord. Mr. Nakano has informers and associates scattered amongst the employees of several local businesses as well. He lives in a well stocked flat above the Orchid Pink Salon.",
					"<b><i>Oriental Healing</i></b><br/> Massage Parlor.",
					"<b><i>Patty's Girls</i></b><br/> Escort Service."
				);
				break;
			case('Capsule Hotel'):
				$preset = array(
					"<b><i>Cheap Hotel</i></b><br/> Seedy looking place with suspiciously good Net connectiivity. 'Special' suites for people in the know."
				);
				break;
			case('Clinic'):
				$preset = array(
					"<b><i>Shiro's Clinic</i></b><br/> ".rand(4, 9)." occupants. Small back alley clinic that specializes in audio implants. No license to practice so the real work is done in the back. Front of the shop is a \"holistic health\" store.",
					"<b><i>Amritsar Prosthetics</i></b><br/> ".rand(6, 16)." occupants. Prosthetic sales, service, and installment clinic.",
					"<b><i>Hastings Technology Research</i></b><br/> Neural processing development lab.",
					"<b><i>Hillmore Labs</i></b><br/> Small genetic testing clinic.",
					"<b><i>Imai-Ueno Anatomy Brokers</i></b><br/> ".rand(3, 8)." occupants. Organ harvesting and sales clinic that's been temporarily shut down twice in the last three years. Don't need a kidney? Sell it here... they'll throw in a free artificial replacement (40% chance of failure in a year)!",
					"<b><i>Kiba Bio-tech</i></b><br/> Corporation focused on lab grown teeth, bones, and marrow.",
					"<b><i>Bourke and Partners Bio-Reclamation Services</i></b><br/> When someone gets a cyberlimb, where does the old flesh go? This company knows...",
					"<b><i>Kilbourne Labs</i></b><br/> Bio-engineering and pharmaceutical lab.",
					"<b><i>Mediquik Critical Response</i></b><br/> Private ER/urgent care medical clinic.",
					"<b><i>Messina Lab Corp</i></b><br/> ".rand(13, 100)." occupants. Small genetics lab that deals mostly in the research of designing programmable artificial life from stem cells."
				);
				break;
			case('Convenience Store'):
				$preset = array(
					"<b><i>24/7</i></b><br/> Compact convenience store.",
					"<b><i>Guzzle Pump</i></b><br/> Gas Station/Convenience Store.",
					"<b><i>Itchy's Package Store</i></b><br/> ".rand(3, 8)." occupants. Cramped and cluttered corner store that deals mostly in smokes, bottom shelf booze, and overpriced snacks.",
					"<b><i>Stuffer Shack</i></b><br/> Compact convenience/food store.",
					"<b><i>Thrifty Stop</i></b><br/> Corner Convenience Store."
				);
				break;
			case('Cafe'):
				$preset = array(
					"<b><i>11th Train</i></b><br/> Trendy café/eatery frequented by lower management types.",
					"<b><i>Antonio's Deli</i></b><br/> Corner Deli.",
					"<b><i>Beatnik Station</i></b><br/> Coffee House with Poetry Readings/Live Shows.",
					"<b><i>Bickerman's</i></b><br/> Coffee house and popular hang out for wannabe hackers.",
					"<b><i>Crazy Aesop's Pyro Gyros</i></b><br/> Fast growing trendy fast casual eatery.",
					"<b><i>Desiree's</i></b><br/> 24hr diner frequented by hookers and small time drug dealers.",
					"<b><i>Flo's Place</i></b><br/> Busy Diner.",
					"<b><i>Lorenzo's Diner</i></b><br/> Run Down Looking Diner.",
					"<b><i>Marcello Stone's</i></b><br/> Casual dining eatery frequented by criminal enforcers.",
					"<b><i>Moon Crest Diner</i></b><br/> ".rand(5, 34)." occupants. Dingy, roach infested diner that serves short order fare day and night. Popular late hour hangout for the local hookers, cabbies, and socially disconnected drifters.",
					"<b><i>Moreau Caf&eacute;</i></b><br/> ".rand(5, 34)." occupants. Indoor/outdoor café/eatery located in a bit calmer/nicer part of the city. Frequented by smugglers and fences dealing in stolen art, jewelry, antiques, and fashion.",
					"<b><i>Rita's Garden</i></b><br/> Overpriced café/eatery favored by artists and posers.",
					"<b><i>The Big Salami</i></b><br/> Deli and Sandwich Shop.",
					"<b><i>The Fizz</i></b><br/> ".rand(5, 34)." occupants. Retro themed soda shop/bar owned by a poser gang called the \"Highball Greasers\". Frequent beatings and gambling occurs in the back room.",
					"<b><i>The Laughing Pickle</i></b><br/> Oddly named sandwich shop run by a mid level mobster.",
					"<b><i>Tilly Mae's</i></b><br/> Filthy Looking Diner."
				);
				break;
			case('Commercial Cybernetics'):
				$preset = array(
					"<b><i>Buster's Gym</i></b><br/> ".rand(5, 34)." occupants. Gym/fitness center that's a front for an illegal muscle graft clinic.",
					"<b><i>Kalidad International</i></b><br/> Chipware corporation known for military applications.",
					"<b><i>Nasiib Ink</i></b><br/> Rough looking tattoo parlor that also deals in illegal implants.",
					"<b><i>Neurobody Health Options</i></b><br/> ".rand(3, 8)." occupants. Local health store/clinic that also deals in very questionable neuro implants.",
					"<b><i>Refined Beauty Plastic Surgery Options</i></b><br/> ".rand(1, 6)." occupants. Low rent plastic surgery clinic run by a surgeon that stays drunk most of the time.",
					"<b><i>Ryland & Salls Dentistry</i></b><br/> Dentist office that provides oral cyber implants.",
					"<b><i>Saleem's</i></b><br/> Used tech shop that deals in black market cyberware in the back.",
					"<b><i>Second Tech Solutions</i></b><br/> ".rand(1, 6)." occupants. Store that deals in questionable discounted and secondhand technology/chipware.", 
				);
				break;
			case('Good and Services'):
				$preset = array(
					"<b><i>Atlantis Records</i></b><br/> Used Record Shop run by retired semi-famous Rocker.",
					"<b><i>Barbarella's Books and More</i></b><br/> Used Book, Media, Music, etc. Store. Does a little trade in under-the-table braindances.",
					"<b><i>Blink's 24 Hour Launderette</i></b><br/> ".rand(6, 11)." occupants. Coin launderette that's always open. Used by a variety of folks living in the local tiny one room flats and pod hotels nearby. Semi-regular paid private security patrols.",
					"<b><i>Blue Reef Tropicals</i></b><br/> Shop selling saltwater aquariums & engineered pets.",
					"<b><i>Cheapo's</i></b><br/> ".rand(6, 11)." occupants. Discount bargain store mostly filled with crap other places couldn't sell. Used as a front for trafficking illegal merchandise.",
					"<b><i>Eternal Wick</i></b><br/> ".rand(1, 6)." occupants. Artsy fartsy little candle, incense, and bath supplies shop that perpetually reeks of essential oils usually sandalwood and/or patchouli. Sabrina Sade, the shop's owner, is a college grad hippie type with color changing optical implants.",
					"<b><i>Generous Hands Thrift Shop</i></b><br/> Charity Run Thrift Store.",
					"<b><i>Hayate Pawn</i></b><br/> Shady looking pawn shop that deals in stolen firearms.",
					"<b><i>Ivan's Army Surplus</i></b><br/> ".rand(2, 7)." occupants. Military surplus shop used as a front by Ivan Volkov, a local weapons trafficker.",
					"<b><i>Jasper & Jasmine's</i></b><br/> Coffee & Tea Shop.",
					"<b><i>Katsu Knives & Swords</i></b><br/> Seedy store selling martial arts weapons & trinkets.",
					"<b><i>Manny's Printing</i></b><br/> Cluttered, Struggling Print Shop.",
					"<b><i>Maverick Discount</i></b><br/> New but aggressive dollar store chain.",
					"<b><i>Maximum Audio</i></b><br/> Automotive Stereo Store.",
					"<b><i>McMunn's 24 Laundromat</i></b><br/> Laundromat known for being the site of 9 murders.",
					"<b><i>Merkley Brothers</i></b><br/> Home appliance and furniture store.",
					"<b><i>Patna Teas And Spices</i></b><br/> ".rand(4, 9)." occupants. Small tea and culinary spice shop. The owner, Arjun Datta, makes his real living brokering information. He can also scan you for unknown or troublesome implants.",
					"<b><i>Puffy's Purple Palace</i></b><br/> Vape Store/Head Shop.",
					"<b><i>Quick Release Bond Agency</i></b><br/> Bail Bond Agency.",
					"<b><i>Ruff's Salon</i></b><br/> Dog Grooming Salon.",
					"<b><i>Shuriken Joe's</i></b><br/> ".rand(3, 18)." occupants. Tacky, over the top martial arts weapon and novelty shop. Shuriken Joe's is mostly crowded between 6pm to 9pm and also does a bit of business in selling hookahs.",
					"<b><i>Side Alley Vapor</i></b><br/> Vape Store.",
					"<b><i>Silk Clouds</i></b><br/> Vape Store/Head Shop.",
					"<b><i>Tai Dian</i></b><br/> Home and business electrician sales and service company.",
					"<b><i>Gravel Pit</i></b><br/> Skateboard Shop.",
					"<b><i>The Rug Bug</i></b><br/> Children's Clothing Store.",
					"<b><i>Third Eye Divinity</i></b><br/> ".rand(1, 6)." occupants. Palm reader/astrologer named Farah. Very shady.",
					"<b><i>Vantage Bedding</i></b><br/> Mattress And Bed Store."
				);
				break;
			case('Department Store'):
				$preset = array(
					"<b><i>Draper Mall</i></b><br/> ".rand(15, 80)." occupants. Abandoned indoor shopping mall that's the unofficial home of squatters and drug addicts. Lower gangs wield temporary control of this location from time to time."
				);
				break;
			case('Fashion Boutique'):
				$preset = array(
					"<b><i>Amicable Joy</i></b><br/> Chain store selling trinkets and costume jewelry.",
					"<b><i>Wilma's Dress And Bag</i></b><br/> Women's Clothing & Accessories Store.",
					"<b><i>The Golden Heel</i></b><br/> Tacky shoe and purse shop that deals in cheap knock offs.",
					"<b><i>The Dapper Plume</i></b><br/> Men's Clothing Store.",
					"<b><i>Ballard's</i></b><br/> Mid-price women's clothing and accessories.",
					"<b><i>Barbara's</i></b><br/> ".rand(2, 7)." occupants. Cheap and flashy fashion accessory store owned by a former nu disco starlet.",
					"<b><i>Blue Panda</i></b><br/> Upscale children's clothing, accessory, and toy store.",
					"<b><i>Brodeur Finery</i></b><br/> ".rand(4, 14)." occupants. Nicer clothing and fashion boutique. The really nice stuff in the front is legit, the even nicer stuff in the back is stolen.",
					"<b><i>Dubois Leathers</i></b><br/> ".rand(1, 6)." occupants. Custom leather shop that specializes in risque fetish wear. The owner has a taste for sadism and cheap stimulants.",
					"<b><i>Fanny Jill's Fashions</i></b><br/> Women's Clothing Store.",
					"<b><i>Kuleenata Jewelers</i></b><br/> Upscale jewelry store dealing in custom made pendants.",
					"<b><i>Hamilton Hat & Wig</i></b><br/> Hat and Wig Store.",
					"<b><i>Komarov's Jewelry</i></b><br/> ".rand(6, 11)." occupants. Small urban bling jewelry shop that is the semi-legit business front for Dimitri 'Mosquito' Komarov, a local loan shark known for his sleazy demeanor and dress and backstabbing nature.",
					"<b><i>Mama Jasmine's Fashion Boutique</i></b><br/> Women & Children's Clothing Store.",
					"<b><i>Lonzo's Hats & Shoes</i></b><br/> Men's Fashion Store.",
					"<b><i>Tammy's Dress & Shoes</i></b><br/> Women's Clothing Store.",
					"<b><i>Mister Joe's</i></b><br/> Gentlemen's Fashion Store.",
					"<b><i>Jessica's Lace</i></b><br/> Intimate Clothing Store."
				);
				break;
			case('Fast Food Franchise'):
				$preset = array(
					"<b><i>Chatterhead's</i></b><br/> ".rand(5, 34)." occupants. Local burger joint business that has exploded into a small chain. Serves meat free menu. In direct competition with larger fast food corporations. Chatterhead's is getting too big a bit too fast.",
					"<b><i>Jin Xie</i></b><br/> Asian eatery that specializes in take out seafood.",
					"<b><i>Kaala Chikan</i></b><br/> Small footspace eatery specializing in seasoned chicken.",
					"<b><i>Men Ichiba</i></b><br/> Small floorspace eatery specializing in noodles to go.",
					"<b><i>Sandwich Heroes</i></b><br/> Sub Sandwich Shop.",
					"<b><i>Smiley's Shakes 'N' More</i></b><br/> Fast Food Joint.",
					"<b><i>The Dancing Taco</i></b><br/> Fast Food Joint."
				);
				break;
			case('Garage'):
				$preset = array(
					"<b><i>Trans-Atlantic Customs</i></b><br/> Automotive Customizer.",
					"<b><i>Rims & FX</i></b><br/> Automotive Custom Accessories Store.",
					"<b><i>Buster's Garage</i></b><br/> 24 Hour Towing/Garage.",
					"<b><i>Gary's Transmission & Service Garage</i></b><br/>.",
					"<b><i>Glider's Cycle Shop</i></b><br/> ".rand(3, 8)." occupants. Motorcycle sales and service that specializes in high performance racing bikes and off road dirt bikes. The owner, Glider, is an associate of the Baja Renegades tech gang.",
					"<b><i>Jabalpur Express Motorworks</i></b><br/> ".rand(3, 8)." occupants. Sales and service center focused on Indian mopeds, scooters, and single cylinder motorcycles.",
					"<b><i>Kirk's Garage</i></b><br/> ".rand(5, 10)." occupants. Small filthy garage that does a bit of chop shop work when the money gets tight.",
					"<b><i>Lightning Customs</i></b><br/> ".rand(3, 8)." occupants. Local automotive customizer that specializes in very risky and often illegal modifications.",
					"<b><i>Meis-Mifflin Auto Repair</i></b><br/> Run down garage owned by dealers in illegal arms."
				);
				break;
			case('Grocery Store'):
				$preset = array(
					"<b><i>The Spice Bowl</i></b><br/> Import Food & Spices Store.",
					"<b><i>Easy As</i></b><br/> Corner Store.",
					"<b><i>Hansel's Market</i></b><br/> Corner Grocery.",
					"<b><i>Lester's Package Store</i></b><br/> Corner Liquor Store.",
				);
				break;
			case('Gym'):
				$preset = array(
					"<b><i>Burning Tiger Studio</i></b><br/> Mixed martial arts training studio.",
					"<b><i>Big Ox Gym</i></b><br/> 24-hour weights room that sells illegal stims and steroids."
				);
				break;
			case('Hospital'):
				$preset = array(
					"<b><i>Trent Medical Center</i></b><br/> Multi-office medical center"
				);
				break;
			case('Hotel'):
				$preset = array(
					"<b><i>Voske Inn</i></b><br/> Tacky, overly decorated hotel that caters to equally tacky guests.",
					"<b><i>Blue Star Motel</i></b><br/> Flea Bag Motel.",
					"<b><i>Krolik Hotel</i></b><br/> Outdated 14 floor hotel ridden with hookers and drug addicts.",
					"<b><i>Mondo Palace</i></b><br/> ".rand(28, 115)." occupants. Harshly lit, foul smelling capsule hotel. The Mondo is quite popular amongst needle junkies, low talent net cowboys, and poor street hustlers."
				);
				break;
			case('Industrial/Factory'):
				$preset = array(
					"<b><i>Rodden Aerotech</i></b><br/> Police and civilian helicopter/aircraft manufacturer.",
					"<b><i>B&K Welding</i></b><br/> Run down fit and weld shop.",
					"<b><i>Custom Flo</i></b><br/> HVAC and duct work service and sales providers.",
					"<b><i>Dubois Manufacturing</i></b><br/> Manufacturer of industrial lighting and equipment.",
					"<b><i>Kimball Manufacturing</i></b><br/> Manufacturer of plastic products.",
					"<b><i>Maxwayne Heli-Service</i></b><br/> Sales/service of new/used helicopters."
				);
				break;
			case('Legal Firm'):
				$preset = array(
					"<b><i>Harris, Jackson, & Manning Law</i></b><br/> Law Firm Office.",
					"<b><i>J.J. Keller & Associates</i></b><br/> Defense Attorney Law Firm.",
					"<b><i>Larson & Holman Defense Law</i></b><br/> Law Firm.",
					"<b><i>Linch, Mazzariello, & Rodden</i></b><br/> Law firm that caters to local mobsters.",
					"<b><i>Meyer & Byrne Law Firm</i></b><br/> ".rand(3, 8)." occupants. Budget defense law firm best known for representing local dealers and swindlers.",
					"<b><i>Rosenstein & Rothberg</i></b><br/> Law firm office specializing in genetic/tech legalities.",
					"<b><i>Scalzo, Rayo, & Sasse</i></b><br/> Law firm that caters to musicians/minor celebrities.",
				);
				break;
			case('Leisureplex'):
				$preset = array(
					"<b><i>Wheelie Jo's</i></b><br/> ".rand(12, 70)." occupants. Indoor roller skating rink run by a violent skate gang known as \"The Sockets\". Wheelie Jo is the owner and mentor to the younger thugs.",
				);
				break;
			case('Luxury Apartments'):
				$preset = array(
					"<b><i>Zuniga Apartments</i></b><br/> Heavy security apartment complex inhabited by the wealthy."
				);
				break;
			case('New Media Company'):
				$preset = array(
					"<b><i>Baxter Hall Arts & More</i></b><br/> Art Studio/Consignment Craft Store.",
					"<b><i>Beautiful Memories</i></b><br/> Photography & Portrait Studio.",
					"<b><i>Network X5</i></b><br/> Central office and studios for sci-fi focused cable network.",
					"<b><i>Ponder Graphics</i></b><br/> ".rand(1, 6)." occupants. Graphics studio that does some freelance coding and hacking work. Run by Ponder, a local netrunner with social anxiety and bipolar disorder.",
					"<b><i>Rachethead Studios</i></b><br/> Music recording studio and production company.",
					"<b><i>Splatter Studios</i></b><br/> ".rand(4, 9)." occupants. Living quarters and recording studio of the techno horror music group Brain Type. All of the band members are junkies constantly looking to score.",
					"<b><i>Starbound Talent Agency</i></b><br/> Modeling & Talent Agency.",
					"<b><i>Validity Channel</i></b><br/> Central office/studios for conspiracy focused cable network.",
					"<b><i>Victoria Lang Modeling</i></b><br/> Modeling agency involved in human trafficking.",
					"<b><i>Wicked Pose Photography</i></b><br/> Modeling & Exotic Photography Studio."
				);
				break;
			case('Nightclub'):
				$preset = array(
					"<b><i>Lucy's Boutique</i></b><br/> Notorious lowbrow strip bar known for violence.",
					"<b><i>Plugged Inn</i></b><br/> Kinky nightclub favored by heavily modified cyber fetish types.",
					"<b><i>Silverfyre</i></b><br/> Noisy night club favored by techies, models, and stimulant dealers.",
					"<b><i>The Smoky Throat</i></b><br/> ".rand(7, 60)." occupants. Retro jazz and blues themed night club/eatery. Famous for its synth meat barbecue.",
					"<b><i>The Lion House</i></b><br/> LGBTI night club run by a black market cybernetics dealers.",
					"<b><i>The Pink Orchid</i></b><br/> Strip Club.",
					"<b><i>The Crank</i></b><br/> ".rand(13, 100)." occupants. Loud and rowdy punk themed nightclub. Good place to loose a few teeth."
				);
				break;
			case('Office Block'):
				$preset = array(
					"<b><i>Akarui Optical</i></b><br/> Cybertech company focused on optical applications.",
					"<b><i>Canyon Drift App Studio</i></b><br/> ".rand(7, 17)." occupants. This building houses a small app development firm in the front and headquarters/crash space of the Baja Renegades tech gang in the back.",
					"<b><i>Colony Central</i></b><br/> Recruiting agency for solar space colony ventures.",
					"<b><i>Cordova Mercantile</i></b><br/> Bio-engineering firm focused on lab grown ivory and silk.",
					"<b><i>Geyser Orbital Mining</i></b><br/> Regional offices for astro mining corporation.",
					"<b><i>Graplin Defense</i></b><br/> Firm specializing in military mercenary recruitment.",
					"<b><i>Kyle's Easy Bail</i></b><br/> Bail Bond Agency.",
					"<b><i>L&amp;K Sons Security</i></b><br/> Locally owned \"rent a cop\" agency.",
					"<b><i>McPhearson-Mauzy Pharmaceuticals</i></b><br/> Regonial pharma corp office complex.",
					"<b><i>Meza-Fink Medical Supplies</i></b><br/> Home and business medical product supplier.",
					"<b><i>Northpath Development</i></b><br/> Software/mobile app design firm.",
					"<b><i>Osamu College</i></b><br/> Central office for online unversity with questionable practices.",
					"<b><i>Pag-Unlad Connections</i></b><br/> U.S./Asian communication tech conglomerate.",
					"<b><i>Rybicki Ltd.</i></b><br/> Regional business office for maker of home electronics.",
					"<b><i>Santora Ltd.</i></b><br/> Low key cyberspace design firm/developer of hacking apps.",
					"<b><i>Snooper's Private Investigations</i></b><br/> Private Investigations Agency.",
					"<b><i>Soldat Technologies</i></b><br/> Software/app development firm.",
					"<b><i>The Halver Building</i></b><br/> ".rand(7, 65)." occupants. Abandoned four story office complex under the control of the Wretched Twenty street gang. This place is drug den full of thugs, winos, street walkers, and deranged psychotics.",
					"<b><i>The Roquemore Building</i></b><br/> Abandoned office building frequented by squatters.",
					"<b><i>Tsubasa Orbital</i></b><br/> Regional offices/recruiting for orbital/shuttle service company.",
					"<b><i>Westlyn-Myers Protections</i></b><br/> Corporate security staffing firm."
				);
				break;
			case('Pop-up Market'):
				$preset = array(
					"<b><i>Edinburgh Square</i></b><br/> ".rand(43, 130)." occupants. Open market square mostly frequented by Jamaican nationals. A lot of different things can be bought and traded here included moon rock samples 45% of being fakes and bio-engineered ganja strains.",
					"<b><i>Jade Fortune Asian Imports</i></b><br/> Asian Grocery & Imports Market.",
					"<b><i>Shipley's Pier</i></b><br/> Fish & Seafood Market.",
					"<b><i>Tanaka Plaza</i></b><br/> ".rand(153, 240)." occupants. Well lit market square full of small vendor booths. The smell of greasy/spicy synth meat kabobs is heavy in the air.",
					"<b><i>Wawuda Market</i></b><br/> ".rand(4, 33)." occupants. Semi-open African food/produce market. Noisy but mostly safe."
					);
				break;
			case('Public Transport Hub'):
				$preset = array(
					"<b><i>Canton Station</i></b><br/> ".rand(3, 32)." occupants. Small and often lonely bus station stop. Not much here beyond vending machines, malfunctioning monitor feeds, and a few crazy winos that take constant shelter in the lobby. Its dark here- even seemingly during the day. Good place to get robbed."
				);
				break;
			case('Restaurant'):
				$preset = array(
					"<b><i>Akai Sakana</i></b><br/> Sushi bar frequented by middle management corporate types.",
					"<b><i>Fat Antonio's</i></b><br/> Italian Restaurant.",
					"<b><i>High Tide Surf & More</i></b><br/> Steak & Seafood Restaurant.",
					"<b><i>Mama's Table</i></b><br/> Casual Sit Down Restaurant.",
					"<b><i>Nectaria's</i></b><br/> ".rand(6, 35)." occupants. Nicer bistro run by Nectaria, a semi-retired porn star and high paid call girl. A few grafted up muscle boys keep this place quiet and respectable.",
					"<b><i>Red Bamboo Buffet</i></b><br/> Chinese Buffet.",
					"<b><i>Regio's</i></b><br/> ".rand(6, 35)." occupants. Small Italian restaurant that does quite a bit of take out. Best known for its pizza, garlic knots, and ziti with marinara. Falsely accused of mob ties.",
					"<b><i>Riccardi Castro's</i></b><br/> Pricey multi-ethnic eatery favored by corporate executives.",
					"<b><i>Tavola Del Vino</i></b><br/> Mid scale eatery/bar that's favored by local business owners.",
					"<b><i>Thai Dragon</i></b><br/> Thai Cuisine/Asian Buffet Restaurant.",
					"<b><i>The Flaming Skillet</i></b><br/> Run Down Looking Restaurant.",
					"<b><i>The Jade Coin</i></b><br/> Sushi Bar/Asian Buffet.",
					"<b><i>The Singing Elephant</i></b><br/> Indian Cuisine Restaurant.",
					"<b><i>The Waffle Moon</i></b><br/> 24 Hour Eatery.",
					"<b><i>Wesley's Fish & Chips</i></b><br/> British Themed Corner Restaurant.",
					"<b><i>White Panda</i></b><br/> Buffet Chinese Buffet."
				);
				break;
			case('Ripperdoc'):
				$preset = array(
					"<b><i>Union Crest Furniture</i></b><br/> Abandoned factory site used by black market doctors.",
					"<b><i>Kraviz Medical Solutions</i></b><br/> Surprisingly well groomed and neon-ised clinic."
				);
				/*pretty_var("I'm here");
				$temp = makeNPC('ripperdoc');
				$temp2 = explode(' - ', $temp);
				$aux['Ripperdoc'] = array();
				$aux['Ripperdoc']['Title'] = 'Ripperdoc  - '.$temp2[0];
				$aux['Ripperdoc']['Text'] = $temp2[1];

				$out['Description'] = $preset[array_rand($preset)];*/
				break;
			case('Storage Units'):
				$preset = array(
					"<b><i>Mauzy Storage</i></b><br/> Abandoned storage locker service inhabited by junkies."
				);
				break;
			case('Taxi Firm'):
				$preset = array(
					"<b><i>Yellow Finch Taxi</i></b><br/> Sleazy rundown looking cab stand.",
					"<b><i>Shaahee Taiksee</i></b><br/> Cabstand notorious for filthy rundown taxi vehicles."
				);
				break;
			case('Underpass'):
				$preset = array(
					"<b><i>Lansing Alley</i></b><br/> ".rand(7, 65)." occupants. Unsavory back alley where the younger homeless population frequently gather to party."
				);
				break;
			case('Vehicle Showroom'):
				$preset = array(
					"<b><i>Knupp's Used Cars</i></b><br/> Shady used car dealership and suspected chop shop.",
					"<b><i>Casper's Automotive Sales</i></b><br/> Used Car Lot."
				);
				break;
			case('Warehouse'):
				$preset = array(
					"<b><i>Bassinger Imports</i></b><br/> ".rand(1, 6)." occupants. Dusty dim warehouse/office run by owner Hans Bassinger. Hans deals in both legitimate and illegal imported goods. He can also safely 70% of the time remove unwanted control chips and other such implants."
				);
				break;
			case('Weapons or Tech Sales'):
				$preset = array(
					"<b><i>Locke & Kane Ltd.</i></b><br/> Small time firearms manufacturer"
				);
				break;
			default:
				$preset = array('');
				break;
		}
		$preset_flag = 1;
		$b_text .= "<br/>".$preset[array_rand($preset)];
	}

	/*if (rand(1,100) > $cfg['BUILD_DETAIL'])*/
	if (rand(1,100) <= 99) {
		$feature = building_feature();
		switch($feature) {
			case('Legacy Infrastructure'):
				$feature = legacy_infrastructure();
				$b_text .= "<br/><b>Old Feature:</b> ".$feature;
				break;
			case('Repurposed As...'):
				if ($preset_flag != 1) {
					$feature = substr($block[array_rand($block)], 0, -1);
					$b_text .= "<br/><b>Is Now A:</b> ".$feature;
				}
				break;
			case('Causes Sickness'):
				$b_text .= "<br/>Causes Sickness.";
				$out['Health Hazard'] = health_hazard();
				break;
			/*case('Police Presence'):
				$out['Police Presence'] = law_and_order();
				break;
			case('Unusual Smell'):
				$out['Unusual Smell'] = smells();
				break;
			case('Buggy Local Tech'):
				$out['Buggy Local Tech'] = broken_tech();
				break;
			case('AR Heavy'):
				$out['AR Flood'] = aug_reality();
				break;
			case('Obscured By Ad Screens'):
				$out['Ad Screens'] = big_screens();
				break;
			case('Obvious Gang Turf');
				$out['Gang Turf'] = gang('aux');
				break;
			case('Obvious Corporate Sponsor'):
				$out['Feature'] .= " (".blipverts(1).")";
				break;*/
		}
	}

	return Array('Title' => $b_title, 'Text' => $b_text);
}

function building_feature() {
	$feature = array(
		'Extreme Security Protocols',			'Decrepit And Rundown',			'Graffitipocalypse/Street Art Heavy',	'Obvious Gang Turf',
		'Back Room Brothel',					'Newly Renovated',				'Unusually Busy',						'Empty/Quiet',
		'Inadequate Security',					'High Tech Equipment',			'Abandoned Edifice',					'Repurposed As...',
		'Front For Corporate Activity',			'Front For Criminal Activity',	'Hidden Squatters',						'Obscured By Ad Screens',
		'&quot;Grown&quot; By Nanites',			'Incomplete',					'Self Sufficient',						'Crumbling Cheapcrete',
		'War Zone',								'Fire Damage',					'Not A Building, But Mobile',			'Elaborate Balconies',
		'Years Of Clumsy Modification',			'For Sale/To-let',				'Bright Emoji Glyphs And Graphics',		'Reinforced For Repair Work',
		'Extremely Leaky',						'Gothic Style',					'Chic And Minimalist',					'Brutalist',
		'Encased In Plastic Siding',			'Labyrinthine',					'Skywalks To Other Buildings',			'Industrial Style',
		'Anti-Drone System',					'Nano Immune System',			'People Queuing To Enter',				'Well Guarded',
		'AI Guardian',							'AR Heavy',						'Selective Access',						'Buggy Local Tech',
		'Taken Over By Junkies',				'Foreign Ghetto',				'Sweatshop Conditions',					'Utilised Solely For Storage',
		'Veiled Behind Polymer Sheeting',		'All Windows Damaged',			'External Utilities',					'Extensive Solar Grid And Fog Catchers',
		'Bad Epoxy Repairs',					'Unpleasant Micro-Climate',		'Infested With Rogue Remotes',			'Self Aware',
		'Cellular Black hole',					'Mainly Populated By Hoarders',	'Accumulated Trash heaps',				'Unusual Smell',
		'Very Few Working lights',				'A Riot Of Satellite Dishes',	'Very Noisy Utilities',					'Catastrophically Polluted',
		'Unfinished Extension Or Empty Levels',	'Permadamp',					'Legacy Infrastructure',				'Bad Wiring; High EMF; Black Outs',
		'Police Presence',						'Enforced No-Parking Zone',		'Windows Boarded With Opaque Acrylic',	'Main Entrance Out Of Order',
		'Several Trashed Cars Out Front',		'Being Audited By City',		'Wind Tunnel',							'Tinted Glass And Carbon Nano-Tubes',
		'Homeless Magnet',						'Shakes When Trucks Pass',		'Completely Automated',					'Exotic/Foreign Architecture',
		'Obvious Corporate Sponsor',			'Endorsed By Celebrity',		'Promotes Religion',					'Independent Nation State',
		'Family Owned',							'Scheduled For Demolition',		'Rat Or Roach Problem',					'Security Camera Overkill',
		'A Crime Scene',						'Target Of Net Terrorism',		'Malfunctioning Incessant Alarm',		'Slowly Collapsing Or Subsiding',
		'Under Surveillance',					'Enforced No Fly Zone',			'Prone To Flooding',					'Ecologically Sound; No Carbon Footprint',
		'Popular With Particular Subculture',	'Totally Sterile',				'Extensive Drone Docks',				'Causes Sickness'
	);

	/* Testing array for single feature
	$feature = array('AR Heavy');
	$feature = array('Obvious Gang Turf');
	$feature = array('Causes Sickness');
	$feature = array('Police Presence');
	$feature = array('Buggy Local Tech');
	$feature = array('AR Heavy');
	$feature = array('Obscured By Ad Screens');
	$feature = array('Obvious Gang Turf');
	$feature = array('Legacy Infrastructure'); 
	$feature = array('Repurposed As...');
	*/
	$feature = array('Repurposed As...');

	return $feature[array_rand($feature)];
}

function legacy_infrastructure() {
	$leg_infra = array(
		'Decommissioned subway tunnel, accessible from building, and vice versa',
		'Off site telecoms junction box, once served the local neighborhood',
		'Condemned slum quarantined with concrete seal, or biohazard containment zone',
		'Interconnected basements and foundation voids, poorly secured',
		'Sealed sub-basement parking for previous building, with still functioning elevator',
		'Forgotten floor following remodelling work, accessible through crawl space',
		'Disused loading or maintenance bay, with hidden goods elevator',
		'Undocumented Cold War bomb shelter or bunker network',
		'Exposed air venting system, leading to moth-balled sub-basement laboratory',
		'Unused utilities still feed into buildings, accessible from empty sewerage system'
	);

	return $leg_infra[array_rand($leg_infra)];
}


$surrounds = Array(
	'NW' => Array(), 'N' => Array(), 'NE' => Array(),
	 'W' => Array(), 				  'E' => Array(),
	'SW' => Array(), 'S' => Array(), 'SE' => Array()
);
surroundings();

?>