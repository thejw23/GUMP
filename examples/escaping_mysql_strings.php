<?php

$validator = new \Utils\GUMP();

$_POST = array(
	'username' => "my username",
	'password' => "' OR ''='"
);

$validator->sanitize($_POST);

$filters = array(
	'username' => 'trim',
	'password' => 'trim|strtolower|addslashes'
);

print_r($validator->filter($_POST, $filters));

// OR (If you have a mysql connection)

$validator->sanitize($_POST);

$_POST = array(
	'username' => "my username",
	'password' => "' OR ''='"
);

$filters = array(
	'username' => 'trim',
	'password' => 'trim|strtolower'
);

$validator->filter($_POST, $filters);

echo mysql_real_escape_string($_POST['password']);
