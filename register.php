<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>


    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="container">
            <div class="header">
                <h2>Signup</h2>

                <div class="input_area">

                  
                     
                   
                        <label>Email</label>
                        <input type="email" name="email"  placeholder="Email" value="<?php echo $email; ?>">
                   

                    
                        <label>Password</label>
                        <input type="password"  placeholder="Password" name="password">
                   

                  
                        <label>Secret</label>
                        <input type="password"  placeholder="secret code" name="secret">
                   


                </div>
                <div class="actions">
                    <div class="input-group">
                        <button type="submit" name="reg_user">Signup</button>
                    </div>
                </div>
                <p>
                    Already a member? <a href="login.php" class="Sign_up_link">Sign in</a>
                </p>
            </div>
        </div>
    </form>
</body>

</html>