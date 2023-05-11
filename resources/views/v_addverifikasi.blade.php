@extends('temp.v_temp') 
@section('breadcump','Pengajuan Tanda Tangan')
@section('isibreadcump','Pengajuan')
@section('isicontent')

<form action="/verifikasi/tambah" method="POST" enctype="multipart/form-data">
    @csrf
    @if (session('Pesan'))
    <div class ="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class ="icon fas fa-check"></i>Success!</h5>
        {{ (session('Pesan')) }}.
    </div>
    @endif
    <div class="content">
        <div class="container-fluid">
                <!-- <p>Melihat data proposal</p> -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Pengajuan Verifikasi</div>
        <div class="card-body">
        <div class="content">
        <div class ="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input name="tanggal" class="form-control" type="date">
                    <div class="text-danger">
                        @error('tanggal')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label>NIM</label>
                    <input name="nim" class="form-control"> 
                    <div class="text-danger">
                        @error('nim')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" class="form-control">
                    <div class="text-danger">
                        @error('nama')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>    
                </div>  
                <div class="form-group">
                    <label>Jenis Surat </label>
                    <select name="jenis_surat" class="form-control"> 
                    @foreach ($surat as $kd)
                        <option value="{{$kd->jenis_surat}}">{{$kd->jenis_surat}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>No Surat</label>
                    <input name="no_surat" class="form-control"> 
                    <div class="text-danger">
                        @error('no_surat')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>
                <div class="form-group">
                    <label>Keperluan </label>
                    <input name="keperluan" class="form-control"> 
                    <div class="text-danger">
                        @error('keperluan')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>

                <div class="form-group">
                    <label>Yang Menandatangani</label>
                    <input name="penandatangan" class="form-control">
                    <div class="text-danger">
                        @error('tujuan')
                            {{ $message }}
                        @enderror
                    </div>
                </div>       
                
                <div class="form-group">
                                    <label for="dokumen">Dokumen*</label>

                                    <div class="text-danger">
                                        <input type="file" class="form-control" name="dokumen" value="{{ old('dokumen') }}">

                                        @error('dokumen')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
            </div>
                </div>
                </div>
            <div class="form-group">
                <button class="btn btn-primary"> Simpan </button>
                
            </div>
        </div>
    </div>
    
</form>

    
@endsection