<?php 
session_start();
?>
<html lang="en"><head>
<title></title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
</head>

<style>
    .logo a {
    font-size: 30px;
    font-weight: 700;
    color: #d60606;
    font-style: oblique;
}
</style>

<body>
	
	<!--<header class="header">-->
            
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="#">E-BLOOD DONOR</a></div>
							<nav class="main_nav">
								<ul>
									<li>
                                                                            <a href="index.php">Home</a>
									</li>
									<li class="hassubs">
                                                                            <a href="index.php">Hospitals</a>
										<ul>
                                                                                    <li><a href="CreateHospital.php">SignUp</a></li>
                                                                                    <li><a href="login.php">Login</a></li>
											
										</ul>
									</li>
                                                                        
                                                                        <li class="hassubs">
                                                                            <a href="index.php">Notice Board</a>
										<ul>
											<li><a href="NoticePublic.php">View Notices</a></li>
											<li><a href="PostNotices.php">Post Notices</a></li>
											
										</ul>
									</li>
                                                                        <li class="hassubs">
                                                                            <a href="index.php">Register</a>
										<ul>
											<li><a href="Donate.php">Donator</a></li>
											<!--<li><a href="User.php">User</a></li>-->
											
										</ul>
									</li>
                                                                        <li class="hassubs">
                                                                            <a href="index.php">Search</a>
                                                                            <ul>
                                                                                <li><a href="searchhos.php">Hospitals</a></li>
                                                                                <li><a href="searchdon.php">Donors</a></li>
                                                                            </ul>
                                                                            </li>
									<li class="hassubs">
                                                                            <a href="index.php">Contact</a>
                                                                            <ul>
											<li><a href="Contact.php">Contact</a></li>
                                                                                        <li><a href="About.php">About</a></li>
											
											
										</ul>
                                                                        </li>
                                                                        
								</ul>
							</nav>
							<div class="header_extra ml-auto">
						</div>
					</div>
				</div>
			</div>
		</div>  

                
	<!--</header>-->


<?php // include('../bld/Include/header.php');
// session_start();
  if(!isset($_SESSION["username"])){
//     header("location:login.php?action=login");
 }
?>
 
        <link href="CSS/login.css" rel="stylesheet" media="all">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<body>
   
<div class="login-page">
  <div class="form">
   
      <form class="login-form" method="POST">
        <h1>Login</h1>
        <input type="text" placeholder="username" id="username" name="username"/>
        <input type="password" placeholder="password" name="password1"/>
        
        <button name="login"id="login" action="login">Login</button>
        <p class="message">Not registered?  <a href="CreateHospital.php">Create account</a></p>
    </form>
  </div>
</div>
</body>
<?php
    require '../bld/class/database.php';
    //session_start();
    
    if (isset($_POST['login'])){
	if(empty($_POST["username"]) && empty($_POST["password1"]) ){
            echo "<script type='text/javascript'>alert('Enter all fields')</script>";
        }
        else{
        $username = mysqli_real_escape_string($connect,$_POST['username']);
        $password = mysqli_real_escape_string($connect,$_POST['password1']);
        $password=md5($password);
        $query = "SELECT `hos_id` FROM `hospital` WHERE username='$username' AND password1='$password'";

        $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
        $count = mysqli_num_rows($result);
        $_SESSION['username']=$username;
if ($count == 1){
    //session_start();
    
    ?>
<script type="text/javascript">
window.location.href = 'account.php';
</script>
<?php
  
     
}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";

}
}
    }?>
<?php include_once('../bld/Include/footer.php'); ?>
 

