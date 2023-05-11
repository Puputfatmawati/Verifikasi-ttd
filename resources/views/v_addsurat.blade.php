@extends('temp.v_temp') 
@section('breadcump','Tambah Jenis Surat')
@section('isibreadcump','Tambah')
@section('isicontent')

<form action="/surat/tambah" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="container-fluid">
                <!-- <p>Melihat data proposal</p> -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Tambah Jenis Surat</div>
        <div class="card-body">
    <div class="content">
        <div class ="row">
            <div class="col-sm-12">
            <div class="form-group">
                    <label>Kode Surat</label>
                    <input name="kode_surat" class="form-control"> 
                    <div class="text-danger">
                        @error('kode_surat')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>
            <div class="form-group">
                    <label>Jenis Surat</label>
                    <input name="jenis_surat" class="form-control"> 
                    <div class="text-danger">
                        @error('jenis_surat')
                            {{ $message }}
                        @enderror
                    </div>
                    </input>
                </div>
                <div class="form-group">
                <button class="btn btn-primary"> Simpan </button>
            </div>
        </div>
    </div>
    </div>
</form>

    
@endsection