<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get_primaryKey($kd)
    {
        return $kd . substr(rand() * time(), 0, 6);
    }

    public function uploadGambar($foto, $namaFolder)
    {
        $namaFoto = substr(rand(0, 999) + time() . '.' . explode('/', explode(';', $foto)[0])[1], 0, 100);
        $path = $this->membuatFolder('/img/' . $namaFolder);
        $img = Image::make($foto);
        $img->resize(null, 300, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($path . $namaFoto);
        return  '/img/' . $namaFolder . $namaFoto;
    }


    public function membuatFolder($namaFolder)
    {
        $path = public_path() . $namaFolder;
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }
        return $path;
    }


    public function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                        return $ip;
                    }
                }
            }
        }
        return request()->ip(); // it will return server ip when no client ip found
    }

    public function hari_indonesia($waktu_pembayaran)
    {
        $hari = [
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu',
            'Sun' => 'Minggu',
        ];
        $get_hari = explode(' ', $waktu_pembayaran);
        $hari_indo = $hari[$get_hari[0]];
        unset($get_hari[0]);
        return   $hari_indo . ', ' . implode(' ', $get_hari);
    }


    public function bulan_indonesia($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }

 

}
