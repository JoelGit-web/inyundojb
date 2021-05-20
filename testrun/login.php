<!-- apa nmetoa cde imekuwa apa juu nkaiweka file iko kwa folder ya includes alafu natumia
php kui include apa -->


<!-- mimi hupenda ku code php yangu yote on a singular page ndo maana nmeunda hii file -->

<?php
//tuna start session juu errors zenye zko kwa action.php ni ma session so lazma hii ikuwe apa
//session_start();
include("includes/header.php");
//apa tuna weka file yenye itakuwa na code yetu ya registration
require('action.php');
?>

  <!-- Navigation -->
  

<!-- apa natumia bootstrap kuunda form juu sjui css fity na bootsrap is easier -->
<div class="container">
  <div class="col-md-6 m-auto py-4">
    <div class="card">
      <div class="card-header bg-dark text-center text-light">
        <span><h3>Login Here</h3></span>
      </div>
      <div class="card-body">
        <form method="POST" action="">


          <div class="text-danger text-center">
          <?php
          //apa sasa ndo tuta display errors zetu
          if(isset($_SESSION['status'])){
            echo $_SESSION['status'];
            //tuna unset ndo mseee aki reload page hiyo error inalost
            unset($_SESSION['status']);
          }
          ?>
          </div>


          <div class="form-group">
            <input type="text" name="email" class="form-control" placeholder="Enter E-Mail">
          </div> 
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>                   

          <button class="btn btn-block btn-success" name="loginBtn" type="submit">Login</button>

          <div class="text-center">
            <small><a href="register.php">Dont have an account?...Register Here</a></small>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>

<!-- apa nmetoa cde imekuwa apa juu nkaiweka file iko kwa folder ya includes alafu natumia
php kui include apa -->

<?php
include("includes/scripts.php");
include("includes/footer.php");
?>


