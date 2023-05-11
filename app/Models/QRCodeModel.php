<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class QRCodeModel extends Model
{
    public function alldata()
    {
        return DB::table('barcode')->get();   
     }
     public function updatedata($id,$data)
     {
        return DB::table('verifikasi')
          ->where('id', $id)
          ->update($data);  
      }
      public function status()
     {
        return  DB::table('verifikasi')->where('status', 'DITERIMA')->get();   
      }
      public function hapusdata($id)
      {
          DB::table('verifikasi')->where('id',$id)->delete();
      }
    protected $fillable = [
        'tanggal',
        'nim',
        'nama',
        'jenis_surat',
        'no_surat',
        'keperluan',
        'tujuan',
        'barcode'
    ];
    }