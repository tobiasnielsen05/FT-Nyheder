<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	
	<title>Ugens Quiz | Folketidende</title>
	
	<meta name="robots" content="All">
	<meta name="author" content="Udgiver">
	<meta name="copyright" content="Information om copyright">
	
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-secondarybg w-100">
<nav class="navbar navbar-expand-lg bg-primary mb-3">
    <div class="container-fluid">
        <a class="w-75" href="index.php"><img class="w-50" src="images/logohvid.webp" alt="ft nyheder hvid logo"></a>
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
    <div class="row">
        <div class="bg-latestnews d-flex justify-content-center">
            <h1 class="mt-1">Uge 18 - Hvad er der sket?</h1>
        </div>
    </div>

    <div class="d-flex justify-content-center bg-background mt-3">
        <img class="w-75" src="images/quizbillede.png" alt="billede til quiz">
    </div>

    <div class="row mt-5">
        <div class="bg-secondary text-primary d-flex justify-content-center">
            <h1 class="mt-1 fw-bold">Spørgsmål 3</h1>
        </div>
        <div class="bg-background">
            <h6 class="mt-2 fs-5">
                Torben Petersen havde en frugt og grøntbod der hjalp familier der ikke havde mange penge til overs.
                <br>Dog blev den anonymt anmeldt til politiet og derefter lukkede den.
                <br><br>Hvor mange familier blev hjulpet af denne bod?
            </h6>
        </div>

        <div class="d-flex justify-content-center mb-3 mt-3">
            <button class="w-100 mt-4 bg-secondary text-primary fs-1 rounded rounded-4 border-0" onclick="myFunction()">21</button>
        </div>

        <div class="d-flex justify-content-center mb-3">
            <a class="w-100" href="tillykke.php"><button class="w-100 mt-3 bg-secondary text-primary fs-1 rounded rounded-4 border-0">29</button></a>
        </div>

        <div class="d-flex justify-content-center mb-4">
            <button class="w-100 mt-3 mb-3 bg-secondary text-primary fs-1 rounded rounded-4 border-0" onclick="myFunction()">17</button>
        </div>
    </div>

    <footer class="bg-primary d-flex justify-content-center fixed-bottom">
        <a class="d-flex justify-content-center" href="index.php"><img class="w-25" src="images/pil1.png" alt="pil der går tilbage til forsiden"></a>
    </footer>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>function myFunction() {
            alert("Du svarede forkert! Prøv igen");
        }
    </script>
</body>
</html>
