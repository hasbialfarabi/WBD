<?php include('./komponen/navbar.php'); ?>
<section>
    <h1 class="sectionTitle">Recommend Songs</h1>
    <div class="cards">
        <?php foreach ($randomKeys as $key) : ?>
            <div class="card" data="<?php echo $song[$key]["song_id"]; ?>">
                <div class="imgContainer">
                    <img src="<?php echo $song[$key]["image_path"]; ?>" alt="">
                </div>
                <div class="cardInfo">
                    <h3><?php echo $song[$key]["judul"]; ?></h3>
                    <h5><?php echo $song[$key]["penyanyi"]; ?></h5>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<section>
    <h1 class="sectionTitle">New Songs</h1>
    <div class="cards">
        <div class="card" data="<?php echo $song[0]["song_id"]; ?>">
            <div class="imgContainer">
                <img src="<?php echo $song[0]["image_path"]; ?>" alt="">
            </div>
            <div class="cardInfo">
                <h3><?php echo $song[0]["judul"]; ?></h3>
                <h5><?php echo $song[0]["penyanyi"]; ?></h5>
            </div>
        </div>
        <div class="card" data="<?php echo $song[1]["song_id"]; ?>">
            <div class="imgContainer">
                <img src="<?php echo $song[1]["image_path"]; ?>" alt="">
            </div>
            <div class="cardInfo">
                <h3><?php echo $song[1]["judul"]; ?></h3>
                <h5><?php echo $song[1]["penyanyi"]; ?></h5>
            </div>
        </div>
    </div>
</section>