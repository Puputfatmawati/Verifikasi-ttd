@extends('temp.v_temp') 
@section('breadcump','Detail Pengajuan')
@section('isibreadcump','Detail')
@section('isicontent')

<!-- GENERATE QRCODE CONTOH  -->
<!-- <img src="{{ $qr }}">  -->


<!-- <div class="panel-body">
                    <div class="card bg-light" style="width: 35rem;">
                        <div class="card-header bg-dark">
                            <h5 class="text-center">Detail Informasi Verifikasi Tanda Tangan</h5>
                        </div> 
                        <div class="card-header">
    <div class="card-body">
     <tr><dl><dd>
                   &nbsp &nbsp &nbsp <th width ="100px">Tanggal</th>
                   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<th width ="30px">:</th>
                    <th width>{{ $verifikasi->tanggal}}</th>
                </tr></dd>
       <tr><dl><dd>
                   &nbsp &nbsp &nbsp <th width ="100px">NIM</th>
                   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<th width ="30px">:</th>
                    <th width>{{ $verifikasi->nim }}</th>
                </tr></dd>
                 <tr><dd>
                 &nbsp &nbsp &nbsp <th width ="100px">Nama</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <th width ="30px">:</th>
                    <th width>{{ $verifikasi->nama }}</th>
                </tr></dd>
                <tr><dd>
                 &nbsp &nbsp &nbsp <th width ="100px">Jenis Surat</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   <th width ="30px">:</th>
                    <th width>{{ $verifikasi->jenis_surat }}</th>
                </tr></dd>
                 <tr><dd>
                 &nbsp  &nbsp &nbsp <th width ="100px">No Surat</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp   <th width ="30px">:</th>
                    <th width>{{ $verifikasi->no_surat }}</th>
                  </tr></dl></dd>
                  <tr><dd>
                 &nbsp  &nbsp &nbsp <th width ="100px">Keperluan</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <th width ="30px">:</th>
                    <th width>{{ $verifikasi->keperluan }}</th>
                  </tr></dl></dd>
                  <tr><dd>
                 &nbsp  &nbsp &nbsp <th width ="100px">Tujuan</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <th width ="30px">:</th>
                    <th width>{{ $verifikasi->penandatangan }}</th>
                  </tr></dl></dd>
                  <tr><dd>
                 &nbsp  &nbsp &nbsp <th width ="100px">File Surat</th>
                 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <th width ="30px">:</th>
                    <th width><td>
                    <a href="dokumen/{{$verifikasi->dokumen}}"><button class="btn btn-success" type="button">Download</button></a>
                  </tr></dl></dd>

                </div>
                
            </div>
            
            
            END PANEL HEADLINE -->
        <!-- </div>
    </div> -->
 
  
  <!-- <a href="/barcode" class="btn btn-info">Terima</a>
  <a href="#" class="btn btn-danger">Tolak</a>
  <p></p><a href="#" class="btn btn-warning" onclick="window.print();return false;">CETAK</a></p>
  <a href="/verifikasi/" class="btn btn-success">Kembali</a> --> 
  <div class="content">
        <div class="container-fluid">
                <!-- <p>Melihat data proposal</p> -->

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Detail Pengajuan Surat</div>
                <div class="card-body p-0">
                    <table class="table table-borderless">
    <tbody>
        <tr>
            <th>Tanggal</th>
            <th width>{{ $verifikasi->tanggal}}</th>
        </tr>
        <tr>
            <th>Nim</th>
            <td width>{{ $verifikasi->nim }}</td>
        </tr>
        <tr>
            <th>Nama</th>
            <td width>{{ $verifikasi->nama }}</td>
        </tr>
        <tr>
            <th>Jenis Surat</th>
            <td width>{{ $verifikasi->jenis_surat }}</td>
        </tr>
        <tr>
            <th>No Surat</th>
            <td width>{{ $verifikasi->no_surat }}</td>
        </tr>
        <tr>
            <th>Keperluan</th>
            <td width>{{ $verifikasi->keperluan }}</td>
        </tr>
        <tr>
            <th>Yang Menandatangani</th>
            <td width>{{ $verifikasi->penandatangan }}</td>
        </tr>
        <tr>
            <th>File Surat</th>
            <td>
                <a href="{{asset('dokumen')}}/{{$verifikasi->dokumen}}" class="btn btn-primary btn-sm"><i class="fas fa-file-download"></i> Download file</a>
            </td>
        </tr>
        <!-- <tr>
            <div class="visible-print text-center">
                {!! QrCode::size(100)->generate(Request::url('http://www.simplesoftware.io')); !!}
            </div>
        </tr> -->
        
    </tbody>
</table>
</div>
</div>
</div>
</div>

<form action="/barcode/update/{{$verifikasi->id}}" method="post">
    @csrf
    <div class="form-group">
        <input type="hidden" name="tanggal" value="{{ $verifikasi->tanggal}}">    
        <input type="hidden" name="nim" value="{{ $verifikasi->nim}}">    
        <input type="hidden" name="nama" value="{{ $verifikasi->nama}}">    
        <input type="hidden" name="jenis_surat" value="{{ $verifikasi->jenis_surat}}">    
        <input type="hidden" name="no_surat" value="{{ $verifikasi->no_surat}}">    
        <input type="hidden" name="keperluan" value="{{ $verifikasi->keperluan}}">    
        <input type="hidden" name="penandatangan" value="{{ $verifikasi->penandatangan}}">    
        <input type="hidden" name="status" value="DITERIMA">    
        <input type="hidden" name="barcode" value="{{ $qr }}">    
    </div>
    <div class="form-group">
    <button class="btn btn-primary" >DITERIMA</button>
    </div>
</form>

<form action="/barcode/update/{{$verifikasi->id}}" method="post">
    @csrf
    <div class="form-group">
        <input type="hidden" name="tanggal" value="{{ $verifikasi->tanggal}}">    
        <input type="hidden" name="nim" value="{{ $verifikasi->nim}}">    
        <input type="hidden" name="nama" value="{{ $verifikasi->nama}}">    
        <input type="hidden" name="jenis_surat" value="{{ $verifikasi->jenis_surat}}">    
        <input type="hidden" name="no_surat" value="{{ $verifikasi->no_surat}}">    
        <input type="hidden" name="keperluan" value="{{ $verifikasi->keperluan}}">    
        <input type="hidden" name="penandatangan" value="{{ $verifikasi->penandatangan}}">    
        <input type="hidden" name="status" value="DITOLAK">    
         
    </div>
    <div class="form-group">
    <button class="btn btn-danger" >DITOLAK</button>
    </div>
</form>
<!-- <a href="#" class="btn btn-danger my-2">
    <i class="fas fa-times-circle"></i> Tolak
</a> -->
    <br>
    <a href="/verifikasi" class="btn btn-secondary my-2">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
    </br>
   
    </br>
        </div>
    </div>
</a>
</nobr>
    
</section>
@endsection

