<?php
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

	if(rand(1,100) <= $cfg['PRESET_BUILD']) {
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
					"<b><i>Albescu&#39;s Pawn</i></b><br/> ".rand(3, 8)." occupants. Dirty pawn shop located below some even filthier apartment buildings. Broken English at best spoken here. Good place to sell stolen hardware and guns (30% value) as the stuff gets shipped out of the city quickly.",
					"<b><i>Yesterday&#39;s Junk</i></b><br/> ".rand(3, 8)." occupants. Musty old junk shop with interesting book/comic collection from last century."
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
					"<b><i>Hinata Studio Gallery</i></b><br/>Art studio/gallery rumored to also deal in stolen artwork.",
					"<b><i>Plein Air Gallery</i></b><br/>Plein Air specializes in one of the most decadent things in the time of Red: actual physical art. In a world where most of the population travels light and owns only what they can carry, Plein Air sells physical artifacts of a lost time — a time where people could afford to own things that weren't necessities, and where they lived in homes large and gracious enough that they could decorate it with unnecessary pretty things. Plein Air's proprietor, Muriel Berry, is a trained curator and appraiser... and she may have a job for a discreet team of runners who might be able to help her with art acquisitions."
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
					"<b><i>Yori Banking</i></b><br/>Regional offices for multi-national banking firm.",
					"<b><i>Today's Pay</i></b><br/>Check Advance/Title Loan Agency.",
					"<b><i>Connor Investments</i></b><br/>".rand(3, 8)." occupants. Investment agency owned by a group of folks well connected to the Irish mobsters.",
					"<b><i>Kinzel & Sons</i></b><br/>Investment broker that engages in suspected loan sharking.",
					"<b><i>Kirchoff Financial Services</i></b><br/>Investment agency front for money laundering.",
					"<b><i>Nirbhar Investments</i></b><br/>Investment firm known to back nuclear energy.",
					"<b><i>Ridlon South</i></b><br/>Regional office for mining investment firm.",
					"<b><i>Rollison Investments</i></b><br/>Investment firm rumored to finance illegal arms brokers.",
					"<b><i>Camilla Banking & Loan</i></b><br/>Small corporate owned bank.",
					"<b><i>Fat Wallet Easy Loans</i></b><br/>Title Loan Agency.",
					"<b><i>Larry's Check Advance</i></b><br/>Check Advance Loan Agency.",
					"<b><i>Next Week's Check</i></b><br/>Check Advance Loan Agency.",
					"<b><i>Mootassem's Investments</i></b><br/>More a financial advisor than a shop, Mootassem's Investments is run by a Lebanese exile, Adam Mootassem, and he caters to Muslim clients who wish to invest their money in ways compatible with Islamic religious law. Mootassem's Investments is rather more humble than it used to be before the Mid-East went nuclear, but Adam Mootassem's work in drawing in non-Muslim clients who want to invest ethically in the moral hell-scape of the post-Red world has helped diversify his business and keep it afloat. He works with his sister, Nur, a religious scholar, and her husband Muhammed Sissoko, a historian of French-Malian descent. It is needless to say that Adam Mootassem is the man to talk to if you want to make contact with Mid-Easters in exile."
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
					"<b><i>Trixie's Place</i></b><br/> Strip Club.",
					"<b><i>Bear&#39;s</i></b><br/>Bear&#39;s is named for its huge, hairy owner, but also for the moth-eaten bear head sitting above the bar. Bear is a jolly giant of a man with forearms the size of hams, whose deep rolling laugh can be heard frequently over the clink of beer mugs and the low hum of conversation. If asked to, Bear will relate the story of how his great-grandfather shot that bear whose head is mounted above the bar, with many, many embellishments.<br/> Bear&#39;s is famous for its microbrew beers, and has a limited menu of SCOP burgers and fries, chili con kibble, and tofu hot wings. To Bear, a proper beer ought to be thick and rich, like a liquid loaf of bread, and he despises the practice of covering up inadequate flavor with excessive hops. Bear is an ale man, and he will die on that hill. Bear runs the place with several apprentice brewers — he seems disinterested in sex or romance, and he intends to continue his legacy by adopting an heir.<br/> Signature drink: Bear&#39;s Berry Beer, a strong ale with pureed blackberries poured into the wort for secondary fermentation, giving it a whopping ABV of 9%. €12 per mug. Best drunk while seated.",
					"<b><i>Buffalo&#39;s</i></b><br/>Buffalo&#39;s is cursed. No two words about it. Track down a hospitality professional after shift and ask them, and they will tell you about the Bad Restaurant Curse. The Bad Restaurant Curse works like this: A restaurant will open in a space, and it will be a bad one. All future restaurants using that space will also be bad ones. This apparently applies also to bars.<br/> The first bar opened in Buffalo&#39;s space was Foxy&#39;s, a topless sports bar and wing joint, which was acceptable enough except that the management got busted for using “illegal” meat in the boneless wings. A commonplace, in Night City. Foxy&#39;s was replaced by Baby Grand, a piano bar and lounge, but their management got busted for money laundering. Baby Grand was replaced by Frezh, a juice bar that got shut down after it gave most of its customers food poisoning one night, and so on so forth, for the past sixty years.<br/> The current management of Buffalo&#39;s has lasted three months and there&#39;s a healthy betting pool projecting its closure in timespans ranging from the next week to the next month. Signature drink: The Buffalo Nose. Bourbon, pickle juice, lemon juice, Tabasco sauce. €16.",
					"<b><i>Chopper&#39;s</i></b><br/>Chopper&#39;s is not a biker bar, despite the name. No, the name alludes to the fact that this bar used to be a local butcher&#39;s shop, up until there just wasn&#39;t any more meat to sell. The proprietor of Chopper&#39;s, a slightly pouchy-looking man named Norman, has put the old chill-cases to good use by keeping booze cold in them. Customers sit on high stools up against the chill-cases, and Norman and his staff pour out the shots and slide them over. Customers also come to Chopper&#39;s because Norman&#39;s nephew 80/20 runs a Fixer business out of the now-defunct walk-in freezer in the back. 80/20 got his nickname by what he&#39;s willing to do to people who try to fuck him over, because unlike the walk-in, the meatgrinder still works... Enterprising Techs or Medtechs also come to Chopper&#39;s for pre-owned cyberware. You just gotta clean it and fix it back up.<br/> Signature drink: What kind of fancy place do you think we&#39;re running? We got beer. We got rotgut. What do you want? €10 per glass of beer, €10 per shot of rotgut.",
					"<b><i>Fiddler&#39;s Green</i></b><br/>Fiddler&#39;s Green is a popular Irish pub run by a veteran of the SouthAm wars, Kate Mulvaney, who can be seen mopping the bar with her medical-grade cyberarm. She, her wife Audrey, and their extended family staff the place, which is also open from 11:30AM on for lunch hours, as Fiddler&#39;s Green also serves classic American-Irish food such as corned SCOP on cabbage. It&#39;s a lively but not overwhelming place full of military and PMC veterans looking to unwind.<br/>A former Panzergirl, Kate named Fiddler&#39;s Green for the place cavalrymen supposedly go to after they die, while mere infantrymen have to go straight to their infernal rewards. It&#39;s a good place for any Edgerunner to pick up the gossip and hear about jobs. Kate operates a poste restante service for various mercs, holding mail for them until they come to pick it up.<br/>Signature drink: The Pint O&#39; Plain. Actual Irish Guinness imported from Ireland, with a softer edge than Canada-brewed Guinness. Kate has contacts. €10 per pint.",
					"<b><i>Greta&#39;s</i></b><br/>Greta&#39;s was originally established as a lesbian bar back in the 1990s, but of recent  nights its clientele has expanded, as it is now more famous for the quality of its amateur pool players, and the amount of betting that can take place over a single game. A pleasantly divey bar, Greta&#39;s still attracts a healthy proportion of sapphics, each evening, especially because the top non-professional pool player in Night City is the butch and dapper Tech Jack Sawyer, and she will only play and drink at Greta&#39;s.<br/> Jack has her pride, and will not lose a game to please bookies. That has led to the armed lesbians among Greta&#39;s clientele forcibly escorting injured Fixers out of the club after they dared make that suggestion to Jack.<br/> Signature drink: The Sunk Pocket, cherry infused vodka, Grand Marnier, and a splash of heavy whipping cream, topped with a Maraschino cherry. €15 per glass.",
					"<b><i>Maria&#39;s</i></b><br/>Maria&#39;s is a lively little beer tent with outdoor seating. The chairs and tables are loosely chained together so nobody can run off with individual pieces of furniture. Not without bringing bolt cutters, anyway. Maria&#39;s is a popular hangout for road Nomads as it&#39;s set up in the vast amount of parking space near several industrial workshops — an auto body shop, a couple chop shops, and a Tech workshop shared by two vehicle specialists.<br/> The original Maria passed away five years ago, and now Maria&#39;s is being run by members of her extended family, among them her niece, Lupita Garza, or Little Wolf. Little Wolf is a trained Medtech, but she comes around and tends bar in between jobs. The Nomad connection means that Maria&#39;s is one of the few non-executive bars where you can get real tequila, as it gets trucked in by various Nomad families on a regular basis.<br/> Signature drink: Real tequila. €20 per shot.",
					"<b><i>Red Oktober</i></b><br/>Red Oktober is a Soviet themed bar and restaurant based on an old novel about a nuclear sub that went rogue. The bar, built in a defunct subway station, is done up to look like the inside of a Soviet bomb shelter, and its staff all wear replicas of Soviet military uniforms and speak with varying Russian accents. (Some good, some awful.) The walls are plastered with Soviet propaganda posters and the jukebox only plays patriotic Russian songs sung by the men of the Red Army Choir.<br/> Tank, the owner-operator of the joint, inherited 4 Green Box storage units full of Soviet propaganda posters and kitsch from his late granduncle Ollie, who had been a political science professor at Night City U. That inheritance was largely useless to Tank, up until he had the idea of opening the Red Oktober as a theme bar and restaurant.<br/> The Red Oktober attracts Red Army posergangers, real Cold War veterans, and Soviet emigres alike, if only because Tank also managed to poach the kitchen staff of a defunct Russian restaurant before they left Night City altogether, and now The Red Oktober serves the best Russian cuisine in the city.<br/>Signature drink: Vodka. €16 per double for the good stuff.",
					"<b><i>Rusty&#39;s Dive Shack</i></b><br/>Need a drink while you prep your salvage dive? Need to rent mostly-safe dive equipment to do a salvage run? Want to trade salvage for booze and eliminate the middleman? Rusty&#39;s Dive Shack is the place to go. Rusty is a sour old coot with the heart of a pawnbroker and the merciless gaze of a seagull, and he caters to those salvagers too poor to own proper kit, and too desperate to not work for him.<br/> There&#39;s all kinds of stuff out there in Night City Harbor. Most of the stuff on ships has already been cleared out by Families of sea Nomads, so it&#39;s the stuff in the drink for the unconnected and ill-equipped. Rusty will rent would-be salvagers equipment for a share of the finds. He&#39;ll also take their salvage if they want to trade it for booze.<br/> Signature drink: Homemade shark liver oil, supposed to keep you warm in the cold depths €12 per cup. Tastes fishy and rancid.",
					"<b><i>Sakura&#39;s</i></b><br/>Sakura&#39;s is an izakaya, an informal bar where customers may partake of beer or sake over a wide selection of Japanese drinking snacks. Marked by distinctive red paper lanterns flanking its door, Sakura&#39;s is a Night City mainstay. The menu has been curtailed in recent times, but fans of edamame and yakitori can still find those old favorites, as long as they&#39;re willing to accept fakemeat on the chicken skewers. Sakura&#39;s was never really a hangout for Arasaka expats, who tended to frequent more upscale establishments. Instead, Sakura&#39;s main clientele were Night City denizens of Japanese-American descent.<br/>The original owner, Sakura Yamamoto, is long dead, and the bar is now run by her grandson Toru Evans.<br/>Signature drink: Warmed sake, €25 per flask.",
					"<b><i>The XX</i></b><br/>The XX (pronounced “The Twenty”) is a raucous punk dive that serves no liquor. That&#39;s because the punk band that owns and runs it, Breakfist, are straight-edge, partaking of no booze or drugs. The XX has a juice bar instead of a booze bar, and their smoothies are particularly good. That&#39;s because Breakfist bassist Ten Ton used to be a pantry bitch at one of Night City&#39;s finest eateries, Angelo&#39;s, and she uses her restaurant contacts to pick up bruised and wilted fruits and vegetables before they get thrown in dumpsters. Her pickup runs save the back-of-house staff a drop-off trip, and she saves on ingredients for the bar&#39;s juices. After all, nobody&#39;s going to care how beat-up a fruit looks if you&#39;re going to stick it in a blender.<br/> The XX&#39;s other draw is live punk music, every night. While the various members of Breakfist aren&#39;t always available every night, they allow other acts to perform at the club with one caveat: Nazi Punks Fuck Off.<br/> Signature drink: The Lean Mean Machine. Frozen bananas put in a blender with soymilk, chocolate-flavored syrup and peanut-butter flavored kibble to make a mean smoothie. €16 per cup.",
					"<b><i>Yewtree</i></b><br/>Yewtree is a slightly overpriced neo-hipster bar near the new Night City U campus, and is therefore crammed with students most nights. The bouncers seem constitutionally incapable of recognizing a fake ID, and yet Yewtree has never been raided by NCPD. That&#39;s because Yewtree was set up with the covert cooperation of NCPD. College kids will drink. They&#39;re going to do it no matter how many enraged calls their parents will make. So why not make sure they can do so with a minimum of trouble? So Yewtree welcomes its fake ID wielding hordes, and waters the drinks down just enough. Bartender Stuart Hedley keeps an eye out for anyone trying to get someone drunker than they want to be, and he listens to the gossip, and if anything truly alarming reaches his ear, then he passes it on to the Lawmen. Signature drink: Slightly overpriced, watered-down beer, €12 per mug."
				);
				break;
			case('Body Augmentation Clinic/Beauty Salon'):
				$preset = array(
					"<b><i>Cassandra's Nails &amp; More</i></b><br/>Nail & Pedicure Salon.",
					"<b><i>Chauncy's</i></b><br/>Barber Shop.",
					"<b><i>Coco's Look</i></b><br/>Hair Salon.",
					"<b><i>Comb &amp; Cuts</i></b><br/>Barber Shop.",
					"<b><i>Fab Mane Hair Clinic</i></b><br/>".rand(3, 8)." occupants. Beauty clinic specializing in natural and lab grown hair implants.",
					"<b><i>Fei Long Tattoos</i></b><br/>".rand(5, 10)." occupants. Tattoo shop that also provides unlicensed cosmetic augmentations.",
					"<b><i>Herodotus Genetic Options</i></b><br/>".rand(3, 8)." occupants. Genetics manipulation clinic that specializes in halting/setting back the effects of aging. Their services are costly but generally (85%) effective.",
					"<b><i>Mindi's Tanning</i></b><br/>Tanning Salon.",
					"<b><i>The Gentleman's Cut</i></b><br/>Barber Shop.",
					"<b><i>Vicky's Salon</i></b><br/>Hair, Nail, and Pedicure Salon.",
					"<b><i>Wanda's Salon</i></b><br/>Beauty Salon.",
					"<b><i>White Crane Nails & Tanning</i></b><br/>Nail/Tanning Salon.",
					"<b><i>Cara's Spa And Bodysculpt</i></b><br/>Anyone can be beautiful in these days of cheap bodysculpting. But to be striking, to be unusual, and yet attractive, that is the province of Cara's. Trained aestheticians will scan a client's head and body, accounting for their bone structure and muscle distribution, before custom-designing a bodysculpt that is guaranteed to turn heads. These are not the bland Hollywood average bodysculpts with generic presentations of beauty we're talking about. Clients come out with features like subtly crooked noses to imply a base savagery, or asymmetrical jawlines to highlight their narrow faces, and being able to afford bespoke irregularity speaks extremely well for their wallets."
				);
				break;
			case('Brothel'):
				$preset = array(
					"<b><i>Blue Evening Escort Agency</i></b><br/>Escort Service.",
					"<b><i>Caged Heat</i></b><br/>Gentleman's club owned by a notorious drug dealer",
					"<b><i>Casablanca Blue</i></b><br/>".rand(12, 30)." occupants. Private gentlemen's club where higher society criminals settle issues peacefully.",
					"<b><i>Formal Presentations</i></b><br/>Escort Service.",
					"<b><i>Healing Stones Therapy Clinic</i></b><br/>Massage Parlor.",
					"<b><i>Inner Joy Massage</i></b><br/>".rand(5, 10)." occupants. Seedy massage parlor known to provide a 'happy ending' experience. Fairly safe from being busted as a few of the local finest get free services here once a week.",
					"<b><i>Orchid Pink Salon</i></b><br/>".rand(3, 8)." occupants. Hair, nail, and skin salon in the front with erotic filming and prostitution going on in the back. The Orchid Pink is owned by Mr. Nakano, a local crime lord. Mr. Nakano has informers and associates scattered amongst the employees of several local businesses as well. He lives in a well stocked flat above the Orchid Pink Salon.",
					"<b><i>Oriental Healing</i></b><br/>Massage Parlor.",
					"<b><i>Patty's Girls</i></b><br/>Escort Service.",
					"<b><i>The Birdcage</i></b><br/>The Birdcage is what some would have called a gentleman's club a century ago. Staffed with attractive people all over the spectrum of genders, The Birdcage specializes in comfortable chairs around low stages, acrobatic, if lascivious dances, and classy, if overpriced drinks. Private rooms are available for corporate groups who wish to enjoy some very pretty company while discussing business matters. As lewd as things may get at the Birdcage, outright sex is forbidden on the premises, and cybered-up assistant managers will be sure to prevent customers from getting overly handsy. Meeting an entertainer after their shift for a spot of supper, however, well, that's on their own time, and their own business. The house takes a cut, of course, for arranging the meeting in the first place."
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
					"<b><i>Atlantis Records</i></b><br/>Used Record Shop run by retired semi-famous Rocker.",
					"<b><i>Barbarella's Books and More</i></b><br/>Used Book, Media, Music, etc. Store. Does a little trade in under-the-table braindances.",
					"<b><i>Blink's 24 Hour Launderette</i></b><br/>".rand(6, 11)." occupants. Coin launderette that's always open. Used by a variety of folks living in the local tiny one room flats and pod hotels nearby. Semi-regular paid private security patrols.",
					"<b><i>Blue Reef Tropicals</i></b><br/>Shop selling saltwater aquariums & engineered pets.",
					"<b><i>Bon-Bon's</i></b><br/>Bon-Bon's is a classy chocolatier, an atelier of sweet confections that are as much art as treat, and accordingly it receives most of its business in the days leading up to Valentine's Day. They also make a decent eddie selling very upscale chocolate advent calendars, and are commissionable for catering at truly exclusive events. The shop is run by a pair of siblings, Simon and Yvonne Lee. Simon is the shop's manager and accountant, and Yvonne is the certified pastry chef who works wonders with ganache. Both Simon and Yvonne have a benevolent mindset — they started out on the street with very little until Yvonne's street candymaking became viral on a Rockergirl's braindance music video, and they try to hire apprentices from the street.",
					"<b><i>Cheapo's</i></b><br/>".rand(6, 11)." occupants. Discount bargain store mostly filled with crap other places couldn't sell. Used as a front for trafficking illegal merchandise.",
					"<b><i>Eternal Wick</i></b><br/>".rand(1, 6)." occupants. Artsy fartsy little candle, incense, and bath supplies shop that perpetually reeks of essential oils usually sandalwood and/or patchouli. Sabrina Sade, the shop's owner, is a college grad hippie type with color changing optical implants.",
					"<b><i>Forever Friends</i></b><br/>Forever Friends is a boutique pet shop specializing in extremely lifelike synthetic animals. Why get a rare dog that smells... like dog, that needs to eat smelly foods, and then needs to be walked? Why not license one of their Simlife (tm) dogs that barks and jumps and licks your face exactly like a real dog, without any of the downsides? Forever Friends doesn't so much sell pets as much as rent them out for use, though, as the pets will only remain adorable and active on payment of a monthly subscription. Still, lonely corporate children love Simlife (tm) pets. You wouldn't want to make young Emi cry by discontinuing payments on her beloved Wuffles, would you?",
					"<b><i>Generous Hands Thrift Shop</i></b><br/>Charity Run Thrift Store.",
					"<b><i>Glass Gardens</i></b><br/>Glass Gardens is a custom biotope boutique. They specialize in selling minimum-care fishtanks and vivariums designed to hold synthetic animals and engineered plants that can sit prettily on a desk or a coffee table and require little to no maintenance at all. Of course, the plants and creatures still need to be nourished via battery/nutrient packs that pop in and out with filter cartridges, and that's where Glass Gardens makes their real income. If tiny synthetic fish and lizards don't mesh with the aesthetic of your decor then perhaps an engineered, truly miniature bonsai might?",
					"<b><i>Gravel Pit</i></b><br/>Skateboard Shop.",
					"<b><i>Harar</i></b><br/>Harar is run by an Ethiopian expatriate named Fatima Berele, and this shop sells only one thing. Hand-roasted coffee beans. Coffee beans are a rare luxury in the Time of the Red, and Fatima's carefully curated blends, imported from her homeland, are a status good. Any exec wishing to curry their boss' favor should consider sinking at least €500 into a gift basket at Harar.",
					"<b><i>Hayate Pawn</i></b><br/>Shady looking pawn shop that deals in stolen firearms.",
					"<b><i>Ivan's Army Surplus</i></b><br/>".rand(2, 7)." occupants. Military surplus shop used as a front by Ivan Volkov, a local weapons trafficker.",
					"<b><i>Jasper & Jasmine's</i></b><br/>Coffee & Tea Shop.",
					"<b><i>Katsu Knives & Swords</i></b><br/>Seedy store selling martial arts weapons & trinkets.",
					"<b><i>Little Princes</i></b><br/>Want to experience all the joys of parenting without the trouble of changing nappies? The staff here at Little Princes are here to help. The professional nannies at Little Princes are all specialists in caring for children from high-profile families who may be targets for kidnap or unlicensed corporate extraction. Nannies have to take classes in childcare, nutrition, childhood pedagogy, child psychology, first aid, defensive driving, and bodyguarding to pass its stringent standards, and are all discreetly armed and armored to ensure that no harm will come to their precious charges.",
					"<b><i>Manny's Printing</i></b><br/>Cluttered, Struggling Print Shop.",
					"<b><i>Maverick Discount</i></b><br/>New but aggressive dollar store chain.",
					"<b><i>Maximum Audio</i></b><br/>Automotive Stereo Store.",
					"<b><i>McMunn's 24 Laundromat</i></b><br/>Laundromat known for being the site of 9 murders.",
					"<b><i>Memorials</i></b><br/>Memorials is a ... well, they're not an undertaker, per se. It's just that cremation is currently the most common method of body disposal due to a lack of grave space. Specialist columbariums cater to all walks of life, to have nice, pleasant places where you can inter an urn of ashes and leave some synth flowers every year or something. It's nice to have a gravesite to visit, even if the niche is at most 1'x1'. Memorials is a shop that specializes in tasteful memorials for a columbarium or a home display of an urn, ranging from the traditional funerary tablets of East Asia, to diamonds made from compressed samples of human ash, set in mourning jewelry.",
					"<b><i>Merkley Brothers</i></b><br/>Home appliance and furniture store.",
					"<b><i>Patna Teas And Spices</i></b><br/>".rand(4, 9)." occupants. Small tea and culinary spice shop. The owner, Arjun Datta, makes his real living brokering information. He can also scan you for unknown or troublesome implants.",
					"<b><i>Pen And Quill</i></b><br/>Pen and Quill is a shop that specializes in selling paper and services associated with paper; it is at once a custom bookbinders', a high end namecard printer, and an art supply shop. They also sell hand-made pens, inks, and other writing implements. A hand-engraved pen from Pen and Quill is a fashionable corporate promotion gift, as are journals embossed with corporate logos. While Pen and Quill is distinctly old-fashioned, they have not hesitated to adapt to new technology, and they do sell e-pens and e-ink journals as well.",
					"<b><i>Phosphor</i></b><br/>Phosphor is not anything as base and vulgar as a furniture shop. Phosphor is a curator of comfort. Clients with rarefied tastes may consult at Phosphor for suitably rarefied interior decor, and the shop specializes in high-tech furnishings and lights with artisanal casings and exterior. For example, during last year's Neo-Nordic Revival decor trends, Phosphor was selling curly birch armchairs with reindeer fur seats and backs — that also hid heat and massage pads, accessible through a customer's Agent. Prices: if you have to ask... then you can't afford it.",
					"<b><i>Puffy's Purple Palace</i></b><br/>Vape Store/Head Shop.",
					"<b><i>Quick Release Bond Agency</i></b><br/>Bail Bond Agency.",
					"<b><i>Roberts Mendocino</i></b><br/>A vastly overpriced housewares store. So overpriced. So unitasker. Roberts Mendocino specializes in selling empty-hearted corporate execs the next culinary gadget that will make their lives complete, ranging from €65 slice-and-bake cookies, to €39 'personalized peppermint bark', and €4,495 espresso machines that only work with real, ground-up coffee beans.",
					"<b><i>Ruff's Salon</i></b><br/>Dog Grooming Salon.",
					"<b><i>Salander's</i></b><br/>Salander's is a custom gun shop with a waiting list six months long. And when Salander's says custom, they mean custom, with resident gunsmiths machining your gun from scratch. Only the most exquisite pieces are made here, and Salander's guns have ended up in the secret desk drawers of CEOs and the armories of dictators alike. Currently it's quite fashionable for corporate families to present a child with their first firearm on their 15th birthday, as they start dating... just to reinforce the lesson that no means NO even in the time of the Red, and personalized, inlaid guns from Salander's are the most fashionable of all.",
					"<b><i>Shuriken Joe's</i></b><br/>".rand(3, 18)." occupants. Tacky, over the top martial arts weapon and novelty shop. Shuriken Joe's is mostly crowded between 6pm to 9pm and also does a bit of business in selling hookahs.",
					"<b><i>Side Alley Vapor</i></b><br/>Vape Store.",
					"<b><i>Silk Clouds</i></b><br/>Vape Store/Head Shop.",
					"<b><i>Tai Dian</i></b><br/>Home and business electrician sales and service company.",
					"<b><i>The Rug Bug</i></b><br/>Children's Clothing Store.",
					"<b><i>Third Eye Divinity</i></b><br/>".rand(1, 6)." occupants. Palm reader/astrologer named Farah. Very shady.",
					"<b><i>Torrell and Chiang</i></b><br/>Torrell and Chiang is a tailor's shop geared towards the very finest end of bespoke tailoring. A 3-piece suit from them starts at €5k, but is also expected to last 10 to 12 years barring any unfortunate bullet holes or stains. For that princely sum you get a suit coat, a waistcoat, and two pairs of trousers to alternate. For shirts, ties, socks, cufflinks, you'll have to find a reputable haberdasher somewhere else. Their house specialty is discreet armor and stain-proof coatings to make sure the upwardly mobile exec doesn't ruin their clothing in the occasional hostile takeover attempt.",
					"<b><i>Vantage Bedding</i></b><br/>Mattress And Bed Store."
				);
				break;
			case('Department Store'):
				$preset = array(
					"<b><i>Draper Mall</i></b><br/> ".rand(15, 80)." occupants. Abandoned indoor shopping mall that's the unofficial home of squatters and drug addicts. Lower gangs wield temporary control of this location from time to time."
				);
				break;
			case('Fashion Boutique'):
				$preset = array(
					"<b><i>50Kal</i></b><br/>50Kal is a fashion label aimed squarely at people who want to be badass Edgerunners. Note: Wanting to be a badass Edgerunner is not the same as being a badass Edgerunner.  50Kal's offerings consist largely of matte black or urban camo garments with too many pockets, highlighted with chrome or fluorescent piping along seam lines, and an exclusive line of light and heavy armorjack designed to look 'tacticool', accessorized with designer shooting glasses, balaclavas, and flashbangs. Most actual Edgerunners don't buy 50Kal. Their quality is average at best, and the prices are grossly inflated. But they're popular with people who really want to look badass. Or badasses who want people to think that they're people who only want to look badass.",
					"<b><i>Aisha's</i></b><br/>There are surprisingly, a lot of people in Night City who dress modestly because of religious stricture or personal belief, and Aisha's is one of the boutiques that caters to adherents of modest dress. Attractive loose tunics, long skirts, long-sleeved blouses and colorful headscarves are all available at Aisha's, as are wigs, snoods, and kerchiefs. Aisha's customers include Muslims and orthodox Jews, but also women with alopecia, neo-Mennonites, and various neo-Hippies. The proprietress of Aisha's is Kiruna Shabazz, a woman of Black and Pakistani descent, and a daughter of the original Aisha. Aisha wanted her children to be involved in the family business, but her hard work and thrift put them all through college and most of them moved on to more lucrative fields. Kiruna, the baby of the family, did her degree in Fashion and Textiles at NCU and took over the shop after Aisha decided to retire. Aisha is restless in retirement, however, and shows up every once in a while just to make sure everything is going as it should.",
					"<b><i>Aloha Oe</i></b><br/>Aloha Oe is the brainchild of transplanted Hawaiian Leilani Morgan, and the brand focuses largely on aspirational casual athleisure looks, for people who want to look good at Pacifica Playground or on Casual Fridays at work. Diaphanous pareos and aloha shirts in brightly printed synthsilk complement a range of surf and swim separates. This season's offerings are scandalous sling bikinis and mankinis built around memory wire to ensure that wardrobe malfunctions and nip slips are a thing of the past. Truth is, Leilani Morgan doesn't exist. She's another PR invention meant to sell fashion. Aloha Oe's design staff aren't Polynesian, and most of them haven't even been out of the Northam continent before. But it sells, right?",
					"<b><i>Amicable Joy</i></b><br/> Chain store selling trinkets and costume jewelry.",
					"<b><i>Anther</i></b><br/>Anther is an androgynous, unisex fashion brand with only three sizes, Small, Medium, And Large. The clothes are all loose and deconstructed, with waistbands and trouser cuffs secured with drawstrings, to ensure a fit that will encompass most bodies ranging from XXS to 4X, in a sturdy range of synthetic and natural fabrics imported on Nomad convoys into Night City. As Anther's clothing is intended for people of all genders, everything has pockets in it, even the frocks and skirts. Anther tops are very popular worn over closer-fitting clothing for other brands for their multitude of pockets and loose, comfortable fit. They are especially popular among more fashion-conscious Edgerunners who have weapons and gear to conceal. Detractors complain that Anther's garments look like pillowcases and gunny sacks, but at least some of that mean gossip is driven by the fact that Anther gets cut-rate handwovens from Reclaimer settlements, due to extensive Nomad contacts, that other designers can't.",
					"<b><i>Ballard's</i></b><br/> Mid-price women's clothing and accessories.",
					"<b><i>Barbara's</i></b><br/> ".rand(2, 7)." occupants. Cheap and flashy fashion accessory store owned by a former nu disco starlet.",
					"<b><i>Barely There</i></b><br/>Barely There is a fashion label that caters to nudists, naturists, and other people who object to heavy clothing. While it seems like an oxymoron, Barely There's specialties include attractive pocket harnesses, see-through coats with built-in heating mesh, and unobtrusive sole protection held to the foot only with toe and heel straps. Barely There's pocket harnesses are also popular bag and purse replacements for the clothed populace of Night City, especially women and non-binary people who find the lack of pockets in their clothing frustrating.",
					"<b><i>Blue Panda</i></b><br/> Upscale children's clothing, accessory, and toy store.",
					"<b><i>Bodyblasters</i></b><br/>Bodyblasters is the ultimate in convenience clothing: Spray-on clothes. You buy a can of Bodyblasters out of a Vendit, stand still, and spray it on. Bodyblasters is also made of the same synthetic fibers and solvents that cheap Vendit clothing is made from, and should probably be illegal in some places from the amounts of carcinogens and teratogens included in the solvent mix.  Bodyblasters comes in a range of color and textures, from Flannel-Soft (sort of a flocked, velvety fiber feel), Plush (high-plush fake fur, for all your fursuit needs), and Slick And Shiny (for that latex pants look). Note that Bodyblasters does not hide the bumps and contours of the human body, a person who uses Bodyblasters to make a pair of underwear will have a  visible cameltoe/twig and berries outline. This may be a desired outcome for some people who wear spray-on clothes. What Bodyblasters is used for most is not so much making a whole new outfit as much as reinforcing one that has gotten worn out. It's an excellent patch material for folks who can't sew and who don't want to buy a whole new jacket or t-shirt. To remove Bodyblasters from your skin you'll have to go back to the Vendit and buy Bodyblasters Solvent that also comes in a can, spray it on in a shower stall or bath tub, and then use water to wash the dissolving fibers and goo off your skin. In extremis it can be peeled off in strips like a bad sunburn, but that might take some hair with it.",
					"<b><i>Brodeur Finery</i></b><br/> ".rand(4, 14)." occupants. Nicer clothing and fashion boutique. The really nice stuff in the front is legit, the even nicer stuff in the back is stolen.",
					"<b><i>Daisy's Duds</i></b><br/>Daisy's Duds is a popular clothing brand for children, with a selection of plain but well-made skirts, khakis, and shirts all made to fit the dress codes of nicer schools in Night City. Daisy's caters largely to the Beaverville crowd, who actually have the money to fuss over whether their kids look clean-cut enough. Daisy's most popular items are kevlar school clothes and armorjack backpacks, and going to Daisy's to get your first gun holster is a common rite of passage among Beaverville tweens.",
					"<b><i>Dubois Leathers</i></b><br/> ".rand(1, 6)." occupants. Custom leather shop that specializes in risque fetish wear. The owner has a taste for sadism and cheap stimulants.",
					"<b><i>Faerieland</i></b><br/>Faerieland aims at an even more anachronistic market than Frobisher's, as its target customers are fantasy bodysculpt enthusiasts. In these days of ubiquitous and reversible bodysculpts, there are folks running around Night City's streets sculpted into pointy-eared, willowy elves, and green-skinned, tusk-mouthed orcs. Faerieland caters to those people, as well as the random Ren Faire crowd. Note that nothing Faerieland makes is  actually properly in-period. Faerieland sells the look of a lost and mythical medieval age, as opposed to the actual clothes that were worn when those times were current. Faerieland also sells clothes to bohemian-chic types who like to accessorize Faerieland-made bar wench outfits with contemporary accessories. Faerieland had a limited edition deal with Triphammer Foundries to release a medieval armor-themed set of Metal Gear armor that actually functions fairly well. Most of the credit goes to Triphammer, who went as far as to 3d-scan models of 15th Century armor to aid in their design process.",
					"<b><i>Fanny Jill's Fashions</i></b><br/> Women's Clothing Store.",
					"<b><i>Frobisher's</i></b><br/>While some people look to the ever-changing future, yet others look to the past, and Frobisher's is the boutique to go to for the neo-Victorian and gothic-lolita fashionistas of Night City. Frobisher's specializes in reproductions of Victorian clothing using modern materials and techniques, bringing the overhead down, and re-scaling the patterns to better fit contemporary people who didn't grow up wearing corsets. Frobisher's head designer, Martin Morrow, is a former theatrical costume designer who realized he could make a better buck selling Victorian costume repros to the public instead. Moe-Aesthetic posergangers make up 35% of his clientele.",
					"<b><i>Hamilton Hat & Wig</i></b><br/> Hat and Wig Store.",
					"<b><i>Hilla</i></b><br/>Hilla is a neo-Nordic fashion label based out of Helsinki, but with satellite design ateliers worldwide. Hilla's aesthetic is strongly rooted in materiality, climate, and season, and therefore the clothes at each regional Hilla's will differ from what is being offered in Finland. That makes them a very adaptable label for an ever-changing market. Hilla's Night City atelier is headed by Lauri Mäkinen, a Swedish-speaking Finnish expat of 10 years, who volunteered to come to Night City to head Hilla's local atelier because he was dating a local Edgerunner at the time. Rumor has it they're married now, but he is characteristically tight-lipped about anything that isn't his job. He draws inspiration from the feral zones in Night City, reconfiguring gang colors, chrome, and neon light to come up with hard-edged, sculptural garments that look as though they were grown from the city itself. In an amusing display of cultural clout, Hilla Night City has been exporting clothes back to the EU because of a growing exoticization of the city's street culture. (It is up to the GM's discretion who Mäkinen is married to, I have not specified their name, ethnicity, Role, or gender for this purpose.)",
					"<b><i>Jessica's Lace</i></b><br/>Intimate Clothing Store.",
					"<b><i>Juice!</i></b><br/>Juice! is a punk brand that sells cheap clothes out of Vendits — it's what they specialize in, with 3d printed clothing made of fibers spray-welded onto nonstick molds shaped like the  clothing itself, pre-ripped jeans, shredded t-shirts. So what separates Juice! from all the other corp-owned brands that sell cheap clothes out of Vendits? A sense of play, that's what. Juice! recognizes that every yard of fabric draped over a person's body is in effect a mini-billboard. Any 2d artist can submit art to Juice! via their Ziggurat Garden Patch, and any artwork chosen will result in royalties for the artist per item sold. As overheads are so low, and items are so cheap, the royalties amount to two or three cents per item, but considering how many people grab Juice! clothing out of Vendits per day ... well, it's probably not going to pay rent, but a day's royalties might buy you a nice Prepak dinner, or kibble for you and your siblings. Juice! does stomp pretty hard on art theft in submitted art, and repeat offenders have been tracked down and had their drawing hands broken for the offense.",
					"<b><i>Kawaii Kawaii</i></b><br/>Kawaii Kawaii is a fashion brand that is fighting a slow, withering death. Back in the 2020s, Kawaii Kawaii did extremely well catering to Japanophiles of every stripe, with its repro yukatas and school uniforms. Its manufacturing quality was largely shoddy, its fabric cheap and synthetic, but the young, hip, and impressionable didn't care as long as they could dress like the characters in their favorite Arasaka corporate propaganda anime. The Time of the Red changed everything, however. Disruptions to global travel cut off Kawaii Kawaii's cheap labor supply in South Asia, and its cheap fabric supplies in Central Asia. Moreover, the nuking of Arasaka Towers made Japanophilia rather less popular than it had been in the past. Oh, there's always the Moe-Aesthetic posergangers, but even they prefer better-quality reproductions of Japanese school uniforms than Kawaii Kawaii supplies. At this point the only merchandise Kawaii Kawaii is moving are its gijinka pyjamas — adorable animal onesie outfits — for tweens, teens, and adults in arrested development. Don't forget the matching animal paw slippers!",
					"<b><i>Kimiko's</i></b><br/>Kimiko's is currently run by Hanamura Fujiko, the original Kimiko's daughter-in-law. The store specializes in selling upcycled and reclaimed kimono silks from before the Time of the Red. For an additional, exorbitant, fee Kimiko's will actually turn the silk into a kimono. Kimiko's also sells kimono accessories like obis, fans, obiage, zori, and tabi socks. Fujiko has rather more modern ideas than her mother-in-law, and will recommend tailors who will turn that kimono silk into modern garments if the client wishes so. Rumor has it Kimiko herself does not approve.",
					"<b><i>Komarov's Jewelry</i></b><br/> ".rand(6, 11)." occupants. Small urban bling jewelry shop that is the semi-legit business front for Dimitri 'Mosquito' Komarov, a local loan shark known for his sleazy demeanor and dress and backstabbing nature.",
					"<b><i>Kuleenata Jewelers</i></b><br/> Upscale jewelry store dealing in custom made pendants.",
					"<b><i>Lonzo's Hats & Shoes</i></b><br/> Men's Fashion Store.",
					"<b><i>Lux Lines</i></b><br/>Lux Lines is hypermodel and rockergirl Velvet Lux's exclusive women's fashion label, specializing almost entirely in clubwear for the very pretty. Breathable mesh tops, synthetic pants that look like they were sprayed on, and double-soled platform shoes fill out Lux Lines selections. The look is completed with Velvet Lux's trademark Velvet Buzz asymmetrical undercut with luminous, color-changing tech hair streaks. Lux Lines also has a sister line, Lux Exec, with a more mature feel for Lux Lines fans who have gotten a little older. Lux Exec specializes in flashy corporate separates to be worn in conjunction with conservative suits and skirts, such as halterneck tops that appear to be blouses under a jacket, or pencil skirts that unzip after hours to reveal miles of thigh.",
					"<b><i>Mama Jasmine's Fashion Boutique</i></b><br/> Women & Children's Clothing Store.",
					"<b><i>Mimi Ma's</i></b><br/>Mimi Ma is one of Madam Ma's numerous nieces, and her specialty is taking cast-off corporate and luxury clothing and resewing it back into perfectly acceptable street casuals. Mimi has made deals with dump rats, sea Nomads, and cleaners at corporate conapts to have them bring her the first pick of discarded clothing. Among Mimi's offerings are diaphanous blouses and frocks made from worn saris, camisole tops made from the linings of suit jackets, and patchwork skirts made from what used to be an exec's suit. Mimi sells her wares almost exclusively at Night Markets through the auspices of her brother Newton, a Fixer and one of the nephews Madam Ma will refer customers to if they require laundering of a monetary sort.",
					"<b><i>Mister Joe's</i></b><br/>Gentlemen's Fashion Store.",
					"<b><i>Sarah Sakai</i></b><br/>Sarah Sakai does not actually exist as a person. She is played by bodysculpted models designed to look like the ideal personification of the Sarah Sakai look. Sarah Sakai is designed by Soie (pronounced 'soy'), a designer and impresario who likes to highlight the blend of innocence and budding sexuality inherent to young people who are at the cusp of adolescence. To that effect, Sarah Sakai's unisex garments mimic childish lines and designs, with penny loafers, knee-high socks, and pinafores and short shorts among their offerings for men and women alike. Models who represent Sarah Sakai must sign a lengthy contract stipulating that they lead a child-like life, forswearing drugs, alcohol, foul language, unbecoming music, and romantic entanglements entirely at risk of early dismissal. Soie lodges her models in a boarding house run along the lines of an old-fashioned boarding school and has them accompanied by cybered-up middle-aged chaperones so they can't get in any trouble. Soie's models serve for a 1-year duration and renew their contracts thereafter. A model bored out of their skull may pay a Fixer to have them kidnapped out of the job.",
					"<b><i>Tammy's Dress & Shoes</i></b><br/>Women's Clothing Store.",
					"<b><i>The Dapper Plume</i></b><br/> Men's Clothing Store.",
					"<b><i>The Golden Heel</i></b><br/> Tacky shoe and purse shop that deals in cheap knock offs.",
					"<b><i>The Siblings Sinister</i></b><br/>The Siblings Sinister is a neo-Goth and neo-Cybergoth clothing line, with offerings ranging from poet shirts and synthleather pants, to moody slip dresses, PVC pants for club days, and spiked bracelets and collars. The Siblings Sinister is run by a pair of fraternal twins, Vetiver and Laudanum, who dress as each other. Vetiver and Laudanum were originally assigned male and female, respectively, at birth, but they had themselves bodysculpted to more resemble each other in their teenage years. This has led to them sharing the identities of Vetiver and Laudanum. Vetiver codes more as female in dress and presentation, and Laudanum codes more as male. Vetiver is a cybergoth favoring latex, PVC, and cyber-dread wigs, while Laudanum likes waistcoats, knee-high breeches, and frock coats. The Siblings Sinister's more casual clothing is surprisingly popular with Edgerunners, as Vetiver and Laudanum test all their clothes for how easily real and stage blood washes off, before they put it on the market. You can clean a Siblings Sinister frock coat by hosing it down under a standpipe. Siblings Sinister clothing comes in only one color. Black.",
					"<b><i>Tomboy's</i></b><br/>Tomboy's sells menswear to butch lesbians and trans men, specializing in the smaller end of clothing and shoe sizes. It also sells a broad array of binders and packers for people who do not want to surgically transition, or who prefer a more varied gender expression. Tomboy's also has in-house tailors who can alter a men's suit bought elsewhere to better fit their clients.  Tomboy's is also very popular with short cisgender men, who do exist, and are sick and tired of not being able to find pants and shoes that will fit them. As stunted growth is a symptom of malnutrition and various environmental syndromes, there are a lot more short people in Night City than one might assume, even with biosculpting.",
					"<b><i>Uhuru</i></b><br/>African fashion has become increasingly influential with the rise of the Highriders, and with that, demand for Kenyan kente cloth, Malian mud-dyed cloth, and Lesotho blankets has gone way up. Highrider fashion is distinctive, wedding rich colors and textures with cuts practical in microgravity, and Uhuru is something of a copycat brand, replicating garments spotted on Nairobi's catwalks during Fashion Week through a network of piece-work stitchers, computerized looms, and a CAD-CAM pattern-cutting CNC setup. Several Highrider designers have pooled their funds to find out who in Night City is responsible for ripping off their work, and hired a clan of Ashanti troubleshooters to investigate. Uhuru may not be around for that much longer. It is naturally, up to GMs to determine who is behind the ripping off, and if they're going to survive the search for their identity.",
					"<b><i>Underneath</i></b><br/>Underneath is Night City's largest lingerie store, and the best place in the city to be fitted for a bra. Underneath's offerings range from simple undershirts and boxer-briefs to lacy, frothy bralette and boyshort ensembles, and everything in between. Want a translucent chiffon peignoir with a faux-marabou trim? You got it. Want a translucent chiffon peignoir with a faux-marabou trim to fit someone about 6ft3 and 200lbs? You got it. Despite Underneath's freewheeling attitude to selling underwear, they are incredibly no-nonsense about fittings, and insist that all clients buying lingerie be fitted professionally by a shop assistant on their first visit. That involves standing in a changing booth while a professional assistant takes a tape measure to you, and then waiting while they go into the stockroom and bring out a whole parade of options for you to try on.",
					"<b><i>Vixen's Furs</i></b><br/>Vixen's is one of the last furriers in Night City, selling actual clothing made of animal fur. This is because Vixen has licensed a Biotechnica patent that allows them to vatgrow sheets of animal pelage in a proprietary nutrient solution. While expensive, this makes fur garments much easier to make, given that the furriers are no longer restricted to the size of a single pelt. This meatless fur-ranching has made fur coats fashionable again, for those who can afford it. Unfortunately, growing sheets of muscle for meat use is still highly impractical, as the vasculature and support required for meat is still beyond what is required for skin and fur. Moreover, the nutrient solution required to vatgrow sheets of fur uses supplements and nutrients of animal origin that could be used to feed starving people in the streets of Night City. But what is hunger when you can have style, right?",
					"<b><i>Wilma's Dress And Bag</i></b><br/> Women's Clothing & Accessories Store."
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
					"<b><i>Baxter Hall Arts & More</i></b><br/>Art Studio/Consignment Craft Store.",
					"<b><i>Beautiful Memories</i></b><br/>Photography & Portrait Studio.",
					"<b><i>Network X5</i></b><br/>Central office and studios for sci-fi focused cable network.",
					"<b><i>Ponder Graphics</i></b><br/>".rand(1, 6)." occupants. Graphics studio that does some freelance coding and hacking work. Run by Ponder, a local netrunner with social anxiety and bipolar disorder.",
					"<b><i>Rachethead Studios</i></b><br/>Music recording studio and production company.",
					"<b><i>Ruby's Services</i></b><br/>Ruby's Services specializes in talent acquisition and brokerage for said talents. Need a harpsichord player for your 18th century themed costume party? Ruby's can find you one. Need a geisha who can perform a traditional Japanese tea ceremony for a visiting oyabun? Ruby's. Ruby's screens their talent and their clients very strictly, to ensure that talents are not going to use contract work at Ruby's as a prelude to assassination. Clients with rather more outr&eacute; tastes can request some very interesting talent indeed. While Ruby's frowns upon clients permanently harming their talents, some talents are willing to put up with rather extreme treatment for an accordingly extreme fee.",
					"<b><i>Sleepwalker's</i></b><br/>A custom braindance studio, Sleepwalker's specializes in the most exotic and rarefied experiences. After all, if it's fictional, it's not real, and therefore, you can't be sued or arrested for doing anything in a fictional experience. Sleepwalker's does things like creating an anniversary dinner for a bereaved spouse, or a birthday party for a client with a difficult childhood, to the most graphic and debauched fantasies to please the most depraved of tastes. The possibilities are endless with Sleepwalker's proprietary editing suites. Sleepwalker's will also rent you coffin-sized chambers in which to view your braindance sims in, good for people who want to make sure nobody else knows what they like to experience behind their eyes. For an extra exorbitant charge, they will rent you the room without the braindance equipment in it.",
					"<b><i>Splatter Studios</i></b><br/>".rand(4, 9)." occupants. Living quarters and recording studio of the techno horror music group Brain Type. All of the band members are junkies constantly looking to score.",
					"<b><i>Starbound Talent Agency</i></b><br/>Modeling & Talent Agency.",
					"<b><i>Validity Channel</i></b><br/>Central office/studios for conspiracy focused cable network.",
					"<b><i>Victoria Lang Modeling</i></b><br/>Modeling agency involved in human trafficking.",
					"<b><i>Wicked Pose Photography</i></b><br/>Modeling & Exotic Photography Studio."
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
					"<b><i>The Crank</i></b><br/> ".rand(13, 100)." occupants. Loud and rowdy punk themed nightclub. Good place to loose a few teeth.",
					"<b><i>Air</i></b><br/>Air is a sterile white cube with transparent glass bars, and uncomfortable brushed-steel stools, and it sells curated blends of scented, purified air to the afflicted masses of Night City. It&#39;s an unfortunate truth that the air in Night City can be heavily polluted at times, and Air was established to make breathing a commodity.<br/> Ranks of transparent oxygen masks hang above the bars at Air, and customers choose their blend of choice from a touch-screen embedded in the bars themselves. Then they put on the mask, insert their credchip, and the flow starts.<br/> Signature drink: Alpine Mountains Blend, 20% oxygen in nitrogen with assorted herbal scents. €5 per minute.",
					"<b><i>Anjelika&#39;s</i></b><br/>Anjelika&#39;s is a host and hostess bar, and the destination for anyone who might have a cyberware kink. The hosts and hostesses are all bodysculpted with EMP lines and Chemskin to look like attractive androids and gynoids, and some of them have taken on employment at Anjelika&#39;s so they can save for further cybernetic modifications to their bodies.<br/> The most popular host at Anjelika&#39;s is Gavin, a beautiful young man with bronze-tinted skin, custom cybereyes, and cybernetic arms and legs. He lost his organic limbs in a childhood accident and has spent his whole life with more chrome than some Solos. His cyberlimbs are custom designs from Rocklin, and he changes the casings to suit his wardrobe. Gavin&#39;s popular not just because he&#39;s the most cybered-up host in Anjelika&#39;s, but because he has a warm, sympathetic manner with his clients, who just want to be pampered emotionally for an hour. He also does modelling work in the daytime, and has been solidly booked three months ahead for the past year.<br/> Signature drink: The Coolant Flush. Midori, peppermint schnapps, seltzer. €16 per highball.",
					"<b><i>Bella Mia</i></b><br/>Bella Mia is an exclusive club to see and be seen at, established by rockergirl and ultramodel Velvet Lux, who uses the place for PR and for soft releases of new clothing from her exclusive Lux Lines fashion label. The bouncers at Bella Mia&#39;s are all issued with custom Wardrobe and Style skill chips that allow them to only let the best-dressed people in. In practice this means you&#39;re probably only getting in the door if you were dressed by someone who has a Wardrobe and Style Base of 14 or better. Detractors unfairly call Bella Mia&#39;s “Bulimia&#39;s”, which is slightly unfair, since part of Lux&#39;s brand is an emphasis on healthy eating.<br/>Signature drink: The Velvet Lush, Prosecco with passionfruit pulp. €20 per glass. Yes, Velvet&#39;s just bad at naming things, but she tries her best, really.",
					"<b><i>Chatelaine&#39;s</i></b><br/>Chatelaine&#39;s is a smoky old cabaret decorated and designed to look like it came out of the 1930s. The mirrors are scratched by hand and hazed with airbrushed pigment to look smoky and stained, the synthetic floors are treated to look like scuffed wood, and the staff all dress in period costume. Chatelaine&#39;s is also one of the more popular gay bars in Night City, with a Friday Burlesque Night and a Saturday Drag Fest, to the point where some nights they have more heterosexual tourists than actual queer customers.<br/> This has led to some murmurs that Chatelaine&#39;s has “sold out”, and members of the Night City Queens gang have begun shunning Chatelaine&#39;s Drag Fests. Owner and proprietor Lulu deLuz remains supportive of queer concerns, however, and she has allowed young homeless queer people to sleep in the club&#39;s office space while she arranges for emergency housing for them.<br/> Signature Drink: The Cocktease, peach schnapps, Cointreau, crème de cassis, €18.",
					"<b><i>Kasim&#39;s</i></b><br/>Kasim&#39;s is an unusual nightspot inasmuch as it does not serve alcohol, as its proprietor, Kasymbek, is a devout Muslim of Turkish descent. What Kasim&#39;s has is strong thimble-size cups of Turkish-style street coffee and some of the best scented tobacco on the market, all compounded to be smoked in water-pipes, or nargile. Kasymbek&#39;s thick, bitter street coffee (no actual coffee beans involved) is served in small cups, unfiltered, and flavored with cardamom, and drinkers are supposed to drain the liquid contents and leave the dregs behind.<br/>As a compliment to guests, Kasymbek serves each pot of coffee with a plate of free sweets, sometimes loukum (Turkish delight) or baklava, made by Kasymbek&#39;s mother Elif, who runs the kitchen. Elif will occasionally leave the kitchen to come out and greet favorite customers, and take a puff or two of rose-scented tobacco herself. If she really likes you, she might read your coffee grounds for you and try to tell your future. Kasim&#39;s is closed on Fridays for Friday prayers.<br/>Signature drink: Strong black street coffee, with a small plate of sweets. €10 per cup, to be refilled as long as you keep buying tobacco for your nargile, €8 per foil packet.",
					"<b><i>Redline</i></b><br/>Redline IS the place to watch fights. Not bar fights, no. Redline brings the best in augmented and unaugmented mixed martial arts. The entire bar is built around a window-lined fighting pit. Customers willing to book the private viewing rooms (€200 to €1k depending on the fights) get to sit up against those big armored windows, watching people fight each other, while waiters and waitresses bring them their drinks and their bar snacks.<br/>Less wealthy customers can hang out in the bar area, watching the fights from the caged top of the pit, or on screens mounted on the walls. The cage on top of the fighting pit is a new addition, installed after a cybered-up fighter threw her opponent clean out of the pit and onto some customers. Officially all fights are fought to the knockout, and Redline maintains a Trauma Team membership so fighters who get badly fucked-up can get treated. However, the rumor goes that there are deathmatches every month, on the new moon, for special guests and customers only.<br/>Owner-proprietor Jenny Nails denies all of that, naturally.<br/>Signature drink: The Winner&#39;s Cup. Salty beef bouillon (made with a bouillon cube nowadays), cognac, worcestershire sauce, lemon juice, and a garnish of soy bacon, €20 per glass.",
					"<b><i>Smash/Cut</i></b><br/>A dance club owned by the EDM band URBIS, and frankly, the place would have closed down entirely if it wasn&#39;t for the fact that URBIS are propping it up with their royalties. This isn&#39;t because Smash/Cut is unpopular. To the contrary, it is one of the most popular nightspots in Night City. No, it&#39;s because most clubs and bars make their profits off alcohol sales and Smash/Cut&#39;s main clientele are drugged-up neo-ravers. The interior decor is perfunctory, with a few desultory chairs and tables arranged around an immense dance floor. 360 degree wraparound vidwalls and holoprojectors in the ceiling and dancefloor combine with strobe lights and mirrors to create an atmosphere described as “an armored truck having sex with a neon sign”. You do not go to Smash/Cut to talk, as most conversations are inaudible under the loud dance beat. You go to Smash/Cut to dance, and to have casual sex with people you haven&#39;t spoken to. The staff at Smash/Cut are trained in American Sign Language to communicate quickly in a crisis, and many of them have dazzle compensation in their smart glasses or cybereyes. Noise-cancelling earplugs are standard issue.<br/>Signature drink: None, but the bar always has energy and isotonic drinks available for the thirsty neo-ravers. €8 per 20oz bottle.",
					"<b><i>The Randy Dandy</i></b><br/>The Randy Dandy is built in a passenger ferry out in Flotsam, Night City&#39;s floating district out past the harbor, and can only be accessed by swimming (ugh) or by boat. Occasionally, very rarely, she puts in to harbor herself to pick up important dignitaries when the Randy Dandy is booked for Nomad family meetings. Run by a sea Nomad known only as The Skipper, the Randy Dandy is the place to go to pick up harbor gossip or buy sweet lots of salvage before it makes it to the middlemen on land, who will mark it up as it passes through their hands.<br/> The Skipper is a lean, leathery woman of middle age with iron-gray hair, and a harsh, low voice. She&#39;s missing the two smallest fingers on her right hand — ”an accident with a coil of rope when I was young and stupid,” — but does well enough without prosthetics. Her rule for the Randy Dandy is “Don&#39;t start none, won&#39;t be none,” and disobedient customers will be swiftly tossed overboard by one or two of her burly crew. Business is the general atmosphere at the Randy Dandy, and the Skipper arranges matters so that the eddies keep flowing.<br/> Signature drink: The Blackbeard. Rum, ginger oil, and a squeeze of lime, on the rocks. €15 per shot.",
					"<b><i>Yum Seng</i></b><br/>Yum Seng is run by Alan Lam, a Chinese-American raconteur of Cantonese heritage. Lam&#39;s grandfather fled Hong Kong with his sizable fortune shortly before Hong Kong left British control, and Alan has used his inheritance wisely, building a modest empire in the vice scene of Night City. Yum Seng (Cantonese for “cheers!”) is a host and hostess bar, but it&#39;s also oddly one of the best places to get a seafood meal, because Alan Lam is also something of a gourmand. Customers to Yum Seng are asked to choose their seating by the host at the entrance. Customers who just want to eat are escorted to tables in the communal eating hall. Customers who want more personal attention are escorted to booths, where they will be attended to by pretty, pretty people.<br/> Lam is smart enough that he&#39;s not using Yum Seng as a money laundering front. No, that&#39;s for the other businesses he controls in Night City. Yum Seng is just his personal hangout. He takes great interest in the comfort and satisfaction of his customers, stopping at their tables or booths to ask if all is well, and is very responsive to their concerns. The seafood is the best and freshest in Night City, the drinks are of high quality, and the hosts and hostesses are all beautifully and elegantly bodysculpted and trained in manners and etiquette.<br/> There are also soundproof karaoke boxes, because Lam LOVES karaoke. Any Edgerunners wanting to do business with him will have to participate. He doesn&#39;t expect them to sound good, but he wants them to have the balls to try.<br/> Signature drinks: Anything expensive and showy. Veuve Clicquot, 18-year Scotch, all at least 150% of standard price, except when Alan Lam visits your table, then he comps you the drink after asking if you&#39;ve had a good time."
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
					"<b><i>White Panda</i></b><br/> Buffet Chinese Buffet.",
					"<b><i>Angelo's</i></b><br/>Angelo's is a fine restaurant with a two-star rating on the Michelin guide — they specialize in rare and exotic ingredients presented with the uttermost simplicity so that diners may fully enjoy the decadence of having an entire beeve slaughtered simply for a 12-ounce steak. The restaurant itself feels into a portal into the past, with comfortable velvet and leather chairs, polished teakwood tables, and low, dim lights. There are several private rooms, and the cost for booking a private room varies on the specific degree of privacy required. Angelo's also maintains a sizable cellar full of old and exquisite vintage. Business casual dress code and up, only, no children allowed.",
					"<b><i>Mona's</i></b><br/>Mona's is another upscale restaurant, but it could not be more different from Angelo's in tone or style. Mona's purports to be a 'family restaurant', serving hearty, wholesome food from a lost time, and they deliver that experience wholesale. Waitstaff are trained to be warm and familiar with customers, and the entrees range from meatloaf and macaroni and cheese, to tteokbokki, and ayam soto. All the foods are made fresh, and children are welcome. The restaurant even gives kids crayons and paper placemats to draw with. Mona's is a popular place to celebrate family events with, but some more informal CEOs will prefer to take their staff out to Mona's in an attempt to soften their image."
				);
				break;
			case('Ripperdoc'):
				$preset = array(
					"<b><i>Union Crest Furniture</i></b><br/> Abandoned factory site used by black market doctors.",
					"<b><i>Kraviz Medical Solutions</i></b><br/> Surprisingly well groomed and neon-ised clinic."
				);
				array_push($aux, makeNPC('ripperdoc', 'Ripperdoc'));
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
			case('Temple'):
				$preset = array(
					"<b><i>The Peach Blossom Sangha</i></b><br/>The Peach Blossom Sangha are a group of Westernized, mostly white, Zen Buddhist adherents who live an austere life in a small urban monastery. Most of the Peach Blossom Sangha's permanent membership are fully ordained monastics observing the Vinaya, or religious precepts, but they minister to a small congregation of lay Buddhists. The current leader of the Sangha is the Venerable Bhikkuni Tracy Needham, a retired schoolteacher. The Peach Blossom Sangha has good funding, and they run a street school for the children of the homeless and dispossessed.",
					"<b><i>The Satanist Temple Of Night City</i></b><br/>These aren't your stereotypical kitten-killing backwards-music-playing Satanists. The Satanist Temple of Night City are a group of ... well, they're a group of humanist nontheistic trolls, who use the trappings of Satanism to offend religious conservatives of any stripe. They're also, rather hilariously, some of Night City's strongest defenders of civil rights. Their most recent stunt was erecting a magnificent statue of Baphomet in the middle of a Beaverville housing tract, right next to a monument stela chiseled with the Ten Commandments.",
					"<b><i>The Sikh Gurdwara of Night City</i></b><br/>A gurdwara is a place of worship for adherents of the Sikh religion, and a place to study their religious text, the Guru Granth Sahib. Sikhism is devoted to the equality and divinity inherent to every human being regardless of race, gender, or sexual orientation under the Supreme Truth of God, and it is a religious practice for Sikhs to serve a langar, or a free vegetarian meal open to any who would partake, at their houses of worship. All are welcome provided they cover their heads and remove their footwear. The Sikh religion also believes in the ideal of the Sant-Sipahi, a saint-soldier devoted to the defense of all humanity in the face of oppression. What this means is that the Gurdwara is no place to start any kind of fight.",
					"<b><i>The Night City Unitarian Universalist Fellowship</i></b><br/>A small church made up of dedicated ecumenists. A given UU may have a Christian background in their theology, but they may also be atheist, pagan, or philosophically Buddhist. UUs are generally incredibly nice, inoffensive people, warm and welcoming to all who might wish to seek spiritual answers, but in practice their membership tends to lean towards more financially privileged members of society, and therefore have some minor blind spots. The best UU congregations work actively to counter that blind spot, and the folks at NCUUF do try their best. The Night City Congregation runs a soup kitchen every Saturday, and also tries to maintain a food pantry for those in need.",
					"<b><i>The Neo-Evangelical Church Of Jesus Christ The Redeemer</i></b><br/>The Neo-Evangelicals are a splinter of Protestant Christianity that split off from the Southern Baptist Convention in the social upheavals of the Time of the Red. Fueled largely by the uneasy mixture of prosperity theology heresy and apocalyptic postmillennial dispensationalism, the Neo-Evangelicals believe in a strict code of conduct for men and women that will be rewarded by worldly prosperity and heavenly salvation alike. While garden-variety Evangelicals are largely associated with the Southern States of America, the Neo-Evangelicals are slightly more international in flavor, with services often given in English and Spanish. Neo-Evangelicals believe that they will be condemned to hell if they don't witness to disbelievers, which leads to them cornering people on the streets and in public transport, preaching to captive audiences.",
					"<b><i>Guanyin Miao, or, the Temple of Guan Yin</i></b><br/>Guan Yin is the Chinese pronunciation of Kwannon, or Avalokitesvara Bodhisattva, the bodhisattva of mercy and compassion. Worshippers at Guanyin Miao tend to be of East Asian or Southeast Asian heritage, and are adherents of Pure Land Buddhism, who believe in rebirth in the Pure Lands of the West, a spiritual realm that is refuge to those who call out to Avalokitesvara. Guan Yin has long been worshipped by sailors who request protection from the sea, and Guan Yin Miao is therefore a popular spot for sea Nomads who wish some spiritual comfort.",
					"<b><i>Masjid Hajjah Maryam</i></b><br/>Maryam binti Abdul Rahman was one of the last pilgrims out of Mecca before the '94 Mideast Meltdown. The events of the Meltdown threw her into a religious crisis, and she eventually willed most of her estate towards building a mosque for Night City's Muslims in exile. The Masjid Hajjah Maryam was completed 3 years after her death in 2007, and is still very well-cared for in the present time. Its one minaret is domed in gold, but the call to prayer now goes out to worshippers' Agents so as not to disturb the peace in the neighborhood. Charity, or zakat, is a pillar of the Islamic faith, and free suhoor and iftar meals are given out to the needy during the fasting month of Ramadan.",
					"<b><i>Night City Jingu</i></b><br/>Night City Jingu is a Shinto shrine dedicated to the deities Amaterasu-no-Okami and Okuninushi-no-Okami. In the days before the Red, Night City Daijingu had a resident priest and a small staff of miko, or shrine maidens, to perform rites and attend to the congregants, who were largely expatriate Arasaka executives and workers. Following the fall of the Towers, though, the shrine was left unattended due to its location in the radioactive zone around the ruins of Arasaka HQ, and it remains so today.",
					"<b><i>The Church of Elvis The King</i></b><br/>The Church of Elvis The King is a humble establishment, part museum, part souvenir shop, and part house of worship. These three things might appear to be mutually contradictory, but are not. The Elvistians are a small sect of people who worship Elvis The King, a famous singer who, according to the creed of the religion, did not truly die in 1977, but merely ascended to divine status, and who wanders the world secretly helping his worshippers. Pastors of the Church of Elvis the King are required to impersonate their lord deity, and hymns include “Love Me Tender” and “Don’t Be Cruel”. The Church of Elvis The King does a healthy sideline in weddings, as Elvistian pastors are willing to officiate weddings for believers and nonbelievers alike.",
					"<b><i>The True Satanic Temple Of Night City</i></b><br/>The True Satanic Temple Of Night City was founded by Defilis frontwoman Rita Ripcrotch after her disappointing visit to the Satanic Temple of Night City. Rita, a black-metal musician and dedicated demon-worshipper, was profoundly disappointed in the Satanic Temple’s humanist, civil rights-defending stance. She stated, I quote, “FUCKING POSERS DON’T EVEN DEFILE GOATS WITH VIRGIN SACRIFICES WHAT THE FUCK,” and promptly mobilized her fans into building a church and having it consecrated by a strong-armed Catholic priest only so they could set the building on fire and then have a black mass and orgy potluck on the smoldering ashes to deconsecrate what was left of the building. The six members of Defilis perform black masses every week for their adoring fans and any random demon-worshippers who may seek a house of worship in Night City. Orgies are Tuesday nights, admission is free if you bring a dish or a sacrifice. They also rent out the premises for truly memorable wedding photo shoots.",
					"<b><i>The Pagan Temple of Night City</i></b><br/>The Pagan Temple of Night City is a worship space shared by several Wiccan covens and a group of Norse pagans. The Temple was built around a privately owned grove back in the 2000s, but most of the trees in the grove died in the Time of the Red. The Temple’s small congregation have gone to no small expense to replace the tainted soil in the grove and plant saplings in place of the dead trees, but they have also been forced to build a dome around the grove to protect it from polluted rain. An unexpected consequence of owning some of the last living trees in the mean streets of Night City means that the Wiccan and pagan worshippers have been forced to defend their sacred grove and altar from poachers, who wish to take cuttings from the trees, or heist them whole and entire. While the Temple used to share cuttings of their precious trees with Reclaimers who needed them, the demand has been unsustainable for the health of the trees in question. A group of PCs may meet the worshippers at the Temple after they have put out a want ad for guards to protect their sacred grove.",
					"<b><i>Shrines to Santa Muerte</i></b><br/>Santa Muerte is a female personification of death worshipped as a folk deity by folk Catholics and neo-pagans of Mexican ethnicity. Worship of Santa Muerte started in the 2000s, and refugees and undocumented workers brought her worship to Night City in the corporate boom times, when cheap labor was necessary. There is no one temple or church to Santa Muerte, instead there are shrines everywhere, at roadsides, in bodegas, in bars and private homes. Depicted as a skeleton in flowing robes, Santa Muerte is propitiated with offerings of cigarettes and credchips, candles, candies and fruit, and synthflowers, and she is believed to protect petitioners from assaults and violent death, and guide them to the afterlife. Santa Muerte has no resident priesthood per se, but various worshippers may also be curanderos, or faith healers.",
					"<b><i>Sri Pillaiyar Temple</i></b><br/>Ganesha is an elephant-headed Hindu deity, worshipped as a remover of obstacles. This beautiful temple to Ganesha was built by Tamil-speaking migrants from southern India, and therefore refers to Ganesha with his Tamil name, Pillaiyar, but it is welcome to all who wish to worship. Ganesha’s favorite offerings are small, sweet dough balls called laddus, made of gram flour, fat, and sugar. Temple vendors sell them by the bag (€4 per 4oz plastic bag) to take home, or to offer to the god. Due to Ganesha’s title as the Lord of Letters and Learning, and the resident priesthood’s charity lunches, vegetarian food free to all respectful comers, Sri Pillaiyar Temple is also a popular destination for superstitious Night City U students during Finals week, and offerings of home-made cookies and energy drinks have also joined the synthflower wreaths, sandalwood paste, and plates of laddus at the altar to Ganesha.",
					"<b><i>Altars To The Fallen</i></b><br/>Chinese folk religion practices ancestor worship. The dead of a family must be given proper, respectful burial and funerals, and propitiated during death-anniversary observances with simple offerings of food, drink, and incense, lest they bring bad luck to their negligent descendants. To that end some Chinese people have a small altar in their homes, with wooden tablets dedicated to their deceased family members, that they worship at. But what of those who have died unknown in a foreign land, unmourned and unburied by their kinfolk? During the Time of the Red, some folk worshippers started believing that Night City was spiritually polluted by the many dead who were never propitiated with burials and offerings. Those deceased joined the swollen ranks of the hungry ghosts, who never received family offerings at altars, and have therefore been spiritually starved. These ghosts are allowed to roam the world of the living during the seventh lunar month, or the Hungry Ghost Festival, and therefore Night City’s Chinese population has started putting up small shrines in Combat Zones and by crime scenes, seeking to soothe and comfort the uncared-for among the dead. Passersby leave synthflowers and candles, incense and bags of kibble to nourish and appease the dead.",
					"<b><i>Temple Emanu-El</i></b><br/>Temple Emanu-El is one of the older synagogues in Night City, home to a Conservative Jewish congregation. The building exterior has become slightly run down in recent years, as its stonework has been eroded by acid rain, but the interior is still well-kept and beautiful, and the beth midrash, or study room, retains its original wood panelled walls. Torah classes are run out of the premises of the synagogue, as are secular Hebrew classes for any who would learn the language. The Temple Emanu-El is popular with descendants of Israelis-in-exile who fled the Middle East after the Meltdown, but its congregation is largely American Ashkenazi Jewish, demographically. The Temple runs a private secular day school for children grades K to 12, and is one of the more competitive private schools to get into in Night City. Students of all faiths are accepted, but students of Jewish heritage may opt to take extra Torah classes after the main school-day is over. 5% of the enrollment is saved for charity-students, whose school fees are paid for by congregational subscription. Charity students may come from any ethnic or religious background.",
					"<b><i>The Temple of Dionysus</i></b><br/>The Temple of Dionysus started out as a Masonic Hall that was eventually converted into a playhouse in the 1990s. The playhouse was then sponsored and eventually bought by an eccentric millionaire who wished to erect a temple to Dionysus, Greek god of theatre, madness, and wine. He eventually willed his fortune to the maintenance of the temple, which is currently run by a trust made up of an uneasy mix of theatre professionals and Greek pagans. The Temple of Dionysus serves double duty as a playhouse, focusing almost entirely on classical Greek theatre such as the works of Aristophanes and Euripedes, but is also one of the last wineries in the US. A significant amount of the temple’s financial resources are currently invested in advanced hydroponic technology for the coddling and nurturing of grapevines, which are then pressed and fermented into wine. This investment was a wise one, because the Temple’s first bottlings of wine have sold to the upper-crust at a premium rate.",
					"<b><i>The True, True Satanic Temple of Night City</i></b><br/>What happens when a group of cyberpsycho gangers love Defilis’ black metal jams but don’t think that Rita Ripcrotch goes far enough in her stage shows? They form their own splinter sect with more violence and 100% more human sacrifice. The True, True Satanic Temple doesn’t really have a temple per se, just a half-destroyed apartment block that its loose congregation hangs out in, in one of the city’s combat zones. The True, True Satanists of Night City are a heavily chromed gang with bodysculpted horns, split tongues, pointy tails, and hooved feet. They go around fighting other gangs and raiding their protectorates for a steady stream of victims to defile and murder atop an altar made up of a fallen slab of concrete. Unfortunately for the True, True Satanists of Night City, they made the mistake of grabbing a Red Chrome Legion gang member a couple weeks ago, and now both gangs are at war, which leaves the True, True Satanists no time for their favorite pursuits of murder and mayhem.",
					"<b><i>Templo Yemalla</i></b><br/>Templo Yemalla is a casa, or house of worship, dedicated to worship of the oricha Yemaja, in the Afro-Cuban Santeria religion. The Templo itself is located in a small pre-Red neighborhood near an ethnic market, and its resident santera, Maria Mulata, is a transgender woman whose grandmother was the keeper of this specific temple herself. Yemaja is the goddess of maternity, fertility, and the sea, and her altar is piled high with corals, seashells, and old glass fishing floats. As her priestess, Maria Mulata wears only blue garments.",
					"<b><i>The Pastafarian Assembly House</i></b><br/>The Church of the Flying Spaghetti Monster is a relatively new religion, having emerged in the middle 2000s originally as an attempt to troll Christian conservatives. Devotees, who call themselves Pastafarians, believe that the universe was created by a drunken act of the Flying Spaghetti Monster, and wear colanders as religious headgear. They ally closely with the Satanic Temple of Night City in civil rights lawsuits. The Assembly House also hosts a soup kitchen on Tuesdays and Thursdays, serving only pasta dishes to all who wish to partake.",
					"<b><i>The Church of Bartmoss</i></b><br/>A very new religion, the Church of Bartmoss was founded during the Time of the Red. Devotees believe that the RABIDS are actually fragments of Rache Bartmoss’ divine intelligence, and if they are all brought together and assembled into a whole they would form a perfected, transcendent being. Saint Bartmoss is then the harbinger of a truly posthuman existence, and the anticipation of a Singularity. There is no set temple of Bartmoss anywhere — devotees set up Garden Patches on their Ziggurat webspace, in general, and chain-mail their crackpot theories on posthumanity to random e-mail lists, but an attempt is being made in Night City, to collect the shards and fragments of his conapt building so that local devotees may embed them in resin to form a shrine. Shattered but whole, the structure would therefore reflect the scattered divinity of Saint Bartmoss that would have to be reunited and made whole before humanity can continue its progress into the ineffable future. The Church of Bartmoss is probably a posthumous joke by the late Rache Bartmoss himself. Who knows?"
				);
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

	$x = rand(1,100);
	if ($x <= $cfg['BUILD_DETAIL']) {
		$feature = building_feature();
		switch($feature) {
			case('Legacy Infrastructure'):		$b_text .= "<br/><b>Old Feature:</b> ".legacy_infrastructure();	break;
			case('Repurposed As...'):
				if ($preset_flag != 1) {
					$feature = substr($block[array_rand($block)], 0, -1);
					$b_text .= "<br/><b>Is Now:</b> ".$feature;
				}
				break;
			case('Causes Sickness'):			$b_text .= "<br/>".health_hazard();	break;
			case('Police Presence'):			$b_text .= "<br/>".law_and_order();	break;
			case('Unusual Smell'):
				$strength = Array('Vague', 'Lingering', 'Faint', 'Strong', 'Overpowering');
				$b_text .= "<br/>".$strength[array_rand($strength)]." smell of ".smells()." coming from there.";
				$out['Unusual Smell'] = smells();
				break;
			case('Buggy Local Tech'):			$b_text .= "<br/><b>Broken Local Tech:</b> ".broken_tech();	break;
			case('AR Heavy'):					$b_text .= aug_reality();	break;
			case('Obscured By Ad Screens'):		$b_text .= big_screens();	break;
			case('Obvious Gang Turf');			$b_text .= "<br/><b>Gang Turf:</b> ".gang('aux');	break;
			case('Obvious Corporate Sponsor'):	$b_text .= "<br>Sponsored by (".blipverts(1).")";	break;
			default:							$b_text .= "<br/><b>Feature:</b> ".$feature;	break;
		}
	}

	return Array('Title' => $b_title, 'Text' => $b_text);
}

