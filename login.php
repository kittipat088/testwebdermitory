<? ob_start();?>
<?php
session_start();
require_once( "config.php" );
$main = new WConfig();

include 'condb.php';
?>
<!doctype html>

<html lang="en">
  <head>
   
    


    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">


    
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/signin.css" rel="stylesheet">



  </head>
  <body class="text-center" >
      
      
<main class="form-signin">


  <form action="" method="post">
    <img class="mb-4" src="pic/logo.jpg" alt="" width="300" >
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
	
	
<?php
if (isset( $_POST[ 'txtUserId' ] ) && isset( $_POST[ 'txtPassword' ] ) ) {
	
		$userId = $_POST[ 'txtUserId' ];
		$password = md5( $_POST[ 'txtPassword' ] );
		$sql = "SELECT * 
						FROM admin 
						WHERE username =  '$userId' and password =  '$password'
						 ";

		$result = mysqli_query($mysqli, $sql);
        $row = mysqli_fetch_array( $result, MYSQLI_ASSOC );
	
		if ( mysqli_num_rows( $result ) == 1 ) { 
            $_SESSION['admin_id'] = $row['admin_id'] ;
            
            header('Location: admin.php'); 
        }else {
			echo "<font color='red'> โปรดใส่ Username / Password </font>";
		}		
}

?>	
	
	

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="txtUserId" placeholder="name@example.com">
      <label for="floatingInput">User Name</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name='txtPassword' placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>


    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
	
	<br><br>
	<a href="index.php"><button class="w-100 btn btn-lg btn-primary" type="button">Home</button></a>

    <p class="mt-5 mb-3 text-muted">&copy; <?php echo $main->footer;?></p>
	
  </form>

  
  
</main>


    
  </body>
</html>
