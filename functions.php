<?php
// Some built-in functions of PHP

// string functions

// substr - return part of a string

$name = 'Leo Capeding';
$firstname = substr($name,0,3);
echo $firstname;

$lastname = substr($name,-8);
echo "<br>$lastname";

$title = "The quick brown fox";
// Get the word 'brown' using substr
$color = substr($title,10,5);
echo "<br>$color";

$studentnumbers = array('2008001','2010920','2009110','20130012');
/* 
The first four characters indicate year.
Loop over the array and output the years
line by line.
*/
foreach ($studentnumbers as $studentnumber) {
	$year = substr($studentnumber,0,4);
	echo "<br>$year";
}

// strlen (get the length of a string)

$length = strlen($name);
echo "<br>$length";

/* Loop over the $studentnumbers. Display on screen the item that exceeds 7 characters. */

foreach ($studentnumbers as $studentnumber) {
	$length = strlen($studentnumber);
	if ($length > 7) {
		echo "<br>$studentnumber";
	}
}

// str_replace - replace a string with another string
// str_replace(needle,newneedle,haystack);

$newfirstname = "Lea";

$newname = str_replace($firstname, $newfirstname, $name);
echo "<br>$newname";

$studenum = '20160001'; // replace 2016 with 2018 using str_replace

$currentyear = '2016';
$newyear = '2018';
$newstudenum = str_replace($currentyear,$newyear,$studenum);
echo "<br>$newstudenum";

// trim, ltrim, rtrim

$os = '    Linux  '; // 4 spaces before and 2 after Linux

echo "<br>$os";
echo "<br>Length: " . strlen($os);

$newos = trim($os);
echo "<br>$newos";
echo "<br>Length: " . strlen($newos);

$newos = ltrim($os);
echo "<br>$newos";
echo "<br>Length: " . strlen($newos);

$newos = rtrim($os);
echo "<br>$newos";
echo "<br>Length: " . strlen($newos);

// strstr - find the first occurrence of a string 
// strstr(haystack,needle,true/false)

$email = 'leo@yahoo.com';
$domain = '@';
$found = strstr($email,$domain);
echo "<br>Found: $found";

$atsign = '@';
$email1 = 'leo@yahoo.com';
$found = strstr($email1,$atsign);

echo "<br>";
if ($found) {
	echo "Valid email address!";
} else {
	echo "Invalid email address!";
}

$email2 = 'lea@gmail.com';
$atsign = '@';
$domain = strstr($email2,$atsign);
$user = strstr($email2,$atsign,true);
echo "<br>Domain: $domain";
echo "<br>User: $user";

// strpos - find the position of first occurrence of string
// strpos(haystack,needle)

$name = 'Leo Capeding';
// Determine the position of 'Capeding'
$lname = 'Capeding';
$pos = strpos($name,$lname);
echo "<br>$pos";


// Does the name contain 'Capeding'?
$found = strpos($name,$lname);
if ($found) {
	echo "$lname is contained in the name!";
} else {
	echo "$lname is not found in the name!";
}

// explode - convert a string to array
// explode(separator,haystack)
$names = 'Dong,Lea,Gilbert,Joyce';
$names_array = explode(',',$names);
echo "<br>";
print_r($names_array);

// Array functions

// count - determine the number of items in an array

$count = count($studentnumbers);
echo "<br>$count student numbers!";

// array_push - add an item in the end of array
// array_push(array,newitem)

$other_studenum = '2004429';
array_push($studentnumbers,$other_studenum);
print_r($studentnumbers);

echo "<br>Count: " . count($studentnumbers);

// array_pop - remove the last item of array
array_pop($studentnumbers);
print_r($studentnumbers);

// array_unshift - inserts an item in the beginning of array
array_unshift($studentnumbers,$other_studenum);
print_r($studentnumbers);

// array_shift - removes the first item of array
array_shift($studentnumbers);
print_r($studentnumbers);

// sort - sorts an indexed array in ascending order
sort($studentnumbers);
echo "<br>";
print_r($studentnumbers);

// rsort - sorts an indexed array in descending order.
rsort($studentnumbers);
echo "<br>";
print_r($studentnumbers);

// asort - sorts an associative array in ascending order
$names = array(
	'Dong' => 'Calmada', 
	'Gilbert' => 'Aquino'
	);
print_r($names);
asort($names);
echo "<br>";
print_r($names);

// arsort - sorts an associative array in descending order
arsort($names);
echo "<br>";
print_r($names);

// array_keys - get the keys of an associative array

$firstnames = array_keys($names);
echo "<br>";
print_r($firstnames);

// array_values - get the values of an associative array

$lastnames = array_values($names);
echo "<br>";
print_r($lastnames);

$customers = array(
	'tony' => 'f',
	'peter' => 'm',
	'linda' => 'f'
	);
/* Get the names from the $customers data using array_keys function. Display them line by line.
*/
$customernames = array_keys($customers);
foreach ($customernames as $customer) {
	echo "<br>$customer";
}

/* Get the names from the $customers data using array_keys function. Display them line by line in ascending order.
*/
$customernames = array_keys($customers);
sort($customernames);
foreach ($customernames as $customer) {
	echo "<br>$customer";
}

// unset - delete an item in the array

unset($customers['linda']);
print_r($customers); // linda is no longer in the list
