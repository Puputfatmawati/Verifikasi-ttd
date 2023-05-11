@extends('temp.v_temp') 
@section('breadcump','Home')
@section('isibreadcump','Home / Dashboard')
@section('isicontent')
<div class="panel-body">
    <!-- <div class="card bg-light" style="width: 65rem;"> -->
    <div class="row">
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box">
<span class="info-box-icon bg-info elevation-1"><i class="fas fa-book"></i></span>
<div class="info-box-content">
<span class="info-box-text">Pengajuan</span>
<span class="info-box-number">10</span>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>
<div class="info-box-content">
<span class="info-box-text">User</span>
<span class="info-box-number">41,410</span>
</div>

</div>

</div>


<div class="clearfix hidden-md-up"></div>
<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-success elevation-1"><i class="fas fa-check-square"></i></span>
<div class="info-box-content">
<span class="info-box-text">Diterima</span>
<span class="info-box-number">760</span>
</div>

</div>

</div>

<div class="col-12 col-sm-6 col-md-3">
<div class="info-box mb-3">
<span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
<div class="info-box-content">
<span class="info-box-text">New Members</span>
<span class="info-box-number">2,000</span>
</div>

</div>

</div>

</div>


<h3 class="font-weight-bold">Selamat Datang <span>{{auth()->user()->username}}</span></h3>

<!-- <div class="visible-print text-center">
    {!! QrCode::size(200)->generate('https://www.stmik-bandung.ac.id/') !!}
    <p>Scan me to visit website STMIK Bandung</p>
</div> -->


</section>
<!-- ##### Partnership Area End ##### -->
    <!-- ##### Location Area Start ###### -->
<!-- <section class="map-frame">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9175773324337!2d107.6409297143473!3d-6.900460569446149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7bdc7d7803f%3A0x7178fc53e5637059!2sSTMIK%20Bandung!5e0!3m2!1sid!2sid!4v1612509027498!5m2!1sid!2sid"></iframe>
</section>
 -->

    
</section>
@endsection