<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Template site configuration data
|--------------------------------------------------------------------------
| Template configuration data structure is an array with the following items:
| 1- _T --> template top area page
| 2- _B --> template body area page
| 3- _F --> template footer area page
|
| The "TEMPLATE" item configuration must be exist, because is default tamplate data.
|
| Also you can create another customs template to use in any specific moment.

*/

//

$config['TEMPLATE'] = array(
    '_T' => 't_top/top.php',
    '_B' => 't_body/body.php',
    '_L' => 't_left/left.php',
    '_R' => 't_right/right.php',
	'_F' => 't_footer/footer.php'
 );