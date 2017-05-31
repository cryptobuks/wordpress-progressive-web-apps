<?php

define("PWAPP_VERSION", '0.1');
define('PWAPP_PLUGIN_NAME', 'Progressive Web Apps');
define('PWAPP_DOMAIN', 'progressive-web-apps');

define('PWAPP_PLUGIN_PATH', WP_PLUGIN_DIR . '/'.PWAPP_DOMAIN.'/');

define('PWAPP_FEEDBACK_EMAIL','feedback@appticles.com');

define('PWAPP_MORE_UPDATES','http://cdn-wpmp.appticles.com/dashboard/more/more4.json');
define('PWAPP_MORE_UPDATES_HTTPS','https://d3oqwjghculspf.cloudfront.net/dashboard/more/more4.json');
define('PWAPP_MORE_UPDATES_VERSION', 4);

// define blog version
define('PWAPP_BLOG_VERSION',get_bloginfo('version'));

// define the string used for generating comments tokens (can be overwritten for increasing security)
define('PWAPP_CODE_KEY','%)u#b5+5[ce$;TP');
