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
        <img class="w-50" src="images/logohvid.webp" alt="ft nyheder hvid logo">        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
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
            </ul>
        </div>
    </div>
</nav>

<div class="container mb-4">
    <div class="row">
        <div class="bg-latestnews text-background d-flex justify-content-center">
            <h1 class="mt-1">Uge 18 - Hvad er der sket?</h1>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-3">
        <img class="w-75" src="images/quizbillede.png" alt="billede til quiz">
    </div>

    <div class="row mt-4">
        <div class="bg-secondary text-primary d-flex justify-content-center">
            <h1 class="mt-1 fw-bold">Spørgsmål 1</h1>
        </div>
        <div class="bg-background">
            <h6 class="mt-1 fs-5">
                Mandag aften indtager en 50-årig mand for meget alkohol og begynder at blotte sig.
                <br>
                Han kom derefter op at slås med en 22-årig som var blevet træt af ham. Hvor blev den 50-årig ramt?
            </h6>
        </div>

        <div class="d-flex justify-content-center mb-3 mt-3">
            <button class="w-100 mt-4 bg-secondary text-primary fs-1 rounded rounded-4 border-0" onclick="myFunction()">Slået i maven</button>
        </div>

        <div class="d-flex justify-content-center mb-3">
            <a class="w-100" href="ugensquiz2.php"><button class="w-100 mt-3 bg-secondary text-primary fs-1 rounded rounded-4 border-0">Slået i ansigtet</button></a>
        </div>

        <div class="d-flex justify-content-center mb-5">
            <button class="w-100 mt-3 mb-3 bg-secondary text-primary fs-1 rounded rounded-4 border-0" onclick="myFunction()">Sparket i det ene skinneben</button>
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
