<?php
echo "<img style='display:block;margin:10px auto 30px;' src='img/loop-code-sample.png'><br>";
$counter = 1;

for($counter; $counter <= 10; $counter++){ 
    if($counter == 1){
        echo "Go  $counter step <br/>";
    }elseif($counter >= 2){
        echo "Go  $counter steps <br/>";
    }else{
        echo "All done, let\'s stop!";
    };
};

// End For loop 

echo "<br/><br/>";
//while loop start
$multiplication_table = 1;
while($multiplication_table <= 10){
    echo $multiplication_table . " x 5 = " . $multiplication_table * 5 . "<br/>";
    $multiplication_table = $multiplication_table + 1;
};
echo "<br>";
while($multiplication_table <= 100){
    echo "The number is: $multiplication_table <br>";
    $multiplication_table+=10;
}
//End while loop. 

echo "<br>";

//Do While Loop
$i_while = 1;
do{
    echo  $i_while . " x 7 = " . $i_while*7 .  "<br>";
    $i_while++;

}while($i_while <= 10);

echo "<br><br>";

//Foreach Loop
$classmates = array('Faruk', 'Mahade', 'Rezaul', 'Abul Kalam', 'Shahin', 'Rafiq');

foreach($classmates as $key => $value){
    echo "$key) $value <br>";
};

echo "<br> <br>";
//Multiplication with foreach loop
$multiply_with6 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach($multiply_with6 as $foreach_number){
    echo $foreach_number ."x6 = " . $foreach_number*6 . " <br>";
};
