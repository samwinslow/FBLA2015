#
# FBLA2015 build script
#
# Compiles Less

cd ~/Documents/FBLA/FBLA2015/

echo "Starting build at $(date)"
lessc --verbose             less/main.less > res/css/FBLA2015.css
lessc --verbose --clean-css less/main.less > res/css/FBLA2015.min.css
echo "Finished build at $(date). Starting to copy directory."

#
# Copies to server location all files except those mentioned in .gitignore.
# Warning: clears directory first.

sudo rm -R /Library/WebServer/Documents/*
sudo rsync -r --exclude-from=.gitignore * /Library/WebServer/Documents/
echo "Finished copying at $(date)"