<?php
$beer = 'Heineken';
echo "$beer's taste is great\t"; //有效；单引号"'"是非法的变量名组成元素
echo "He drank some $beer"; //无效;字母s是有效的变量名组成元素，但是这里的变量是$beer
echo "He drank some ${beer}s"; // 有效
echo "He drank some {$beer}s"; // 有效
?> 
