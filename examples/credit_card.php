<?php

$validator = new \Utils\GUMP();

$_POST = array(
	'cc' => '987230234-2498234-24234-23' // This is not a valid credit card number
);

$rules = array(
	'cc' => 'valid_cc'
);

print_r($validator->validate($_POST, $rules));
