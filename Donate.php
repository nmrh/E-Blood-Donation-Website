<?php include_once('../bld/Include/header.php');
//require '../bld/class/database.php';
?>

<link href="CSS/donate.css" rel="stylesheet" media="all">
<style>
    .form-control {
    color: #868e96;
}

</style>
<body>
    <br><br><br><br><br><br><br>

        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Blood Donation Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        
                        <br>
                        <div class="row">
                            <span class="label label-default">Name</span>
                            <input type="text" class="form-control input" id="name" name="name" aria-describedby="namehelp" placeholder="Enter your full name" required>                      
                        </div>  
                        <br>
                        <div class="row">
                            <span class="label label-default">Address</span>
                            <input type="text" class="form-control input" name="address" id="address" aria-describedby="addresshelp" placeholder="Enter your address" required>                      
                        </div>  
                             
                        <br>
                        <div class="row">
                            <td>
                            <span class="label label-default">Gender</span>
                            <div class="p-t-15 col">
                               
                               <label class="radio-container m-r-55">
                                   <input type="radio" name="gender" value="male">Male<br>
                                    <span class="checkmark"></span>
                                </label>
                                
                                <label class="radio-container">
                                    <input type="radio" name="gender" value="female">Female 
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            </td>
                        </div> 
                        <br>
                                               
                        <div class="row">
                            <span class="label label-default">Blood type</span><br>
                            <div class="rs-select2 js-select-simple select--no-search bloodtype">
                                <select class="browser-default custom-select" name="bloodtype" required>
                                    <option selected>Select blood type</option>
                                    <option value="A-positive">A-positive</option>
                                    <option value="A-negative">A-negative</option>
                                    <option value="B-positive">B-positive</option>
                                    <option value="B-negative">B-negative</option>
                                    <option value="O-positive">O-positive</option>
                                    <option value="O-negativ">O-negative</option>
                                    <option value="AB-positive">AB-positive</option>
                                    <option value="AB-negative">AB-negative</option>
                                    
                                </select>
                            </div>
                            </div>
                         
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Email</span>
                            <input type="email" class="form-control input" name="email" id="email" aria-describedby="email" placeholder="Enter your email">                      
                        </div>  
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Contact numbers</span>
                            <div class="col">
                                <input type="phone" class="form-control input" name="mobile" id="mobile" aria-describedby="mobtel" placeholder="Mobile" required>                      
                            </div>
                            <div class="col">
                                <input type="phone" class="form-control input" name="office" id="office" aria-describedby="office" placeholder="Office">                      
                            </div>
                        </div> 
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Date of Birth</span>
                            <input type="date" class="form-control input" name="dob" id="dob" aria-describedby="dob" placeholder="Enter your birthday" required>                      
                        </div>
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">NIC number</span>
                            <input type="text" class="form-control input" name="nic" id="nic" aria-describedby="nic" placeholder="Enter your NIC number" required maxlength="10">                      
                        </div>
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Weight in kg</span>
                            <input type="text" class="form-control input" name="weight" id="weight" aria-describedby="weight" placeholder="Enter your weight in kg" required>                      
                        </div>
                        <br>
                        
<!--                        <div class="row">
                            <span class="label label-default">Username</span>
                            <input type="text" class="form-control input" name="username" id="username" aria-describedby="username" placeholder="Enter username" required>                      
                        </div>
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Password</span>
                            <input type="password" class="form-control input" name="password1" id="password1" aria-describedby="password1" placeholder="Enter your password" required>                      
                        </div>
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Re-enter Password</span>
                            <input type="password" class="form-control input" name="password2" id="password2" aria-describedby="password2" placeholder="Re-enter your password" required>                      
                        </div>
                        <br>-->
                                             
                        
                        <br>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" value="submit" name="submit">Submit</button>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php
    
require '../bld/class/database.php';
    if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
       if(isset($_POST["submit"]))
       {
          
            $name=mysqli_real_escape_string($connect,$_POST["name"]);
            $address=mysqli_real_escape_string($connect,$_POST["address"]);
            $gender=mysqli_real_escape_string($connect,$_POST["gender"]);
            $bloodtype=mysqli_real_escape_string($connect,$_POST["bloodtype"]);
            $email=mysqli_real_escape_string($connect,$_POST["email"]);
            $mobile=mysqli_real_escape_string($connect,$_POST["mobile"]);
            $office=mysqli_real_escape_string($connect,$_POST["office"]);
            $dob=mysqli_real_escape_string($connect,$_POST["dob"]);
            $nic=mysqli_real_escape_string($connect,$_POST["nic"]);
            $weight=mysqli_real_escape_string($connect,$_POST["weight"]);
//            $username=mysqli_real_escape_string($connect,$_POST["username"]);
//            $password1=mysqli_real_escape_string($connect,$_POST["password1"]);
//            $password2=mysqli_real_escape_string($connect,$_POST["password2"]);
//            $password1=md5($password1);
//            $password2=md5($password2);
            
            $sql2="SELECT * FROM users WHERE email='$email'";
            $res_u = mysqli_query($connect,$sql2);
            
            if (mysqli_num_rows($res_u) > 0) {
                echo'<script>alert("Sorry.....Re-check your email")</script>';	
            }else{
                $sql="INSERT INTO users( `name`, `address`, `email`, `mobile1`, `mobile2`,`role_id`) VALUES ('$name','$address','$email','$mobile','$office',2)";
                
                
//            if($password1==$password2){
                    if(mysqli_query($connect,$sql)){
                        $sql3="select user_id from users where email='$email'";
                        $res = mysqli_query($connect,$sql3);
                       // $row = mysql_fetch_row($result);
                        
                        $row = mysqli_fetch_row($res);
                         $t= $row[0];
                         
                            //$sql4="Insert into patients ('user_id',gender','blood_type','dob','nic','weight') values ('$t',$gender','$bloodtype','$dob','$nic','$weight')";
                            $sql4="INSERT INTO `patients`( `user_id`, `gender`, `blood_type`, `dob`, `nic`, `weight`) VALUES ('$t','$gender','$bloodtype','$dob','$nic','$weight')";
                            if(mysqli_query($connect,$sql4)){
                                echo'<script>alert("Registration Done")</script>';
                            }
                        
                    }
                    else {
                        die("Error:{$connect->errno}:{$connect->error}");
                        
                    }
//                }
//            else{
//                echo'<script>alert("Re check your password")</script>';
//            }    
            $connect->close();    
           }
        
        }

    ?>

<?php include_once('../bld/Include/footer.php'); ?>