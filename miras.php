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
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="sehrim.html">Şehrim</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    <?php if($_GET['type'] == "kanyon") { ?>
                        Valla Kanyonu
                    <?php } else if($_GET['type'] == "kale") { ?>
                        Kastamonu Kalesi
                    <?php } else if($_GET['type'] == "park") { ?>
                        Küre Dağları Milli Parkı
                    <?php } else if($_GET['type'] == "kayak") { ?>
                        Ilgaz Kayak Merkezi
                    <?php } ?>
                </li>
            </ol>
        </nav>
        <div class="text-center">
            <h1>
            <?php if($_GET['type'] == "kanyon") { ?>
                VALLA KANYONU
            <?php } else if($_GET['type'] == "kale") { ?>
                KASTAMONU KALESİ
            <?php } else if($_GET['type'] == "park") { ?>
                KÜRE DAĞLARI MİLLİ PARKI
            <?php } else if($_GET['type'] == "kayak") { ?>
                ILGAZ KAYAK MERKEZİ
            <?php } ?>
            </h1>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="kutu2">
                <div class="metin">
                    &emsp;
                    <?php if($_GET['type'] == "kanyon") { ?>
                        Valla Kanyonu Devrekani Çayı'nın Küre Dağları içinde açmış olduğu enfes bir görüntüye sahiptir. Pınarbaşı'nın 26 kilometre kuzeyindeki Muratbaşı Köyü yakınlarında, Devrekani Çayı ile Kanlıçay'ın buluştuğu yerde başlar. Kuzeyde Cide'ye doğru yaklaşık 10 kilometre uzanan kanyon 800-1200 metre arasındaki yüksek kayalık uçurumlara sahiptir. Bu kayalıklarda kartal, şahin, akbaba gibi yırtıcı kuşlar bulunur. Kanyonun içi profesyonel gruplar tarafından ve uygun ekipman olmadan geçilemez. Ancak girişi ve çıkışında yerel rehberler ile kısa girişler yapılabilir.
                    <?php } else if($_GET['type'] == "kale") { ?>
                        Kastamonu Kalesi, Kastamonu’nun ana simgelerinden biri olarak kentin en yüksek noktasından şehrin tacı gibi durmaktadır. Şehrin batısında bir ana kaya kütlesi üzerinde bulunan kale, MS.12'nci yüzyılda Komnenoslar tarafından yaptırılmıştır. Orijinal yapıdan günümüzde sadece iç kale kısmı ulaşmıştır. Kalenin dış surları 18'inci yüzyıl sonlarında yok olmuştur. Kalenin çeşitli dönemler içerisinde geçirmiş olduğu değişiklikler, bir Orta Çağ Bizans yapısından çok Türk mimarisini yansıtmasına neden olmuştur. Kalenin şehirden yaklaşık 120 metre yüksekte oluşu; ulaşım yönünden oldukça kolay olması Kastamonu’yu panaromik açıdan izlenebilecek en iyi yer konumunda bulunmasını sağlar. Kale içerisinde sarnıçlar, zindan, kaçış tünelleri ile “Bayraklı Sultan” olarak anılan türbe bulunmaktadır.
                    <?php } else if($_GET['type'] == "park") { ?>
                        1998 yılında Dünya Doğayı Koruma Vakfı (WWF) tarafından Avrupa Ormanları’nda korumada öncelikli alanlardan birisi olarak seçilen Küre Dağları, 2000 yılında Milli Park ilan edilmiştir. Bu kararla WWF’nin III. Milenyuma girerken başlattığı “Yaşayan Gezegen Kampanyası” çerçevesinde “Türkiye’nin Dünyaya Armağanı” kabul edilmiştir. 2012 itibariyle Avrupa’nın seçkin koruma alanlarını simgeleyen Pan Park’lar arasında yerini aldı. Böylece, Küre Dağları Milli Parkı Avrupa’nın 13'üncü, Türkiye’nin ise ilk Pan Park’ı olarak ilan edilmiştir. Küre Dağları Milli Parkı, Batı Karadeniz Bölümü'nün Küre Dağları üzerinde en zengin flora ve faunaya sahip yörelerinden biridir. Bölgenin kullanımına açılmamış bakir yerlerinden biridir. Alanın büyük bölümü Kastamonu il sınırları içinde kalmaktadır.
                    <?php } else if($_GET['type'] == "kayak") { ?>
                        2850 metre yüksekliginde bulunan Ilgaz siradaglarinda bulunan Ilgaz Kayak Merkezi, Ilgaz Milli Parkinin içerisinde yer almaktadir. Kayak merkezinde, Türkiye Kayak Federasyonuna ait Ilgaz Dag Tesisleri bulunmaktadir. Kayak merkezinin dogal yapisi göknar agaglar ile kapli vaziyettedir. Bu kayak merkezi essiz dogal güzelliklere sahip ender kayak merkezlerinden biridir.
                    <?php } ?>
                </div>
                <div class="d-flex justify-content-center">
                    <?php if($_GET['type'] == "kanyon") { ?>
                        <img class="img-fluid" src="assets/images/kanyon1.jpg" alt="Valla Kanyonu">
                    <?php } else if($_GET['type'] == "kale") { ?>
                        <img class="img-fluid" src="assets/images/kale1.jpg" alt="Kastamonu Kalesi">
                    <?php } else if($_GET['type'] == "park") { ?>
                        <img class="img-fluid" src="assets/images/kure1.jpg" alt="Küre Dağları Milli Parkı">
                    <?php } else if($_GET['type'] == "kayak") { ?>
                        <img class="img-fluid" src="assets/images/ilgaz1.png" alt="Ilgaz Kayak Merkezi">
                    <?php } ?>
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
