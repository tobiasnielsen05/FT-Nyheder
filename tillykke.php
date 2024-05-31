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

<div class="container">

    <div class="row mt-5">
        <div class="bg-secondary text-primary d-flex justify-content-center mb-4">
            <h1 class="mt-1 fw-bold">TILLYKKE!</h1>
        </div>

        <div class="d-flex justify-content-center">
            <h1 class="mt-4">
                Du gennemførte ugens quiz
            </h1>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <a class="btn btn-primary fs-5 fw-bold" href="index.php">Gå Tilbage</a>
        </div>

    </div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>function myFunction() {
            alert("Du svarede forkert! Prøv igen");
        }
    </script>
</body>
</html>
