#!/usr/bin/env bash

# Pull new updates from GitHub
cd /srv/pisg/pisg-config/
git pull

# Render all configs.
for config in /srv/pisg/pisg-config/config/*.cfg
do
  /srv/pisg/pisg --configfile=$config
done
