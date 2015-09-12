#!/usr/bin/env python
from RPIO import PWM
import time

PAN_PWM_PIN = 23
TILT_PWM_PIN = 24

timeout = time.time() + 0.5

while True:

	servo = PWM.Servo()
	servo.set_servo(PAN_PWM_PIN, 1250)
	servo.set_servo(TILT_PWM_PIN, 1200)

	if time.time() > timeout:
		servo.stop_servo(PAN_PWM_PIN)
		servo.stop_servo(TILT_PWM_PIN)
		break
