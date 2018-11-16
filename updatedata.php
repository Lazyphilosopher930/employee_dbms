<?php

include('../dbcon.php');
$eid=$_POST['eid'];
$name=$_POST['ename'];
$city=$_POST['city'];
$department=$_POST['edepartment'];
$idqw=$_POST['sid'];


$qry="UPDATE `emp` SET `eid`='$eid',`ename`='$name',`city`='$city',`edepartment`='$department' WHERE `eid`='$eid'";

$run=mysqli_query($con,$qry);

if($run == true){
    ?>
    <script>
        alert('Data Inserted Successfully');
        window.open('updateform.php?sid=<?php echo $id;?>','_self');
    </script>
    <?php
}
?>
