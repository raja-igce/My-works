<?php
require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'http://localhost/google_login/');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', 'raja');
define( 'DB_NAME', 'ads1');


/*define( 'BASE_PATH', 'http://e-soft.in/ads/');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'esoft2zu_ads');
define( 'DB_PASSWORD', 'wNBME{5L%THg');
define( 'DB_NAME', 'esoft2zu_ads');*/


//Facebook App Details
define('FB_APP_ID', '2168629353152693');
define('FB_APP_SECRET', 'eaf3ab53faee6ca3081c7860127dafba');
define('FB_REDIRECT_URI', 'http://localhost/google_login/');




//Google App Details
define('GOOGLE_APP_NAME', 'ads');
define('GOOGLE_OAUTH_CLIENT_ID', '6434400644-gmvn2c52cul432ol36vqonkg2r05f16h.apps.googleusercontent.com');
define('GOOGLE_OAUTH_CLIENT_SECRET', 'UFmFOpLCN77Qh-UONCYlf5vw');
define('GOOGLE_OAUTH_REDIRECT_URI', 'http://e-soft.in/ads/login.php');
define("GOOGLE_SITE_NAME", 'http://e-soft.in/ads'); 


//Twitter login
define('TWITTER_CONSUMER_KEY', 'YOUR_CONSUMER_KEY');
define('TWITTER_CONSUMER_SECRET', 'YOUR_CONSUMER_SECRET');
define('TWITTER_OAUTH_CALLBACK', 'YOUR_OAUTH_CALLBACK');



function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
