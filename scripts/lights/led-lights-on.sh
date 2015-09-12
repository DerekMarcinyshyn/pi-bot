#!/usr/bin/env bash

# led-lights-on.sh
#
# @author Derek Marcinyshyn <derek@marcinyshyn.com>
# @date   September 7, 2015

echo "turn on led lights"

# turn on all white LEDs
sudo i2cset -y 1 0x70 0x00 0x5a

# turn gain up
sudo i2cset -y 1 0x70 0x09 0x0f

# turn on each individual LEDs
sudo i2cset -y 1 0x70 0x02 0x32
sudo i2cset -y 1 0x70 0x04 0x32
sudo i2cset -y 1 0x70 0x05 0x32
sudo i2cset -y 1 0x70 0x07 0x32