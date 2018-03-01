#!/bin/sh

# Fork background process that writes to time.log to simulate an application
# log one might want to monitor
#touch time.log
#sh ./timer.sh > time.log &
# Tailing a file of interest will sent its contents to stdout which is captured
# by ACCS
tail -f time.log &

# Launch Apache Server to start serving up our PHP application--this is only
# necessary because we provided a start command in the manifest.json
apache2-run
