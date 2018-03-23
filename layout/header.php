<!doctype html>
<html lang="fr">
    <head>

        <meta charset="UTF-8"/>

        <title><?php echo $title; ?></title>

        <meta name="description" content="<?php echo $description; ?>"/>
        <meta name="author" content="CEDRIC MORVAN"/>


        <link rel="shortcut icon" href="#"/>
        <link rel="stylesheet" href="css/normalize.css" type="text/css" media="all"/>
        <link rel="stylesheet" href="css/grid-12-960.css" type="text/css" media="all"/>
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>

        <?php foreach ($stylesheets as $path) : ?>
            <link rel="stylesheet" href="<?php echo $path; ?>" type="text/css" media="all"/>
        <?php endforeach; ?>


    </head>

    <body>