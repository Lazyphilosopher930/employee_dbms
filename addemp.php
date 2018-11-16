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
?>
    <div class="admintitle" align="center">
        <h4><a href="admindash.php" style="float:left; color:#fff; font-size:15px;margin-left:10px;">To Dashboard</a></h4>
        <h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:15px;">Logout</a></h4>
        <h1> Welcome to Admin Dashboard</h1>
    </div>

    <form method="post" action="addemp.php" enctype="multipart/form-data">
        <table align="center" border="1" style="width:70%; margin-top:40px;">
            <tr>
                <th  align="left">Employee ID</th>
                <td><input type="text" name="eid" placeholder="Enter ID" required></td>
            </tr>
            <tr>
                <th  align="left">Employee Name</th>
                <td><input type="text" name="ename" placeholder="Enter Full name" required></td>
            </tr>
            
            <tr>
                <th  align="left">City</th>
                <td><input type="text" name="city" placeholder="Enter city" required></td>
            </tr>
            <tr>
                <th  align="left">Department</th>
                <td><input type="text" name="edepartment" placeholder="Enter Department" required></td>
            </tr>
            
            <tr>
                <th  align="left">Employee Salary</th>
                <td><input type="text" name="esalary" placeholder="Enter Salary" required></td>
            </tr>
            <tr align="center">
                <td colspan="2"><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){

        include('../dbcon.php');
        $id=$_POST['eid'];
        $name=$_POST['ename'];
       
        $city=$_POST['city'];
        $department=$_POST['edepartment'];
       
        $sal=$_POST['esalary'];
        $qry="INSERT INTO `emp`(`eid`, `ename`, `city`, `edepartment`,`esalary`) VALUES ('$id','$name','$city','$department','$sal')";

        $run=mysqli_query($con,$qry);
        echo (mysqli_error($con));
        if($run==true){
            ?>
            <script>
                alert('Data Inserted Successfully');
            </script>
            <?php
        }
    }
?>
