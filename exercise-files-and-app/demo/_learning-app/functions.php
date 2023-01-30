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
        // echo $row;
        $info = explode("==>", $row);
        $title = trim($info[0]);
        $details = trim($info[1]);
        echo "<li>" . $title ." ==> " .$details."</li>";
        
    }
    echo "</ul>";

}

// Footer COpywrite 

function footerCopy(){
    echo "<p>copywrite@2023 Made with Passion</p>";
}

?>