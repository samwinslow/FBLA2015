echo "Starting build at $(date)"
echo "Your current directory ($(pwd))"
echo "should be the same as your repository."
lessc less/bootstrap.less > dist/css/bootstrap.css
#lessc --compress less/bootstrap.less > dist/css/bootstrap.min.css
echo "Finished build at $(date)"