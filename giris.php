<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/style.css">
	<title>BSM104 Dönem Ödevi</title>
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
        <h1 class="display-4 text-center">GİRİŞ YAP</h1>
    </header>
	<main>
		<div class="container">
			<?php if($_GET['login'] === "1") { ?>
				<div class="alert alert-success" role="alert">
					Giriş başarılı!
				</div>
			<?php } ?>
			<?php if($_GET['login'] === "0") { ?>
				<div class="alert alert-danger" role="alert">
					Hatalı e-posta veya parola!
				</div>
			<?php } ?>
			<form action="girisKontrol.php" method="POST" onsubmit="return checkMail()">
				<div class="form-group">
					<label for="email">E-Posta</label>
					<input type="email" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Parola</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button class="btn btn-primary" type="submit">Giriş Yap</button>
			</form>
		</div>
	</main>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="assets/script.js"></script>
</body>
	<footer class="bg-dark text-white text-center">
		BSM104 Dönem Ödevi © Ahmet Hilmi Berber 2024 Nisan
	</footer>
</html>