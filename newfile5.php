<?php
// ����һ���򵥵�����
$array = array(1, 2, 3, 4, 5);
print_r($array);

// ����ɾ�����е�����Ԫ�أ����������鱾����:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// ���һ����Ԫ��ע���µļ����� 5���������������Ϊ�� 0��
$array[] = 6;
print_r($array);

// ����������
$array = array_values($array);
$array[] = 7;
print_r($array);
?> 
