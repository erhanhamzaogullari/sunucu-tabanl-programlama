<?php
require("baglanti.php");

$oran1=$_POST['nufus_sayisi'];
$oran2=$_POST['risk_durumu'];
$oran3=$_POST['olay_olma_durumu'];
$oran4=$_POST['merkeze_yakinlik'];
$oran5=$_POST['nufus_hareketliligi'];

$oran_guncelle="UPDATE oran2 SET sehir_nufus_sayisi='$oran1',sehir_risk_durumu='$oran2',sehir_olay_durumu='$oran3',sehir_merkezine_yakinlik='$oran4',sehir_nufus_hareketliligi='$oran5' ";
$sonuc= mysqli_query($baglanti,$oran_guncelle);	

if($sonuc>0) 
{ 
echo "<br>";
echo "Başarıyla güncellendi;";
echo "<br>";
}
else{
echo "Bir problem oluştu, verileri kontrol ediniz";
}
header("Location: sayfa2.php")
?>
	
	