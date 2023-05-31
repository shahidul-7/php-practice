<?php
function sumMachine($a, $b){
    $summation = $a + $b;
     return $summation;
};
echo (sumMachine(20, 30));

echo "<br>";
echo "<br>";

function sum($my_number1, $my_number2){
    return $my_number1 + $my_number2;
}
echo sum(50, 30);


// A job holder life Cycle
echo "<p style='margin-top:20px;margin-bottom:5px;font-size:20;font-weight:bold'>A job holder Life cycle</p>";

function sleeping($name){
    echo "$name is sleeping";
};
function wake($name){
    echo "$name is wake";
};
function eat($name, $meal){
    echo "$name is eating $meal";
};
function work($name, $place){
    echo "$name is working in $place";
}

function jobHolderLifeCycle($name){
    sleeping($name);
    echo "<br>";
    wake($name);
    echo "<br>";
    eat($name, "Breakfast");
    echo "<br>";
    work($name, "Office");
    echo "<br>";
    eat($name, 'Lunch');
    echo "<br>";
    work($name, "Lab");
    echo "<br>";
};
echo (jobHolderLifeCycle('<b>Shahidul</b>'));
echo "-------------------------<br>";
echo (jobHolderLifeCycle('<b>Masum</b>'));
echo "-------------------------<br><br>";;


// We are going to create daily life Cycle of a Student
echo "<p style='margin-top:20px;margin-bottom:5px;font-size:20;font-weight:bold'>Daily life Cycle of a student</p>";

function study($name){
    echo "$name is studying";
}
function play($name, $place){
    echo "$name is playing";
};

function studentLifyCycle($name){
    study($name);
    echo "<br>";
    sleeping($name);
    echo "<br>";
    wake($name);
    echo "<br>";
    eat($name, "Brackfast");
    echo "<br>";
    study($name);
    echo "<br>";
    eat($name, "Lunch");
    echo "<br>";
    study($name);
    echo "<br>";
    echo "Study korte korte life ta hell hoya gelo :D";
    echo "<br>";
}
echo (studentLifyCycle('<b>Faisal</b>'));
echo "__________---------------------__________ <br>";
echo "---------------______________---------------<br><br>";
echo (studentLifyCycle('<b>Sakib</b>'));
echo "<br>";


//PHP Default functions//
echo "<p style='margin-top:20px;margin-bottom:5px;font-size:20;font-weight:bold'>PHP defauld functions</p>";

function setWeight($minWe=50){ //default set weight
    echo "The weight is: $minWe <br>";
}
setWeight(100);
setWeight(125);
setWeight(75);
setWeight();

echo "<br>";

echo date("D-M-Y"); //Show local day, Month and year with Name;
echo "<br>";
echo date("d-m-y"); //Show local day, Month and year with number;
echo "<br>";
echo date("h:i:A"); // 12 horus time formate
echo "<br>";
echo date("B"); // 24 horus time formate
echo "<br><br>";

//increase and decrease time using php time and date function
echo "Yesterday was: " .date("d/M/Y", time()-86400);
echo "<br>";
echo "Today is: " . date("d/m/y");
echo "<br>";
echo "Tomorrow is: " .date("d/M/Y", time()+86400);
echo "<br>";
echo "15 days ago was: " .date("d/M/Y-l",  time()-86400*15);
echo "<br><br>";


//PHP include function
echo "<p style='margin-top:20px;margin-bottom:5px;font-size:20;font-weight:bold'>Caling if and else page in my functions page!</p>";
include('array.php');

