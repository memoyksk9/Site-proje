<?php
// Veritabanı bağlantı fonksiyonu
function baglanVeritabani() {
    $Sbaglan = mysqli_connect("localhost", "root", "12345678", "muhasebe");
    mysqli_set_charset($Sbaglan, "utf8");
    return $Sbaglan;
}

// Muhasebe kaydı ekleme fonksiyonu
function ekleMuhasebeKayit($miktar, $tarih, $aciklama) {
    $sorgu = "INSERT INTO tbl_gelirgider (miktar, tarih, aciklama) VALUES ('$miktar', '$tarih', '$aciklama')";
    return mysqli_query(baglanVeritabani(), $sorgu);
}

// Muhasebe kaydını güncelleme fonksiyonu
function guncelleMuhasebeKayit($ID, $miktar, $tarih, $aciklama) {
    $sorgu = "UPDATE tbl_gelirgider SET miktar='$miktar', tarih='$tarih', aciklama='$aciklama' WHERE ID='$ID'";
    return mysqli_query(baglanVeritabani(), $sorgu);
}

// Muhasebe kaydını silme fonksiyonu
function silMuhasebeKayit($ID) {
    $sorgu = "DELETE FROM tbl_gelirgider WHERE ID='$ID'";
    return mysqli_query(baglanVeritabani(), $sorgu);
}

// Muhasebe kayıtlarını getirme fonksiyonu
function getirMuhasebeKayitlar() {
    $sorgu = "SELECT * FROM tbl_gelirgider";
    $sonuc = mysqli_query(baglanVeritabani(), $sorgu);
    $cevap = array();
    while ($satir = mysqli_fetch_assoc($sonuc)) {
        $cevap[] = $satir;
    }
    return $cevap;
}

// Muhasebe bakiye hesaplama fonksiyonu
function getirMuhasebeBakiye() {
    $sorgu = "SELECT SUM(miktar) AS bakiye FROM tbl_gelirgider";
    $sonuc = mysqli_query(baglanVeritabani(), $sorgu);
    return mysqli_fetch_assoc($sonuc);
}
?>
