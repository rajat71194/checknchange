<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');
define('DATE_FORMATE_CONSTANT','d M Y h:i A');
define('DATE_FORMATE_CONSTANT_ONLY','d M Y');
define('GET_DAY_CONSTANT','d');
define('GET_MONTH_CONSTANT','M');
define('GET_YEAR_CONSTANT','Y');
define('GET_TIME_CONSTANT','h:i A');


define('SMTP_HOST', "smtp.gmail.com");
define('IMAP_HOST', "{checknchange.com:993/imap/ssl}INBOX");
define("SMTP_PORT", "587");
define("IMAP_USERNAME", "deoradharmendra2016@gmail.com");
define("SMTP_USERNAME", "deoradharmendra2016@gmail.com");
define("SMTP_PASSWORD", "Sonu123!@#");
define("FROM_EMAIL", "kundanfortest@gmail.com");
require_once 'email_constants.php';
/* End of file constants.php */
/* Location: ./application/config/constants.php */