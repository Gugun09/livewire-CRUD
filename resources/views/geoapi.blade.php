<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ip Location</title>
</head>
<body>
	<div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table-responsive">
                                        <tbody>
                                        	
                                            <tr>
                                                <td>IP</td>
                                                <td>:</td>
                                                <td>{{ $ip["ip"] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Code Name</td>
                                                <td>:</td>
                                                <td>{{ $ip["kode_iso"] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Country</td>
                                                <td>:</td>
                                                <td>{{ $ip["negara"] }}</td>
                                            </tr>
                                            <tr>
                                                <td>City</td>
                                                <td>:</td>
                                                <td>{{ $ip["kota"] }}</td>
                                            </tr>
                                            <tr>
                                                <td>State</td>
                                                <td>:</td>
                                                <td>{{ $ip["kode_negara"] }}</td>
                                            </tr>
                                            <tr>
                                                <td>State Name</td>
                                                <td>:</td>
                                                <td>{{ $ip["state_name"] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Lat</td>
                                                <td>:</td>
                                                <td>{{ $ip["lat"] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Long</td>
                                                <td>:</td>
                                                <td>{{ $ip["lon"] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Timezone</td>
                                                <td>:</td>
                                                <td>{{ $ip["timezone"] }}</td>
                                            </tr>
                                            <tr>
                                            {{-- <td>ISP</td>
                                            <td>:</td>
                                            <td>{{ $ip["country"] }}</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</body>
</html>