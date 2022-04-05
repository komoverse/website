@php
    $pagetitle['en'] = 'Our Partners | Play Free Game Crypto NFT Android | Komoverse';
    $pagetitle['id'] = 'Mitra Kami | Main Game NFT Kripto Gratis Android | Komoverse';
    $pagetitle['zh'] = '合伙 - Komoverse';

    $title['en'] = 'KOMOVERSE PARTNERS';
    $title['id'] = 'MITRA KOMOVERSE';
    $title['zh'] = '合伙';

    $metadesc['en'] = "Komoverse has extensive partnerships with wide-range associates. Be our partners to experience excellent opportunities and journey in Crypto NFT gaming industry";
    $metadesc['id'] = "Komoverse memiliki kemitraan dengan rekanan yang luas. Jadilah mitra kami untuk mendapatkan peluang dan perjalanan luar biasa di industri game Kripto NFT."
    $metadesc['zh'] = "";

    $subtitle['en'] = "Komodo Metaverse work and collaborate with enthusiastic market-leading game developers, influencers and institutional players ensuring strategic growth and scalable development. We are actively building partnership to deliver distinguished and competitive results.";
    $subtitle['id'] = "Komodo Metaverse bekerja dan berkolaborasi dengan pengembang game, influencer, dan pemain institusional terkemuka di pasar yang antusias untuk memastikan pertumbuhan strategis dan pengembangan yang terukur. Kami secara aktif membangun kemitraan untuk memberikan hasil yang berbeda dan kompetitif.";
    // $subtitle['zh'] = "";

    // $subtitle['en'] = 'Extensive partnerships with market-leading game developers, influencers and institutional players ensuring strategic growth and scalable development.';
    // $subtitle['id'] = 'Kemitraan yang luas dengan pengembang game, influencer, dan pemain institusi terkemuka di pasar memastikan pertumbuhan strategis dan pengembangan yang terukur';
    $subtitle['zh'] = '与市场领先的游戏开发商、影响者和组织机构的广泛合作确保了战略增长和可扩大的发展。';
    
    $readmore['en'] = 'Read More >>';
    $readmore['id'] = 'Baca Selengkapnya >>';
    $readmore['zh'] = '了解更多 >>';
