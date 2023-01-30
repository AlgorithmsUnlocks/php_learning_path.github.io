<?php

$title = "<h1> Hello H1 </h1>";
echo $title;

// You can write anything here

$fname = "Dynamic";
$lname = "PHP";
$date = "1/30/2023";

?>
<h1> <?php echo $title; ?></h1>

<p>
Our Firstname of File : <?php echo $fname."<br>"; ?>
Our Lastname of File : <?php echo $lname."<br>"; ?>
date of Creation : <?php echo $date."<br>"; ?>
</p>