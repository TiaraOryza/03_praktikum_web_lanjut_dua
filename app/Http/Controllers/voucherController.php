<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class voucherController extends Controller
{
    public function voucher()
    {
        //mengambil data
        $voucher = DB::table('voucher')->get();
        
        //mengirim data ke view
        return view('voucher',['voucher' => $voucher2]); 

        //
        
    }

    public function store(Request $request)
    {
        DB::table('voucher')->where('id',$request->id)->update([
            'voucher_id' => $request->id,
            'voucher_nama' => $request->nama_voucher
        ]); 
        return redirect('voucher');
    }
}
