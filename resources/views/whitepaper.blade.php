@php
    $whitepaper_link['en'] = url('assets/download/Komoverse - Whitepaper - English 2.3.pdf');
    $whitepaper_link['id'] = null;
    $whitepaper_link['zh'] = null;

    $onepager_link['en'] = url('assets/download/Komoverse - One Pager - English 2.2.pdf');
    $onepager_link['id'] = null;
    $onepager_link['zh'] = null;


    $pagetitle['en'] = "Papers - Komoverse";
    $pagetitle['id'] = "Dokumen - Komoverse";
    $pagetitle['zh'] = "文件 - Komoverse";

    $title['en'] = "PAPERS";
    $title['id'] = "DOKUMEN";
    $title['zh'] = "文件";

    $subtitle['en'] = "Komoverse is the first Play-to-Earn auto-battle chess game on the Solana blockchain built around rare Komodo Metaverse NFT collectibles.";
    $subtitle['id'] = "Komoverse adalah game catur pertempuran otomatis Play-to-Earn pertama di blockchain Solana yang dibangun di sekitar koleksi NFT Komodo Metaverse yang langka.";
    $subtitle['zh'] = "KOMOVERSE 是SOLANA区块链上第一款围绕  着KOMODO METAVERSE NFT收藏品构建的即玩即赚自  动对战自动对战的国际象棋游戏。";

    $whitepaper['en'] = "WHITEPAPER";
    $whitepaper['id'] = "WHITEPAPER";
    $whitepaper['zh'] = "白皮书";

    $onepager['en'] = "ONE PAGER";
    $onepager['id'] = "ONE PAGER";
    $onepager['zh'] = "单页报告";

    $disclaimer['en'] = "I hereby confirm that by accessing the whitepaper and other informational contents, I will be deemed to have reviewed and accepted the terms of use and privacy policy, including verification that I am not based in a jurisdiction where such access would be prohibited or restricted in any form.";
    $disclaimer['id'] = "Saya dengan ini mengonfirmasi bahwa dengan mengakses kertas putih dan konten informasi lainnya, saya akan dianggap telah meninjau dan menerima persyaratan penggunaan dan kebijakan privasi, termasuk verifikasi bahwa saya tidak berbasis di yurisdiksi di mana akses tersebut akan dilarang atau dibatasi dalam bentuk apapun";
    $disclaimer['zh'] = "我在此确认，通过访问白皮书和其他信息内容，我将被视为已阅读并接受使用条款和隐私权政策，包括验证我不在任何禁止或限制此类访问的司法直辖区。";

    $agree['en'] = "Yes, I Agree";
    $agree['id'] = "Ya, Saya Setuju";
    $agree['zh'] = "是，我同意。";

    $disagree['en'] = "No, Thanks.";
    $disagree['id'] = "Tidak. Terima Kasih.";
    $disagree['zh'] = "不同意，谢谢。";
@endphp

@extends('template')
@section('pagemeta')
<title>{{ $pagetitle[$lang] }}</title>
@endsection
@section('content')
<div class="container text-center">
    <div class="row">
        <div class="col-12 my-2 pt-5">
            <h1>{{ $title[$lang] }}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col-12 col-md-6 mb-5">
            <h2 class="no-style">{{ $subtitle[$lang] }}</h2>
        </div>
        <div class="col"></div>
    </div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="col-12 col-md-6 col-xl-5 col-xxl-3 mb-3">
        @if ($whitepaper_link[$lang])
        <button  data-bs-toggle="modal" data-bs-target="#downloadWP" class="btn form-control btn-lg btn-primary">{{ $whitepaper[$lang] }}</button>
        @else
        <button class="btn form-control btn-lg btn-outline-success" disabled="disabled">{{ $whitepaper[$lang] }}</button>
        @endif
    </div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="col-12 col-md-6 col-xl-5 col-xxl-3 pb-5 mb-5">
        @if ($onepager_link[$lang])
        <a href="{{ $onepager_link[$lang] }}" target="_blank" class="btn form-control btn-lg btn-primary">{{ $onepager[$lang] }}</a>
        @else
        <button class="btn form-control btn-lg btn-outline-success" disabled="disabled">{{ $onepager[$lang] }}</button>
        @endif
    </div>
    <div class="col"></div>
</div>
<div class="modal fade" id="downloadWP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="background:transparent">
            <div class="modal-body ylbr" style="background: black; text-align:center">
                {{ $disclaimer[$lang] }}
                <p class="m-2">&nbsp;</p>
                <button type="button" onclick="window.open('{{ $whitepaper_link[$lang] }}');" class="btn btn-lg btn-primary px-3 me-2" data-bs-dismiss="modal">{{ $agree[$lang] }}</button>
                <button type="button" class="btn btn-lg btn-primary" style="background: transparent !important;" data-bs-dismiss="modal">{{ $disagree[$lang] }}</button>
                
            </div>
        </div>
    </div>
</div>
@endsection