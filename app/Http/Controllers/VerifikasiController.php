<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\VerifikasiModel;
use App\models\SuratModel;


class VerifikasiController extends Controller
{
    public function __construct()
    {
        $this->VerifikasiModel = new VerifikasiModel();

    }
    public function index()
        {
            $data = [
                'verifikasi'=> $this->VerifikasiModel->alldata(),
            ];
            return view ('v_verifikasi',$data);
        }
        public function add()
        {
            $data = [
                
                'surat' => $this->VerifikasiModel->alldatasurat(),
            ];
            return view ('v_addverifikasi',$data);
        }   
        public function tambah()
        {
            Request()->validate([
                'nim' => 'required',
                'nama' => 'required',
                'jenis_surat' => 'required',
                'no_surat' => 'required',
                'keperluan' => 'required',
                'penandatangan' => 'required',
                'dokumen' => ' mimes:doc,docx,pdf',

            ],[
                //custome pesan
                'nama.required' => 'nama wajib di isi !!!',
                'jenis_surat' => 'wajib di isi !!!',
                'nim.required' => 'nim wajib di isi !!!',
                'keperluan.required' => 'wajib di isi !!!',
                'no_surat.required' => 'wajib di isi !!!',
                'penandatangan.required' => 'wajib di isi !!!',
                'dokumen.required' => 'wajib di isi !!!',
            ]);
            $dokumen = Request()->file('dokumen');
            $nama_dokumen = Request()->nama .'.'. $dokumen->extension();
            $dokumen->move('dokumen/',$nama_dokumen);

            
            $data =[
                'tanggal' => Request()->tanggal,
                'nim' => Request()->nim,
                'nama' => Request()->nama,
                'jenis_surat' => Request()->jenis_surat,
                'no_surat' => Request()->no_surat,
                'keperluan' => Request()->keperluan,
                'penandatangan' => Request()->penandatangan,
                'dokumen'=>$nama_dokumen,
                'status'=> 'MENUNGGU',
            ];
            $this->VerifikasiModel->tambahdata($data);
            return redirect()->route('v_addverifikasi')->with('Pesan','Data Telah Berhasil Disimpan!!!');
        }
        public function hapus($id)
        {
        $data = [
            'verifikasi'=>$this->VerifikasiModel->hapusdata($id),
        ];

        return redirect()->route('verifikasi')->with('Pesan','Data Telah Berhasil Dihapus!!!');
        }
        public function detail($id)
        {
            if(!$this->VerifikasiModel->detailverifikasi($id)){
                abort(404);
            }
            $qrcode = Request()->file('barcode');
            $urlview ='http://127.0.0.1:8000/verifikasi/view/'.$id;
            $qrcode = "https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=$urlview&choe=UTF-8";
           

            $data = [
                'qr'=>$qrcode,
                'url'=>$urlview,
                'verifikasi' =>$this->VerifikasiModel->detailverifikasi($id),
            ];
            return view('v_detailverifikasi',$data);
        }
        public function view($id)
        {
            if(!$this->VerifikasiModel->viewverifikasi($id)){
                abort(404);
            }
            $data = [
                'verifikasi' =>$this->VerifikasiModel->viewverifikasi($id),
            ];
            return view('view',$data);
        }
        public function diterima($id)
        {
            if(!$this->VerifikasiModel->diterima($id)){
                abort(404);
            }
            $data = [
                'verifikasi' =>$this->VerifikasiModel->diterima($id),
            ];
            return view('v_barcode',$data);
        }
}
