<?php include_once('../bld/Include/header.php');
//require '../bld/class/database.php';
?>
<br><br><br><br>

<link href="CSS/account.css" rel="stylesheet" media="all">
<script type="text/javascript" src="custom.js"></script>

<body>
<style>
    th {
    text-align: inherit;
    color: black;
}

body {
    
    color: #0a0a0a;
    font-weight: 600;
}

.btn {
    
    color: black;
    background-color: #d60606;
    font-weight: 600;
    
}
</style>
<div class="container">
    <br><br><br><br><br><br>
    <div class="welcome-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Notices</h2>
                        </header>

                        <div class="entry-content mt-5">
                            <p>You can put your urgent notices regarding blood requirements and blood donation camps organized by you. Your notices will be noticed to the public only if they get approved by the authority.</p>
                        </div>
                        
                        <div class="wrapper wrapper--w790">
                            <br><br>
            <div class="card card-5">
                
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        
                        <br>
                        <div class="row">
                            <span class="label label-default">Subject</span>
                            <input type="text" class="form-control input" id="subject" name="subject" aria-describedby="subject" placeholder="Enter the subject of the notice" required>                      
                        </div>  
                        <br>
                        <div class="row">
                            <span class="label label-default">Content</span>
                            <textarea type="text" class="form-control input" name="content" id="content" aria-describedby="content" placeholder="Enter your Message" required> </textarea>                     
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
                            <span class="label label-default">Your Name</span>
                            <input type="text" class="form-control input" name="name" id="name" aria-describedby="name" placeholder="Enter your name" required>                      
                        </div>
                        <br>
                        
                        
                        <div class="row">
                            <span class="label label-default">Contact numbers</span>
                            <input type="phone" class="form-control input" name="mobile" id="mobile" aria-describedby="mobtel" placeholder="Mobile" required>                      
                            
                        </div> 
                        <br>
                        
                        <div class="row">
                            <span class="label label-default">Date</span>
                            <input type="date" class="form-control input" name="d" id="d" aria-describedby="d" placeholder="Date" required>                      
                        </div>
                        <br>
                      <br>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" value="upload" name="upload">Upload</button>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
    </div>
    
   
                        
                    </div>
                </div>
                
            </div>
        </div>

</div>

     <?php
    
require '../bld/class/database.php';
    if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
       if(isset($_POST["upload"]))
       {
          
            $subject=mysqli_real_escape_string($connect,$_POST["subject"]);
            $content=mysqli_real_escape_string($connect,$_POST["content"]);
            $bloodtype=mysqli_real_escape_string($connect,$_POST["bloodtype"]);
            $name=mysqli_real_escape_string($connect,$_POST["name"]);
            $mobile=mysqli_real_escape_string($connect,$_POST["mobile"]);
            $d=mysqli_real_escape_string($connect,$_POST["d"]);
           
            $sql="INSERT INTO notices( `subject`, `content`, `blood_type`, `name`, `mobile`, `date`,`Accept`) VALUES ('$subject','$content','$bloodtype','$name','$mobile','$d',0)";
            
                
           
                    if(mysqli_query($connect,$sql)){
                        echo'<script>alert("Your notice is successfully updated. Wait for the approval")</script>';
                            }
                        
                    }
                    else {
                        die("Error:{$connect->errno}:{$connect->error}");
                        
                    }
                
               
            $connect->close();    
            
        
        

    ?>
    
<?php include_once('../bld/Include/footer.php'); ?>