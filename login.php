<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Signin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <form method="post" action="login.php">

        <div class="container">
            <div class="header">
                <h2>Signin</h2>
            </div>
            <?php include('errors.php'); ?>
            <div class="input_area">
                <label>Email</label>
                <input type="text" placeholder="Email" />
                <label>Password</label>
                <input type="text" placeholder="Password" />
            </div>
            <div class="actions">
                <button type="submit" value="Login">Signin</button>
                <p>
                    Don't have a account ?
                    <a href="register.php" class="Sign_up_link">Sign Up</a>
                </p>
            </div>
        </div>
    </form>

</body>

</html>