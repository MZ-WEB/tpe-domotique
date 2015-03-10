#!/usr/bin/python
import os
import sqlite3
import time


conn = sqlite3.connect('/opt/ssystemon/ssystemon.db')
cursor = conn.cursor()

os.system("aplay /home/pi/sounds/ssystemon.wav");
os.system("sudo service motion start");
os.system("sudo service motionsensor start");
os.system("sudo service doorsensor start");

# Ouverture d'un fichier en *lecture*:
fichier = open("/opt/state-ssystem.txt", "w")
fichier.write("1")
 
# Fermeture du fichier
fichier.close()

time.sleep(1)

cursor.execute("""INSERT INTO ssystemon (tdate, ttime) VALUES(date('now'), time('now'))""")
conn.commit()

time.sleep(20)
