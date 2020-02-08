<?php include_once('../bld/Include/header.php');?>

<link href="CSS/donate.css" rel="stylesheet" media="all">

<body>
    <br><br><br><br><br><br><br>

        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Create your account</h2>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        
                        <br>
                        <div class="row">
                            <span class="label label-default">Name of the hospital</span>
                            <input type="text" class="form-control input" id="name" name="name" aria-describedby="namehelp" placeholder="Enter the name of the hospital" required>                      
                        </div>  
                        <br>
                        <div class="row">
                            <span class="label label-default">Address</span>
                            <input type="text" class="form-control input" name="address" id="address" aria-describedby="addresshelp" placeholder="Enter the address" required>                      
                        </div>  
                             
                        <br>
                                                                 
                     <div class="row">
                            <span class="label label-default">Email</span>
                            <input type="email" class="form-control input" name="email" id="email" aria-describedby="email" placeholder="Enter the email">                      
                        </div>  
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Contact numbers</span>
                            <div class="col">
                                <input type="phone" class="form-control input" name="office1" id="mobile" aria-describedby="office1" placeholder="Telephone number" required>                      
                            </div>
                            <div class="col">
                                <input type="phone" class="form-control input" name="office2" id="office" aria-describedby="office2" placeholder="Telephone number">                      
                            </div>
                        </div> 
                        <br>
                                                
                        <div class="row">
                            <span class="label label-default">Username</span>
                            <input type="text" class="form-control input" name="username" id="username" aria-describedby="username" placeholder="Enter the username" required>                      
                        </div>
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Password</span>
                            <input type="password" class="form-control input" name="password1" id="password1" aria-describedby="password1" placeholder="Enter the password" required>                      
                        </div>
                        <br>
                        
                        <div class="row">
                            <span class="label label-default"> Re-enter Password</span>
                            <input type="password" class="form-control input" name="password2" id="password2" aria-describedby="password2" placeholder="Re-enter password" required>                      
                        </div>
                        <br>
                        
                        <br>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" value="submit" name="submit">Create Account</button>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    require '../bld/class/database.php';
//    $connect=mysqli_connect("localhost","root","","blood");
    if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    if(isset($_POST["submit"])){
          
        $name=mysqli_real_escape_string($connect,$_POST["name"]);
        $address=mysqli_real_escape_string($connect,$_POST["address"]);
        $email=mysqli_real_escape_string($connect,$_POST["email"]);
        $office1=mysqli_real_escape_string($connect,$_POST["office1"]);
        $office2=mysqli_real_escape_string($connect,$_POST["office2"]); 
        $username=mysqli_real_escape_string($connect,$_POST["username"]);
        $password1=mysqli_real_escape_string($connect,$_POST["password1"]);
        $password2=mysqli_real_escape_string($connect,$_POST["password2"]);
        $password1=md5($password1);
        $password2=md5($password2);
         $role_id='1'; 
        $sql2="SELECT * FROM `hospital` WHERE username='$username'";
        $res_u = mysqli_query($connect,$sql2);
           
        if (mysqli_num_rows($res_u) > 0){
            echo'<script>alert("Sorry.....The username was already taken")</script>';	
        }else{
            //$sql="INSERT INTO `users`( `name`, `address`, `email`, `mobile1`, `mobile2`, `username`, `password1`, `role_id`) VALUES ('$name','$address','$email','$office1','$office2','$username','$password1',1)";
            $sql="INSERT INTO `users`(`name`, `address`, `email`, `mobile1`, `mobile2`, `role_id`) VALUES ('$name','$address','$email','$office1','$office2',1)";
            if($password1==$password2){
                if(mysqli_query($connect,$sql)){
                        $sql3="select user_id from users where email='$email'";
                        $res = mysqli_query($connect,$sql3);
                       // $row = mysql_fetch_row($result);
                        
                        $row = mysqli_fetch_row($res);
                         $t= $row[0];
                         
                            //$sql4="Insert into patients ('user_id',gender','blood_type','dob','nic','weight') values ('$t',$gender','$bloodtype','$dob','$nic','$weight')";
                            $sql4="INSERT INTO `hospital`( `user_id`, `username`, `password1`) VALUES ('$t','$username','$password1')";
                            if(mysqli_query($connect,$sql4)){
                                echo'<script>alert("Account has created successfully")</script>';
                            }
                        
                    }
                    else {
                        die("Error:{$connect->errno}:{$connect->error}");
                        
                    }
            }
            else{
                echo'<script>alert("Re-check your password")</script>';
            }
        $connect->close();
        }
    }
    ?>


<?php include_once('../bld/Include/footer.php');?>