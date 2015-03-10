/*
  RF_Sniffer
  
  Hacked from http://code.google.com/p/rc-switch/
  
  by @justy to provide a handy RF code sniffer
*/

#include "RCSwitch.h"
#include <stdlib.h>
#include <stdio.h>
#include <unistd.h>     
     
RCSwitch mySwitch;
 
int main(int argc, char *argv[]) {
  
     // This pin is not the first pin on the RPi GPIO header!
     // Consult https://projects.drogon.net/raspberry-pi/wiringpi/pins/
     // for more information.
     int PIN = 2;
     
     if(wiringPiSetup() == -1)
       return 0;

     mySwitch = RCSwitch();
     mySwitch.enableReceive(PIN);
     
    
     while(1) {
      sleep(1);
      if (mySwitch.available()) {
        int value = mySwitch.getReceivedValue();
        if (value == 0) {
        } else {    
   		if (value == 5510485) { 
		//Signal (touche 1 ON Chanel IV) reçu
		system("sudo service ssystemon start");
		sleep(20);
        	}
		if (value == 5510484) { 
                //Signal (touche 1 OFF Chanel IV) reçu
                system("sudo service ssystemoff start");
                sleep(20);
		}
		if (value == 5526612) { 
                //Signal (touche 4 OFF Chanel IV) reçu
                system("sudo service systemoff start");
               	sleep(20);
		}
	}
        mySwitch.resetAvailable();
      }
      
  
  }

  exit(0);


}

