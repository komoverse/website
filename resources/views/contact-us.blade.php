@php
    $pagetitle['en'] = 'Contact Us - Komoverse';
    $pagetitle['id'] = 'Hubungi Kami - Komoverse';
    $pagetitle['zh'] = '联系我们 - Komoverse';

    $title['en'] = 'CONTACT US';
    $title['id'] = 'HUBUNGI KAMI';
    $title['zh'] = '联系我们';

    $subtitle['en'] = 'Get in touch with our team if you need help, or you want to join our team.';
    $subtitle['id'] = 'Hubungi tim kami jika Anda membutuhkan bantuan, atau ingin bergabung dengan tim kami.';
    $subtitle['zh'] = '若您需要帮助活像加入我们让你的团队，请与我们的团队联系。';

    $emailus['en'] = 'Email us directly to:';
    $emailus['id'] = 'Email ke kami melalui:';
    $emailus['zh'] = '直接发送电子邮件到:';

    $joindiscord['en'] = 'Join our Discord community:';
    $joindiscord['id'] = 'Bergabung dengan komunitas Discord kami:';
    $joindiscord['zh'] = '加入我们的Discord社群:';
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
            <div class="row fade-in">
                <div class="col"></div>
                <div class="col-12 col-md-6">
                    <div class="card mb-5" onclick="location.href='mailto:contact@komoverse.io'" style="cursor: pointer;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <i style="font-size: 4rem" class="fas fa-envelope"></i>
                                </div>
                                <div class="col-10">
                                    <h5>{{ $emailus[$lang] }}</h5>
                                    <h3 class="shadow">contact@komoverse.io</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row fade-in">
                <div class="col"></div>
                <div class="col-12 col-md-6">
                    <div class="card mb-5" onclick="location.href='https://discord.gg/komoverse'" style="cursor: pointer;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <i style="font-size: 4rem" class="fab fa-discord"></i>
                                </div>
                                <div class="col-10">
                                    <h5>{{ $joindiscord[$lang] }}</h5>
                                    <h3 class="shadow">discord.gg/komoverse</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>

@endsection