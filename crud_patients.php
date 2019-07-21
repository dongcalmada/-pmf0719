<?php
// CRUD functions for patients data
include 'data.php';

function addPatient($data) {
	global $patients;
	// $data is array
	array_push($patients,$data);
	return 0;
}

function editPatientByName($name,$new_patient_data) {
	global $patients;
	$index = 0;
	foreach ($patients as $patient) {
		if ($patient['name'] == $name) {
			$patients[$index] = $new_patient_data;
		}
		$index += 1;
	}
	return 0;
}

function getPatientByName($name) {
	// Return data of specified patient
	global $patients;
	$patient_data = array();
	$patient_found = findPatientByName($name)[0];
	$patient_index = findPatientByName($name)[1];
	if ($patient_found) {
		$patient_data = $patients[$patient_index];
	}
	return $patient_data;
}

function deletePatientByName($name) {
	global $patients;
	$index = 0;
	foreach ($patients as $patient) {
		$found = findPatientByName($name);
		if ($found) {
			unset($patients[$index]);
		}
		$index += 1;
	}
	return 0;
}

function findPatientByName($name) {
	$found = false;
	$index = 0;
	global $patients;
	foreach ($patients as $patient) {
		if ($patient['name'] == $name) {
			$found = true;
			break;
		}
		$index += 1;
	}
	return array($found,$index);
}

function listPatients() {
	// Romeo, 62, Male, hernia
	global $patients;
	$patient_list = null;
	foreach ($patients as $patient) {
		$name = $patient['name'];
		$age = $patient['age'];
		$sex = $patient['sex'];
		$disease = $patient['disease'];

		$patient_list .= "$name, $age, $sex, $disease<br>";
	}

	$patient_list .= "<br><br>";
	
	return $patient_list;
}