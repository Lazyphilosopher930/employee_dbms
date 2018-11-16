<?php
session_start();
if(isset($_SESSION['uid'])){
    echo "";
}
else{
    header('location: ../login.php');

}
?>
<?php
    include('header.php');
    include('../dbcon.php');
        $sid=$_GET['sid'];
        $sql="SELECT * FROM `emp` WHERE `eid`='$sid'";
        $run=mysqli_query($con,$sql);

        $data=mysqli_fetch_assoc($run);
?>


    <div class="admintitle" align="center">
        <h4><a href="admindash.php" style="float:left; color:#fff; font-size:15px;margin-left:10px;">To Dashboard</a></h4>
        <h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:15px;">Logout</a></h4>
        <h1> Welcome to Admin Dashboard</h1>
    </div>




    <form method="post" action="updatedata.php" enctype="multipart/form-data">
        <table align="center" border="1" style="width:70%; margin-top:40px;">
            <tr>
                <th  align="left">Employee ID</th>
                <td><input type="text" name="empid" value = <?php echo $data['eid']; ?> required></td>
            </tr>
            <tr>
                <th  align="left">Employee Name</th>
                <td><input type="text" name="name" value = <?php echo $data['ename'];?> required></td>
            </tr>
            
            <tr>
                <th  align="left">City</th>
                <td><input type="text" name="address"value = <?php echo $data['city'];?> required></td>
            </tr>
            <tr>
                <th  align="left">Department</th>
                <td><input type="text" name="exper" value = <?php echo $data['edepartment'];?> required></td>
            </tr>
            <tr align="center">
                <td colspan="2">
                    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </for


</body>
</html>
