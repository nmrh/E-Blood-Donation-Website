<?php include_once('../bld/Include/header.php');
//require '../bld/class/database.php';
?>
<br><br><br><br><br><br>

<link href="CSS/account.css" rel="stylesheet" media="all">
<script type="text/javascript" src="custom.js"></script>
<style>
    th {
    text-align: inherit;
    color: black;
}

body {
    
    color: #0a0a0a;
    font-weight: 600;
}
</style>

<div class="container">
    
      
<br><br>


    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">Search bar</a>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
                    <form method="POST">
                        
                        <br>
                        <div class="row">
                            <div class="col">
                            <span class="label label-default">Blood type</span>
                            </div>
                            <div class="col">
                            <div class="rs-select2 js-select-simple select--no-search bloodtype">
                                <select class="browser-default custom-select" name="bloodtype">
                                    <option selected></option>
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
                        </div>  
                        <br>
                        <div class="row">
                            <div class="col">
                            <span class="label label-default">Town</span>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control input" id="town" name="town" aria-describedby="namehelp">                      
                            </div>
                        </div> 
                        <br><br>
                         
                        <div class="float-xl-right">
                            <button class="btn btn-secondary" name="search">Search</button>
                        </div> 
                        <br>
                    </form><br><br>
                    <?php
    
require '../bld/class/database.php';
    if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$IsDataFound="No";
       if(isset($_POST["search"]))
       {
          
            $bloodtype=mysqli_real_escape_string($connect,$_POST["bloodtype"]);
            $town=mysqli_real_escape_string($connect,$_POST["town"]);
            
            
            
            
            if(!empty($town)){//When the second input is not empty
                if(!empty($bloodtype)){    //When both first and second inputs are not empty
                    $sql1="SELECT name,address,email,mobile1,mobile2,blood_type FROM `donate_view` WHERE blood_type like '%" .$bloodtype . "%' and address like '%" .$town . "%'";
                }else{      //Second input is not empty but first input is empty
                    $sql1="SELECT name,address,email,mobile1,mobile2,blood_type FROM `donate_view` WHERE address like '%" .$town . "%'";
                }
            }
            else{
                
                if(!empty($bloodtype)){
                    $sql1="SELECT name,address,email,mobile1,mobile2,blood_type FROM `donate_view` WHERE blood_type like '%" .$bloodtype . "%'";
                }else{
                    $sql1="SELECT name,address,email,mobile1,mobile2,blood_type FROM `donate_view`";
                }
            
            }
            
//            if(empty($town)){//When the second input is not empty
//                if(empty($bloodtype)){    //When both first and second inputs are not empty
//                    $sql1="SELECT name,address,email,mobile1,mobile2,blood_type FROM `donate_view`";
//                }
//            }
            
             $result = mysqli_query($connect,$sql1);
            
            $IsDataFound = "Yes";   
        
           
    ?>
<div class="table-responsive">
    <table class="table table-hover table-borderless">
    <tr>
    
<th>Name</th>
<th>Town</th>
<th>Email</th>
<th>Mobile</th>
<th>Mobile</th>
<th>Blood Type</th>

</tr>"
<?php
require '../bld/class/database.php';
while($row = mysqli_fetch_array($result))
{
echo "<tr>
    
    <td>" . $row['name'] . "</td>
    <td>" . $row['address'] . "</td>
    <td>" . $row['email'] . "</td>
    <td>" . $row['mobile1'] . "</td>
    <td>" . $row['mobile2'] . "</td>
    <td>" . $row['blood_type'] . "</td>";

echo "</tr>";
 
}
       }
echo "</table>";

?>
            
            

</div>
            </div
                
            
            </div>
            
        </div>
          
      </div>
      
      
    </div>
    
</div>



    

<?php include_once('../bld/Include/footer.php'); ?>