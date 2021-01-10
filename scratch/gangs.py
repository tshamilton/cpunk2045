''' gangs.py

Gang generation template from http://www.verminary.com/cyberpunk/gangsta.html
'''

import random

def gang_type():
	x = random.randrange(1,100)

	if x <= 10:		return ('Booster')
	elif x <= 20:	return ('Chromer')
	elif x <= 25:	return ('Combat')
	elif x <= 30:	return ('Drug')
	elif x <= 33:	return ('Eco')
	elif x <= 36:	return ('Exotic')
	elif x <= 43:	return ('Go')
	elif x <= 48:	return ('Guardian')
	elif x <= 52:	return ('Netrunner')
	elif x <= 55:	return ('Nihilist')
	elif x <= 59:	return ('Nostalgia')
	elif x <= 66:	return ('Party')
	elif x <= 71:	return ('Political')
	elif x <= 75:	return ('Poser')
	elif x <= 78:	return ('Prank')
	elif x <= 82:	return ('Puppet')
	elif x <= 88:	return ('Racist')
	elif x <= 94:	return ('Taggers')
	elif x <= 98:	return ('Holy')
	else:			return ('Gender')

def member_age():
	age = random.randrange(1,10)

	if age == 1:	return ('Young')
	elif age <= 4:	return ('Teen')
	elif age <= 7:	return ('Young adult')
	else:			return ('Adult')

def gang_age():
	x = random.randrange(1,10)

	if x <= 4:		return ('New, '+str(random.randrange(1,12))+' months.', -2)
	if x <= 7:		return ('Young, '+str(random.randrange(1,4))+' years.', -1)
	if x <= 9:		return ('Established, '+str(random.randrange(5,10))+' years.', 0)
	else:			return ('Old, '+str(random.randrange(10,20))+' years.', +1)

def gang_size(mod):
	x = random.randrange(1,10)+mod

	if x <= 0:		return ('Tiny, '+str(random.randrange(1,5))+' members.', -3)
	if x == 1:		return ('Small, '+str(random.randrange(5,10))+' members.', -2)
	if x <= 5:		return ('Medium, '+str(random.randrange(11,25))+' members.', -1)
	if x <= 8:		return ('Large, '+str(random.randrange(26,50))+' members.', 0)
	if x <= 9:		return ('Huge, '+str(random.randrange(51,100))+' members.', 1)
	else:			return ('Gigantic, '+str(random.randrange(100,500))+' members.', 2)

def gang_turf(mod):
	x = random.randrange(1,10)+mod

	if x <= 0:		return ('No turf', -4)
	if x <= 2:		return ('A couple of buildings', -3)
	if x <= 5:		return ('One city block', -2)
	if x <= 8:		return ('2-3 city blocks', -1)
	if x <= 9:		return ('4-6 city blocks', 0)
	else:			return ('7-10 city blocks', 1)

def gang_influence(mod):
	x = random.randrange(1,6)+mod

	if x <= 3:		return ('No external growth, unknown outside locale')
	if x <= 4:		return ('Influence in nearby city/town')
	if x <= 5:		return ('Influence in 2-3 cities in region')
	else: 			return ('Influence in 4-6 cities nationwide')

gang_type_a = gang_type()
gang_type_b = gang_type()
gang_type_c = gang_type()

if (gang_type_a == gang_type_b):
	g_type = gang_type_a
else:
	g_type = gang_type_a+"/"+gang_type_b

if (gang_type_c == gang_type_a or gang_type_c == gang_type_b):
	g_type = g_type + ""
else:
	g_type = g_type + " ("+gang_type_c+")"

m_age = member_age()

(g_age, gmod) = gang_age()
(g_size, smod) = gang_size(gmod)
(g_turf, tmod) = gang_turf(smod)
g_influence = gang_influence(tmod)

description_line = "Gang type: "+g_type+"<br/>"
ganger_age_line = "Age of avg. member: "+m_age+"<br/>"
gang_age_line = "Age of gang: "+g_age+"<br/>"
gang_size_line = "Size of gang: "+g_size+"<br/>"
gang_turf_line = "Turf owned: "+g_turf+". "+g_influence+".<br/>"

out = description_line+ganger_age_line+gang_age_line+gang_size_line+gang_turf_line
print(out)
