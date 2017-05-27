#!/usr/bin/env bash

# Wait for PISG to finish.
while pgrep pisg > /dev/null
do
  sleep 1
done

# Set to purge the cache once a day.
find /srv/pisg/cache/ -type f -exec rm {} \;

exit 0
