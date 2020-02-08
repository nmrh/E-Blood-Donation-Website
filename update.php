<?php include('../bld/Include/header.php');
 
?>
<br><br><br><br><br><br>

<style>
    body {
    font-size: 18px;
    color: #111;
    font-weight: 500;
}
</style>
<link href="CSS/account.css" rel="stylesheet" media="all">
<script type="text/javascript" src="custom.js"></script>
<div class="container">
    <br>
    <div class="float-xl-right">
        <form action="login.php">
        <button class="btn btn-secondary" name="logout">Log out</button>
        </form>
    </div>
    <h1 class="mt-4 mb-3">WELCOME </h1>
    
<br><br>
<?php

?> 


    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">Quantity of blood</a>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
               
            <form method="POST">
                        
                        <br>
                        <div class="row">
                            <div class="col">
                            <span class="label label-default">A Possitive</span>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control input" id="Ap" name="Ap" aria-describedby="namehelp"required>                      
                            </div>
                        </div>  
                        <br>
                        <div class="row">
                            <div class="col">
                            <span class="label label-default">A Negative</span>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control input" id="Am" name="Am" aria-describedby="namehelp"required>                      
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col">
                            <span class="label label-default">B Possitive</span>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control input" id="Bp" name="Bp" aria-describedby="namehelp" required>                      
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                            <span class="label label-default">B Negative</span>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control input" id="Bm" name="Bm" aria-describedby="namehelp" required>                      
                            </div>
                        </div> 
                        <br>
                        <div class="row">
                            <div class="col">
                            <span class="label label-default">O Possitive</span>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control input" id="Op" name="Op" aria-describedby="namehelp" required>                      
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                            <span class="label label-default">O Negative</span>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control input" id="Om" name="Om" aria-describedby="namehelp" required>                      
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                            <span class="label label-default">AB Possitive</span>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control input" id="ABp" name="ABp" aria-describedby="namehelp" required>                      
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                            <span class="label label-default">AB Negative</span>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control input" id="ABm" name="ABm" aria-describedby="namehelp" required>                      
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col">
                            <span class="label label-default">Enter your user name</span>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control input" id="usernames" name="usernames" aria-describedby="namehelp" required>                      
                            </div>
                        </div>
                        <br>
                         
                        <div class="float-xl-right">
                            <button class="btn btn-secondary" name="update">Update</button>
                        </div> 
                        <br>
                    </form>
                    
                
                
                    <?php
                    require '../bld/class/database.php';
                   if (isset($_POST['update'])){
                   
                   
                    $Ap= $_POST['Ap'];
                    $Am = $_POST['Am'];
                    $Bp = $_POST['Bp'];
                    $Bm = $_POST['Bm'];
                    $Op = $_POST['Op'];
                    $Om = $_POST['Om'];
                    $ABp = $_POST['ABp'];
                    $ABm = $_POST['ABm']; 
                    $us=$_POST['usernames'];
                    
                    $sql="UPDATE blood_quantity JOIN hospital on blood_quantity.hospital_id=hospital.hos_id SET Ap='$Ap',Am='$Am',Bp='$Bp',Bm='$Bm',Op='$Op',Om='$Om',ABp='$ABp',ABm='$ABm' WHERE hospital.username='$us'";
                    
                    if(mysqli_query($connect,$sql)){
                        echo'<script>alert("Your database was successfully updated")</script>';
                    }
                    else {
                        die("Error:{$connect->errno}:{$connect->error}");
       
                    } 
                    $connect->close();
                }
                   
            ?>
                
                
            </div>
            
        </div>
          
      </div>
        <br><br>
    <div class="float-xl-left">
        <form action="account.php">
            <button class="btn btn-secondary" name="logout">Back</button>
        </form>
    </div> 
      
    </div>
<!--<form action="account.php" method="post">
        <div class="float-xl-left">
            <button class="btn btn-secondary" name="back">Back</button>
        </div> 
    </form>-->
  </div>


<br><br><br><br>
<?php include('../bld/Include/Footer.php'); ?>
