#!/usr/bin/env python
from RPIO import PWM
import time
import sys

TILT_PWM_PIN = 24

# Get the value from Lumen
value = float(sys.argv[ 1 ])  

timeout = time.time() + 0.3

while True:

	servo = PWM.Servo()
	servo.set_servo(TILT_PWM_PIN, value)

	if time.time() > timeout:
		servo.stop_servo(TILT_PWM_PIN)
		break
