<?php
// ��ʾ���д���
error_reporting(E_ALL);

class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

$foo = 'adfads';
echo "\$foo==$foo; type is " . gettype ($foo) . "<br />\n";


// ��Ч������� I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n";

// Ҳ��Ч������� I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n";
?> 
