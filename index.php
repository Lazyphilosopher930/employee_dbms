<!DOCTYPE HTML>
<html lang="en_US">
<head>
<link rel="stylesheet" href="index1.css">
    <meta charset="utf-8">
    <title>Payroll Management System</title>
</head>
<body>
    <h5 align="right" style="margin-right:20px"><a href="login.php">Admin login</a></h5>
    <h1 align="center">Welcome to Payroll Management System</h1>
<form method="post" action="index.php">
    <table style="width:35%" align="center" border="1">
        <tr>
            <td colspan="2" align="center">Employee Information</td>
        </tr>
        <tr>
            <td align="left">Enter Employee ID</td>
            <td><input type="text" name="eid" required></td>
        </tr>
        <tr align="center">
            <td colspan="2"><input type="submit" name="submit" value="Show info"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $id=$_POST['eid'];
    include('dbcon.php');
    $sql="SELECT * FROM `emp` WHERE `eid`='$id'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0){
        $data=mysqli_fetch_assoc($run);
        ?>
        <table border="1" style="width:45%; margin-top:100px;" align="center">
            <tr>
                <th colspan="3">Employee Details</th>
            </tr>
            <tr>
                <th align="left">Name</th>
                <td><?php echo $data['ename']; ?></td>
            </tr>
            <tr>
                <th align="left">Employee ID</th>
                <td><?php echo $data['eid']; ?></td>
            </tr>
           
            <tr>
                <th align="left">City</th>
                <td><?php echo $data['city']; ?></td>
            </tr>
            <tr>
                <th align="left">Department</th>
                <td><?php echo $data['edepartment']; ?></td>
            </tr>
            <tr>
                <th align="left">Salary</th>
                <td><?php echo $data['esalary']; ?></td>
            </tr>
        </table>
        <?php
    }
    else{
        echo "<script> alert('NO Employee FOUND');</script>";
    }
}
?>
