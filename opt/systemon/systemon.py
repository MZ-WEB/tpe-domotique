#!/usr/bin/python
import os
import sqlite3
import time


#conn = sqlite3.connect('/opt/ssystemon/ssystemon.db')
#cursor = conn.cursor()

os.system("sudo service receiver restart");
os.system("aplay /home/pi/sounds/systemon.wav");
time.sleep(1)
#cursor.execute("""INSERT INTO systemon (tdate, ttime, state) VALUES(date('now'), time('now')), 1""")
#conn.commit()

time.sleep(20)
