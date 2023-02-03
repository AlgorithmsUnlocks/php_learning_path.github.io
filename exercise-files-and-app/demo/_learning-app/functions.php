<?php 

// function Hello(){
//     echo "Hello Function";
// }
// function Sidebar(){
//     $title = "Sidebar";
//     echo $title;
// }
function Navbar(){
    $activePage = basename($_SERVER['PHP_SELF']); // taking the self url
    // echo $activePage; 

    $rows = file("includes/navbar.txt");
    // print_r($rows);

    echo "<ul class='nav'>";

   foreach($rows as $row){
        // print_r($row);
        $nav = explode("=>", $row);
        // print_r($nav);
        $page = trim($nav[0]);
        // print_r($page);
        // echo "<br>";
        $link = trim($nav[1]);
        // print_r($link);

        if($link == $activePage){
            echo "<li class='active_link'><a href='{$link}'>$page </a></li>";
        }else{
            echo "<li><a href='{$link}'>$page </a></li>";
        }

   }

    echo "</ul>";

}


// Get Title

function getTitle(){
    $activePage = basename($_SERVER['PHP_SELF']);
    // echo $activePage;
    $rows = file("includes/navbar.txt");
    // print_r($rows);

    foreach($rows as $row){
        // print_r($row);
        $navItem = explode("=>", $row);
        // echo $navItem[1];
        $page = trim($navItem[0]);
        $link = trim($navItem[1]);
        // echo $link;
        if($link == $activePage){
            echo "<h3>".$page."</h3>";
        }else{
            
        }
    }

}


//Developer Information

function devInfo(){
    // echo "Developer";

    $rows = file("includes/developer_info.txt");

    echo "<ul class='dev_info'>";
    // print_r($rows);
    foreach($rows as $row){
        echo "<li>" . $row."</li>"; 
    }
    echo "</ul>";

}

// Footer COpywrite 

function footerCopy(){
    echo "<p>copywrite@2023 Made with Passion</p>";
}

//Learning Path 
function learPath(){
    echo "<h3>Learning Path Overview ⇒ </h3>";
    $rows = file("includes/lear_path.txt");

    echo "<ol class='learn_path'>";

    foreach($rows as $row){
        // echo "<li>" . $row . "</li>";
        $list = explode(":", $row);
        $f_list = trim($list[0]);
        $l_list = trim($list[1]);
        $sub_list = explode("=>", $l_list);
        echo "<li>" . $f_list;
             echo "<ul>";
                    echo "<li>" . $sub_list[0];
                        echo "<ul>";
                            echo "<li>" . $sub_list[1]."</li>";
                        echo "</ul>";
                    echo "</li>"; 
             echo "</ul>";
        echo "</li>";
    }

    echo "</ol>";
}

// Embedding PHP 
function embe_PHP(){
    echo "<h3>Embedding PHP in HTML ⇒ </h3>";

    $rows = file("includes/embe_php.txt");
    // print_r($rows);
    echo "<ol class='mylist'>";

    foreach($rows as $row){
        echo "<li>" . $row ."</li>";
    }
    echo "</ol>";
}
//Dynamic Data in PHP 
function dynamicData(){
    echo "<h3>Dynamic Data in PHP ⇒ </h3>";

    $rows = file("includes/dynamic_data.txt");

    foreach($rows as $row){
        echo "<pre> <code>";
        echo "<p>" . $row . "</p>";
        echo "</code> </pre>";
    }
}
// PHP Comments
function insertComment(){

    echo "<h3>Inserting Comments in PHP ⇒ </h3>";
    $rows = file("includes/insert_comment.txt");
    // print_r($rows);
    echo "<table class='table table-bordered'>";

    foreach($rows as $row){

        $table = explode("=>", $row);
        echo "<tbody>";
            echo "<tr>";
                echo "<td class='col'>".$table[0]."</td>";
                echo "<td class='col'>".$table[1]."</td>";
            echo "</>";   
        echo "</tbody>";
    }

    echo "</table>";
}

