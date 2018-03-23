<?php
require_once 'functions.php';
require_once 'model/database.php';

$id = $_GET["id"];

$photo = getPhoto($id);

getHeader($photo["titre"], "Description page photo");
?>

<header>
    <div class="row col_center">
        <?php getMenu(); ?>
    </div>
</header>

<h1><?php echo $photo["titre"]; ?></h1>

<?php getFooter(); ?>