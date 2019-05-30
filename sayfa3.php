<!DOCTYPE html>
<html lang="tr">
<?php require("baglanti.php"); ?>
<head>
    <meta charset="utf-8">
    <title>Karakol Kuruluş Yeri</title>
    
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" >
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
	
	
	<link rel="stylesheet" type="text/css" href="sayfa33.css">
</head>
<body>
	<nav class="kenar-menu" >	
		<div class="kenar-menu-icerik">
			<div class="kenar-menu-logo">
				<a href="index.php">Karakol Kuruluş Yeri</a>
			</div>
			<div class="kenar-menu-yonetici">
				<div class="kullanici-resmi">
					<img class="kullanıcı-resmi-boyut" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlXFJ_Tg1xR_fL5ygC02huUkTG5lneR1tm_Q3v1m-Ol_6hHrKv" alt="User picture">
				</div>	
				<div class="kullanici-bilgi">
					<span class="kullanici-adi">Erhan
						<strong>Hamzaoğulları</strong>
					</span>
					<span class="kullanici-rol">Yönetici</span>
					<span class="kullanici-durum">
						<i class="fa fa-circle"></i>
						<span>Online</span>
					</span>
				</div>
			</div>
			
			<div class="genel">
				<ul>
					<li class="genel-grafik">
						<a href="index.php">
							<i class="fa fa-chart-line"></i>
							<span>Grafikler I</span>
						</a>
					</li>
					
					<li class="genel-grafik">
						<a href="sayfa2.php">
							<i class="fa fa-chart-line"></i>
							<span>Grafikler II</span>
						</a>
					</li>
					
					<li class="genel-grafik">
						<a href="sayfa3.php">
							<i class="fa fa-globe"></i>
							<span>Haritalar</span>
						</a>
					</li>
				</ul>
			</div>		
		</div>

		<div class="kenar-menu-altbilgi">
			
			<a href="#">
				<i class="fa fa-bell"></i>
			</a>
			
			<a href="#">
				<i class="fa fa-envelope"></i>
			</a>
			
			<a href="#">
				<i class="fa fa-cog"></i>
			</a>
			
			<a href="#">
				<i class="fa fa-power-off"></i>
			</a>
		</div>
	</nav>				
</body>	
   
<?php
			$sorgu_oran=mysqli_query($baglanti,"SELECT * FROM oran");
			while( $sonuc=mysqli_fetch_row($sorgu_oran) ){
				$oran1=$sonuc[0]/100;
				$oran2=$sonuc[1]/100;
				$oran3=$sonuc[2]/100;
				$oran4=$sonuc[3]/100;
				
				}
			
			$sorgu1=mysqli_query($baglanti,"SELECT * FROM yer_puan where yer_id=1");
			$sorgu2=mysqli_query($baglanti,"SELECT * FROM yer_puan where yer_id=2");
			$sorgu3=mysqli_query($baglanti,"SELECT * FROM yer_puan where yer_id=3");
			$sorgu4=mysqli_query($baglanti,"SELECT * FROM yer_puan where yer_id=4");
			$sorgu5=mysqli_query($baglanti,"SELECT * FROM yer_puan where yer_id=5");
			$sorgu6=mysqli_query($baglanti,"SELECT * FROM yer_puan where yer_id=6");
			while( $sonuc=mysqli_fetch_row($sorgu1) ){
				$etiket1=$sonuc[1];
				$bar1=$sonuc[2]*$oran1+$sonuc[3]*$oran2+$sonuc[4]*$oran3+$sonuc[5]*$oran4;
				$radar1=array($sonuc[2]*$oran1,$sonuc[3]*$oran2,$sonuc[4]*$oran3,$sonuc[5]*$oran4);
				}
			while( $sonuc=mysqli_fetch_row($sorgu2) ){
				$etiket2=$sonuc[1];
				$bar2=$sonuc[2]*$oran1+$sonuc[3]*$oran2+$sonuc[4]*$oran3+$sonuc[5]*$oran4;
				$radar2=array($sonuc[2]*$oran1,$sonuc[3]*$oran2,$sonuc[4]*$oran3,$sonuc[5]*$oran4);
				}
			while( $sonuc=mysqli_fetch_row($sorgu3) ){
				$etiket3=$sonuc[1];
				$bar3=$sonuc[2]*$oran1+$sonuc[3]*$oran2+$sonuc[4]*$oran3+$sonuc[5]*$oran4;
				$radar3=array($sonuc[2]*$oran1,$sonuc[3]*$oran2,$sonuc[4]*$oran3,$sonuc[5]*$oran4);
				}
			while( $sonuc=mysqli_fetch_row($sorgu4) ){
				$etiket4=$sonuc[1];
				$bar4=$sonuc[2]*$oran1+$sonuc[3]*$oran2+$sonuc[4]*$oran3+$sonuc[5]*$oran4;
				$radar4=array($sonuc[2]*$oran1,$sonuc[3]*$oran2,$sonuc[4]*$oran3,$sonuc[5]*$oran4);
				}
			while( $sonuc=mysqli_fetch_row($sorgu5) ){
				$etiket5=$sonuc[1];
				$bar5=$sonuc[2]*$oran1+$sonuc[3]*$oran2+$sonuc[4]*$oran3+$sonuc[5]*$oran4;
				$radar5=array($sonuc[2]*$oran1,$sonuc[3]*$oran2,$sonuc[4]*$oran3,$sonuc[5]*$oran4);
				}
			while( $sonuc=mysqli_fetch_row($sorgu6) ){
				$etiket6=$sonuc[1];
				$bar6=$sonuc[2]*$oran1+$sonuc[3]*$oran2+$sonuc[4]*$oran3+$sonuc[5]*$oran4;
				$radar6=array($sonuc[2]*$oran1,$sonuc[3]*$oran2,$sonuc[4]*$oran3,$sonuc[5]*$oran4);
				}
