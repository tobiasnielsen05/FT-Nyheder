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

    <title>Debatten | Folketidende</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-secondarybg w-100">
<nav class="navbar navbar-expand-lg bg-primary mb-3">
    <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold" href="index.php">FOLKETIDENDE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Pricing</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="bg-secondary text-primary d-flex justify-content-center">
            <h1 class="mt-1">Debat</h1>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <h1 class="mb-3 mt-4 fs-2 text-primary">Hvordan skal Lolland kommune sørge
            for at folkeskolerne ikke dumper?</h1>
    </div>

    <div class="d-flex justify-content-center bg-secondary mt-3">
        <h1 class="mt-1">*Billede*</h1>
    </div>

    <div class="d-flex justify-content-center">
        <p class="mb-4 mt-4 fs-4 text-primary">
            Som i alle ved er lollands folkeskoler i seriøse problemer når det gælder deres beståelsesprocent.
            <br><br>
            Hvis i har læst dette problem har i sikkert også nogle holdninger. <br>
            Her kan i frit skrive dem.
            <br><br>
            Hold den gode tone og forbliv respektfuld overfor andre.
        </p>
    </div>

    <div class="container mb-5">
        <form action="debat.php" method="post">
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <label for="komNavn" class="form-label">Navn</label>
                    <input type="text" class="form-control" id="komNavn" name="data[komNavn]" placeholder="Dit navn" value="">
                </div>
                <div class="col-12">
                    <label for="komTekst" class="form-label">Kommentar</label>
                    <textarea class="form-control" name="data[komTekst]" id="komTekst" placeholder="Din kommentar"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-orange text-white fw-bold w-100">Indsend Kommentar</button>
                </div>
            </div>
        </form>
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
            <div class="d-flex justify-content-center mt-3 mb-3">
                <div class="card">
                    <div class="card-header">
                        <?php
                        echo $kommentar->komNavn
                        ?>
                    </div>
                    <div class="card-body">
                        <?php
                        echo $kommentar->komTekst
                        ?>
                    </div>
                </div>
            </div>
        <?php
        } else
            echo '<h1 class="d-flex justify-content-center mt-3">Ingen kommentarer endnu!</h1>';
        ?>

    </div>
</div>

<footer class="bg-primary d-flex justify-content-center">
    <a class="d-flex justify-content-center" href="index.php"><img class="w-25" src="images/pil1.png"
                                                                   alt="pil der går tilbage til forsiden"></a>
</footer>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