function makeCard ($in, $type) {
	if ($type == 'surrounds' && (strpos($in['Title'], 'Rubble') !== False)) {
		print t(7)."<div class='card bg-rubble h-100 card-block'>\n";
		print t(8)."<div class='card-header text-start'>".$in['Title']."</div>\n";
		print t(8)."<p class='card-text p-2'><span style='padding-left: 0 px'>".$in['Text']."</span></p>\n";
		print t(7)."</div>\n";
	}
	else {
		print t(7)."<div class='card bg-building h-100 card-block'>\n";
		print t(8)."<div class='card-header text-start'>".$in['Title']."</div>\n";
		print t(8)."<p class='card-text p-2'><span style='padding-left: 0 px'>".$in['Text']."</span></p>\n";
		print t(7)."</div>\n";
	}
}

function rubble() {
	global $cfg;

	$r_title = "Rubble";
	$r_text = "";

	$space = array(
		'Abandoned '.rand(2,7).'-story office building.',
		'Blown out apartment block.',
		'Waste land, just rough terrain.',
		'Waste land, lingering smell',
		'Former building, low walls still remain.',
		'Half-collapsed building.',
		'Freshly fenced-off.',
		'Freshly leveled, construction starting.',
		'Fenced-off long ago, many holes in fence and sheeting.'
	);

	$activity = array(
		'Homeless camp.',
		'Nomad parking.',
		rand(2,5).' sex workers looking for customers.',
		'Gangers keeping a low profile.',
		'Rockerboy shooting a video.',
		'Media-type filming area.',
		rand(1,3).' dead bodie(s).',
		'Neighbourhood kids playing gangs.',
		'Neighbourhood kids destroying something.',
		rand(1,5).' corp-types absolutely not working on some kind of shady deal.',
		'Corp work crew demolishing wreckage.',
		'Prison work crew demolishing wreckage w- prison guard presence.',
		'Community group reclaiming land.',
		'Signs of recent squatting.',
		'Disused.',
		'Unoccupied.',
		'Empty.',
		'Forgotten.'
	);

	$r_text = $space[array_rand($space)];

	if ($r_text == 'Waste land, lingering smell') {
		$r_text .= " of ".strtolower(smells()).".";
	}

	if (rand(1,100) <= $cfg['BUILD_DETAIL']) {
		$r_text .= "<br/>".$activity[array_rand($activity)];
	}

	return array('Title' => $r_title, 'Text' => $r_text);
}

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
		else { 
			$surrounds[$bk] = rubble();
		}
	}
}

