<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Format Tanggal</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<table class="table table-danger">
		<thead>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td>{{ $hasil }} Tahun</td>
			</tr>
			<tr>
				<td>Action</td>
				<td>:</td>
				<td>
					@if ($hasil > "18")
						<a class="badge badge-primary" href="">Boleh</a>
					@else
						<a class="badge badge-warning" href="">Tidak Boleh</a>
					@endif
				</td>
			</tr>
			<tr>
				<td>User Created</td>
				<td>:</td>
				<td>{{ $usr }}</td>
			</tr>
			<tr>
				<td>Tanggal/Tahun</td>
				<td>:</td>
				<td>{{ $tahun }}</td>
			</tr>
		</thead>
	</table>

	{{-- {{ Carbon\Carbon::parse($awal)->isoformat('D MMMM Y') }} --}}
	{{-- <br>
	{{ Carbon\Carbon::parse($awal)->format('d-M-Y') }} dari {{ Carbon\Carbon::parse($awal)->addDays(3)->format('d-M-Y') }}
	<br>
	{{ Carbon\Carbon::parse($awal)->format('d-M-Y') }} Tahun {{ Carbon\Carbon::parse($awal)->addYears(3)->format('d-M-Y') }}
	<br>
	{{ Carbon\Carbon::parse($awal)->format('d-M-Y H:i:s') }} Jam {{ Carbon\Carbon::parse($awal)->addHours(3)->format('d-M-Y H:i:s') }}
	<br> --}}
	{{-- {{ Carbon\Carbon::parse($awal)->formatLocalized("%d %B %Y") }} Selesih {{ Carbon\Carbon::parse($akhir)->formatLocalized('%d %B %Y') }} Umur {{ Carbon\Carbon::parse($awal)->DiffInYears($akhir) }}Tahun --}}
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>