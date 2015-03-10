#!/usr/bin/python
import sqlite3
import time
import RPi.GPIO as io
io.setmode(io.BCM)

pir_pin = 18

io.setup(pir_pin, io.IN)

conn = sqlite3.connect('/opt/detecteurmouvements/detecteurmouvements.db')
cursor = conn.cursor()
while True:
	time.sleep(1)
	if io.input(pir_pin):
		#print("Mouvement detecte !")
		cursor.execute("""INSERT INTO detecteurmouvements (tdate, ttime) VALUES(date('now'), time('now'))""")
		conn.commit()
		#print("DEBUG 1")
		time.sleep(1)
		#print("DEBUG 2")
