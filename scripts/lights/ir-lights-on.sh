#!/usr/bin/env bash

# led-lights-on.sh
#
# @author Derek Marcinyshyn <derek@marcinyshyn.com>
# @date   September 7, 2015

echo "turn on IR lights"

# turn on all IR lights
sudo i2cset -y 1 0x70 0x00 0xa5

# turn gain up
sudo i2cset -y 1 0x70 0x09 0x0f

# turn on each individual IR lights
sudo i2cset -y 1 0x70 0x01 0x32
sudo i2cset -y 1 0x70 0x03 0x32
sudo i2cset -y 1 0x70 0x06 0x32
sudo i2cset -y 1 0x70 0x08 0x32