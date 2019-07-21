<?php
// Testing patients CRUD functions
include 'crud_patients.php';

// $data = array(
// 	'name'    => 'Zaldy',
// 	'age'     => 62,
// 	'sex'     => 'Male',
// 	'disease' => 'hernia'
// 	);

// addPatient($data);

// print_r($patients);

// $patient = getPatientByName('Barbara');
// print_r($patient);

echo listPatients();

// Add patient
$data = array(
	'name'    => 'Zaldy',
	'age'     => 62,
	'sex'     => 'Male',
	'disease' => 'hernia'
	);

addPatient($data);

echo listPatients();

// Edit patient
$data = array(
	'name'    => 'Romeo',
	'age'     => 70,
	'sex'     => 'Male',
	'disease' => 'arthritis'	
	);

editPatientByName('Romeo',$data);

echo listPatients();
