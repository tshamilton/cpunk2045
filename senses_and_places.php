<?php 

function building() {
	global $cfg;
	global $C;
	$b_title = "";
	$b_text = "";

	(rand(1,100) <= $cfg['PRESET_BUILD']) ? $preset_flag = 1 : $preset_flag = 0;
	$categ = $C['buildings-block'][array_rand($C['buildings-block'])];
	$b_title = substr($categ, 0, -1);
	$b_size = substr($categ, -1, 1);

	/*"3DFabSmallFactoryS","AntiquesS","ApartmentBlockHabStackX","ArtDealerGalleryS","AutoRoboticsRepairM","BankL","BarS","BodyClinicS",
	"BrothelS","CapsuleHotelL","CarParkM","CheapHousingProjectX","ClinicS","CoffeeShopS","CommercialCyberneticsM","ConsumerElectronicsM",
	"CourierTransportCompanyM","DataStorageFacilityX","DepartmentStoreM","ElevatedRailS","FashionBoutiqueS","FastFoodS","GarageS",
	"GoodsandServicesM","GovernmentBuildingL","GroceryStoreS","GymS","HospitalM","HotelL","IndustrialFactoryM","LegalFirmX","LeisureplexM",
	"LuxuryApartmentsL","MallM","MarketS","MovieTheatreS","NewMediaCompanyM","NightclubS","OfficeBlockX","ParkingBlockS","PharmacyS",
	"PocketParkS","PolicePrecinctL","PublicTransportHubS","ReligiousBuildingS","RestaurantS","RipperdocS","RoadOverpassL","SchoolM",
	"SecurityTechM","StorageUnitsL","SuburbanHousingS","TaxiFirmM","UnderpassS","VRcadeBraindanceShopS","VehicleShowroomM","WarehouseL",
	"WeaponsTechSalesM"*/

	if ($preset_flag) {
		list($b_title, $b_text) = explode('~', $C['buildings-'.substr($categ, 0, -1)][array_rand($C['buildings-'.substr($categ, 0, -1)])]);
		$b_text = process_text($b_text);
		/*$b_title = "Test Title";
		$b_text = "Test Text";*/
	}
	else {
		$b_title = nameBlock($b_title);
	}
	switch($b_size) {
		case 'S': $b_size = rand(1,3); break;
		case 'M': $b_size = rand(1,6); break;
		case 'L': $b_size = rand(1,15); break;
		case 'X': $b_size = rand(1,50); break;
	}
	$b_text .= "<br/><b>Floors:</b> ".$b_size;

	if (rand(1,100) <= $cfg['BUILD_DETAIL']) {
		$feature = $C["buildings-feature"][array_rand($C["buildings-feature"])];
		switch($feature) {
			case('Legacy Infrastructure'):		$b_text .= "<br/><b>Old Feature:</b> ".$C["buildings-legacyInfrastructure"][array_rand($C["buildings-legacyInfrastructure"])];	break;
			case('Repurposed As...'):			if ($preset_flag != 1) { $b_text .= "<br/><b>On the surface, inside, it's now:</b> ".nameBlock($C['buildings-block'][array_rand($C['buildings-block'])]); } break;
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

function nameBlock($b_title) {
	switch($b_title) {
		case("3DFabSmallFactory"):			$b_title = "Small Auto-Factory"; break;
		case("ApartmentBlockHabStack"):		$b_title = "Apartment Block"; break;
		case("ArtDealerGallery"):			$b_title = "Art Gallery"; break;
		case("AutoRoboticsRepair"):			$b_title = "Mechanical Repairs"; break;
		case("BodyClinic"):					$b_title = "Body Clinic"; break;
		case("CapsuleHotel"):				$b_title = "Capsule Hotel"; break;
		case("CarPark"):					$b_title = "Car Park"; break;
		case("CheapHousingProject"):		$b_title = "Cheap Housing Project"; break;
		case("CoffeeShop"):					$b_title = "Caf&eacute;"; break;
		case("CommercialCybernetics"):		$b_title = "Cyber Clinic"; break;
		case("ConsumerElectronics"):		$b_title = "Consumer Electronics"; break;
		case("CourierTransportCompany"):	$b_title = "Couriers and Transport"; break;
		case("DataStorageFacility"):		$b_title = "Data Storage Facility"; break;
		case("DepartmentStore"):			$b_title = "Department Store"; break;
		case("ElevatedRail"):				$b_title = "Elevated Railway"; break;
		case("FashionBoutique"):			$b_title = "Fashion Boutique"; break;
		case("FastFood"):					$b_title = "Fast Food"; break;
		case("GoodsandServices"):			$b_title = "Shop"; break;
		case("GovernmentBuilding"):			$b_title = "Government Office"; break;
		case("GroceryStore"):				$b_title = "Grocery"; break;
		case("IndustrialFactory"):			$b_title = "Industrial Factory"; break;
		case("LegalFirm"):					$b_title = "Legal Firm"; break;
		case("LuxuryApartments"):			$b_title = "Luxury Apartments"; break;
		case("MovieTheatre"):				$b_title = "Theatre"; break;
		case("NewMediaCompany"):			$b_title = "New Media Company"; break;
		case("Nightclub"):					$b_title = "Nightclub"; break;
		case("OfficeBlock"):				$b_title = "Office Block"; break;
		case("ParkingBlock"):				$b_title = "Parking Space"; break;
		case("PocketPark"):					$b_title = "Pocket Park"; break;
		case("PolicePrecinct"):				$b_title = "Police Station"; break;
		case("PublicTransportHub"):			$b_title = "Public Transport"; break;
		case("ReligiousBuilding"):			$b_title = "Religious Building"; break;
		case("RoadOverpass"):				$b_title = "Overpass"; break;
		case("SecurityTech"):				$b_title = "Security"; break;
		case("StorageUnits"):				$b_title = "Storage Units"; break;
		case("SuburbanHousing"):			$b_title = "Housing"; break;
		case("TaxiFirm"):					$b_title = "Taxi Firm"; break;
		case("VRcadeBraindanceShop"):		$b_title = "VR-cade/Braindance"; break;
		case("VehicleShowroom"):			$b_title = "Vehicle Showroom"; break;
		case("WeaponsTechSales"):			$b_title = "Weapons/Tech Showroom"; break;
	}

	return $b_title;
}

function rubble() {
	global $cfg;
	global $C;

	$r_title = "Rubble";
	$r_text = process_text($C["buildings-rubble-space"][array_rand($C["buildings-rubble-space"])]);

	if ($r_text == 'Waste land, lingering smell') { $r_text .= " of ".strtolower(smells())."."; }
	if (rand(1,100) <= $cfg['BUILD_DETAIL']) { $r_text .= "<br/>".process_text($C["buildings-rubble-activity"][array_rand($C["buildings-rubble-activity"])]); }

	return array('Title' => $r_title, 'Text' => $r_text);
}

function sights() {
	global $C;

	$out = $C['environment-sights'][array_rand($C['environment-sights'])];

	switch($out) {
		case ('A bus shelter made entirely of vid-screens'):
		case ('An overpass or skywalk covered in colourful advertising animatics'):
		case ('The sidewalk consists of slabs of flickering screens, showing adverts'):
		case ('A large building-mounted flatscreen showing...'):
			//$out .= big_screens(); break;
		case ('Searchlights playing across the cloud cover and projecting branding'):
			$out .= blipverts(); break;
	}

	return $out;
}

function smells($count = 0) {
	global $C;

	(rand(1,100) >= 85) ? $count = 2 : $count = 1;
	/*$strength = Array('Vague', 'Lingering', 'Faint', 'Strong', 'Overpowering');
	$direction = Array('north', 'south', 'east', 'west', 'northwest', 'northeast', 'southeast', 'southwest', 'the below');
	$b_text .= "<br/>".$strength[array_rand($strength)]." smell of ".smells()." coming from";

	$rval = $strength[array_rand($strength)]." smell of "*/
	if ($count == 1) {
		return $C["environment-smells"][array_rand($C["environment-smells"])];
	}
	else {
		return $C["environment-smells"][array_rand($C["environment-smells"])]." and ".$C["environment-smells"][array_rand($C["environment-smells"])];
	}
}

function sounds() {
	global $C;

	(rand(1,100) >= 85) ? $count = 2 : $count = 1;

	if ($count == 1) {
		return $C["environment-sounds"][array_rand($C["environment-sounds"])];
	}
	else {
		return $C["environment-sounds"][array_rand($C["environment-sounds"])]." and ".$C["environment-sounds"][array_rand($C["environment-sounds"])];
	}
}

function surroundings() {
	global $cfg;
	global $E;
	$compass = array('NW', 'N', 'NE', 'W', 'E', 'SW', 'S', 'SE');

	$these_blocks = rand($cfg['MIN_BUILDINGS'], $cfg['MAX_BUILDINGS']);
	$build = array_rand($compass, $these_blocks); foreach ($build as &$b) { $b = $compass[$b]; } /* This line picks which blocks are buildings, the rest are rubble */

	foreach ($compass as $bk) {
		if (in_array($bk, $build)) {	$E["Surrounds"][$bk] = building();	}
		else {							$E["Surrounds"][$bk] = rubble();	}
		$E["Surrounds"][$bk]["Title"] .= " - ".$bk;
	}
	/*pretty_var($E["Surrounds"], '330000');*/
}


?>