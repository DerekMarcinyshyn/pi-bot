# Pi-bot

A RaspberryPi cam bot using a web interface to control IR/LED lights and pan/tilt the camera.

The camera is streamed using [Janus WebRTC Gateway](https://janus.conf.meetecho.com/) currently only support with the Firefox browser. 

### Hardware

 - RaspberryPi 
 - RaspberryPi IR camera
 - [Bright Pi IR/LED lights](https://www.pi-supply.com/product/bright-pi-bright-white-ir-camera-light-raspberry-pi/)
 - [Dagu Pan/Tilt kit](http://www.dawnrobotics.co.uk/dagu-sensor-pan-tilt-kit/)

### Software

 - [Materialize CSS](http://www.materializecss.com)
 - [Lumen](http://lumen.laravel.com/)
 - [Janus WebRTC Gateway](https://janus.conf.meetecho.com/)
 - Python scripts to control the pan/tilt
 - Bash scripts to control the IR/LED lights
 - PHP 5.6 
 - Apache 2.4

### Usage

Start the Janus WebRTC Gateway first.

```
/home/pi/app/scripts/run.sh
```

Click start.

Select the stream from Streams List dropdown.

Click watch.

(*) the  UI could be better done.

The arrows and the switches should work if wired up to the same pins.

###  Wiring

coming soon

### Pictures

coming soon
