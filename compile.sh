#
# FBLA2015 build script
#
# Compiles Less
echo "Starting build at $(date)"
echo "Your current directory ($(pwd)) should be the same as your repository."
lessc --verbose             less/main.less > res/css/FBLA2015.css
lessc --verbose --clean-css less/main.less > res/css/FBLA2015.min.css
echo "Finished build at $(date). Starting to copy directory."
#
# Copies to server location all files except those mentioned in .gitignore.
# Warning: clears directory first.
# Change /var/www/ to your LAMP server's directory
sudo rm -R /var/www/*
sudo rsync -r --exclude-from=.gitignore * /var/www/
echo "Finished copying at $(date)"
