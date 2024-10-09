<?php
include "cekirdek.php";

// POST verilerini al
$miktar = $_POST["miktar"];
$tarih = $_POST["tarih"];
$aciklama = $_POST["aciklama"];

// Veritabanına bağlan
baglanVeritabani();

// Kayıt ekleme işlemi
if (ekleMuhasebeKayit($miktar, $tarih, $aciklama)) {
    echo "Ekleme başarılı";
} else {
    echo "Ekleme sırasında hata oluştu!";
}

echo '<br><a href="index.php">Ana Sayfa</a>';
?>