// Practics Section 01 

function test1(){
    echo "<div class='test_box'>";
        
        echo "<h3 class='text-center'>Test Your Self ⇒ Question in Below</h3>";
        $rows = file("includes/test_1.txt");
        echo "<pre> <code>";
        $count = 1;
        foreach($rows as $row){
            echo "<p> Question ".$count." : ".$row."</p>";
            $count++;
         }
        echo "</code> </pre>";
        
        echo "<div class='answer_box'>";

        echo "</div>";

    echo "</div>";
}


// Data Types Part Start
function more(){
    echo "<p class='text-danger'> <strong> Notes : </strong> echo, printf, sprintf, concate, 
    number system, data types</p>";
}
function variablePHP(){
    echo "<h3>Variable in PHP ⇒ </h3>";
    $rows = file("includes/variable.txt");

    echo "<p> Rules for declaring Variable : </p><ul>";
    foreach($rows as $row){
        echo "<li>".$row."</li>";
    }
    echo "</ul>";
    more();
}
function mathPHP(){
    echo "<h3>Math in PHP ⇒ Differents Types of Operator </h3>";
    $rows = file("includes/math.txt");

    // echo count($rows);
        echo "<pre><code><table class='table table-bordered'>";
            echo "<tr>";
                echo "<td> Operator	</td>";
                echo "<td> Example </td>";
            echo "</tr>";
        foreach($rows as $row){
            $table = explode("=>", $row);
            
            echo "<tr>";
            for ($i = 0; $i < count($table); $i++){
                if($table[$i] == $table[1]){
                    echo "<td><strong>".$table[$i]."</strong></td>";
                }else{
                    echo "<td>".$table[$i]."</td>";
                }
            }
            // echo "<td>".$table[0]."</td>";
            // echo "<td>".$table[1]."</td>";
            // echo "<td>".$table[2]."</td>";
            // echo "<td>".$table[3]."</td>";   
            echo "</tr>";
        }
        echo "</table></code></pre>";
}

function arrayPHP(){
    echo "<h3>Array in PHP ⇒ </h3>";

    $rows = file("includes/array.txt");
    // print_r($rows);
    echo "<ul>";
    foreach($rows as $row){
        $list = explode(":", $row);
        echo "<li>".$list[0]."<ul><li>";
                echo $list[1];
        echo "</li></ul></li>";
        // for($i=0; $i< count($list); $i++){
        //    if($list[$i]==$list[0]){
        //         echo "<li>".$list[$i]."<ul>";
        //    }elseif($list[$i]==$list[1]){
        //       echo "<li>".$list[$i]."</li></ul></li>";
        //    }
        // }
    }
    echo "</ul>";
}
function test2(){
    echo "<div class='test_box'>";
        
        echo "<h3 class='text-center'>Test Your Self ⇒ Question in Below</h3>";
            $rows = file("includes/test_2.txt");
            echo "<pre> <code>";
                $count = 1;
                foreach($rows as $row){
                    echo "<p> Question ".$count." : ".$row."</p>";
                    $count++;
                }
            echo "</code> </pre>";
            
            echo "<div class='answer_box'>";

        echo "</div>";

    echo "</div>";
}

// Data Types Part end


//Controll Structure Part

