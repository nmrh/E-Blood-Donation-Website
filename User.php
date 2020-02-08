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
                    <h2 class="title">User Registration Form</h2>
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
                            <span class="label label-default">NIC number</span>
                            <input type="text" class="form-control input" name="nic" id="nic" aria-describedby="nic" placeholder="Enter your NIC number" required maxlength="10">                      
                        </div>
                        <br>
                                               
                        <div class="row">
                            <span class="label label-default">Email</span>
                            <input type="email" class="form-control input" name="email" id="email" aria-describedby="email" placeholder="Enter your email">                      
                        </div>  
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Mobile Number</span>
                            <input type="text" class="form-control input" name="mob" id="mob" aria-describedby="mob" placeholder="Enter your mobile number" required maxlength="10">                      
                        </div>
                        <br>
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">username</span>
                            <input type="text" class="form-control input" name="uname" id="uname" aria-describedby="uname" placeholder="Enter a username" required>                      
                        </div>
                        <br>
                        
                        
                        
                        <div class="row">
                            <span class="label label-default">Password</span>
                            <input type="password" class="form-control input" name="password1" id="password1" aria-describedby="password1" placeholder="Enter your Password" required>                      
                        </div>
                        <br>
                         
                        <div class="row">
                            <span class="label label-default">Re-enter Password</span>
                            <input type="password" class="form-control input" name="password2" id="password2" aria-describedby="password2" placeholder="Re-enter your Password" required>                      
                        </div>
                        
                        
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
    
require '../eblood12/class/database.php';
    if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
        if(isset($_POST["submit"]))
        {
            $name=mysqli_real_escape_string($connect,$_POST["name"]);
            $address=mysqli_real_escape_string($connect,$_POST["address"]);
            $gender=mysqli_real_escape_string($connect,$_POST["gender"]);
            $nic=mysqli_real_escape_string($connect,$_POST["nic"]);
            $email=mysqli_real_escape_string($connect,$_POST["email"]);
            $mob=mysqli_real_escape_string($connect,$_POST["mob"]);
            $uname=mysqli_real_escape_string($connect,$_POST["uname"]);
            $password1=mysqli_real_escape_string($connect,$_POST["password1"]);
            $password2=mysqli_real_escape_string($connect,$_POST["password2"]);
            $password1=md5($password1);
            $password2=md5($password2);
            
            $sql2="SELECT * FROM users WHERE user_name='$uname'";
            $res_u = mysqli_query($connect,$sql2);
            
            if (mysqli_num_rows($res_u) > 0) {
                echo'<script>alert("Sorry.....The username was already taken")</script>';	
            }else{
                $sql="INSERT INTO users(name, address, gender, nic, email, mobile, user_name,password1)VALUES('$name','$address','$gender','$nic','$email','$mob','$uname','$password1')";  
                if($password1==$password2){
                    if(mysqli_query($connect,$sql)){
                        echo'<script>alert("Registration Done")</script>';
                    }
                    else {
                        die("Error:{$connect->errno}:{$connect->error}");
                    } 
                }
            else{
                echo'<script>alert("Re check your password")</script>';
            }   
            $connect->close();    
            }
        }
    ?>

<?php include_once('../eblood12/Include/footer.php'); ?>