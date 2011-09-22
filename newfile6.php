<?php
echo E_ERROR."<br />\n";

$switching = array(         10, // key = 0
5    =>  6,
3    =>  7,
                    'a'  =>  4,
11, // key = 6 (maximum of integer-indices was 5)
                    '8'  =>  2, // key = 8 (integer!)
                    '02' => 77, // key = '02'
0    => 12  // the value 10 will be overwritten by 12
);
print_r($switching);
echo "<br />\n";


// fill an array with all items from a directory
$handle = opendir('.');
while (false !== ($file = readdir($handle))) {
	$files[] = $file;
}
closedir($handle);


print_r($files);
?>