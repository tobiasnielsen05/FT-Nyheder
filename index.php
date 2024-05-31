<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Forside | Folketidende</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-secondarybg">
<nav class="navbar navbar-expand-lg bg-primary mb-4">
    <div class="container-fluid">
        <img class="w-50" src="images/logohvid.webp" alt="ft nyheder hvid logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Lolland</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Guldborgsund</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Kultur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">112</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Sport</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="bg-latestnews text-white d-flex justify-content-center">
    <h1 class="mt-1">Seneste Nyt</h1>
</div>

<div class="container mt-3">
    <div class="d-flex justify-content-center bg-secondary">
        <a href="senestenyt.php?newsID=2"><img class="w-100" src="images/politimand.jpg" alt="politimand der står og peger om natten"></a>
    </div>
</div>

<div class="container mt-5 mb-4">
    <div class="d-flex justify-content-center">
        <a class="btn btn-orange text-white fw-bold mb-3 w-100 fs-2 rounded-4" href="ugensquiz.php" role="button">Ugens Quiz</a>
    </div>
</div>

<div class="container mb-3">
    <div class="d-flex justify-content-center">
        <button class="btn btn-primary text-white fw-bold w-75 fs-2 rounded-3" id="knap">Tillad notifikationer</button>
    </div>
</div>

<div class="bg-secondary text-primary d-flex justify-content-center">
    <h1 class="mt-1 fw-bold">Debat</h1>
</div>

<div class="container bg-background mb-5">
    <div class="d-flex justify-content-center">
        <p class="mt-3 fs-5 fw-bold text-primary">Hvordan skal Lolland kommune sørge
            for at folkeskolerne ikke dumper? </p>
    </div>
    <div class="d-flex justify-content-center">
        <a class="btn btn-orange text-white fw-bold mb-2 w-100 fs-2 rounded-4" href="debat.php?newsID=1" role="button">Deltag i debatten</a>
    </div>
</div>

<div class="d-flex justify-content-center bg-secondary">
    <h1 class="text-primary mt-1 fw-bold">Comic Strip</h1>
</div>

<div class="container mt-3 mb-5">
    <h1 class="fw-bold text-primary fs-4">Klik på billedet for stor version (Mobil)</h1>
    <div class="d-flex justify-content-center bg-secondary">
        <a href="comicstrip.php"><img class="w-100" src="images/comicstrip.jfif" alt="Billede af comic strip"></a>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('knap').addEventListener('click', function() {
        if (Notification.permission === 'default') {
            Notification.requestPermission().then(permission => {
                if (permission === 'granted') {
                    showNotification();
                } else {
                    console.log('Tilladelse nægtet!');
                }
            });
        } else if (Notification.permission === 'granted') {
            showNotification();
        } else {
            console.log('Notifikationer er ikke tilladt!');
        }
    });
</script>
</body>
</html>
