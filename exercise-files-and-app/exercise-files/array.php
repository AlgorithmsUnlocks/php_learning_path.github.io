<?php 

//There are 3 types of Array  Indexed Array / Associative array / Multidimensional Array 

// Index Array 

// $number = array(12, 223, 435, 45, 5, 56, 67);
// echo $number[0];
// print_r($number);

// $distict = ['Sylhet', 'Barisal', 'Etc'];
// // if we have lots of index than its hard to memorize the index number like [0]....
// echo $distict[2];

//Thats why we use associative array 

// $distict = array("syl" => "Sylhet", "bar" => "barisal", "etc" => "Etc");
// echo $distict['syl'];

// $fullInfo = array("f_name" => "Ruman", "l_name" => "Ahmed",'phone'=>'01070868489+');
// echo $fullInfo['phone'];

//Multidimensional Array 

$user = array(
array(1,"Ruman",23),
array(2,"Ahmed",33),
array(3,"Rasel",33)
);
echo count($user);
echo PHP_EOL;
// print_r($user);
for ($row = 0; $row < count($user); $row++){  //00
    for ($col = 0; $col < count($user); $col++){  //00
        echo $user[$row][$col] . " ";
    }
 }
// for ($row = 0; $row < 3; $row++) {  
//   for ($col = 0; $col < 3; $col++) {  
//      echo $user[$row][$col]."  ";  
//     }
//     echo "\n";
// }  

?>