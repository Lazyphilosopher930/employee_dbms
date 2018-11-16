<!DOCTYPE HTML>
<html lang="en_US">
<head>
    <meta charset="utf-8">
    <title>Admin Login</title>
</head>
<body>
    
    <h1 align="center">Admin Login</h1>
<form method="post" action="login.php">
    <table style="width:35%" align="center" border="1">
        <tr>
            <td colspan="2" align="center">Username<input type="text" name="uname" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center">Password<input type="Password" name="pass" required></td>
        </tr>
        <tr align="center">
            <td colspan="2"><input type="submit" name="login" value="Login"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
    include('dbcon.php');
    if(isset($_POST['login'])){
        $username=$_POST['uname'];
        $password=$_POST['pass'];
        $qry="SELECT * FROM `admin` WHERE `usename`='$username' AND`password`='$password'";
        $run=mysqli_query($con,$qry);

        $row=mysqli_num_rows($run);
        if($row<1){
            ?>
            <script>
                alert('Username or Password not match!');
                window.open('login.php','_self');
            </script>
            <?php
        }
        else{
            $data=mysqli_fetch_assoc($run);
            $id=$data['id'];
            session_start();
            $_SESSION['uid']=$id;
            header('location:admin/admindash.php');
        }
    }

?>
