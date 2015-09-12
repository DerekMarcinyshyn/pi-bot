#!/usr/bin/env bash

# led-lights-off.sh
#
# @author Derek Marcinyshyn <derek@marcinyshyn.com>
# @date   September 7, 2015

echo "turn off led lights"

sudo i2cset -y 1 0x70 0x00 0x00
