<?php
$large_number =  2147483647;
var_dump($large_number);
// ���Ϊ��int(2147483647)

$large_number =  2147483648;
var_dump($large_number);
// ���Ϊ��float(2147483648)

// ͬ��Ҳ������ʮ�����Ʊ�ʾ�������� �� 2^31 �� 2^32-1:
var_dump( 0xffffffff );
// ���: float(4294967295)

// �������ڴ��� 2^32-1����ʮ�����Ʊ�ʾ����:
var_dump( 0x100000000 );
// ���: int(2147483647)

$million = 1000000;
$large_number =  50000 * $million;
var_dump($large_number);
// ���: float(50000000000)

var_dump(25/7);         // float(3.5714285714286) 
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4) 

echo (int) ( (0.1+0.7) * 10 ); // ��ʾ 7!

?> 
