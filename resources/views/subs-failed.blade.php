@php
    $pagetitle['en'] = 'Subscription Failed - Komoverse';
    $pagetitle['id'] = 'Gagal Berlangganan - Komoverse';
    $pagetitle['zh'] = '订阅失败 - Komoverse';

    $title['en'] = 'SUBSCRIPTION FAILED';
    $title['id'] = 'GAGAL BERLANGGANAN';
    $title['zh'] = '订阅失败';

    $subtitle['en'] = 'Your subscription request has failed.';
    $subtitle['id'] = 'Permintaan berlangganan Anda gagal.';
    $subtitle['zh'] = '您的订阅请求失败。';

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