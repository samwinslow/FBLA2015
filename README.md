# FBLA2015

I don't know much about these technologies. As far as I know, if we do things this way, it's cleaner and _way_ more 2015.
### Site structure (eventually)
- HTML generated either at build time (Mustache) or serverside (PHP, Node, etc)  
  Likely a combination of both, as the backend stuff will be simplest with PHP and templates/partials can be done easily that way too
- CSS generated from Bootstrap's Less files at build time (Grunt)
- JS generated from Bootstrap's Grunt things

## Build instructions for development
Consult [Bootstrap's docs](http://getbootstrap.com/getting-started/#grunt). In order to build, you will need to:

1. Clone this repository
2. Install node, npm, and grunt on your machine
3. Run `npm install` within the repository so that Grunt will run happily
4. Build with `grunt dist` according to Bootstrap's spec
