@php
    $pagetitle['en'] = 'Unsubscription Success - Komoverse';
    $pagetitle['id'] = 'Berhasil Berhenti Berlangganan - Komoverse';
    $pagetitle['zh'] = '取消订阅成功 - Komoverse';

    $title['en'] = 'UNSUBSCRIBE SUCCESS';
    $title['id'] = 'BERHASIL BERHENTI BERLANGGANAN';
    $title['zh'] = '取消订阅成功';

    $subtitle['en'] = 'Your newsletter subscription has been canceled.';
    $subtitle['id'] = 'Langganan buletin Anda telah dibatalkan.';
    $subtitle['zh'] = '您的时事通讯订阅已取消';

@endphp

@extends('template')
@section('pagemeta')
<title>{{ $pagetitle[$lang] }}</title>
@endsection
@section('content')
<div class="section-1 container-fluid pt-5">
    <div class="row py-5 fade-in">
        <div class="col"></div>
        <div class="col-12 col-md-6">
            <center>
            <h1>{{ $title[$lang] }}</h1>
            <span class="fs-5">{{ $subtitle[$lang] }}</span>
            </center>
        </div>
        <div class="col"></div>
    </div>
</div>
@endsection