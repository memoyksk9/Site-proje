<?php
include "cekirdek.php";

// Veritabanına bağlan
baglanVeritabani();

// GET verisini al
$ID = $_GET['ID'];

// Kayıt silme işlemi
if (silMuhasebeKayit($ID)) {
    echo "Kayıt silindi.";
} else {
    echo "Kayıt silinemedi.";
}

echo '<br><a href="index.php">Ana Sayfa</a>';
?>