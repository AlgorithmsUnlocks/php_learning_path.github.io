<?php 
include("functions.php");
include("includes/header.php");
?>

<section class="content">

  <aside class="col-xs-4">
    <?php
    // Hello();
    // Sidebar();
    Navbar();
    ?>
   
  </aside>

  <article class="main-content col-xs-8">
    <div class="jumbotron">
      <?php learPath(); ?>  
      <?php embe_PHP(); ?>
      <?php dynamicData(); ?>
      <?php insertComment(); ?>
      <?php test1(); ?>
    </div>
  </article>



<?php include("includes/footer.php"); ?>

