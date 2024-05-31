<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];

    $sql = "INSERT INTO kommentarer (komNavn, komTekst) VALUES (:komNavn, :komTekst)";
    $bind = [":komNavn" => $data["komNavn"], ":komTekst" => $data["komTekst"]];

    $db->sql($sql, $bind, false);

}

?>
<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Seneste Nyt | Folketidende</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-background">
<nav class="navbar navbar-expand-lg bg-primary mb-3">
    <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold" href="index.php">FOLKETIDENDE</a>
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

<div class="container mb-5">
    <div class="row bg-secondary text-black text-center mb-3">
        <h1 class="mt-1">Seneste Nyt</h1>
    </div>

    <div class="row">
        <?php
        $sql = "SELECT * FROM news WHERE newsID = 2";
        $news = $db->sql($sql);
        foreach ($news as $nyhed) {
            ?>
            <div class="mb-2">
                <h1 class="fs-3 fw-bold text-primary">
                    <?php
                    echo $nyhed->newsOverskrift
                    ?>
                </h1>
            </div>
            
            <div>
                <img class="w-100" src="images/politimand.jpg" alt="">
            </div>

            <div class="mt-2">
                <h1 class="text-primary fs-3 fw-bold">
                    <?php
                    echo $nyhed->newsUnderoverskrift
                    ?>
                </h1>
            </div>

            <div class="mb-3">
                <small>Forfatter:
                    <?php
                    echo $nyhed->newsForfatter
                    ?>
                </small>
            </div>

            <div class="mt-2">
                <p class="fs-5 mb-5 text-primary">
                    <?php
                    echo $nyhed->newsTekst
                    ?>
                    <br>
                    <br>
                    <?php
                    echo $nyhed->newsTekst2
                    ?>
                    <br>
                    <br>
                    <?php
                    echo $nyhed->newsTekst3
                    ?>
                    <br>
                    <br>
                    <?php
                    echo $nyhed->newsTekst4
                    ?>
                    <br>
                    <br>
                    <?php
                    echo $nyhed->newsTekst5
                    ?>
                </p>
            </div>

            <?php
        }
        ?>
    </div>
</div>

<div class="row bg-background mb-5">
    <div class="bg-secondary text-primary d-flex justify-content-center">
        <h1 class="mt-1">Kommentarer</h1>
    </div>

    <?php
    $kommentarer = $db->sql("SELECT * FROM kommentarer WHERE komNewsID = :newsID", [":newsID" => $_GET["newsID"]]);

    if ($kommentarer) {
        foreach ($kommentarer as $kommentar);
        ?>
        <div class="d-flex justify-content-center mt-3 mb-5">
            <div class="card">
                <div class="card-body bg-secondary">
                    <div class="fw-bold">
                        <?php
                        echo $kommentar->komNavn;
                        ?>
                    </div>
                    <?php
                    echo $kommentar->komTekst;
                    ?>
                </div>
                <div class="card-footer text-muted bg-secondary">
                    <?php
                    echo $kommentar->komDato;
                    ?>
                </div>
            </div>
        </div>
        <?php
    } else
        echo '<h1 class="d-flex justify-content-center mt-3 mb-5">Ingen kommentarer endnu!</h1>';
    ?>
</div>

<footer class="bg-primary d-flex justify-content-center fixed-bottom mt-5">
    <a class="d-flex justify-content-center" href="index.php"><img class="w-25" src="images/pil1.png" alt="pil der går tilbage til forsiden"></a>
</footer>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
