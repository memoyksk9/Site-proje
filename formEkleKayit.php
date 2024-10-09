<html>
<head>
    <title>Kayıt Ekle</title>
</head>
<body>
    <h1>Yeni Muhasebe Kaydı Ekle</h1>
    <form method="POST" action="islemEkleKayit.php">
        Miktar (+/-): <input type="text" name="miktar" required> <br> 
        Tarih: <input type="text" name="tarih" required> <br> 
        Açıklama: <input type="text" name="aciklama" required> <br> 
        <button type="submit">Kaydet</button>
    </form>
</body>
</html>
