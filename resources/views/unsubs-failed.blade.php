@php
    $pagetitle['en'] = 'Unsubscription Failed - Komoverse';
    $pagetitle['id'] = 'Berhasil Berhenti Berlangganan - Komoverse';
    $pagetitle['zh'] = '退订失败 - Komoverse';

    $title['en'] = 'UNSUBSCRIBE FAILED';
    $title['id'] = 'GAGAL BERHENTI BERLANGGANAN';
    $title['zh'] = '退订失败';

    $subtitle['en'] = 'Your newsletter subscription cancelation has been failed.';
    $subtitle['id'] = 'Pembatalan langganan buletin Anda telah gagal.';
    $subtitle['zh'] = '您的时事通讯订阅取消失败';

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