<?php
require("baglanti.php");

$oran1=$_POST['stratejik_konum'];
$oran2=$_POST['risk_durumu'];
$oran3=$_POST['ulasim_olanaklari'];
$oran4=$_POST['olay_durumu'];

$oran_guncelle="UPDATE oran SET stratejik_konum='$oran1',risk_durumu='$oran2',ulasim_olanaklari='$oran3',olay_durumu='$oran4' ";
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

header("Location: index.php");

?>
	
	