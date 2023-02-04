<?php


//                                                                 day 1




// $name = "Bangladesh";
// $age = 20;
// $word = "age";

// echo "hello {$name}" . "<br>";
// echo "<br>";

// echo $$word;
// define('PI', 3.1416);
// echo "\n value of PI =" . PI;
// echo "<br>";
// var_dump($name);
// echo "<br>";
// var_dump($$word);
// echo "<br>";
// printf("his name %s and age %s\n", $name, $age);
// echo "\n";
// printf("his name %s and age %s\n", $name, $$word);

// $str = "Hello" . PHP_EOL . "World!";
// echo $str;
// echo "<br>";
// $addNumber = 50;
// echo $addNumber++;


//                                                                        day 2
// variable swaping

$fname = "ashikur";
$lname = "nur";
$middlename = "jaman";

printf('His name is %2$s %3$s %1$s', $fname, $lname, $middlename);

echo "<br>";


printf('number %1$d to %1$b', 12);

echo "<br>";

$nu = 45.233;

printf("%.1f", $nu);

$output = sprintf("my name is %s %s", $fname, $lname);
echo $output;

echo "<br>";

$value = 4000;

if ($value % 4 == 0 && ($value % 100 != 0 || $value % 400 == 0)) {  // true  and  (false or true)
    echo " $value is leap year ";
} else {
    echo " this year is not a leap year";
}
echo "<br>";

$checkTernary = (2028 == $value ? "2028" : ((2029 == $value) ? " 2029" : ((3020 == $value) ? "3020" : "other number")));

echo "{$value} is a $checkTernary ";
