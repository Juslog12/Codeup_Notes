<?php

//Example 1

function get_groceries ($groceryList, $store = 'HEB', $money) {

	return $groceries;
}

$groceryList = array('apples', 'bread', 'milk')

$groceries = get_groceries($groceryList); 



//Example 2

function test ($a)
{
	echo $a . PHP_EOL;
}

test("hello")

//or you can pass a variable for "hello"

$x = "hello";

test($x);



//list items 

$items = array ('TODO item 1', 'TODO item 2 - blah');

function list_items($list)
{
	$result = '';

	foreach ($list as $key => $value) 
	{
			$result .= $key . PHP_EOL;
	}
	
	return $result;
}

echo list_items($items);

$result .= $key . PHP_EOL;
$result = $result . $key . PHP_EOL;		