/*


START HERE


*/

include 'utility.php';
include 'config.php';
include 'senses.php';
include 'plot_and_cast.php';
include 'audio_visual.php';
include 'random_events.php';
include 'night_market.php';

$events = random_events();
$mission = missionSelect();
$aux = Array(
	'Smell' => Array('Title' => "Smell", "Text" => smells()),
	'Sound' => Array('Title' => "Sound", "Text" => sounds()),
	'Sight' => Array('Title' => "Sight", "Text" => sights())
);
$surrounds = Array(
	'NW' => Array(), 'N' => Array(), 'NE' => Array(),
	 'W' => Array(), 				  'E' => Array(),
	'SW' => Array(), 'S' => Array(), 'SE' => Array()
);
surroundings();
$the_night_market = night_market();
?>
<!doctype html>
<html lang="en">
<head>
	<title>Cyberpunk Red Scenario and Setting Generator</title>

	<!-- My CSS links -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Play">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Raleway">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-2">&nbsp;</div>
			<div class="col-8"><h1>Cyberpunk Red Scenario and Setting Generator</h1></div>
			<div class="col-2">&nbsp;</div>
		</div>
		<div class="row">
			<div class="col-10 offset-1" id="Surroundings">
				<h2 style="color: #00dd00;">Surroundings <a href="#" data-bs-toggle="modal" data-bs-target="#surroundings"><i class="material-icons">info_outline</i></a></h2>
				<div class="container-fluid">
					<div class="row m-1">
						<div class="col-4 align-items-stretch">
