<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>BSM104 Dönem Ödevi</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php
        $film = json_decode(file_get_contents("http://www.omdbapi.com/?i=tt1375666&apikey=bd16ebb8"));
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Hakkımda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletisim.html">İletişim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="giris.php">Giriş</a>
                </li>
            </ul>
        </div>
    </nav>

    <header class="jumbotron">
        <h1 class="display-4 text-center"><?=$film->Title?></h1>
    </header>

    <main>
        <div class="container">
            <div class="kutu2">
                <div class="metin">
                    &emsp;Yapım Yılı: <?=$film->Year?><br>
                    &emsp;Tür: <?=$film->Genre?><br>
                    &emsp;Yönetmen: <?=$film->Director?><br>
                    &emsp;Oyuncular: <?=$film->Actors?><br>
                    &emsp;IMDB Puanı: <?=$film->imdbRating?><br>
                    &emsp;Özet: <?=$film->Plot?><br>
                </div>
                <div class="d-flex justify-content-center">
                    <img src="<?=$film->Poster?>" alt="<?=$film->Title?>" class="img-fluid">
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>
<footer class="bg-dark text-white text-center">
    BSM104 Dönem Ödevi © Ahmet Hilmi Berber 2024 Nisan
</footer>

</html>
