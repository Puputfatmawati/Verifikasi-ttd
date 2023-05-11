<?php

namespace App\Http\Controllers;
use App\models\SuratModel;
use App\models\VerifikasiModel;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function __construct()
    {
        $this->SuratModel = new SuratModel();

    }

    public function index()
        {
            $data = [
                'surat'=> $this->SuratModel->alldata(),
            ];
            return view ('v_surat',$data);
        }
        public function add()
        {
            
            return view ('v_addsurat');
        }   

        public function tambah()
        {
            //validasi from laravel
            Request()->validate([
                'kode_surat' => 'required',
                'jenis_surat' => 'required',
            ],[
                //custome pesan
                'kode_surat' => 'kode Surat tersebut sudah ada,gunakan yang lain',
                'jenis_surat' => 'Jenis Surat tersebut sudah ada,gunakan yang lain',
            ]);
            $data =[
                'kode_surat' => Request()->kode_surat,
                'jenis_surat' => Request()->jenis_surat,
            ];
            $this->SuratModel->tambahdata($data);
            return redirect()->route('surat')->with('Pesan','Data Telah Berhasil Disimpan!!!');
        }  

        public function hapus($id)
        {
            $data = [
                'surat'=>$this->SuratModel->hapusdata($id),
            ];

            return redirect()->route('surat')->with('Pesan','Data Telah Berhasil dihapus');
        } 
}
