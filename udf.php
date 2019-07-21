<?php
// User-defined functions
function hello() {
	// Displays greeting!
	echo "Hello, world!";
}

function hello1() {
	// Returns greeting!
	$greeting = "Hello, world!";
	return $greeting;
}

// With one required parameter
function hello2($user) {
	// Return a greeting to the specified user
	$greeting = "Hello, $user!";
	return $greeting;
}

/* With multiple required parameters; 
note: order of parameters matters */

function hello3($user,$title) {
	// Return a greeting to the user with a title
	$greeting = "Hello, $title $user!";
	return $greeting;
}

// With parameter with default value
// The parameter then becomes an optional parameter
function hello4($user = 'user') {
	// Returns a generic greeting to 'user' or any supplied one
	$greeting = "Hello, $user!<br>";
	return $greeting;
}

// with mix of required and optional parameters
function hello5($user, $title = 'Fellow') {
	// Returns a greeting to specified user with optional title
	$greeting = "Hello, $title $user!<br>";
	return $greeting;
}

function getPatientData($datasource,$name) {
	// Return data of specified patient
	$patient_data = array();
	foreach ($datasource as $patient) {
		if ($patient['name'] == $name) {
			$patient_data = $patient;
		}
	}
	return $patient_data;
}

function displayPatientData($data) {
	// Displays data in user-friendly manner
	$record = "
		Name: "    . $data['name'] . "<br>
		Age: "     . $data['age'] . "<br>
		Sex: "     . $data['sex'] . "<br>
		Disease: " . $data['disease'];
	return $record;
}

/* Exercise 1: Create a function that shows your name.
 Test the function by invoking or calling it.
 */

/* Exercise 2: Create a function that returns a 
user's favorite color. Color is a required parameter
for the function. Test the function by display
the its output.
*/

/* Exercise 3: Create a function that adds 2 numbers and
returns the sum. Test the function.
*/

/* Exercise 4: Create a function that adds two to three numbers and returns the sum. Test the function.
*/
