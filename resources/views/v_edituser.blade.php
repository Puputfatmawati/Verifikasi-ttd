@extends('temp.v_temp') 
@section('breadcump','Edit User')
@section('isibreadcump','Edit')
@section('isicontent')
<form action="/user/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class ="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" class="form-control" value ="{{ $user->username }}">
                    <div class="text-danger">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

            <div class="form-group">
                <label>Password</label>
                <input name="password" class="form-control" value="{{ $user->password }}" >
                <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="form-group">
                <label>Level</label> 
                <input name="level" class="form-control" value="{{ $user->level }}" >
                <div class="text-danger">
                        @error('level')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="form-group">
                <label>Jabatan</label> 
                <input name="jabatan" class="form-control" value="{{ $user->jabatan }}" >
                <div class="text-danger">
                        @error('jabatan')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <div class="form-group">  
                <label>Ganti Foto</label>
                <input name="foto_user" class="form-control" type="file">
                <div class="text-danger">
                        @error('foto_user')
                            {{ $message }}
                        @enderror
                    </div>
            </div>
            <br>
            <div class="form-group">
                <button class="btn btn-primary"> Update </button>
            </div>
        </div>
    </div>
</form>



    
@endsection


