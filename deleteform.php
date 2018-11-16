<?php

include('../dbcon.php');

$id=$_REQUEST['sid'];

$qry="DELETE FROM `emp` WHERE `emp_id`='$id';";

$run=mysqli_query($con,$qry);

if($run == true){
    ?>
    <script>
        alert('Data Deleted Successfully');
        window.open('deleteemp.php','_self');
    </script>
    <?php
}
?>
