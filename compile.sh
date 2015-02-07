echo "Starting build at $(date)"
echo "Your current directory ($(pwd)) should be the same as your repository."
lessc --verbose             less/main.less > res/css/FBLA2015.css
lessc --verbose --clean-css less/main.less > res/css/FBLA2015.min.css
echo "Finished build at $(date)"