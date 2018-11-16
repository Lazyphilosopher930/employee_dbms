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

<table align="center">
    <form action="deleteemp.php" method="post">
        <tr>
            <th>Enter Employee ID</th>

            <td>
                <input type="number" name="id" placeholder="Enter ID" required="required"/>
            </td>
            <td colspan="2"><input type="submit" value="Search" name="submit"/></td>
        </tr>
    </form>
</table>



<table align="center" width="80%" border="1" style="margin-top:10px;">
    <tr style="background-color:#000; color: #fff;">
            <th>ID</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Experience</th>
    </tr>

    <?php
        if(isset($_POST['submit'])){
            include('../dbcon.php');
            $idd=$_POST['id'];
            $sql="SELECT * FROM `emp` WHERE `eid`='$idd'";
            $run=mysqli_query($con,$sql);
            if(mysqli_num_rows($run)<1){
                echo "<tr><td colspan='5'> Record not found </td></tr>";
            }
            else{
                $count=0;
                while($data=mysqli_fetch_assoc($run)){
                    $count++;
                    ?>
                    <tr>

                            <td><?php echo $data['eid'];?></td>
                            <td><?php echo $data['ename'];?></td>
                            <td><?php echo $data['city'];?></td>
                            <td><?php echo $data['edepartment'];?></td>
                            <td><a href="deleteform.php?sid=<?php echo $data['eid']; ?>">Delete</a></td>

                    </tr>
                    <?php
                }
            }
        }
    ?>
</table>



</body>
</html>
