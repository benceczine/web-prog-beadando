<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['site_name']; ?> - Főoldal</title>
    <!-- Bootstrap CSS betöltése -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Egyéb CSS fájlok hivatkozása -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><?php echo $config['site_name']; ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Főoldal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/gallery">Galéria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Kapcsolat</a>
                        </li>
                        <!-- Egyéb menüpontok... -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main role="main" class="container">
        <div class="jumbotron">
            <h1 class="display-4">Üdvözöljük a <?php echo $config['site_name']; ?> weboldalon!</h1>
            <p class="lead">Ez a weboldal egy példa, hogyan lehet Bootstrap keretrendszert használni egy egyszerű weboldal készítéséhez.</p>
            <hr class="my-4">
            <p>Kérjük, böngésszen a különböző funkciók között a menüpontok segítségével.</p>
            <a class="btn btn-primary btn-lg" href="/gallery" role="button">Galéria megtekintése</a>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">&copy; <?php echo date("Y"); ?> <?php echo $config['site_name']; ?></span>
        </div>
    </footer>

    <!-- Bootstrap JavaScript és egyéb JS fájlok betöltése -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Egyéb JavaScript fájlok -->
    <script src="js/scripts.js"></script>
</body>
</html>
