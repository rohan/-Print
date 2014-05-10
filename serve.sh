#!/bin/bash
cd /var/www
shopt -s globstar

for file in upload/**; do
    echo "$file"
    if [ "$file" != "upload/" ]
	then    
	    echo "passed $file"
	    lp "$file"
            mv "$file" archive/
    fi
done