<?php makeCard($surrounds['NW'], 'surrounds'); ?>
						</div>
						<div class="col-4 align-items-stretch">
<?php makeCard($surrounds['N'], 'surrounds'); ?>
						</div>
						<div class="col-4 align-items-stretch">
<?php makeCard($surrounds['NE'], 'surrounds'); ?>
						</div>
					</div>
					<div class="row m-1">
						<div class="col-4 align-items-stretch">
<?php makeCard($surrounds['W'], 'surrounds'); ?>
						</div>
						<div class="col-4 align-items-stretch">
							<div class='card bg-danger h-100 text-white card-block'>
								<div class='card-header text-center'>Squad Here</div>
								<p class='card-text p-2'><span style='padding-left: 0 px'>The players are standing here.<br/>All locations are relative to this position.</span></p>
							</div>
 						</div>
						<div class="col-4 align-items-stretch">
<?php makeCard($surrounds['E'], 'surrounds'); ?>
						</div>
					</div>
					<div class="row m-1">
						<div class="col-4 align-items-stretch">
<?php makeCard($surrounds['SW'], 'surrounds'); ?>
						</div>
						<div class="col-4 align-items-stretch">
<?php makeCard($surrounds['S'], 'surrounds'); ?>
						</div>
						<div class="col-4 align-items-stretch">
