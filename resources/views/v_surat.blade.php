@extends('temp/v_temp') 
@section('breadcump','Data Jenis Surat')
@section('isibreadcump','Jenis Surat')
@section('isicontent')

<div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="mr-auto">Data Surat</span>
                        <a href="/surat/add" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Jenis Surat</a></div>
        <div class="card-body">
        <div class="table-responsive">
            <table id= "example3" class="table table-bordered table-striped">
    @if (session('Pesan'))
    <div class ="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class ="icon fas fa-check"></i>Success!</h5>
        {{ (session('Pesan')) }}.
    </div>
    @endif
    <table id= "example2" class="table table-bordered table-striped">
    <thead class="table-light">
    <thread>
        <tr>
            <th>No</th>
            <th>Kode Surat</th>
            <th>Jenis Surat</th>
            <th>Action</th>
        </tr>
    </thread>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($surat as $data)
            <tr>
                <td> {{ $no++}} </td>
                <td> {{ $data->kode_surat}} </td>
                <td> {{ $data->jenis_surat}} </td>
                <td>
                    <!-- <a href="/user/hapus/{{ $data->id }}" class="btn btn-sm  btn-warning"> <i class="nav-icon fas fa-trash"></i> </a>
                    <a href="/user/editprofil/{{ $data->id}}" class="btn btn-sm  btn-success"><i class="nav-icon fas fa-pen"></i> </a> -->
                <nobr>
                <a href="/surat/hapus/{{ $data->id }}" class="btn btn-danger btn-xs mx-1" title="Hapus"><i class="fas fa-times-circle"></i></a>
                </nobr>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection