<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;
use App\Helpers\Userinfo;
use App\Transformers\InfoTransformers;
use App\User;

class ApiController extends Controller
{
    public function geoip()
    {
        $data = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        // Bentuk data Array Assosiatif Jadi saat di passing data menggunakan array assosiatif juga contoh: {{ $data["ip"] }}
        $ip = array(
            "ip" => $data->ip,
            "kode_iso" => $data->iso_code,
            "negara" => $data->country,
            "kota" => $data->city,
            "kode_negara" => $data->state,
            "state_name" => $data->state_name,
            "kode_pos" => $data->postal_code,
            "lat" => $data->lat,
            "lon" => $data->lon,
            "timezone" => $data->timezone,
            "currency" => $data->currency

        );
        // $hasil = json_encode($ip);
        // $result = json_decode($ip, true);
        // return $hasil;

        return view('geoapi', compact('ip'));
    }

    public function userinfo()
    {
            $getip = Userinfo::get_ip();
            $getbrowser = Userinfo::get_browsers();
            $getdevice = Userinfo::get_device();
            $getos = Userinfo::get_os();

        return view('welcome', compact('getip','getbrowser','getdevice','getos'));
    }
    
    public function api()
    {
        $getbrowser = Userinfo::get_browsers();
        $getdevice = Userinfo::get_device();
        $getos = Userinfo::get_os();

        $status = array(
            'browser'   => $getbrowser,
            'merk'      => $getdevice,
            'os'        => $getos,
        );

    	$response = Http::get('https://api.ipgeolocation.io/ipgeo', [
            'apiKey' => '125696c9008c441fbdcc03be412c8158',
        ]);

        $data = $response->json();
        // $hasil = fractal($status, new InfoTransformers())->toArray();
        // return response()->json($hasil);
        // return $status;
        // $hasil = array(
        //     "ip"                => $data["ip"],
        //     "kode_bedua"        => $data["continent_code"],
        //     "nama_benua"        => $data["continent_name"],
        //     "kode_negara1"      => $data["country_code2"],
        //     "kode_negara2"      => $data["country_code3"],
        //     "nama_negara"       => $data["country_name"],
        //     "kode_negara2"      => $data["country_capital"],
        //     "kode_negara2"      => $data["state_prov"],
        //     "kode_negara2"      => $data["district"],
        //     "kode_negara2"      => $data["city"],
        //     "kode_negara2"      => $data["zipcode"],
        //     "kode_negara2"      => $data["latitude"],
        //     "kode_negara2"      => $data["longitude"],
        //     "kode_negara2"      => $data["is_eu"],
        //     "kode_negara2"      => $data["calling_code"],
        //     "kode_negara2"      => $data["country_tld"],
        //     "kode_negara2"      => $data["languages"],
        //     "kode_negara2"      => $data["country_flag"],
        //     "kode_negara2"      => $data["geoname_id"],
        //     "kode_negara2"      => $data["isp"],
        //     "kode_negara2"      => $data["organization"],
        // );
        // return $hasil;
        return view('api', compact('data','status'));
    }

    public function apiinfo()
    {
        $getbrowser = Userinfo::get_browsers();
        $getdevice = Userinfo::get_device();
        $getos = Userinfo::get_os();

        $status = array(
            'browser'   => $getbrowser,
            'merk'      => $getdevice,
            'os'        => $getos,
        );

        $response = Http::get('https://api.ipgeolocation.io/ipgeo', [
            'apiKey' => '125696c9008c441fbdcc03be412c8158',
        ]);

        // Response
        $data = $response->json();
        return $status;
    }

    public function tanggal()
    {
        $user = User::find(1);
        $usr = \Carbon\Carbon::parse($user->created_at)->isoFormat("dddd D MMMM Y");
        // return $usr;
        $awal = date('l, d F Y H:i');
        $akhir = '2003-03-08';
        $tahun = Carbon::parse($awal)->isoformat('dddd, D MMMM Y'); //Mengambil Tahun Sekarang Format dddd, D MMMM Y
        $lahir = Carbon::parse($akhir)->isoformat('D MMMM Y'); //Mengambil Tahun yg diinput
        $hasil = Carbon::parse($awal)->DiffInYears($akhir); // Tahun sekarang - Tahun Lahir 
        // return $hasil;
        return view('tanggal', compact('awal','akhir','hasil','usr','tahun'));
    }
}
