<?php

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicisists_array = explode(', ',$physicists_string);


unset($physicisists_array[1]);
//to chose what elements of a string you want to remove

$physicisists_array[] = 'Richard Feynman';
//to add a new name


$physicist_string = implode("\n",$physicisists_array)
//take last name off, add and to it, put it back on

$ghost = array_pop($newPrincesses);
//remove the last item in an array