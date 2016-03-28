<?php


require_once 'smushit.php';

// Initialise the Smushit client
$smushit = new SmushIt();


// Compress local image and return result object
$local_result = $smushit->compress('vader.jpg');
var_dump($local_result);
//  stdClass Object
//  (
//      [src] => image.jpg
//      [src_size] => 22957
//      [dest] => http://smushit.zenfs.com/results/50c57e58/smush/image.jpg
//      [dest_size] => 22519
//      [percent] => 1.91
//  )