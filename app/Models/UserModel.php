<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    public function alldata()
    {
        return DB::table('lbl_user')->get();   
     }
     public function tambahdata($data)
     {
          DB::table('lbl_user')->insert($data);   
      }
      
      public function detailuser($id)
      {
          return DB::table('lbl_user')->where('id',$id)->first();
      }
      public function updatedata($id,$data)
      {
          return DB::table('lbl_user')
          ->where('id', $id)
          ->update($data);
      }
      public function hapusdata($id)
    {
        DB::table('lbl_user')->where('id',$id)->delete();
    }
}
