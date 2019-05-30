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
	
	
	<link rel="stylesheet" type="text/css" href="sayfa1111.css">
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
	
	
	
	
<form id="form" action="oran_guncelle.php" method="post">
	<table align="center" >
	<tr colspan="2" align="center">
	<th colspan="2">Kriter Oranı Değiştir</th>
	</tr>

	<tr>
	<td>Stratejik Konum (%<?php echo $oran1*100?>)</td>
	<td weight><input type="number" min="0" max="100" name="stratejik_konum" value=""></td>
	</tr>
	
	<tr>
	<td>Risk Durumu (%<?php echo $oran2*100?>)</td>
	<td><input type="number" min="0" max="100" name="risk_durumu" value=""></td>
	</tr>
	
	<tr>
	<td>Ulaşım Olanakları (%<?php echo $oran3*100?>)</td>
	<td><input type="number" min="0" max="100" name="ulasim_olanaklari" value=""></td>
	</tr>
	
	<tr>
	<td>Olay Durumu (%<?php echo $oran4*100?>)</td>
	<td><input type="number" min="0" max="100" name="olay_durumu" value=""></td>
	</tr>
	
	<tr>
	<td></td>
	<td><input type="submit" id="buton" class="btn btn-outline-dark" value="Kaydet"></td>
	</tr>
	
	</table>
</form>
		
		<div id='kutu1'>
		
			<canvas id="radar-chart" width="800" height="600"></canvas>
<script>
new Chart(document.getElementById("radar-chart"), {
    type: 'radar',
    data: {
      labels: ["Stratejik Konum (%<?php echo $oran1*100 ?>)", "Risk Durumu (%<?php echo $oran2*100 ?>)", "Ulaşım Olanakları (%<?php echo $oran3*100 ?>)", "Olay Olma Durumu (%<?php echo $oran4*100 ?>)"],
      datasets: [
        {
          label: "<?php echo $etiket1?>",
          fill: false,
          backgroundColor: "rgba(179,181,198,0.2)",
          borderColor: "rgba(179,181,198,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(179,181,198,1)",
		  pointBorderColor: "#fff",
          data: ["<?php echo $radar1[0]?>","<?php echo $radar1[1]?>","<?php echo $radar1[2]?>","<?php echo $radar1[3]?>"]
        }
		, 
		{
          label: "<?php echo $etiket2?>",
          fill: false,
          backgroundColor: "rgba(255,99,132,0.2)",
          borderColor: "rgba(255,99,132,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(255,99,132,1)",
		  pointBorderColor: "#fff",
          data: ["<?php echo $radar2[0]?>","<?php echo $radar2[1]?>","<?php echo $radar2[2]?>","<?php echo $radar2[3]?>"]
        }
		, 
		
		{
          label: "<?php echo $etiket3?>",
          fill: false,
          backgroundColor: "rgba(47,139,87,0.2)",
          borderColor: "rgba(46,139,87,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(46,139,87,1)",
          pointBorderColor: "#fff",
          data: [<?php echo $radar3[0]?>,<?php echo $radar3[1]?>,<?php echo $radar3[2]?>,<?php echo $radar3[3]?>]
        }
		
		,
		{
          label: "<?php echo $etiket4?>",
          fill: false,
          backgroundColor: "rgba(0,139,139,0.2)",
          borderColor: "rgba(0,139,139,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(0,139,139,1)",
          pointBorderColor: "#fff",
          data: ["<?php echo $radar4[0]?>","<?php echo $radar4[1]?>","<?php echo $radar4[2]?>","<?php echo $radar4[3]?>"]
        }
		, 
		{
          label: "<?php echo $etiket5?>",
          fill: false,
          backgroundColor: "rgba(165,42,42,0.2)",
          borderColor: "rgba(165,42,42,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(165,42,42,1)",
          pointBorderColor: "#fff",
          data: ["<?php echo $radar5[0]?>","<?php echo $radar5[1]?>","<?php echo $radar5[2]?>","<?php echo $radar5[3]?>"]
        }
		, 
		{
			
          label: "<?php echo $etiket6 ?>",
          fill: false,
          backgroundColor: "rgba(188,143,143,0.2)",
          borderColor: "rgba(188,143,143,1)",
          pointBorderColor: "#fff",
          pointBackgroundColor: "rgba(188,143,143,1)",
          pointBorderColor: "#fff",
          data: ["<?php echo $radar6[0]?>","<?php echo $radar6[1]?>","<?php echo $radar6[2]?>","<?php echo $radar6[3]?>"]
        }
		
     
	 ]
    },
    options: {
      title: {
        display: true,
        text: "Kuruluş Kriterleri ve Etki Oranları(Sınır Karakolu)"
      }
    }
});		
</script>
		</div>

		
		
		
		<div id='kutu2'>
			<canvas id="bar-chart-horizontal" style="width: 500px; height: 400px;" ></canvas>
			<script>
		new Chart(document.getElementById("bar-chart-horizontal"), {
    type: 'horizontalBar',
    data: {
      labels: ["<?php echo $etiket1?>","<?php echo $etiket2?>","<?php echo $etiket3?>","<?php echo $etiket4?>","<?php echo $etiket5?>","<?php echo $etiket6?>"],
      datasets: [
        {
          label: "Kriter Puanı",
          backgroundColor: ["rgb(179,181,198)","rgb(255,99,132)","rgb(46,139,87)","rgb(0,139,139)","rgb(165,42,42)","rgb(188,143,143)"],
          data: ["<?php echo $bar1?>","<?php echo $bar2?>","<?php echo $bar3?>","<?php echo $bar4?>","<?php echo $bar5?>","<?php echo $bar6?>"]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Kuruluş Yeri Seçim Grafiği(Sınır Karakolu)'
      }
    }
});
</script>
		</div>
		</div>
				
					
					
					

</html>	