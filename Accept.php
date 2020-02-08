<?php include_once('../bld/Include/header.php');?>
<br><br><br><br>


    <div class="jumbotron">
        <h1>Notices</h1>
        <br><br>
       <?php
require '../bld/class/database.php';
$sql="SELECT `id`, `subject`, `content`, `blood_type`, `name`, `mobile`, `date` FROM `notices` WHERE Accept=0";
$result = mysqli_query($connect,$sql);
?>
<table class="table table-dark">
<tr>
    
<th>Subject</th>
<th>Content</th>
<th>Blood type</th>
<th>Name</th>
<th>Mobile Number</th>
<th>Date</th>

</tr>"
<?php
while($row = mysqli_fetch_assoc($result))
{
echo "<tr>
    
    <td>" . $row['subject'] . "</td>
    <td>" . $row['content'] . "</td>
    <td>" . $row['blood_type'] . "</td>
    <td>" . $row['name'] . "</td>
    <td>" . $row['mobile'] . "</td>
    <td>" . $row['date'] . "</td>";





    echo "<td><a class='btn btn-secondary' href='Accept.php?id=".$row["id"]."'>Accept</a></td>";
     echo "<td><a class='btn btn-secondary' href='Accept.php?id2=".$row["id"]."'>Delete</a></td>";
            echo "</tr>";
    






?>


<?php



}
echo "</table>";

require '../bld/class/database.php';

      //delete row on button click
      if(isset($_GET["id"])){
                $id = $_GET["id"];
                $query = "UPDATE `notices` SET `Accept`=1 WHERE id='$id'";

                $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
      }    
      
      if(isset($_GET["id2"])){
                $id2 = $_GET["id"];
                $query1 = "DELETE FROM `notices` WHERE id='$id2'";

                $result = mysqli_query($connect, $query1) or die(mysqli_error($connect));
      }   

?> 

    <br><br>
    <div class="float-xl-left">
        <form action="account.php">
            <button class="btn btn-secondary" name="logout">Back</button>
        </form>
    </div> 
   </div>

<?php include_once('../bld/Include/footer.php');?>