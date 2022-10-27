<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Binotify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./common/header.html">
    <link rel="stylesheet" href="./common/footer.html">
    <title>Binotify</title>
</head>
    
<body>
    <div class="login-modal">
        <div class="login-modal_logo">
            <i class = "fab fa-binotify"></i>
            <h2>Binotify</h2>
        </div>
        <div class="login-modal_info">
            <p>You have to login to use this feature.</p>
            <a href="./auth/login.php" class="login">Login</a>
            <a href="./auth/signup.php" class="signup">Haven't create an account yet?</a>
            <div class="close">+</div>
        </div>
    </div>
    <div class="container">
        <div class="konten">
            <!-- Bagian pinggir web (sidebar) -->
            <?php include("./komponen/sidebar.php"); ?>
            <!-- end sidebar -->

            <!-- Music UI -->
            <div class="musicContainer" id="home">
                <?php include("./pages/homeContent.php"); ?>
            </div>
            <div class="musicContainer hide"
            id="search">
                <?php include("./pages/searchContent.php"); ?>
            </div>
            <div class="musicContainer hide" id="singer">
                <?php include("./pages/singerContent.php"); ?>
            </div>
            <div class="musicContainer hide" id="album">
                <?php include("./pages/singerContent.php"); ?>
            </div>
            <!-- End Music UI -->
        </div>
         <!-- Music Player -->
         <?php include("./components/musicPlayer.php"); ?>
    </div>
</body>

</html>