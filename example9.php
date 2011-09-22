<?php
$large_number =  2147483647;
var_dump($large_number);
// 输出为：int(2147483647)

$large_number =  2147483648;
var_dump($large_number);
// 输出为：float(2147483648)

// 同样也适用于十六进制表示的整数： 从 2^31 到 2^32-1:
var_dump( 0xffffffff );
// 输出: float(4294967295)

// 不适用于大于 2^32-1　的十六进制表示的数:
var_dump( 0x100000000 );
// 输出: int(2147483647)

$million = 1000000;
$large_number =  50000 * $million;
var_dump($large_number);
// 输出: float(50000000000)

var_dump(25/7);         // float(3.5714285714286) 
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4) 

echo (int) ( (0.1+0.7) * 10 ); // 显示 7!

?> 
