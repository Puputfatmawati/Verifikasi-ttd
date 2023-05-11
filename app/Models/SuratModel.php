<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SuratModel extends Model
{
    public function alldata()
    {
        return DB::table('surat')->get();   
     }
     public function tambahdata($data)
     {
          DB::table('surat')->insert($data);   
      }
      public function hapusdata($id)
      {
          DB::table('surat')->where('id',$id)->delete();
      }
}
