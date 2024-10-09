<?php
include "cekirdek.php";

// POST verilerini al
$ID = $_POST["ID"];
$miktar = $_POST["miktar"];
$tarih = $_POST["tarih"];
$aciklama = $_POST["aciklama"];

// Veritabanına bağlan
baglanVeritabani();

// Kayıt güncelleme işlemi
if (guncelleMuhasebeKayit($ID, $miktar, $tarih, $aciklama)) {
    echo "Güncelleme başarılı";
} else {
    echo "Güncelleme sırasında hata oluştu!";
}

echo '<br><a href="index.php">Ana Sayfa</a>';
?>