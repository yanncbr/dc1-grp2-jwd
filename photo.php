<?php
require_once 'functions.php';
require_once 'model/database.php';

$id = $_GET["id"];

$photo = getPhoto($id);
$liste_tags = getAllTagsByPhoto($id);

getHeader($photo["titre"], "Description page photo");
?>

<header>
    <div class="row col_center">
        <?php getMenu(); ?>
    </div>
</header>

<main class="row col_center">

    <em><?php echo $photo ["date_creation_format"]; ?></em>
    <h1><?php echo $photo["titre"]; ?></h1>
    <img src="images/<?php echo $photo["img"]; ?>">

    <ul>
        <?php foreach ($liste_tags as $tag) : ?>
            <li># <?php echo $tag["libelle"]; ?></li>
        <?php endforeach; ?>
    </ul>

    <p>Nombre de likes: <?php echo $photo["nb_likes"]; ?></p>
    
    <p>
        <a href="categorie.php?id=<?php echo $photo ['categorie_id'] ?>">
            <?php echo $photo ["categorie"]; ?>
        </a>
    </p>
    <p><?php echo $photo ["description"];?></p>
</main>

<?php getFooter(); ?>