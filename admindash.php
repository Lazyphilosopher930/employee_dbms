<?php
session_start();
if($_SESSION['uid']){
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
        <h4><a href="logout.php" style="float:right; margin-right:30px; color:#fff; font-size:15px;">Logout</a></h4>
        <h1> Welcome to Admin Dashboard</h1>
    </div>
    <div class="dashboard" align="center">
        <table style="margin-top:50px;">
            <tr>
                <td>1.</td><td><a href="addemp.php">Insert Employee Details</a></td>
            </tr>
            <tr>
                <td>2.</td><td><a href="updateemp.php">Update Employee Details</a></td>
            </tr>
            <tr>
                <td>2.</td><td><a href="deleteemp.php">Delete Employee Details</a></td>
            </tr>
        </table>
    </div>
    
</body>
</html>
