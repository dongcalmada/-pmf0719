<?php
// To test the user-defined functions
include 'udf.php';
include 'data.php';


$patient_record = getPatientData($patients,'Barbara');

echo displayPatientData($patient_record);
