@php
    $pagetitle['en'] = 'Careers - Komoverse';
    $pagetitle['id'] = 'Karir - Komoverse';
    $pagetitle['zh'] = '职业生涯 - Komoverse';

    $title['en'] = 'JOIN OUR TEAM !';
    $title['id'] = 'BERGABUNGLAH DENGAN TIM KAMI !';
    $title['zh'] = '加入我们的团队！';

    $subtitle['en'] = "Are you ready to take part in the first solana crypto play2earn autobattler game that's about to disrupt the crypto metaverse gaming industry?";
    $subtitle['id'] = "Apakah Anda siap untuk mengambil bagian dalam game pertempuran otomatis Solana Crypto P2E pertama yang akan mengganggu industri game crypto metaverse?";
    $subtitle['zh'] = "您准备好参与即将颠覆加密元界游戏行业的首款SOLANA加密即玩即赚自动战斗游戏吗？";
@endphp

@extends('template')
@section('pagemeta')
<title>{{ $pagetitle[$lang] }}</title>
@endsection
@section('content')
        <div class="section-1 container-fluid">
            <div class="row py-5 fade-in">
                <div class="col"></div>
                <div class="col-12 col-md-6">
                    <center>
                    <h1>{{ $title[$lang] }}</h1>
                    <h2 class="no-style">{{ $subtitle[$lang] }}</h2>
                    </center>
                </div>
                <div class="col"></div>
            </div>
            <div class="row pb-5">
                <div class="col"></div>
                <div class="col fade-in">
                    <div class="card mx-1" style="cursor: pointer;" onclick="location.href='careers/content-creator'">
                        <div class="card-body">
                            <h3>Content Creator</h3>
                            WFH/WFO<br>
                            More details >
                        </div>
                    </div>
                </div>
                <div class="col fade-in">
                    <div class="card mx-1" style="cursor: pointer;" onclick="location.href='careers/social-media-strategist'">
                        <div class="card-body">
                            <h3>Social Media Strategist</h3>
                            WFH/WFO<br>
                            More details >
                        </div>
                    </div>
                </div>  
                <div class="col"></div>
            </div>
        </div>

@endsection