<?php
require 'bootstrap.php';

$testString = 'Test String';

$length = MyStrLen\MyStrLen::myStrLenFnct($testString);

echo "\n Length of : # $testString # is : # $length # elements. \n";

//--

$upperString = MyStrToUpper\MyStrToUpper::myStrToUpperFnct($testString);

echo "\n Test String : # $testString # Upper String  : # $upperString # \n";

echo "\n";
