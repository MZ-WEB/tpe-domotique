#!/usr/bin/python
import os
import sqlite3
import time


conn = sqlite3.connect('/opt/systemoff/systemoff.db')
cursor = conn.cursor()

os.system("aplay /home/pi/sounds/systemoff.wav")

time.sleep(1)

cursor.execute("""INSERT INTO systemoff (tdate, ttime) VALUES(date('now'), time('now'))""")
conn.commit()

time.sleep(5)

os.system("sudo halt")
