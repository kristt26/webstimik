<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<?php

//		foreach ($data->result_array() as $row):
//			echo $row['prodi'];
//			echo $row['jumlah'];
//
//		endforeach;
//		print_r($data->result()); die();
		$r = $grafik->result();
//		print_r($r); die();
		$lti = $r[0]->prodi;
		$jti = $r[0]->jumlah;
		$lsi = $r[1]->prodi;
		$jsi = $r[1]->jumlah;



?>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

	<h1>PMB TA.2020/2021</h1>
	<div class="container container-sm">
	<canvas id="myChart" width="200" height="50"></canvas>
	<hr>
	</div>
	<script>
		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'horizontalBar',
			data: {
				labels: ['<?php echo $lti ?>', '<?php echo $lsi ?>' ],
				datasets: [{
					label: 'Teknik Informatika',
					data: [<?php echo $jti ?>,<?php echo $jsi ?>],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						

					],
					borderColor: [
						'rgba(255, 99, 132, 1)',

					],
					borderWidth: 1
				},{
				    label : 'Sistem Informasi',
				
		
				}]
			},
			options: {
				scales: {
					xAxes: [{
						ticks: {
							beginAtZero: true
						}
					}]
				}
			}
		});
	</script>
	
	
	<!--<script>-->
	<!--	var ctx = document.getElementById('myChart').getContext('2d');-->
	<!--	var myChart = new Chart(ctx, {-->
	<!--		type: 'horizontalBar',-->
	<!--		data: {-->
	<!--			labels: ['<?php echo $lti ?>', '<?php echo $lsi ?>' ],-->
	<!--			datasets: [{-->
	<!--				label: 'lulus seleksi',-->
	<!--				data: [<?php echo $jti ?>,<?php echo $jsi ?>],-->
	<!--				backgroundColor: [-->
	<!--					'rgba(255, 99, 132, 0.2)',-->
	<!--					'rgba(54, 162, 235, 0.2)',-->

	<!--				],-->
	<!--				borderColor: [-->
	<!--					'rgba(255, 99, 132, 1)',-->
	<!--					'rgba(54, 162, 235, 1)',-->

	<!--				],-->
	<!--				borderWidth: 1-->
	<!--			}]-->
	<!--		},-->
	<!--		options: {-->
	<!--			scales: {-->
	<!--				xAxes: [{-->
	<!--					ticks: {-->
	<!--						beginAtZero: true-->
	<!--					}-->
	<!--				}]-->
	<!--			}-->
	<!--		}-->
	<!--	});-->
	<!--</script>-->
</body>
</html>
