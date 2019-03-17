#!/bin/bash

# change to the website directory
cd "/var/www/html/itsallwong"

# update to the latest version
git checkout master
git pull

# change back into the main project folder
cd ..

# add the updated Kirby submodule and commit
git add itsallwong
git commit -m "Update website"
