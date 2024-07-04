<?php


$marks = 30;



if ($marks >100 || $marks <0) {
    echo "Invalid marks";
    }
elseif ($marks >= 80 && $marks <= 100) {
echo "Great is: A+";
}
elseif ($marks >= 70 && $marks < 80) {
    echo "Great is: A";
}
elseif ($marks >= 60 && $marks < 70) {
    echo "Great is: A-";
}
elseif ($marks >= 50 && $marks < 60) {
    echo "Great is: B";
}
elseif ($marks >= 40 && $marks < 50) {
    echo "Great is: C";
}
elseif ($marks >= 33 && $marks < 40) {
    echo "Great is: D";
}
elseif ($marks >= 0 && $marks < 33) {
    echo "Great is: F";
}
else {
    echo "Great is: Unknown";
}




?>