<?php
$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer

echo gettype($a_bool); // prints out:  boolean
echo "\n";
echo gettype($a_str);  // prints out:  string
echo "\n";
// If this is an integer, increment it by four
if (is_int($an_int)) {
	$an_int += 4;
}
print "an_int = $an_int \n";

// If $bool is a string, print it out
// (does not print out anything)
if (is_string($a_bool)) {
	echo "String: $a_bool";
}
?>
