<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>POKEBEES POKEDEX || LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="src/css/loginStyles.css">
</head>
<body>
    <div class="bg">
        <div class="title"></div>
        <div class="pokeball">
            <form class="login" action="src/public/login.php" method="post">
                <label>TRAINER EMAIL:</label>
                <input class="email" name="email" placeholder="i.e. gary@gym.po.ke" />
                <input class="enter" type="submit" value="GO TO POKEDEX" />
                <?php if (isset($_GET['invalid_email'])){echo '<span>Invalid Email</span>';} ?>
            </form>
        </div>
        <div class="title2"></div>
    </div>
</body>
</html>