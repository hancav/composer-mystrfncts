<?php
require 'bootstrap.php';

use MyStrFncts\MyStrLen;
use MyStrFncts\MyStrToUpper;

//--
$testString = 'Test String';

//--
$length = MyStrLen::myStrLenFnct($testString);

echo "\n Length of : # $testString # is : # $length # elements. \n";

//--
$upperString = MyStrToUpper::myStrToUpperFnct($testString);

echo "\n Test String : # $testString # Upper String  : # $upperString # \n";

echo "\n";
