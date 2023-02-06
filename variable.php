<?php

// variable

// $name = 'Ashik';

// echo $name;

/* $n=5;
$s=32; */

/* $total = ($n+$s) /2;
// echo $total;
echo ++$n;
echo PHP_EOL;
echo $n; */

//  ternary operator

/* $a=3;

$c=
($a==1 ? "one" :
($a==2 ? "two" :
($a==3 ? "three" :
($a==4 ? "four" : ""))));

print $c; */

/* $w = 22;
$c = ($w <= -1 ? "Negative" : ($w >= 0 ? "Positive" : ""));
print $c; --> */

function bonstant()
{
    define("GREETING", "Welcome to PHP", true);
    echo GREETING;

};
bonstant();

for ($x = 0; $x <= 2;print ++$x) {
    print ++$x;
}
;
