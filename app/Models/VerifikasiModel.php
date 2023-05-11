<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VerifikasiModel extends Model
{
    public function alldata()
    {
        return DB::table('verifikasi')->get();   
     }
     public function tambahdata($data)
     {
          DB::table('verifikasi')->insert($data);   
      }
      
      public function hapusdata($id)
    {
        DB::table('verifikasi')->where('id',$id)->delete();
    }
    public function detailverifikasi($id)
      {
          return DB::table('verifikasi')->where('id',$id)->first();
      }
      public function viewverifikasi($id)
      {
          return DB::table('verifikasi')->where('id',$id)->first();
      }
    public function diterima($id)
      {
          return DB::table('barcode')->where('id',$id)->first();
      }
    
      public function alldatasurat()
      {
          return DB::table('surat')->get();
      }

}
