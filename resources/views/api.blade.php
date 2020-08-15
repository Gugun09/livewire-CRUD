<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Api GeoAPi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<table style="background-color: green; color: white">
					<tr>
						<td>Alamat Ip Address</td>
						<td>:</td>
						<td>{{ $data['ip'] }}</td>
					</tr>
					<tr>
						<td>Nama Negara</td>
						<td>:</td>
						<td>{{ $data['country_name'] }}</td>
					</tr>
					<tr>
						<td>Jenis Browser</td>
						<td>:</td>
						<td>{{ $status['browser'] }}</td>
					</tr>
					<tr>
						<td>Device</td>
						<td>:</td>
						<td>{{ $status['merk'] }}</td>
					</tr>
					<tr>
						<td>OS</td>
						<td>:</td>
						<td>{{ $status['os'] }}</td>
					</tr>
				</table>
			</div>
			<div class="col-md-6">
				<table class="table-bordered">
					<tr>
						<td>ISP</td>
						<td>:</td>
						<td>{{ $data["isp"] }}</td>
					</tr>
					<tr>
						<td>Icon</td>
						<td>:</td>
						<td><img src="{!! $data["country_flag"] !!}" alt=""></td>
					</tr>
					<tr>
						<td>Organisasi</td>
						<td>:</td>
						<td>{{ $data["organization"] }}</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>