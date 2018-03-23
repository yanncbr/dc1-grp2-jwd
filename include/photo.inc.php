<article class="col-4 miniature">

    <a href="photo.php?id=<?php echo $photo["id"]; ?>" title="<?php echo $photo["titre"]; ?>">
        <img src="images/<?php echo $photo["img"]; ?>" alt="<?php echo $photo["titre"]; ?>" title="<?php echo $photo["titre"]; ?>">
        <p><?php echo $photo["nb_likes"]; ?> likes</p>
    </a>

    <div class="infos">
        <h3><?php echo $photo["titre"]; ?> #<?php echo $photo["categorie"]; ?></h3>
        <p>
            <?php foreach ($photo["tags"] as $tag) : ?>
                # <?php echo $tag; ?>
            <?php endforeach; ?>
        </p>
        <p><?php echo $photo["date_creation_format"]; ?></p>
    </div>

</article>