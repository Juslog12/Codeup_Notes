<?php

function adder ($a, $b){
echo $a + b
}


function inspect ($variable = null, $dump = true)
{
	if ($dump === true) {
		var_dump($variable);
	} else {}

	print_r($variable);
}