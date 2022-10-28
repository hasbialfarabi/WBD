<?php 
include('./auth/auth.php');
include("../utilities/dbconnection.php");


function redirect($url)
{
    echo "<script type='text/javascript'>document.location.href='{$url}';</script>";
    echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $url . '">';
}

$getAllSongsQuery = "SELECT songs_id, judul,
                            song.audio_path, song.image_path,
                            album.judul, album.penyanyi, album.total_duration
                    FROM song
                    LEFT JOIN album on album.album_id = song.album_id
                    ORDER BY song.tanggal_terbit DESC";

$result = mysqli_query($conn, $getAllSongsQuery);
$songs = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Generate random songs
$randomKeys = (count($songs) >= 3) ? array_rand($songs, 3) : $songs;

$formatSongs = array();

foreach ($songs as $song) {
    $formatSongs[$song["id"]] = $song;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Binotify</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/homePage.css">
    <link rel="stylesheet" href="./css/searchPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>Binotify</title>
</head>

<body>
    <div class="login-modal">
        <div class="login-modal_logo">
            <i class="fab fa-spotify"></i>
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
            </div>
            <div class="musicContainer hide" id="favourites">
                <?php if ($authenticated) : ?>
                    <?php include("./pages/favContent.php"); ?>
                <?php endif; ?>
            <?php include("./pages/homeContent.php"); ?>
            <div class="musicContainer hide" id="search">
            </div>
            <?php include("./pages/searchContent.php"); ?>
            <div class="musicContainer hide" id="album">
            </div>
            <?php include("./pages/albumContent.php") ?>
            <!-- End Music UI -->
        </div>
        <!-- Music Player -->
    </div>
</body>

</html>