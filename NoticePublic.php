<?php include_once('../bld/Include/header.php');
//require '../bld/class/database.php';
?>
<br><br><br><br>

<link href="CSS/account.css" rel="stylesheet" media="all">
<script type="text/javascript" src="custom.js"></script>

<div class="container">
    <br>
    
    
    <h1 class="mt-4 mb-3">WELCOME</h1>
     
    
<br><br>


    <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h5 class="mb-0">
            <a data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="collapseOne">Notices</a>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
               
                    
                    <?php
                    require '../bld/class/database.php';

                   ?>
                <style>
                    thead{
                        color: black;
                        background-color: #FFFFFF;
                    }
                </style>
                <div class="table-responsive">
            <table class="table table-borderless">
<tr>
    
<th>Subject</th>
<th>Content</th>
<th>Blood type</th>
<th>Name</th>
<th>Mobile Number</th>
<th>Date</th>

</tr>"
<?php
$sql1="SELECT `subject`, `content`, `blood_type`, `name`, `mobile`, `date` FROM `notices` WHERE Accept=1";
                    $result_set = mysqli_query($connect, $sql1);
                    
while($result = mysqli_fetch_array($result_set))
{
echo "<tr>
    
    <td>" . $result['subject'] . "</td>
    <td>" . $result['content'] . "</td>
    <td>" . $result['blood_type'] . "</td>
    <td>" . $result['name'] . "</td>
    <td>" . $result['mobile'] . "</td>
    <td>" . $result['date'] . "</td>";
echo "</tr>";
?>


<?php



}
echo "</table>"; ?>
                </div>
            </div>
            
        </div>
          
      </div>
      
      
    </div>
    
</div>


<?php include_once('../bld/Include/footer.php'); ?>