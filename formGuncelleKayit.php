<html>
<head>
    <title>Kayıt Güncelle</title>
</head>
<body>
    <h1>Kayıt Güncelle</h1>
    <form method="POST" action="islemGuncelleKayit.php">
        <label for="ID">ID:</label>
        <input type="text" name="ID" id="ID" readonly> <br>
        <label for="miktar">Miktar (+/-): </label>
        <input type="text" name="miktar" id="miktar" required> <br>
        <label for="tarih">Tarih: </label>
        <input type="date" name="tarih" id="tarih" required> <br>
        <label for="aciklama">Açıklama: </label>
        <input type="text" name="aciklama" id="aciklama" required> <br>
        <button type="submit">Güncelle</button>
    </form>

    <script>
        var url = window.location.href;
        var urlParcalari = url.split('?');
        if (urlParcalari.length > 1) {
            var parametreler = urlParcalari[1].split('&');
            for (var i = 0; i < parametreler.length; i++) {
                var parametre = parametreler[i].split('=');
                var isim = parametre[0];
                var deger = decodeURIComponent(parametre[1]);
                document.getElementById(isim).value = deger;
            }
        }
    </script>
</body>
</html>