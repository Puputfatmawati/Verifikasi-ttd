<?php

namespace App\Http\Controllers;

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use SimpleSoftwareIO\QrCode\Generator;
use App\models\QRCodeModel;
use App\models\VerifikasiModel;
use BaconQrCode\Writer;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class QRCodeController extends Controller
{
    public function __construct()
    {
        $this->QRCodeModel = new QRCodeModel();

    }
    public function index()
        {
            $data = [
                'barcode'=> $this->QRCodeModel-> status(),
            ];
            return view ('v_barcode',$data);
        }

        public function create(){

            return view('v_diterima');
    
        }
    public function tambah()
        {
            //validasi from laravel
            Request()->validate([
                'tanggal' => 'required|unique:verifikasi',
                'nim' => 'required|unique:verifikasi',
                'nama' => 'required|unique:verifikasi',
                'jenis_surat' => 'required|unique:verifikasi',
                'no_surat' => 'required|unique:verifikasi',
                'keperluan' => 'required|unique:verifikasi',
                'penandatangan' => 'required|unique:verifikasi',
                'barcode' => 'required',
                'dokumen' => ' mimes:doc,docx,pdf',
               
            ],[
                //custome pesan
                'nim.required' => 'NIM wajib Di isi !!!',
                'nama.required' => 'Nama wajib di isi !!!',
                'jenis_surat' => 'wajib di isi',
                'no_surat' => 'wajib di isi',
                'keperluan' => 'wajib di isi',
                'penandatangan' => 'wajib di isi',
                'dokumen.required' => 'wajib di isi !!!',
            ]);
            $dokumen = Request()->file('dokumen');
            $nama_dokumen = Request()->nama .'.'. $dokumen->extension();
            $dokumen->move('dokumen/',$nama_dokumen);
            // $qrcode = new Generator;
            // $qrcode->size(500)->generate('Make a qrcode without Laravel!');

            $data =[
                'nim' => Request()->nim,
                'nama' => Request()->nama,
                'jenis_surat' => Request()->jenis_surat,
                'no_surat' => Request()->no_surat,
                'keperluan' => Request()->keperluan,
                'penandatangan' => Request()->penandatangan,
                'dokumen'=>$nama_dokumen,
                // 'barcode' => $qrcode,
                
            ];
            $this->QRCodeModel->tambahdata($data);
            return redirect()->route('v_barcode')->with('Pesan','Data Telah Berhasil Disimpan!!!');
        }
        
        public function update($id)
        {
            if(Request()->status=="DITERIMA")
            {
                $data =[
                    'nim' => Request()->nim,
                    'nama' => Request()->nama,
                    'jenis_surat' => Request()->jenis_surat,
                    'no_surat' => Request()->no_surat,
                    'keperluan' => Request()->keperluan,
                    'penandatangan' => Request()->penandatangan,
                    'status' => Request()->status,
                    'barcode' => Request()->barcode,
                    'dokumen' => Request()->dokumen,
                   
                ];
           
                $this->QRCodeModel->updatedata($id,$data);
                return redirect()->route('barcode')->with('Pesan','Pengajuan Telah Di Terima!!!');
            }else{
                $data =[
                    'nim' => Request()->nim,
                    'nama' => Request()->nama,
                    'jenis_surat' => Request()->jenis_surat,
                    'no_surat' => Request()->no_surat,
                    'keperluan' => Request()->keperluan,
                    'penandatangan' => Request()->penandatangan,
                    'status' => Request()->status,
                    
                   
                ];
           
                $this->QRCodeModel->updatedata($id,$data);
                return redirect()->route('verifikasi')->with('Pesan','Maaf Pengajuan Ditolak');
            }
           
        }   
        public function hapus($id)
        {
        $data = [
            'barcode'=>$this->QRCodeModel->hapusdata($id),
        ];

        return redirect()->route('barcode')->with('Pesan','Data Telah Berhasil Dihapus!!!');
        }
}