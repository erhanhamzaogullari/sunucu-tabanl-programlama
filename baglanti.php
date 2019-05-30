<?php 
$baglanti = mysqli_connect("localhost", "root", "","karakol");

 
if($baglanti) {
   echo 'Bağlantı kuruldu.';
} else {
   echo 'Bağlantı kurulamadı.';
}

?>