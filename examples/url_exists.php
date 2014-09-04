<?php

error_reporting(-1);

ini_set('display_errors', 1);

$validator = new \Utils\GUMP();

$_POST = array(
	'url' => 'http://sudygausdjhasgdjasjhdasd987lkasjhdkasdkjs.com/' // This url obviously does not exist
);

$rules = array(
	'url' => 'url_exists'
);

$is_valid = $validator->validate($_POST, $rules);

if($is_valid === true) {
	echo "The URL provided is valid";
} else {
	print_r($validator->get_errors());
}
