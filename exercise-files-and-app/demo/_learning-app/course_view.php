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
       <h3> Learning Path Overview ⇒ </h3>
      
       <ol id="learning-path">
        <li>Web Server → xampp → Cross Platform : Window / Linux / Mac OS.</li>
        <li>Another web server → mamp</li>
        <li>Reference Files → 
          <ul>
            <li>VS Code (That i Recommended)
              <ul>
                <li> Some Important Extension of VS Code</li>
                <li> Live Server</li>
                <li> Bracket Pair Colorize </li>
                <li> PHP Intellisense</li>
                <li> Code Runner </li>
                <li> Emmets (Link → https://docs.emmet.io/cheat-sheet) </li>
              </ul>
            </li>
          </ul>
        </li>
         
       </ol>
    </div>
  </article>



<?php include("includes/footer.php"); ?>

