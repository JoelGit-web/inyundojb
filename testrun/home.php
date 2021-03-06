<?php
session_start();
/*lazma u include that database file ama in your case unaweza code venye wewe hu code kwa yako
nliona huwa unado ivo kila time but kwangu huwa naona thats repetetion*/
include('dbconnect.php');
//include hii file ndo mseee asiweze kuingia home page directly
//jaribu ku type localhost/testrun/home.php alafu uone iado nini
include('security.php');

//wacha niweke code kiasi kwa home pae ndo ikuwe na content angalau
//uta google uone how php includes works
include('includes/header.php');
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 m-auto py-4">
			<div class="card-header bg-dark text-light">

				<!--Apa nadai kuchukua details ziko kwa database ndo nizi display apa kwa home page-->
				<?php
				$selectDatabaseDetails = mysqli_query($connect, "SELECT *FROM users_table WHERE email='".$_SESSION['loggedInUser']."'");
				/*nmeweke email= '".$_SESSION['loggedInUser']."' juu nadai kuchukua details za loggedInUser solo
				hiyo sasa ndo importance ya ku set that ka session kwa login na register*/
				//alafu apa tunataka kuchukua row by row
				$row = mysqli_fetch_assoc($selectDatabaseDetails);
				$emailToSelect = trim($row['email']);
				$name = trim($row['name']);
				?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Welcome </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


				<span>My Email is: <small class="text-primary"><?php echo $emailToSelect ?></small></span>
			</div>
			<div class="card-body">
				  <div class="embed-responsive embed-responsive-16by9">
				     <img class="card-img-top embed-responsive-item" src="images/1.jpg" />
				  </div>
			</div>
			
		</div>
		<div class="col-md-6 m-auto py-4">
			<div class="card-header bg-dark text-light">
				<span>My Name is: <small class="text-primary"><?php echo $name ?></small></span>
			</div>
			<div class="card-body">
				  <div class="embed-responsive embed-responsive-16by9">
				     <img class="card-img-top embed-responsive-item" src="images/2.jpg" />
				  </div>
			</div>			
			
		</div>		
		
	</div>
	
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>