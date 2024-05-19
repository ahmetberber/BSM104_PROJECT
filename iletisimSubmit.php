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
                    <a class="nav-link" href="ilgialanlarim.html">İlgi Alanlarım</a>
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
        <h1 class="display-4 text-center">Mesajınız Alınmıştır</h1>
    </header>
    <main>
        <div class="container">
			<div class="card">
				<div class="card-body">
					<h6 class="card-subtitle mb-2 text-muted">Ad Soyad: <?= $_POST['name'] ?></h6>
					<h6 class="card-subtitle mb-2 text-muted">E-Posta: <?= $_POST['email'] ?></h6>
					<h6 class="card-subtitle mb-2 text-muted">Şehir:
						<?php if($_POST['city'] == 6) {
							echo "Ankara";
						} else if($_POST['city'] == 34) {
							echo "İstanbul";
						} else {
							echo "-";
						} ?>
					</h6>
					<h6 class="card-subtitle text-muted">Mesaj: <?= $_POST['message'] ?></h6>
				</div>
			</div>
		</div>
    </main>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
<footer class="bg-dark text-white text-center">
    BSM104 Dönem Ödevi © Ahmet Hilmi Berber 2024 Nisan
</footer>

</html>
