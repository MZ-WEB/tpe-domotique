#!/usr/bin/python
import os
import sqlite3
import time


conn = sqlite3.connect('/opt/ssystemoff/ssystemoff.db')
cursor = conn.cursor()

os.system("aplay /home/pi/sounds/ssystemoff.wav");
os.system("sudo service motion stop");
os.system("sudo service motionsensor stop");
os.system("sudo service doorsensor stop");

# Ouverture d'un fichier en ecriture :
fichier = open("/opt/state-ssystem.txt", "w")
fichier.write("0")

# Fermeture du fichier
fichier.close() 

time.sleep(1)

cursor.execute("""INSERT INTO ssystemoff (tdate, ttime) VALUES(date('now'), time('now'))""")
conn.commit()

time.sleep(20)
