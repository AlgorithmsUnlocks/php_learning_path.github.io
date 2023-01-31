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
         foreach($rows as $row){
            echo "<p>".$row."</p>";
         }
        echo "</code> </pre>";
        
        echo "<div class='answer_box'>";

        echo "</div>";

    echo "</div>";
}


// Data Types Part 

function variablePHP(){
    echo "<h3>Variable in PHP ⇒ </h3>";
}
function mathPHP(){
    echo "<h3>Math in PHP ⇒ </h3>";
}
function arrayPHP(){
    echo "<h3>Array in PHP ⇒ </h3>";
}
function assosArray(){
    echo "<h3>Associative Array in PHP ⇒ </h3>";
}
function test2(){
    echo "<h3 class='text-center'>Test Your Self ⇒ Question in Below</h3>";
}


?>