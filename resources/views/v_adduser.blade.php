@extends('temp.v_temp') 
@section('breadcump','Tambah User')
@section('isibreadcump','Tambah')
@section('isicontent')

<form action="/user/tambah" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="container-fluid">
                <!-- <p>Melihat data proposal</p> -->

    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Tambah User</div>
        <div class="card-body">
    <div class="content">
        <div class ="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" class="form-control" value ="{{ old('username') }}">
                    <div class="text-danger">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

            <div class="form-group">
                <label>Password</label>
                <input name="password" class="form-control" type="password" >
                <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="form-group">
                <label>Level</label> 
                <select name="level" id="level">
                    <option value="Admin">Admin</option>
                    <option value="Pejabat">Pejabat</option>  
                </select>
            </div>
            
            <div class="form-group">
                <label>Jabatan</label>
                <input name="jabatan" class="form-control" type="jabatan" >
                <div class="text-danger">
                        @error('jabatan')
                            {{ $message }}
                        @enderror
                    </div>
            </div>

            <div class="form-group">  
                <label>Foto</label>
                <input name="foto_user" class="form-control" type="file">
                <div class="text-danger">
                        @error('foto_user')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary"> Simpan </button>
            </div>
        </div>
    </div>
    </div>
</form>

    
@endsection