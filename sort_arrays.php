<?php


$princesses = array(
	'Pincess Bubblegum'
	'Hotdog Princess'
	'Lumpy Space PRincess'
	'Hot Dog Princess'
	'Slime PRincess'
);

asort($princesses, SORT_NATURAL | SORT_FLAG_CASE);
print_r($princesses);
ksort($princesses);
print_r($princesses);

//sort sort's in alphabetical order
//rsort sort's in reverse alphabetical order
//asort alphabetize by associative array sort, keeps associations
//ksort sort by keys
//arsort - associative reverse sort
//krsort - reverse key order
//can modify the type of sort by adding sort types in the second value ex.: (...,SORT_FLAG_CASE)


$users = array(
	'stretch' => 'Jake the Dog',
	'heroboy' => 'Finn the Human'
	'hambo' => 'Marceline',
	'sPetrikov' => 'The Ice King'
);

krsort($users); //key reverse sort
print_r($users);




//shuffle the order, randomly orders arrays
$princesses = array(
	'Pincess Bubblegum'
	'Hotdog Princess'
	'Lumpy Space PRincess'
	'Hot Dog Princess'
	'Slime PRincess'
);
shuffle($princesses);
print_r($princesses);


