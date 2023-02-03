<?php 

// for loop simple programes 

// for($number=0; $number <= 10; $number++){
//     echo $number . PHP_EOL;
// }
// for($alpha='A'; $alpha < 'H'; $alpha++){
//     echo $alpha;
// }

// for($i=1; $i< 4; $i++){
//     for($j=1; $j<4; $j++){
//         echo $i . " ".$j;
//         echo PHP_EOL;
//      }
// }
// for($i=1,$j=1; $i < 4; $i++,$j++){
//     echo $i . " " . $j;
//     echo PHP_EOL;
// }


// 1 to 100 prime number 

// for($num = 1; $num <= 100; $num++){

//     $count = 0;
//     for($i=2; $i<$num; $i++){
//         if($num % $i == 0){
//             $count++;
//             break;
//         }
//     }
//     if($count == 0){
//         echo "{$num} is prime number".PHP_EOL;
//     }
// }

$number = -1;

if($number > 0){
    echo "Number is positive";
}elseif($number < 0){
    echo "Negative Number";
    if($number < -10){
        echo "Number is below -10";
    }
}else{
    echo "Number is Zero";
}