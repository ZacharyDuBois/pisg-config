#!/usr/bin/env bash

# Wait for PISG to finish.
while pgrep pisg > /dev/null
do
  sleep 1
done

# Set to purge the cache once a day.
rm /srv/pisg/cache/*

exit 0
