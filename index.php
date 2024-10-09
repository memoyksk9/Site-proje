<html>
<head>
    <title>Muhasebe Kayıtları</title>
</head>
<body>
    <h1>Muhasebe Kayıtları</h1>
    <table border="1" cellpadding="10" cellspacing="10">
        <tr>
            <th>ID</th>
            <th>Miktar</th>
            <th>Tarih</th>
            <th>Açıklama</th>
            <th>Güncelle</th>
            <th>Sil</th>
        </tr>
        <?php
        include "cekirdek.php";

        $kayitlar = getirMuhasebeKayitlar();

        foreach ($kayitlar as $kayit) {
            $bagGuncelle = "formGuncelleKayit.php?ID=" . $kayit["ID"];
            $bagSil = "formSilKayit.php?ID=" . $kayit["ID"];
            
            echo "<tr>";
            echo "<td>" . $kayit['ID'] . "</td>";
            echo "<td>" . $kayit['miktar'] . "</td>";
            echo "<td>" . $kayit['tarih'] . "</td>";
            echo "<td>" . $kayit['aciklama'] . "</td>";
            echo "<td><a href='" . $bagGuncelle . "'>Güncelle</a></td>";
            echo "<td><a href='" . $bagSil . "'>Sil</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <br>
    <a href="formEkleKayit.php">Yeni Kayıt Ekle</a>
</body>
</html>