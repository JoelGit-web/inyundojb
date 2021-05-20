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

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">InyundoJB</i></a>
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


<div class="container-fluid">
	<div class="col-md-9 m-auto py-2">
		<div class="row">
				<div class="col-md-6">
					<div class="card-header bg-dark text-light">
						<span>Make your comments here</span>
						
					</div>
					<form method="POST" action="action.php" enctype="multipart/form-data">
                   
						<div class="form-group">
							<hr>
							<label><strong>Post a comment</strong></label>
							<textarea class="form-control" rows="5" name="comment"></textarea>
							
						</div>

						<button name="postComment" class="btn btn-block btn-primary" type="submit">
						Post Comment
					    </button>
	                      <div class="text-danger" style="text-align: center;">
	                        <?php
	                        if(isset($_SESSION['status'])){
	                        	echo $_SESSION['status'];
	                        	unset($_SESSION['status']);
	                        }
	                        ?>
	                        </div>

						
					</form>
					
				</div>
				<div class="col-md-6">


                    <?php
                    $selectUserComments = mysqli_query($connect, "SELECT *FROM users_comments ORDER BY id DESC");
                    if(mysqli_num_rows($selectUserComments)>0){
                    while($row = mysqli_fetch_assoc($selectUserComments)){
                    $user_comments = trim($row['comment']);
                    $user_email = trim($row['email']);
                    ?>


                    <div class="card-header mb-2 bg-dark text-light">
                    	<span>Comment posted by: <span style="color: grey"><?php echo $user_email?></span></span>
                    </div>

					<div class="card-body" style="color: grey">						
						<?php echo $user_comments?>
					</div>	

					<div style="text-align: right;" class="text-light mb-2 card-footer bg-dark">
						<!-- <i class="fa fa-edit"></i> -->
					</div>			

					<?php
						}
					}else{
						echo "No Records";
					}
					?>
					
				</div>
				
			</div>
			
		</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>