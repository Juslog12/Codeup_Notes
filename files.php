<?php

$filename = 'princesses.txt';
$filename = '../notes/princesses.txt';
$filename = '/vagrant/exercises/princess.txt';

echo__FILE__ . PHP_EOL;
echo__FILE__ . PHP_EOL;

//checks if the file exists and can be read by our script
is_readable($filename);

//get the size of the file
filesize = filesize($filename);

//File pointer.  Describes: 
// 1) Which file
// 2) What we can/can't do with the file (read, write, etc)
// 3) Where we are in the file
$handle = fopen($filename, 'r');

//Check if the file pointer has reached the end of the file
feof($handle);

//Pull back the entire contents of the file as a single string
$princessString = trim(fread($read, $fileSize));

//closes the file
fclose($handle);


function readBytesATime($filename, $bytes = 100) {
	if (is_readable($filename)) {
		$handle = fopen($filename, 'r');

		while(!feof($handle)){
			$string = fread($handle, $bytes);

			echo $string;

			sleep(1);
		}
		fclose($handle);
	}
}

function readBytesATime($filename, $bytes = 100) {
	$contents = '';
	if (is_readable($filename)) {
		$handle = fopen($filename, 'r');

		while(!feof($handle)){
			$contents .= fread($handle, $bytes);

			sleep(1);
		}
		fclose($handle);
	}
	return $contents;
}

readBytesATime($filename, $bytes = 100) {

}

//Remove extra \n at the end of the file
$princessSTring = trim($princessString);

//Break our string apart into an array
$princesses = explode(PHP_EOL, $princessString);

//Pick a random index
$hots = array_rand($princesses);

fwrite(STDOUT) = 