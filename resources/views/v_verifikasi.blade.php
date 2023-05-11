@extends('temp.v_temp') 
@section('breadcump','Tabel Pengajuan Tanda Tangan')
@section('isibreadcump','Tabel Pengajuan')
@section('isicontent')
<div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <span class="mr-auto">Data Pengajuan Tanda Tangan</span>
                       
                    </div>
        <div class="card-body">
        <div class="table-responsive">
            <table id= "example3" class="table table-bordered table-striped">
    <!-- <a href="#" class="btn btn-sm btn-success"> Tambah </a> -->
    @if (session('Pesan'))
    <div class ="alert alert-info alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5><i class ="icon fas fa-check"></i>Success!</h5>
        {{ (session('Pesan')) }}.
    </div>
    @endif
    <thead class="table-light">
    <thread>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Surat</th>
            <th>No Surat</th>
            <th>Keperluan</th>
            <th>Yang Menandatangani</th>
            <th>Status</th>
            <th>Dokumen</th>
            <th>Action</th>
           
        </tr>
    </thread>
    <tbody>
       <?php $no=1; ?>
        @foreach ($verifikasi as $data)
            <tr>
                <td> {{ $no++}} </td>
                <td> {{ $data->tanggal}} </td>
                <td> {{ $data->nim}} </td>
                <td> {{ $data->nama}} </td>
                <td> {{ $data->jenis_surat}} </td>
                <td> {{ $data->no_surat}} </td>
                <td> {{ $data->keperluan}} </td4>
                <td> {{ $data->penandatangan}} </td>
                <td> 
                    @if( $data->status == 'DITERIMA')
                    <span class="badge badge-info">{{ $data->status}} </span>
                    @elseif ($data->status == 'MENUNGGU')
                    <span class="badge badge-secondary">{{ $data->status}} </span>
                    @else
                    <span class="badge badge-danger">{{ $data->status}} </span>
                    @endif
                </td>
               
                <td>
                    <a href="dokumen/{{$data->dokumen}}"><button class="btn btn-primary btn-sm"><i class="fas fa-file-download"></i> Download file </button></a>
                </td>
                <td>
                    <!-- <a href="/verifikasi/hapus/{{ $data->id }}" class="btn btn-sm  btn-danger"><i class="nav-icon fas fa-trash"></i> </a>
                    <a href="#" class="btn btn-sm  btn-success"><i class="nav-icon fas fa-paper-plane"></i> </a>
                    <a href="/verifikasi/detail/{{ $data->id}}" class="btn btn-sm  btn-info"><i class="nav-icon fas fa-info"></i> </a> -->
                <nobr>
                <a href="/verifikasi/detail/{{ $data->id}}" class="btn btn-info btn-xs mx-1" title="Lihat"><i class="fas fa-info-circle"></i></a>
                </nobr>
                <nobr>
                <a href="/verifikasi/hapus/{{ $data->id }}" class="btn btn-danger btn-xs mx-1" title="Hapus"><i class="fas fa-times-circle"></i></a>
                </nobr>
                <a href="/verifikasi/view/{{ $data->id }}" class="btn btn-secondary btn-xs mx-1" title="view saat di scan"><i class="fas fa-address-card"></i></a>
                </nobr>
                </td>
                
    
            </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection