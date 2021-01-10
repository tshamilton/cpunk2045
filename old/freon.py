import random

def random_contents {
	poss = ['food', 'elec', 'drug', 'note', 'odd', 'weap', 'mund', 'mund', 'body', 'hidd']
	freon_contents = { 
		'food': [
			'An opened package of raw bratwursts. Three remain. An insect skitters.',
			'An overflowing recycle bin. Someone here went through a lot of synth-booze.',
			'Inside the fridge, a pot of sludgy stew',
			'A buy-10-get-1-free card from the local coffee chain. There are 9 punches on it. Score.',
			'By your best estimate, six week\'s worth of mold in a blender.',
			'Fourteen identical empty pizza boxes stacked up, topped with newspapers.',
			'You sure hope that\'s a turkey leg.',
			'The coffee was left on; the liquid boiled down to nothing but a black scar in the bottom of the pot before the safety mechanism turned it off.',
			'An unopened cheap charcuterie plate is the only thing in the fridge.',
			'Vintage White Claw, a variety pack.'
		],
		'elec': [
			'A burner cell phone, SIM card still inside.',
			'Every elecronic device in the place is smashed to bits. A discarded sledgehammer is nearby.',
			'An 20-year-old standup arcade cabinet, endlessly running through attract mode.',
			'A couple bins of "recycled" cybernetic components, all in bad shape.',
			'A pile of games for a portable gaming machine, and an external battery pack.',
			'Exactly enough parts to be be one short of rebuilding any of the disassembled computers.',
			'A charge-card for the building\'s laundry room. If the characters access it, they learn the user did multiple loads almost every day last month.',
			'A pile of unlabelled memory chips. They are obsolete by two generations of "universal" connectors.',
			'A non-digital lockbox in the freezer. Inside is another non-digital lockbox. It contains: it\'s locked but empty.',
			'A non-digital lockbox in the freezer. Inside is another non-digital lockbox. It contains: Valuable body parts.'
		],
		'drug': [
			'A small stash of potent narcotics, in a bedside table\'s secret compartment: Injectable.',
			'A small stash of potent narcotics, in a bedside table\'s secret compartment: Digital.',
			'An intricate tower of empty cigarette packs. Looks like a pack-a-day habit.',
			'A bag of syringes, unused.',
			'The toilet tank lid lies broken on the bathroom floor. It was: hastily removed so someone could escape with their stash.',
			'The toilet tank lid lies broken on the bathroom floor. It was: broken over someone\'s head and is covered in blood.',
			'On the kitchen counter are the remnants of the supplies for making a homemade version of meth. Low potency, high toxicity, withdrawal like hell. Looks like there\'s a little left over, it just needs to be heated up again. Wanna?',
			'Injectible animal tranquilizers, with packaging from a nearby vetinary clinic.',
			'Close investigation finds that a box of flour contains some very cut cocaine.',
			'One of the closets contains a bin of formerly-intricate bongs, most of which have been smashed.'
		],
		'note': [
			'A hand drawn map of the local neighborhood, featuring: Gang territory.',
			'A hand drawn map of the local neighborhood, featuring: Restaurant reviews.',
			'A hand drawn map of the local neighborhood, featuring: Construction/traffic notes.',
			'A yellowed, printed version of an old tabletop game. The cover is bent in half.',
			'Electronic note - a receipt for a garbage dumpster delivery and removal service.',
			'A collection of well-read Guns & Blammo.',
			'An anatomy textbook: unopened.',
			'An anatomy textbook: suspiciously stained.',
			'A paper notebook written in a language uncommon to the region. There is no pen nearby, but the notebook lies open.',
			'There are boxes and boxes of fake books - muted color spines, but no interiors.'
		],
		'odd': [
			'A stack of recruitment flyers for a fake "church." The address for it leads to an empty storefront nearby.',
			'And a small video screen here shows a camera feed of the storefront\'s door.',
			'A clothesline strung across the living room. Pictures of women - all the same ethnicity - are hung from it.',
			'A single bloodstained towel on the bathroom floor.',
			'A dishwasher filled with small bones.',
			'A corpse. His t-shirt reads: _finalfinal.',
			'Several bloodstained burlap sacks.',
			'A VR headset on top of a mannequin. Dried blood has dripped from inside the headset onto the mannquin\'s head.',
			'An electric train set travels around the perimeter of the living room, taking exactly sixty seconds to make one orbit.',
			'Remnants of burnt clothes in a fireplace.'
		],
		'weap': [
			'Under the pillow, two tiny pistols, each with a full magazine.',
			'There\'s a fancy knife block in the kitchen that is full of scalpels, hunting knives, and a couple saw blades.',
			'Just inside the door, a stun gun sits on a small table next to couple hotel keycards.',
			'Bedside baseball bat, the handle wrapped in black duct tape.',
			'Acid of an unknown formulation. Tastefully pourable from a lemonade jug in a mini-fridge.',
			'A homemade garrote made of highstrength boating rope.',
			'A vintage branding iron with the initials "WS" inside a circle.',
			'A samurai sword. Suitable for cosplay but not much else.',
			'Components for pipe bombs. Several are partially assembled and look like they were done very competently.',
			'A sawed-off shotgun leaning on the wall underneath a blown-out window.'
		],
		'mund': [
			'Cans of paint, paintbrushes - all the supplies you\'d need to touch a place up.',
			'A shattered picture frame with a family portrait inside.',
			'A small stash of cash and coins in the cutlery drawer - enough for two takeout dinners.',
			'An empty crib.',
			'An overturned table, the remains of a poker game scattered across the floor.',
			'A local gang sign was spray-painted on one of the interior walls. Someone painted over it, but you can still see the faint outline.',
			'Jars of gastropods preserved in formalin. ',
			'Rosary beads.',
			'A chest of drawers - but no trace of the drawers.',
			'A pair of wire-framed glasses, arms bent.',
			'A pair of wire-framed glasses, spotlessly clean.',
			'A broken umbrella.',
			'A used, desiccated condom.',
			'A cactus.',
			'A gas generator. The tank is half-full.',
			'A carefully packaged box of tarot cards.',
			'A housebroken cat, hungry, but unharmed.',
			'A housebroken cat, hungry, but with a strange pattern shaved into their fur.',
			'A phone number written hastily in the margin of the newspaper.',
			'The inside of the windows are fully covered in spray-foam insulation and tinfoil.'
		],
		'body': [
			'In a room devoted to storage, four large chest freezers. Three of them have small red stickers on the top, the other, a small green sticker. The green-stickered freezer is full of frozen food.',
			'In a room devoted to storage, four large chest freezers. Three of them have small red stickers on the top, the other, a small green sticker. The red-stickered freezers each contain a few lingering body parts.',
			'In a room devoted to storage, four large chest freezers. Three of them have small red stickers on the top, the other, a small green sticker. The red-stickered freezers are packed with well-organized body parts. You estimate there\'s at least 25 full bodies.',
			'Gristle in a pot on the stove.',
			'In the back alley dumpster, a few human bones. Not an entire skeleton.',
			'A biological eyeball, squished.',
			'A biological eyeball, preserved in a stasis unit made partially from old fish tanks.',
			'A folded-up orange tarpaulin covered in dried blood.',
			'A collection of ring fingers in the freezer. In a box of fish sticks.',
			'A realistic scientific study skeleton, with a real skull wired in place.'
		],
		'hidd': [
			'A secret door: leading down a rough-hewn passage - barely big enough to crawl through - that eventually connects to the sewer system.',
			'A secret door: leading down a rough-hewn passage - barely big enough to crawl through - that after several minutes of crawling, has caved in.',
			'A secret door: leading down a rough-hewn passage - barely big enough to crawl through - connects to a storage room that\'s inacessible from anywhere else in the building.',
			'A secret door: leading down a rough-hewn passage - barely big enough to crawl through - to a secret bedroom. A single bed sits along the wall. Food remnants show that the room was recently occupied.',
			'A secret door: leading down a rough-hewn passage - barely big enough to crawl through - a steep flight of stairs to a dirt-floor basement. The dirt is loose and can be stirred up. There are spots clumped with blood.',
			'A secret door: leading down a rough-hewn passage - barely big enough to crawl through - is well-maintained, leading to a nearby detached, double-car garage. The garage\'s exit is out of the line of sight of the main building.',
			'A secret sliding door behind an old gig poster - Sascha, LiVE @ Glass Door - contains a digitally locked safe, bolted to the floor. It will take hours to remove and longer to crack.',
			'The large closet has had been turned into a dark room. All the photographic equipment and some negatives remain.',
			'A bookshelf can be moved to reveal a hidden saferoom behind it. It can be opened from the outside via a "decorative" switch on a vintage looking lamp.',
			'A trapdoor leads into a sub-basement, roughly ten by five feet. A wooden casket is along one wall and candles and wax are strewn all over.'
		]
	}
	no_items = random.randrange(1,6)
	out = "You find "+str(no_items)+" in the abandoned apartment:\n<ul>") 
	while no_items :
		category = random.choice(poss)
		item = random.choice(freon_contents[category])
		out = out+"\t<li>"+item+"</li>\n"
		no_items -= 1
	out = "</ul>"
}

'''
	From "Freon Skies: Nice Things The Organleggers Left Behind" by Adam Jury
'''
