<?php

// Add the custom validator
\Utils\GUMP::add_validator("is_object", function($field, $input, $param = NULL) {
    return is_object($input[$field]);
});

// Generic test data
$input_data = array(
  'not_object'   => 5,
  'valid_object' => new stdClass()
);

$rules = array(
  'not_object'   => "required|is_object",
  'valid_object' => "required|is_object"
);

// METHOD 1 (Long):

$validator = new \Utils\GUMP();

$validated = $validator->validate(
	$input_data, $rules
);

if($validated === true) {
	echo "Validation passed!";
} else {
	echo $validator->get_errors();
}

// METHOD 2 (Short):

$is_valid = \Utils\GUMP::is_valid($input_data, $rules);

if($is_valid === true) {
	echo "Validation passed!";
} else {
    print_r($is_valid);
}