?>

	
	
	
	<div id='ana'>
		<div id='kutu1' style="text-align:center">
		<strong>Sınır Karakolları</strong>
			<div id="map">		
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoPHkyj7rqDKOWFnCeEA3qE1BKoTDUqmk"></script>
<script>
      
      var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labelIndex = 0;

      function initialize() {
        var yer1 = { lat:35.899912, lng:  36.009037};
		var yer2 = { lat:35.894971, lng: 36.005489 };
		var yer3 = { lat:35.888437, lng: 36.002555 };
		var yer4= { lat:35.883590, lng: 36.000190 };
		var yer5 = { lat:35.881443, lng: 36.005579 };
		var yer6 = { lat:35.880943, lng: 36.011675 };
		var merkez = { lat:35.898622, lng: 36.022631 };
		
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: merkez
        });
		google.maps.event.addListener(map, function(event) {
          addMarker(event.latLng, map);
        });
		addMarker(yer1, map);
		addMarker(yer2, map);
		addMarker(yer3, map);
		addMarker(yer4, map);
		addMarker(yer5, map);
		addMarker(yer6, map);
      }

      function addMarker(location, map) {
        var marker = new google.maps.Marker({
          position: location,
          label: labels[labelIndex++ % labels.length],
          map: map
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
</script>
			</div>
		</div>
	
		<div id='kutu2' style="text-align:center" >
		<strong>Şehir Merkezi Karakolları</strong>
		
			<div id="map2">	
				
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoPHkyj7rqDKOWFnCeEA3qE1BKoTDUqmk"></script>
<script>
      
      var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var labelIndex = 0;

      function initialize() {
        var yer1 = { lat:36.202933, lng:  36.163193};
		var yer2 = { lat:36.201576, lng: 36.163289 };
		var yer3 = { lat:36.200927, lng: 36.161911 };
		var yer4= { lat:36.204273, lng: 36.161069 };
		var yer5 = { lat:36.203707, lng: 36.158185 };
		var yer6 = { lat:36.201143, lng: 36.157968 };
		var merkez = { lat:36.202554, lng: 36.160329 };
		
        var map = new google.maps.Map(document.getElementById('map2'), {
          zoom: 16,
          center: merkez
        });
		google.maps.event.addListener(map, function(event) {
          addMarker(event.latLng, map);
        });
		addMarker(yer1, map);
		addMarker(yer2, map);
		addMarker(yer3, map);
		addMarker(yer4, map);
		addMarker(yer5, map);
		addMarker(yer6, map);
      }

      function addMarker(location, map) {
        var marker = new google.maps.Marker({
          position: location,
          label: labels[labelIndex++ % labels.length],
          map: map
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);
</script>
			</div>
			



		</div>
	</div>
				
					
					
					

</html>	