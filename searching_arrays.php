<?php

$princesses = array(
	'Pincess Bubblegum',
	'Flame Princess',
	'Lumpy Space PRincess',
	'Hot Dog Princess',
	'Slime PRincess',
);

$index = array_search('Hot Dog Princess', $princesses);

var_dump(index);
//returns the index or false

if (array_search('Ghost Princess', $princesses) !== FALSE) {
	echo "I found Ghost Princess!\n";
}

if (array_search('Princess Bubblegum', $princesses) !== FALSE)





$users = array(
	'stretch' => 'Jake the Dog',
	'heroboy' => 'Finn the Human',
	'hambo' => 'Marceline',
	'sPetrikov' => 'The Ice King',
);


$user = array_search('Marceline', $users);

var_dump($users);