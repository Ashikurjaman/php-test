<?php

$grade = 32;
switch (true) {
    case $grade >= 60:
        echo "First Division";
        break;
    case ($grade >= 45 && $grade <= 59):
        echo "Second Division";
        break;
    case ($grade >= 33 && $grade <= 44):
        echo "third Division";
        break;
    default:
        echo "Fail";

}
echo "\n";

$month = "April";

switch ($month) {
    case "January":
    case "February":
    case "March":
        echo "winter";
        break;
    case "April":
    case "May":
    case "June":
        echo "Spring";
        break;
    case "July":
    case "August":
    case "September":
        echo "Summer";
        break;
    case "October":
    case "November":
    case "December":
        echo "Antunm";
        break;
    default:
        echo "something went wrong";

}
echo "\n";

$alp = "B";

switch ($alp) {
    case "a":
        print "$alp is a Vowel";
        break;
    case "e":
        print "$alp is a Vowel";
        break;
    case "i":
        print "$alp is a Vowel";
        break;
    case "o":
        print "$alp is a Vowel";
        break;
    case "u":
        print "$alp is a Vowel";
        break;
    case "A":
        print "$alp is a Vowel";
        break;
    case "E":
        print "$alp is a Vowel";
        break;
    case "I":
        print "$alp is a Vowel";
        break;
    case "O":
        print "$alp is a Vowel";
        break;
    case "U":
        print "$alp is a Vowel";
        break;
    default:
        print "$alp is a constant";

}

echo "\n";

$car = "Renault";
$model = "Duster";

switch ($car) {
    case "Honda":
        switch ($model) {
            case "Amaze":
                echo "Honda Amaze price is 5.93 - 9.79 Lakh.";
                break;
            case "City":
                echo "Honda City price is 9.91 - 14.31 Lakh.";
                break;
        }
        break;
    case "Renault":
        switch ($model) {
            case "Duster":
                echo "Renault Duster price is 9.15 - 14.83 L.";
                break;
            case "Kwid":
                echo "Renault Kwid price is 3.15 - 5.44 L.";
                break;
        }
        break;
    case "Hyundai":
        switch ($model) {
            case "Creta":
                echo "Hyundai Creta price is 11.42 - 18.73 L.";
                break;
            case "Tucson":
                echo "Hyundai Tucson price is 22.39 - 32.07 L.";
                break;
            case "Xcent":
                echo "Hyundai Xcent price is 6.5 - 10.05 L.";
                break;
        }
        break;
    default:
        echo "something wrong";
}

echo "\n";

$num = 21;
if ($num % 2 == 0) {
    print "$num is a even number";
} else {
    print "$num is a odd number";
}
echo "\n";

$mark = 100;

if ($mark <= 33) {
    print "Fail";

} else if ($mark >= 34 && $mark <= 49) {
    print "D";
} else if ($mark >= 50 && $mark <= 65) {
    print "C";
} else if ($mark >= 66 && $mark <= 75) {
    print "B";
} else if ($mark >= 76 && $mark <= 79) {
    print "A";
} else if ($mark >= 80 && $mark <= 100) {
    print "A+";
} else {
    print "invalid number";
}

echo "\n";

//HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars the data will be invalid. As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.

$tutionFees = 0;

$result = ($tutionFees > 20000) ? 0.25 * $tutionFees : (($tutionFees >= 10000) && ($tutionFees <= 20000) ? 0.20 * $tutionFees : (($tutionFees < 10000) && ($tutionFees >= 7000) ? 0.15 * $tutionFees : "invalid"));
echo $result;