<?php makeCard($surrounds['SE'], 'surrounds'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<hr>
			<div class="col-3" id="Scenario">
				<div class="row justify-content-center">
					<div class="col-12">
						<h2 style="color: #deb887;">Action <a href="#" data-bs-toggle="modal" data-bs-target="#action"><i class="material-icons">info_outline</i></a></h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class='card m-1 bg-mission card-block'>
<?php
print t(6)."<div class='card-header text-center'>".$mission['A-Plot']['Title']."</div>";
print t(6)."<p class='card-text p-2'>".$mission['A-Plot']['Text']."</span></p>";
foreach ($mission['A-Plot'] as $k => $v) {
	if ($k != "Title" && $k != "Text") {
		print t(6)."<div class='card-header text-center'>".$k."</div>";
		print t(6)."<p class='card-text p-2'>".$v."</span></p>";
	}
}
if (key_exists('B-Plot', $mission)) {
	print t(6)."<div class='card-header text-center'>".$mission['B-Plot']['Title']."</div>";
	print t(6)."<p class='card-text p-2'>".$mission['B-Plot']['Text']."</span></p>";
}
?>
					</div>
				</div>
			</div>
			<div class="col-9" id="Events">
				<div class="row">
					<div class="col-9 justify-content-center">
						<h2 style="color: #0dcaf0;">Random Events <a href="#" data-bs-toggle="modal" data-bs-target="#randomevents"><i class="material-icons">info_outline</i></a></h2>
					</div>
					<div class="col-3">
						<h2 style="color: #ffffff;">Environment <a href="#" data-bs-toggle="modal" data-bs-target="#environment"><i class="material-icons">info_outline</i></a></h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-3">
						<div class='card m-1 bg-primary card-block'>
							<div class='card-header text-center'>Corporate Districts - Day</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Corporate Districts - Day'])."</b>: ".current($events['Corporate Districts - Day'])."<br/>"; ?></p>
							<div class='card-header text-center'>Corporate Districts - Evening</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Corporate Districts - Evening'])."</b>: ".current($events['Corporate Districts - Evening'])."<br/>"; ?></p>
							<div class='card-header text-center'>Corporate Districts - Night</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Corporate Districts - Night'])."</b>: ".current($events['Corporate Districts - Night'])."<br/>"; ?></p>
						</div>
					</div>
					<div class='col-3'>
						<div class='card m-1 bg-info card-block'>
						<div class='card-header text-center'>Suburban Areas - Day</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Median Areas - Day'])."</b>: ".current($events['Median Areas - Day'])."<br/>"; ?></p>
								<div class='card-header text-center'>Suburban Areas - Evening</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Median Areas - Evening'])."</b>: ".current($events['Median Areas - Evening'])."<br/>"; ?></p>
								<div class='card-header text-center'>Suburban Areas - Night</div>
								<p class='card-text p-2'><?php print "<b>".key($events['Median Areas - Night'])."</b>: ".current($events['Median Areas - Night'])."<br/>"; ?></p>
						</div>
					</div>
					<div class='col-3'>
						<div class='card m-1 bg-danger card-block'>
							<div class='card-header text-center'>Combat Zones - Day</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Combat Zones - Day'])."</b>: ".current($events['Combat Zones - Day'])."<br/>"; ?></p>
							<div class='card-header text-center'>Combat Zones - Evening</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Combat Zones - Evening'])."</b>: ".current($events['Combat Zones - Evening'])."<br/>"; ?></p>
							<div class='card-header text-center'>Combat Zones - Night</div>
							<p class='card-text p-2'><?php print "<b>".key($events['Combat Zones - Night'])."</b>: ".current($events['Combat Zones - Night'])."<br/>"; ?></p>
						</div>
					</div>
					<div class="col-3" id="Auxiliary">
						<div class='card m-1 bg-light card-block'>
							<div class='card-header text-center'><?php print $aux['Smell']['Title']; ?></div>
							<p class='card-text p-2'><span style='padding-left: 0 px'><?php print $aux['Smell']['Text']; ?></span></p>
							<div class='card-header text-center'><?php print $aux['Sound']['Title']; ?></div>
							<p class='card-text p-2'><span style='padding-left: 0 px'><?php print $aux['Sound']['Text']; ?></span></p>
							<div class='card-header text-center'><?php print $aux['Sight']['Title']; ?></div>
							<p class='card-text p-2'><span style='padding-left: 0 px'><?php print $aux['Sight']['Text']; ?></span></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12" id="Market">
						<div class="row justify-content-center">
							<div class="col-12 mt-3">
								<h2 style="color: #00dd00;">Night Market <a href="#" data-bs-toggle="modal" data-bs-target="#market"><i class="material-icons">info_outline</i></a></h2>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12" id="Market">
						<div class="row">
							<?php
								/*pretty_var($the_night_market);*/
								foreach ($the_night_market as $n) {
									print $n;
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>

	<!-- Modal Help Files -->
	<div class="modal fade" id="surroundings" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="surroundings">Help > About > Surroundings</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5>'Where are we?'</h5>
					<p>This is a tool for game referees to generate a suggested environment for players to be surrounded by when they ask what's around a particular spot.</p>
					<p>Each page load generates a new environment and each triggering selection (eg. gangs, shops, etc.) creates more details where necessary. You will find them in the sections below.</p>
					<p>If components of the environment are unsuitable (really? A brothel next to a private school? Really, random number generator, is that a good idea?) You can do two things.<br/><ol><li><b>Hit F5</b> - Generate yourself, a merry new neighbourhood. May your rolls be right.</li><li><b>Ignore it</b> - If you're happy just filling in the inconvenient spaces, swing batter swing!<br/>Remember: Everything here is just a suggestion. It's all your call.</li></ol></p>
					<p>The sense descriptions in the bottom-right are to be treated similarly and more intended as general scene-setting.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="randomevents" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="randomevents">Help > About > Random Events</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5>'What's happening around us?'</h5>
					<p>This section is a smattering of suggestions to bring the area to life. Just slip it into the description, the situations can escalate if you and the players want it that way. I'll leave that to you.</p>
					<p>Of course, there's nothing stopping you from grabbing something from outside your current region and time, but the tables are aligned to their specific contexts. For example, the corporate space has more police patrols in the day and the combat zone has more chaos at night.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="action" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="action">Help > About > Action</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5>'What are we doing?'</h5>
					<p>The Action panel has a randomly generated mission suggestion, if you're looking for such a thing.</p>
					<p>Stats aren't included; pre-generated personalities are only included sometimes. The rule in 'Surroundings' applies here, only use what tickles your fancy, ignore or re-roll everything else!</p>
					<p>A 'Meanwhile, ' indicates that there are actually <b>TWO</b> plots going on. How you and the plyers handle that is up to you.</p> 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="environment" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="environment">Help > About > Environment</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h5>'What's that smell?'</h5>
					<p>Like the surroundings and random events, this is another opportunity to add colour to the scene. Smells and sights that aren't directly related to the mission-at-hand.<br/>This column also contains the additional bits and pieces that crop up elsewhere. Gang details for that hangout southwest of the players, things like that.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="market" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="environment">Help > About > Night Market</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p>Every fixer in the city either knows about the Night Markets, or runs them. A a regularly run grey-to-black market that sells everything from cheap knock-off Zemiel wristwatches to prototype cyberwear, just don't ask where it came from.</p>
					<p>Listed here are some highlights from the stalls. Due to the nature of the sellers, it's unlikely that you'll see these sales again at the next market.</p>
					<p>NB: Want something really special? You want the Midnight Markets, now <i>those</i> are hard to get access to...</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<?php
/* 
DIAGNOSTICS
pretty_var('SURROUNDS', 'dddddd');
pretty_var($surrounds, 'ffcccc');
pretty_var('AUX', 'dddddd');
pretty_var($aux, 'ccffcc');
pretty_var('MISSION', 'dddddd');
pretty_var($mission, 'ccccff');
pretty_var('CONFIG', 'dddddd');
pretty_var($cfg, 'ffffcc');
pretty_var('EVENTS', 'dddddd');
pretty_var($events, 'ffffff');
*/
?>
</div>
</body>
</html>