@endphp
@extends('template')
@section('pagemeta')
<title>{{ $pagetitle[$lang] }}</title>
<meta name="description" content="{{ $metadesc[$lang] }}"/>
<meta property="og:title" content="{{ $pagetitle[$lang] }}" />
<meta property="og:description" content="{{ $metadesc[$lang] }}" />
@if ($partnercontent)
<meta property="og:image" content="{{ $partnercontent[0]->featured_image }}" />
@endif
@endsection
@section('content')
<div class="container-fluid">
    <div class="row py-5 fade-in">
        <div class="col"></div>
        <div class="col-12 col-lg-6">
            <center>
            <h1>{{ $title[$lang] }}</h1>
            <h2 class="no-style">{{ $subtitle[$lang] }}</h2>
            </center>
        </div>
        <div class="col"></div>
    </div>
    @foreach($partnercontent as $row)
        <?php $news_content_sliced = implode(' ', array_slice(explode(' ', html_entity_decode(strip_tags($row->news_content))), 0, 30)); ?>
        @if ($row->is_pinned == 1)
        <div class="row mb-5">
            <div class="col"></div>
            <div class="col-12">
                @if ($lang != 'en')
                <a href="{{ url($lang.'/partner'.'/'.$row->slug) }}">
                @else
                <a href="{{ url('partner'.'/'.$row->slug) }}">
                @endif
                    <div class="card card-news fade-in">
                        <div class="card-body p-0">
                            @if ($row->featured_image)
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <img src="{{ $row->featured_image }}" alt="Komoverse (Komodo Metaverse) Headline Image" class="academy-headline-img">
                                </div>
                                <div class="d-flex d-lg-none">
                                    <h2 class="px-4 py-3">{{ $row->title }}</h2>
                                </div>
                                <div class="d-none d-lg-flex col-lg-4 p-3 position-relative text-center">
                                    <h2 class="fs-1 position-absolute top-50 start-50 translate-middle">{!! str_replace(array(" x "," X "), "<span class='d-block fs-1 py-3'>X</span>", $row->title) !!}</h2>
                                    {{-- <div class="news-date mb-4">{{ date('d / m / Y', strtotime($row->posting_time)) }}</div> --}}
                                    {{-- <span>{{ $news_content_sliced }}</span> --}}
                                    {{-- <span class="readmore-18">{{ $readmore[$lang] }}</span> --}}
                                </div>
                            </div>
                            @else
                            <div class="d-flex d-lg-none">
                                <h2 class="px-4 py-3">{{ $row->title }}</h2>
                            </div>
                            <div class="d-none d-lg-flex p-3 position-relative text-center">
                                <h2 class="fs-1 position-absolute top-50 start-50 translate-middle">{!! str_replace(array(" x "," X "), "<span class='d-block fs-1 py-3'>X</span>", $row->title) !!}</h2>
                                {{-- <div class="news-date mb-4">{{ date('d / m / Y', strtotime($row->posting_time)) }}</div> --}}
                                {{-- <span>{{ $news_content_sliced }}</span> --}}
                                    {{-- <span class="readmore-18">{{ $readmore[$lang] }}</span> --}}
                            </div>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            <div class="col"></div>
        </div>
        @else
        <div class="row mb-4">
            <div class="col"></div>
            <div class="col-12 col-lg-10">
                @if ($lang != 'en')
                <a href="{{ url($lang.'/partner'.'/'.$row->slug) }}">
                @else
                <a href="{{ url('partner'.'/'.$row->slug) }}">
                @endif
                    <div class="card card-news fade-in">
                        <div class="card-body p-0">
                            @if ($row->featured_image)
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <img src="{{ $row->featured_image }}" alt="Komoverse (Komodo Metaverse) Featured Image" class="academy-headline-img">
                                </div>
                                <div class="d-flex d-lg-none">
                                    <h2 class="px-4 py-3">{{ $row->title }}</h2>
                                </div>
                                <div class="d-none d-lg-flex col-lg-4 p-3 position-relative text-center">
                                    <h2 class="fs-1 position-absolute top-50 start-50 translate-middle">{!! str_replace(array(" x "," X "), "<span class='d-block fs-1 py-3'>X</span>", $row->title) !!}</h2>
                                    {{-- <div class="news-date mb-4">{{ date('d / m / Y', strtotime($row->posting_time)) }}</div> --}}
                                    {{-- <span>{{ $news_content_sliced }}</span> --}}
                                    {{-- <span class="readmore-18">{{ $readmore[$lang] }}</span> --}}
                                </div>
                            </div>
                            @else
                            <div class="d-flex d-lg-none">
                                <h2 class="px-4 py-3">{{ $row->title }}</h2>
                            </div>
                            <div class="d-none d-lg-flex p-3 position-relative text-center">
                                <h2 class="fs-1 position-absolute top-50 start-50 translate-middle">{!! str_replace(array(" x "," X "), "<span class='d-block fs-1 py-3'>X</span>", $row->title) !!}</h2>
                                {{-- <div class="news-date mb-4">{{ date('d / m / Y', strtotime($row->posting_time)) }}</div> --}}
                                {{-- <span>{{ $news_content_sliced }}</span> --}}
                                    {{-- <span class="readmore-18">{{ $readmore[$lang] }}</span> --}}
                            </div>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            <div class="col"></div>
        </div>
        @endif
    @endforeach
    <div class="row">
        <div class="col-12 justify-content-center">
            {{ $partnercontent->links() }}
        </div>
    </div>
</div>


@endsection