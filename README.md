# PISG Config

This repository houses the configuration for [PISG](http://pisg.sourceforge.net) on my ZNC server. It creates all my [IRC stat pages](https://ircstats.zacharydubois.moe/).

## Notes

- If you have aliases or a link, open an issue and I will add them.
- If you do not want to be displayed on the stats page, please create an issue and I will add you to the blocks list.
- I will not remove any blocks in the bans section.
- If spam shows up on a stat page, please open an issue so I can ban the nickname.
- If you don't want stats generated for your channel and you are the channel owner, open an issue and I will remove it.

## My setup:

- ZNC and PISG are hosted on the same server and same group. Logs are readable by the group.
- The following cronjobs are in place as the PISG user.

```cron
*/15 * * * * /bin/bash /srv/pisg/pisg-config/script/gen.bash > /srv/pisg/last.log 2>&1
55 23 * * * /bin/bash /srv/pisg/pisg-config/script/purgecache.bash > /srv/pisg/purge.log 2>&1
```

- The pages dir, gfx dir, and index.php are symlinked into the web root.
- PISG is installed into `/srv/pisg` while ZNC is installed into `/srv/znc`

## Tips

Tips are always accepted and greatly appreciated. If you want to send a tip, you can send some BTC to `1NYzSE8xmorvrJJjt9a5riYf5jkKqSCGD3`.
