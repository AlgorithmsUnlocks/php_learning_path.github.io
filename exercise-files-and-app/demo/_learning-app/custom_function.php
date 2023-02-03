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
      <h3>Introduction Function ⇒</h3>
        <p>
        Custom Function is known as user defined function →
        <ul>
          <li> Code Reusability</li>
          <li> Less Code</li>
          <li> Easy to understand</li>
        </ul>
        </p>
      <h3>Function Parameter ⇒</h3>
        <p>
        PHP Parameterized functions are the functions with parameters →
        <ul>
          <li> We can pass any number of parameters inside a function. These passed parameters act as variables inside your function.</li>
          <li>They are specified inside the parentheses, after the function name.</li>
          <li> The output depends upon the dynamic values passed as the parameters into the function.</li>
        </ul>
        </p>
      <h3>Return Value from Function ⇒</h3>
        <p>
        For making the function flexible and extendable we can use the return keyword. That mainly returns the value from function. →
        </p>
      <h3>Global Variable Scope ⇒</h3>
          <p>
          Function Scope →  Local Scope & Global Scope
          <ul>
            <li>Local Scope : Only Available Inside the Function.</li>
             <li> Global Scope : Available Inside & Outside the Function.</li>
          </ul>
          </p>
      <h3>Constant ⇒</h3>
        <p>
          We Can define a constant by define keyword → like 
          define("PI",3.14165)
        </p>
      <h3>Another Way of Creating Cnstant ⇒</h3>
        <p>
          We Can also define a constant by const keyword → like 
          const PI = 3.14165;
        </p>
     <?php test4(); ?>

    </div>
  </article>



<?php include("includes/footer.php"); ?>

