'''Augmented City environment generator'''

feature = [
	'Extreme Security Protocols',
	'Decrepit and Rundown',
	'Graffitipocalypse',
	'Obvious Gang Turf (see P26)',
	'Back room Brothel',
	'Newly renovated',
	'Unusually Busy',
	'Empty/Quiet/Shuttered',
	'Inadequate Security',
	'High Tech Equipment',
	'Abandoned Edifice',
	'Repurposed As (drop again)',
	'Front For Corporate Activity',
	'Front For Criminal Activity',
	'Hidden Squatters',
	'Obscured By Ad Screens (see P15)',
	'Closed',
	'Incomplete',
	'Self Sufficient',
	'Crumbling Cheapcrete',
]
block = [
	'Pharmacy',
	'Consumer Electronics',
	'Art Dealer/Gallery',
	'Auto/Robotics Repair',
	'Storage units',
	'Warehouse',
	'Legal Firm',
	'Religious Building',
	'Capsule Hotel',
	'Data Storage Facility',
	'Cheap Housing Project',
	'Grocery Store',
	'Elevated Rail',
	'Road Overpass',
	'Fast Food Franchise',
	'Police Precinct',
	'School/College',
	'Government Building',
	'Garage',
	'Parking Block',
	'Office Block',
	'Public Transport Hub',
	'Hospital',
	'Clinic',
	'Department Store',
	'Body Augmentation Clinic',
	'Luxury Apartments',
	'New Media Company',
	'Industrial/Factory',
	'Security Tech',
	'Vehicle Showroom',
	'Fashion Boutique',
	'Commercial Cybernetics',
	'Mall',
	'VR-cade / Braindance Shop',
	'Gym',
	'Leisureplex',
	'Apartment Block/Hab Stack',
	'Nightclub',
	'Underpass',
	'Hotel',
	'Ripperdoc',
	'3D Print Fabrication',
	'Courier/Bulk Transport Company',
	'Bar',
	'Restaurant',
	'Pop-up Market',
	'Coffee Shop',
	'Taxi Firm',
	'Pocket Park',
	'Suburban Housing',
	'Movie Theatre',
	'Weapons or Tech Sales',
	'Multi-level Car Park',
	'Bank',
	'Antiques'
]

directions = [
	'north',
	'northeast',
	'east',
	'southeast',
	'south',
	'southwest',
	'west',
	'northwest',
]

import random
import json

while x:
	y = random.choice(directions)
	surrounds.append(y)
	directions.remove(y)
	x -= 1

for x in surrounds:
	aug_env[x] = {}
	aug_env[x]['building'] = random.choice(block)
	y = random.randrange(1,10)
	if y >= 6:
		aug_env[x]['feature'] = random.choice(feature)

json_object = json.dumps(aug_env)
print(json_object)
