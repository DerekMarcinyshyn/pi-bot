#!/usr/bin/env bash

# stream.sh
#
# @author Derek Marcinyshyn <derek@marcinyshyn.com>
# @date   September 5, 2015


echo "Starting Janus WebRTC..."


# Janus WebRTC
raspivid --verbose --nopreview --width 640 --height 360 \
  --framerate 15 --bitrate 1000000 --profile baseline --timeout 0 -o - | gst-launch-1.0 -v fdsrc ! h264parse \
    ! rtph264pay config-interval=1 pt=96 ! udpsink host=127.0.0.1 port=8004

