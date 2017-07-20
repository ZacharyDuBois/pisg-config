#!/usr/bin/env bash

# Make sure there isn't a generation running.
if [[ $(pgrep pisg) != "" ]]
then
  echo "Process already running."
  exit 0
fi

# Pull new updates from GitHub
cd /srv/pisg/pisg-config/
git pull

# Render all configs.
for config in /srv/pisg/pisg-config/config/*.cfg
do
  nice -n 5 /srv/pisg/pisg --configfile=$config
done

exit 0
