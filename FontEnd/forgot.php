<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Your Password </title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        <p>It's Quick</p>
        <div class="line"></div>
        <form action="login.php" method="POST">
            <?php
                if($errors > 0){
                foreach($errors AS $displayErrors)
                {
                    ?>
                    <div id="alert"><?php echo $displayErrors; ?></div>
                    <?php               

                }
            }
            ?>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="submit" name="find" placeholder="Verify"><br>
        </form>
    </div>
    
</body>
</html>