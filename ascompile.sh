#
# FBLA2015 build script
#
# Compiles Less
echo "Starting build at $(date)"
lessc --verbose             /Users/ashen/Documents/FBLA/FBLA2015/less/main.less > res/css/FBLA2015.css
echo "Finished build at $(date). Starting to copy directory."
#
# Copies to server location all files except those mentioned in .gitignore.
# Warning: clears directory first.
# Change /var/www/ to your LAMP server's directory
sudo rm -R /Library/WebServer/Documents/*
sudo rsync -r --exclude-from=.gitignore * /Library/WebServer/Documents/
echo "Finished copying at $(date)"
