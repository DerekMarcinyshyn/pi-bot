#!/usr/bin/env bash

# janus.sh
#
# @author Derek Marcinyshyn <derek@marcinyshyn.com>
# @date   September 6, 2015

echo "starting Janus WebRTC gateway"

/opt/janus/bin/janus -d 5 -6 >/var/log/cam/janus.log 2>&1 &
