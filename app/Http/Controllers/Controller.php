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


    
    public function inisialisasi_data_to_store($seluruh_request, $data_pembayaran)
    {
        #Virtual Account #untuk data pembayaran
        $this->va_number =  $data_pembayaran['virtual_account_info']['virtual_account_number'];
        $this->invoice_number = $data_pembayaran['order']['invoice_number'];
        $this->how_to_pay_api = $data_pembayaran['virtual_account_info']['how_to_pay_api'];
        $this->created_date = $data_pembayaran['virtual_account_info']['created_date'];
        $this->expired_date =  $this->waktu_pembayaran(date('D d M Y h:i', strtotime($data_pembayaran['virtual_account_info']['expired_date'])));

        #untuk data pembyaran
        $this->total_tagihan = $seluruh_request['total_pembayaran'];
        $this->metode_pembayaran = $seluruh_request['pembayaran']['metode'];
        $this->nama_bank = $seluruh_request['pembayaran']['name'];
    }

}
