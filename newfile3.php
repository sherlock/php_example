<?php
// ��������������ַ�������������
// �����鴦���ַ����ⲿʱ��Ҫ�������ֵ�������������Ҳ�Ҫ�û�����{ }

// ��ʾ���д���
error_reporting(E_ALL);

$fruits = array('strawberry' => 'red', 'banana' => 'yellow');

// ��Ч������ע�����ַ������治��������������
echo "A banana is $fruits[banana].";

// ��Ч
echo "A banana is {$fruits['banana']}.";

// ��Ч������PHP����Ѱ�ҳ���banana
echo "A banana is {$fruits[banana]}.";

// ��Ч��Ҫ�û����ţ����ｫ�����һ����������
echo "A banana is {$fruits['banana']}.";

// ��Ч
echo "A banana is " . $fruits['banana'] . ".";

// ��Ч
echo "This square is $square->width meters broad.";

// ��Ч��������������ӽṹ
echo "This square is $square->width00 centimeters broad.";
?> 
