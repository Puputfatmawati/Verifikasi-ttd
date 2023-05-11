<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
 <section class="p-5">
   <center><div class="content">
        <div class="container-fluid mt-5 mx-5"> 
                <div class="row">
        <div class="col-lg-6">
            <div class="card mt-6 ">
            <table align="center">
              <tr>
                    <td><img src="{{asset('template')}}/dist/img/Stm.png" width="90" height="60"
                        alt="AdminLTE Logo"
                        class="brand-image img-circle elevation-3"
                        style="opacity: .8"></td></div>
                                <div class="card-body p-0 ">

                <td><center>
                    <font size="5"><b>STMIK BANDUNG</font><BR> &nbsp  &nbsp &nbsp</b>
                    <font size="4">SEKOLAH TINGGI MANAJEMAN INFORMATIKA DAN KOMPUTER BANDUNG</font> &nbsp  &nbsp &nbsp <BR>
                    <font size="2"><i></i>Jl. Cikutra No.113, Kota Bandung, Jawa Barat 40124</i> &nbsp  &nbsp &nbsp</font></center>
                </td>
                </tr>
                <tr>
                    <td colspan="2"><hr> </td>
                </tr>
            </table>
            <br>
            <table align="center">
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
            </table>
            <br>
            <br>
                </div>
            </border>
            <body>

</body>
</html>