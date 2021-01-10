import random

#list hell
market_types = ['Food and Drugs', 'Personal Electronics', 'Weapons and Armor', 'Cyberware', 'Clothing and Fashionware', 'Survival Gear']
food_list = ['Canned Goods, 10eb', 'Packaged goods, 10eb', 'Frozen Goods, 10eb', 'Bags of Grain, 20eb', 'Kibble Pack, 10eb', 'Bags of Prepak, 20eb', 'Street Drugs of 20eb or less', 'Poor Quality Alcohol, 10eb', 'Alcohol, 20eb', 'Excellent Quality Alcohol, 100eb', 'MRE, 10eb', 'Live Chicken, 50eb', 'Live Fish, 50eb', 'Fresh Fruits, 50eb', 'Fresh Vegetables, 50eb', 'Root Vegetables, 20eb', 'Live Pigs, 100eb', 'Exotic Fruits, 100eb', 'Exotic Vegetables, 100eb', 'Street Drugs of exactly 50eb']
electro_list = ['Agent, 100eb', 'Programs or Hardware of 100eb or less', 'Audio Recorder, 100eb', 'Bug Detector, 500eb', 'Chemical Analyzer, 1000eb', 'Computer, 50eb', 'Cyberdeck, 500eb', 'Disposable Cell Phone, 50eb', 'Electric Guitar or Other Instrument, 500eb', 'Programs or Hardware of exactly 500eb', 'Medscanner, 1000eb', 'Homing Tracer, 500eb', 'Radio Communicator, 100eb', 'Techscanner, 1000eb', 'Smart Glasses, 500eb', 'Radar Detector, 500eb', 'Scrambler/Descrambler, 500eb', 'Radio Scanner/Music Player, 50eb', 'Braindance Viewer, 1000eb', 'Virtuality Goggles, 100eb']
weapons_list = ['Medium Pistol, 50eb', 'Heavy Pistol or Very Heavy Pistol, 100eb', 'SMG, 100eb', 'Heavy SMG, 100eb', 'Shotgun, 500eb', 'Assault Rifle, 500eb', 'Sniper Rifle, 500eb', 'Bows or Crossbow, 100eb', 'Grenade Launcher or Rocket Launcher, 500eb', 'Ammunition of 500eb or less', 'A single Exotic Weapon of GM\'s choice', 'Light Melee Weapon, 50eb', 'Medium Melee Weapon, 50eb', 'Heavy Melee Weapon, 100eb', 'Very Heavy Melee Weapon, 100eb', 'Armor of 100eb or less', 'Armor of exactly 500eb', 'Armor of exactly 1000eb', 'Weapon Attachments of 100eb or less', 'Weapon Attachments of 500eb or higher']
cyberware_list = ['Cybereye, 100eb', 'Cyberaudio Suite, 500eb', 'Neural Link, 500eb', 'Cyberarm, 500eb', 'Cyberleg, 100eb', 'External Cyberware of exactly 1000eb', 'External Cyberware of 500eb or less', 'Internal Cyberware of exactly 1000eb', 'Internal Cyberware of 500eb or less', 'Cybereye Option of exactly 1000eb', 'Cybereye Option of 500eb or less', 'Cyberaudio Option of exactly 1000eb', 'Cyberaudio Option of 500eb or less','Neuralware Option of exactly 1000eb', 'Neuralware Option of 500eb or less','Cyberlimb Option of exactly 1000eb', 'Cyberlimb Option of 500eb or less', 'Fashionware of GM\'s Choice', 'Borgware of GM\'s Choice', 'Any Cyberware of GM\'s Choice']
clothes_list = ['Bag Lady Chic', 'Gang Colors', 'Generic Chic', 'Bohemian', 'Leisurewear', 'Nomad Leather', 'Asia Pop', 'Urban Flash', 'Businesswear', 'High Fashion', 'Biomonitor, 100eb', 'Chemskin, 100eb', 'EMP Threading, 10eb', 'Light Tatoo, 100eb', 'Shift Tacts, 100eb', 'Skinwatch, 100eb', 'Techhair, 100eb', 'Generic Chic', 'Leisurewear', 'Gang Colors']
survival_list = ['Anti-Smog Breathing Mask, 20eb', 'Auto-Level Dampening Ear Protectors, 1000eb', 'Binoculars, 50eb', 'Carryall, 20eb', 'Flashlight, 20eb', 'Duct Tape, 20eb', 'Inflatable Bed & Sleep-bag, 20eb', 'Lock-Picking Set, 20eb', 'Handcuffs, 50eb', 'Medtech Bag, 100eb', 'Tent and Camping Equipment, 50eb', 'Rope (60m), 20eb', 'Techtool, 100eb', 'Personal CarePack, 20eb', 'Radiation Suit, 1000eb', 'Road Flare, 10eb', 'Grapple Gun, 100eb', 'Tech Bag, 500eb', 'Shovel or Axe, 50eb', 'Airhypo, 50eb']
market_types_lists = [food_list, electro_list, weapons_list, cyberware_list, clothes_list, survival_list]

###Fonctions

def check_sim(liste, numb):
    i = len(liste)
    j = 0
    trigger = 0
    while (i > j):
        if (liste[j] == numb):
            trigger = 1
        j = j + 1
    return (trigger)

def fill_list(liste, n, dice):
	i = 1
	liste.append(random.randrange(dice))
	while(n > i):
	    j = random.randrange(dice)
	    while (check_sim(liste, j)):
	        j = random.randrange(dice)
	    i = i + 1
	    liste.append(j)
	return(liste)

def n_market():
	out = ''
	###Market type
	market_type_var = [0, 0]
	trigger = 0
	for i in market_type_var:
		i = random.randrange(6)
		if (trigger == 1):
			while (market_type_var[0] == i):
				i = random.randrange(6)
		market_type_var[trigger] = i
		trigger = 1

	###Item number for every category
	items_number = [random.randrange(10) + 1, random.randrange(10) + 1]
	i = 0
	first_list = []
	second_list = []
	first_list = fill_list(first_list, items_number[0], 20)
	second_list = fill_list(second_list, items_number[1], 20)

	#Print onfos
	out  = 'This Night Market is selling:<br/>\n'
	out += '\n'+str(items_number[0])+' items of '+market_types[0]+', and '+str(items_number[1])+' items of '+market_types[1]+'.<br/>'
	out += '\nOn the stand, you can find:<br/>\n<div>\n\t<ul>\n'
	for i in first_list:
		out += '\t\t<li>'+market_types_lists[market_type_var[0]][i]+'</li>\n'
	out += '\t</ul>\n</div>\n<div>\n\t<ul>\n'
	for i in second_list:
		out += '\t\t<li>'+market_types_lists[market_type_var[1]][i]+'</li>\n'
	out += '\t</li>\n</div>\n'

	return out

'''out = n_market()
print(out)

Modified from https://gitlab.com/shindranel/night-market-generator/'''