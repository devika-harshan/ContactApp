<?php include('server.php') ?>

<?php




if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>

<body>

    <div class="header">
        <h2>Home Page</h2>
    </div>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['email'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>

        <div>

        <h1>Contact form and Contact List Page</h1><br>
         <h3>Add Contacts</h3>  

            <form method="post" action="">
               Name:<br>
                <input type="text" name="myname">
                <br>
              Ph No:<br>
                <input type="text" name="phno"><br>
             Email Id:<br>
                <input type="email" name="email">
                <br><br>
                <input type="submit" name="save" value="submit">
            </form>

        </div>

        <?php

        if (isset($_POST['save'])) {
            $myname = $_POST['myname'];
            $phno= $_POST['phno'];
           
            $email = $_POST['email'];
            $sql = "INSERT INTO employee (myname,phno,email)
	 VALUES ('$myname','$phno','$email')";
           

        }

        ?>




        <?php
        $result = mysqli_query($db, "SELECT * FROM employee");


        if (mysqli_num_rows($result) > 0) {
        ?>
            <table>

                <tr>
                    <td> Name</td>
                    <td>Ph No</td>
                   
                    <td>Email id</td>
                </tr>
                <?php
                $i = 0;
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["myname"]; ?></td>
                        <td><?php echo $row["phno"]; ?></td>
                       
                        <td><?php echo $row["email"]; ?></td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </table>
        <?php
        }
        ?>








    </div>

</body>

</html>