<?php
// 下面的例子是在字符串中引用数组
// 当数组处于字符串外部时，要把数组的值用括号括起来且不要用花括号{ }

// 显示所有错误
error_reporting(E_ALL);

$fruits = array('strawberry' => 'red', 'banana' => 'yellow');

// 有效；但是注意在字符串外面不能这样引用数组
echo "A banana is $fruits[banana].";

// 有效
echo "A banana is {$fruits['banana']}.";

// 有效，但是PHP会先寻找常量banana
echo "A banana is {$fruits[banana]}.";

// 无效，要用花括号，这里将会产生一个解析错误
echo "A banana is {$fruits['banana']}.";

// 有效
echo "A banana is " . $fruits['banana'] . ".";

// 有效
echo "This square is $square->width meters broad.";

// 无效，解决方法见复杂结构
echo "This square is $square->width00 centimeters broad.";
?> 
