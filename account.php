<?php 
 session_start();
 
 
?>

<html lang="en">
<head>
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
	
<!--	<header class="header">-->
            
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
      
                
<!--	</header>-->



 
<link href="CSS/account.css" rel="stylesheet" media="all">
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<div class="container">
    <br>
    <div class="float-xl-right">
        <form action="login.php">
            <ul>
		<li><a href="Accept.php">Click here to View Notices</a></li>
            </ul>
            <br>
        <button class="btn btn-secondary" name="logout">Log out</button>
        </form>
    </div>
    
    <h1 class="mt-4 mb-3">WELCOME</h1>
     <?php
//     $_SESSION['username'] = $_POST['username'];
     $refUsername=$_SESSION['username'];?> 
          
    
<br><br>


    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">Quantity of blood</a>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
               
                    
                    <?php
                    require '../bld/class/database.php';
                    $sql1="select b.Ap,b.Am,b.Bp,b.Bm,b.Op,b.Om,b.ABp,b.ABm from blood_quantity as b JOIN hospital as u on b.hospital_id=u.user_id where u.username='$refUsername'";
                    $result_set = mysqli_query($connect, $sql1);
                    $result = mysqli_fetch_array($result_set); 
                    $Ap= $result['Ap'];
                    $Am = $result['Am'];
                    $Bp = $result['Bp'];
                    $Bm = $result['Bm'];
                    $Op = $result['Op'];
                    $Om = $result['Om'];
                    $ABp = $result['ABp'];
                    $ABm = $result['ABm']; 
                    
                   // $u=$_POST['username'];
                   ?>
                <style>
                    thead{
                        color: black;
                        background-color: #FFFFFF;
                    }
                </style>
            <table role="table" class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Blood Type</th>
                    <th scope="col">Quantity</th>
                </tr>
                </thead>
                <tr>
                    <th>A possitive</th>
                    <td><?php echo "$Ap"?></td>
                </tr>
                <tr>
                    <th>A negative</th>
                    <td><?php echo "$Am"?></td>
                </tr>
                <tr>
                    <th>B possitive</th>
                    <td><?php echo "$Bp"?></td>
                </tr>
                <tr>
                    <th>B negative</th>
                    <td><?php echo "$Bm"?></td>
                </tr>
                <tr>
                    <th>O possitive</th>
                    <td><?php echo "$Op"?></td>
                </tr>
                <tr>
                    <th>O negative</th>
                    <td><?php echo "$Om"?></td>
                </tr>
                <tr>
                    <th>AB possitive</th>
                    <td><?php echo "$ABp"?></td>
                </tr>
                <tr>
                    <th>AB negative</th>
                    <td><?php echo "$ABm"?></td>
                </tr>
      
</table> 
                
            </div>
            
        </div>
          
      </div>
      
      
    </div>
    <div class="float-xl-left">
        <form action="update.php?" username=".$_POST['username'].">
            <button class="btn btn-secondary" id='update' name="update">Update</button>
            
       
           
        </form>
    </div>
</div>


<br><br><br><br>
<?php include('../bld/Include/Footer.php'); ?>