function ifStatement(){
    echo "<h3>if Statement in PHP ⇒</h3>";
    $rows = file("includes/if.txt");
    // echo $rows;
    // print_r($rows);
    echo "<ul>";
    foreach($rows as $row){
        // echo $row[1];
       echo "<li>".$row."</li>";   
    }
    echo "</ul>";

}
function switchStatement(){
    echo "<h3>switch Statement in PHP ⇒</h3>";
    $rows = file("includes/switch.txt");
    // echo $rows;
    // print_r($rows);
    echo "<ul>";
    foreach($rows as $row){
        // echo $row[1];
       echo "<li>".$row."</li>";   
    }
    echo "</ul>";
}
function whileLoop(){
    echo "<h3>while Loop in PHP ⇒</h3>";
    $rows = file("includes/while.txt");
    // echo $rows;
    // print_r($rows);
    echo "<ul>";
    foreach($rows as $row){
        // echo $row[1];
       echo "<li>".$row."</li>";   
    }
    echo "</ul>";
}
function forLoop(){
    echo "<h3>for Loop in PHP ⇒</h3>";
    $rows = file("includes/for.txt");
    // echo $rows;
    // print_r($rows);
    echo "<ul>";
    foreach($rows as $row){
        // echo $row[1];
       echo "<li>".$row."</li>";   
    }
    echo "</ul>";
}
function foreachLoop(){
    echo "<h3>foreach Loop in PHP ⇒</h3>";
    $rows = file("includes/foreach.txt");
    // echo $rows;
    // print_r($rows);
    echo "<ul>";
    foreach($rows as $row){
        // echo $row[1];
       echo "<li>".$row."</li>";   
    }
    echo "</ul>";
}
function ternaryOp(){
    echo "<h3>Ternary Operator in PHP ⇒</h3>";
    $rows = file("includes/ternary.txt");
    // echo $rows;
    // print_r($rows);
    echo "<ul>";
    foreach($rows as $row){
        // echo $row[1];
       echo "<li>".$row."</li>";   
    }
    echo "</ul>";
}
function test3(){
    echo "<div class='test_box'>";
        
        echo "<h3 class='text-center'>Test Your Self ⇒ Question in Below</h3>";
            $rows = file("includes/test_3.txt");
            echo "<pre> <code>";
                $count = 1;
                foreach($rows as $row){
                    echo "<p> Question ".$count." : ".$row."</p>";
                    $count++;
                }
            echo "</code> </pre>";
            
            echo "<div class='answer_box'>";

        echo "</div>";

    echo "</div>";
}

//Controll Structure  end


function test4(){
    echo "<div class='test_box'>";
        
        echo "<h3 class='text-center'>Test Your Self ⇒ Question in Below</h3>";
            $rows = file("includes/test_4.txt");
            echo "<pre> <code>";
                $count = 1;
                foreach($rows as $row){
                    echo "<p> Question ".$count." : ".$row."</p>";
                    $count++;
                }
            echo "</code> </pre>";
            
            echo "<div class='answer_box'>";

        echo "</div>";

    echo "</div>";
}

// Build in Fnction 
function buildFun(){
    echo "<h3>PHP Build in Function ⇒ </h3>";
    $rows = file("includes/build_fun.txt");
    // print_r($rows);
    echo "<ol>";
    foreach($rows as $row){
        echo "<li>".$row."</li>";
    }
    echo "</ol>";
}

function test5(){
    echo "<div class='test_box'>";
        
        echo "<h3 class='text-center'>Test Your Self ⇒ Question in Below</h3>";
            $rows = file("includes/test_5.txt");
            echo "<pre> <code>";
                $count = 1;
                foreach($rows as $row){
                    echo "<p> Question ".$count." : ".$row."</p>";
                    $count++;
                }
            echo "</code> </pre>";
            
            echo "<div class='answer_box'>";

        echo "</div>";

    echo "</div>";
}

//Use form data in PHP

function useFormData(){
    echo "<h3>How to Use Form Data in PHP ⇒ </h3>";
    $rows = file("includes/use_form_data.txt");
    echo "<ol>";
    foreach($rows as $row){
        echo "<li>".$row."</li>";
    }
    echo "</ol>";
}

// Use Database in PHP

function useDatabase(){
    echo "<h3>How to Use Database in PHP ⇒ </h3>";
    $rows = file("includes/use_database.txt");
    echo "<ol>";
    foreach($rows as $row){
        $list = explode("?", $row);
        for($i=0; $i < count($list); $i++){
           if($list[$i] == $list[0]){
                echo "<li>".$list[$i]."<ul>";
           }else{
                echo "<li>".$list[$i]."</li>";
                echo "</ul></li>";
           }
        }
    }
    echo "</ol>";
}




?>