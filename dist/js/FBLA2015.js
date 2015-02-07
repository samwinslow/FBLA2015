/*!
 * Bootstrap v1.0 (http://github.com/samwinslow/FBLA2015)
 * Copyright 2011-2015 Sam Winslow, Andrew Shen
 * Licensed under MIT (https://github.com/samwinslow/FBLA2015/blob/master/LICENSE)
 */

if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

+function ($) {
  'use strict';
  var version = $.fn.jquery.split(' ')[0].split('.')
  if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1)) {
    throw new Error('Bootstrap\'s JavaScript requires jQuery version 1.9.1 or higher')
  }
}(jQuery);

