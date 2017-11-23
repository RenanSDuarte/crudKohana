<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'PureLDAP',
	'hash_method'  => 'sha256',
	'hash_key'     => NULL,
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		//'admin' => '508817cf6a6f0a2bc5c641ec41edbd3e55d9759545f76846277291a6fcf348bd',
	),

);