<?php $title = 'Accueil'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/5ccf103d70.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <h1><?= $title ?></h1>
    </header>
    <nav>
        <div class="mobileNav">
            <i class="fa-solid fa-bars" id="menuIcon"></i>
        </div>
        <ul id="menu" class="active">
            <li>Accueil</li>
            <li>Sport</li>
            <li>Technologie / numérique</li>
            <li>Actualités</li>
            <li>Jeux Videos</li>
        </ul>
    </nav>
    <main>