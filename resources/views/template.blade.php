@php
    $langpath = ['en', 'id', 'zh'];

    $socmed['instagram'] = 'https://instagram.com/komoverse';
    $socmed['facebook'] = 'https://www.facebook.com/komoverse';
    $socmed['discord'] = 'https://discord.gg/komoverse';
    $socmed['twitter'] = 'https://twitter.com/komoverse';
    $socmed['tiktok'] = 'https://www.tiktok.com/@komoverse';
    $socmed['youtube'] = 'https://www.youtube.com/channel/UCcT1nu_QpXp2YypMxglkjfA';
    $socmed['linkedin'] = 'https://www.linkedin.com/company/komoverse/about/';
    $socmed['medium'] = 'https://medium.com/@komoverse';
    $socmed['email'] = 'contact@komoverse.io';
    $socmed['telegram'] = 'https://t.me/komoverse';
    $copyright_link = 'https://pdki-indonesia.dgip.go.id/search?type=trademark&keyword=komoverse&page=1';

    $home['en'] = 'HOME';
    $home['id'] = 'BERANDA';
    $home['zh'] = '主页';

    $whitepaper['en'] = 'WHITEPAPER';
    $whitepaper['id'] = 'WHITEPAPER';
    $whitepaper['zh'] = '白皮书';

    $team['en'] = 'TEAM';
    $team['id'] = 'TIM';
    $team['zh'] = '团队';

    $partners['en'] = 'PARTNERS';
    $partners['id'] = 'MITRA';
    $partners['zh'] = '伙伴';

    $news['en'] = 'NEWS';
    $news['id'] = 'BERITA';
    $news['zh'] = '资讯';

    $community['en'] = 'COMMUNITY';
    $community['id'] = 'KOMUNITAS';
    $community['zh'] = '社群';

    $academy['en'] = 'ACADEMY';
    $academy['id'] = 'AKADEMI';
    $academy['zh'] = '学院';

    $more['en'] = 'MORE';
    $more['id'] = 'SELEBIHNYA';
    $more['zh'] = '更多';

    $careers['en'] = 'CAREERS';
    $careers['id'] = 'KARIR';
    $careers['zh'] = '职业生涯';

    $market['en'] = 'MARKETPLACE';
    $market['id'] = 'PASAR';
    $market['zh'] = '职业生涯';

    $media['en'] = 'MEDIA';
    $media['id'] = 'MEDIA';
    $media['zh'] = '媒体';

    $contact['en'] = 'CONTACT US';
    $contact['id'] = 'HUBUNGI KAMI';
    $contact['zh'] = '联系我们';

    $joinus['en'] = 'Join us on our online channels to stay <br>up-to-date with the Komodo Metaverse community';
    $joinus['id'] = 'Bergabunglah di platform online kami untuk mendapatkan <br>informasi terbaru Komunitas Komodo Metaverse';
    $joinus['zh'] = '加入我们的在线频道，了解KOMODO METAVERSE社区的最新动态';

    $mint['en'] = 'MINT A KOMODO';
    $mint['id'] = 'MINT KOMODO';
    $mint['zh'] = '铸造KOMODO';

    $subscribe['en'] = 'SUBSCRIBE';
    $subscribe['id'] = 'BERLANGGANAN';
    $subscribe['zh'] = '订阅';

    $name['en'] = 'Name';
    $name['id'] = 'Nama';
    $name['zh'] = '名字';

    $email['en'] = 'Enter Your Email For Newsletters';
    $email['id'] = 'Masukkan Email Anda Untuk Newsletter';
    $email['zh'] = '输入您的电子邮件以获取新闻通讯';

    $flag['en'] = 'gb';
    $flag['id'] = 'id';
    $flag['zh'] = 'cn';

    $privacy['en'] = 'Privacy Policy';
    $privacy['id'] = 'Kebijakan Privasi';
    $privacy['zh'] = '隐私政策';

    $terms['en'] = 'Terms of Use';
    $terms['id'] = 'Syarat Penggunaan';
    $terms['zh'] = '使用条款';


@endphp
<!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
    <link rel="icon" href="{{ url('assets/img/favicon.png') }}">
    <meta name="robots" content="index, follow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('pagemeta')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b71ce7388c.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ url('assets/js/taptap-menu.js') }}" defer="defer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/mobile.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/taptap.css') }}">

{{-- CHECK IF THIS IS RUNNING WELL --}}
@if (stripos(url('/'), 'komoverse.io'))
<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '635138157546397');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=635138157546397&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-H1RT2LS958"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-H1RT2LS958');
</script>
@endif
</head>
<body>
    <div class="top-page"></div>
    <div class="bg-lines"></div>
    <div class="bg-breathing"></div>
    <div class="container-fluid" style="position:relative">
        <div id="backtotop">
            <span class="fa fa-chevron-circle-up" aria-hidden="true"></span>
        </div>

        <div class="lang-switch" style="display: none">
            @if ($lang != 'en')
                @if (in_array(Request::path(), $langpath))
                    <a href="{{ url('/') }}">
                        <img src="{{ url('assets/img/flags/gb.svg') }}" class="lang-flags" alt="English Language"><br>
                    </a>
                @else
                    <a href="{{ url('/').'/'. Request::segment(2) }}">
                        <img src="{{ url('assets/img/flags/gb.svg') }}" class="lang-flags" alt="English Language"><br>
                    </a>
                @endif
            @endif
            @if ($lang != 'zh')
                @if (in_array(Request::path(), $langpath))
                    <a href="{{ url('/').'/zh' }}">
                        <img src="{{ url('assets/img/flags/cn.svg') }}" class="lang-flags" alt="Chinese Language"><br>
                    </a>
                @else
                    @if ($lang == 'en')
                    <a href="{{ url('/').'/zh/'.Request::segment(1) }}">
                        <img src="{{ url('assets/img/flags/cn.svg') }}" class="lang-flags" alt="Chinese Language"><br>
                    </a>
                    @else
                    <a href="{{ url('/').'/zh/'. Request::segment(2) }}">
                        <img src="{{ url('assets/img/flags/cn.svg') }}" class="lang-flags" alt="Chinese Language"><br>
                    </a>
                    @endif
                @endif
            @endif
            @if ($lang != 'id')
                @if (in_array(Request::path(), $langpath))
                    <a href="{{ url('/').'/id' }}">
                        <img src="{{ url('assets/img/flags/id.svg') }}" class="lang-flags" alt="Indonesian Language"><br>
                    </a>
                @else
                    @if ($lang == 'en')
                    <a href="{{ url('/').'/id/'.Request::segment(1) }}">
                        <img src="{{ url('assets/img/flags/id.svg') }}" class="lang-flags" alt="Indonesian Language"><br>
                    </a>
                    @else
                    <a href="{{ url('/').'/id/'. Request::segment(2) }}">
                        <img src="{{ url('assets/img/flags/id.svg') }}" class="lang-flags" alt="Indonesian Language"><br>
                    </a>
                    @endif
                @endif
            @endif
        </div>
        <div class="row bg-dark position-fixed d-none d-lg-flex" style="width: 100%; z-index:999; border-bottom: 1px solid #777">
            <div class="col-3">
                <a href="{{ ($lang == 'en') ? url('/') : url($lang) }}">
                    <img src="{{ url('assets/img/favicon.webp') }}" style="height: 60px" class="px-0 py-1 my-1" alt="Komoverse (Komodo Metaverse)">
                </a>
            </div>
            <div class="col-9">
                <div class="top-right-navbar py-2 pe-5 float-end" style="margin-top: 9px !important">
                    <div class="hstack gap-3">
                        <div class="disabled-tooltip" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Coming Soon">
                            <button class="mintnft btn btn-primary px-5 d-none d-md-inline"
                                onclick="location.href='javascript:void(0)';" type="button">{{ $mint[$lang] }}</button>
                            <button class="mintnft btn btn-primary my-3 me-2 d-inline d-md-none"
                                onclick="location.href='javascript:void(0)';" type="button">{{ $mint[$lang] }}</button>
                        </div>
                        
                        <div class="vr"></div>

                        <img src="{{ url('assets/img/flags/'.$flag[$lang].'.svg') }}" onmouseover="toggleLangSwitch();" class="lang-flags" alt="English Language">

                        <div class="vr"></div>

                        <a class="d-none d-md-inline" href="{{ $socmed['discord'] }}">
                            <i class="fs-5 fab fa-discord"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row bg-blur position-fixed d-lg-none" style="width: 100%;z-index:999;" id="topsection-mobile">
            <div class="col-3 d-flex align-items-center justify-content-start">
                <div class="top-left-navbar pt-2 pe-1 float-end">
                    <img src="{{ url('assets/img/flags/'.$flag[$lang].'.svg') }}" onclick="toggleLangSwitch();" class="lang-flags" alt="English Language">
                </div>
            </div>
            <div class="col-6 d-flex align-items-center justify-content-center text-center">
                <a href="{{ ($lang == 'en') ? url('/') : url($lang) }}"><img src="{{ url('assets/img/logo.webp') }}" style="max-height: 80px;" alt="Komoverse (Komodo Metaverse)"></a>
            </div>
            <div class="col-3 d-flex align-items-center justify-content-end overflow-hidden">
                <div class="top-right-navbar pt-2 pe-4 float-end">
                    <div class="menu-button-wrapper menu-wrap">
                        <input type="checkbox" class="toggler">
                        <div class="hamburger">
                            <div></div>
                        </div>
                        <div class="col-12 menu bg-dark">
                            <div class="taptap-main">
                                <div class="taptap-by-bonfire">
                                    <ul id="menu-revamp-menu" class="tapmenu">
                                        <li><a href="{{ ($lang == 'en') ? url('/') : url($lang) }}">{{ $home[$lang] }}</a></li>
                                        <li><a href="{{ ($lang == 'en') ? url('papers') : url($lang.'/papers') }}">{{ $whitepaper[$lang] }}</a></li>
                                        <li><a href="{{ ($lang == 'en') ? url('team') : url($lang.'/team') }}">{{ $team[$lang] }}</a></li>
                                        <li><a href="{{ ($lang == 'en') ? url('partners') : url($lang.'/partners') }}">{{ $partners[$lang] }}</a></li>
                                        <li><a href="{{ ($lang == 'en') ? url('news') : url($lang.'/news') }}">{{ $news[$lang] }}</a></li>
                                        <li><a href="{{ ($lang == 'en') ? url('academy') : url($lang.'/academy') }}">{{ $academy[$lang] }}</a></li>
                                        <li><a href="#">{{ $community[$lang] }}</a>
                                       		<ul class="sub-menu" style="display: none;">
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a target="_blank" aria-label="Komoverse Discord" href="{{ $socmed['discord'] }}">
                                                        <span>DISCORD</span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a target="_blank" aria-label="Komoverse Telegram" href="{{ $socmed['telegram'] }}">
                                                        <span>TELEGRAM</span>
                                                    </a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a target="_blank" aria-label="Komoverse Instagram" href="{{ $socmed['instagram'] }}">
                                                        <span>INSTAGRAM</span>
                                                    </a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a target="_blank" aria-label="Komoverse Twitter" href="{{ $socmed['twitter'] }}">
                                                        <span>TWITTER</span>
                                                    </a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a target="_blank" aria-label="Komoverse Tiktok" href="{{ $socmed['tiktok'] }}">
                                                        <span>TIKTOK</span>
                                                    </a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a target="_blank" aria-label="Komoverse Youtube" href="{{ $socmed['youtube'] }}">
                                                        <span>YOUTUBE</span>
                                                    </a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a target="_blank" aria-label="Komoverse Facebook" href="{{ $socmed['facebook'] }}">
                                                        <span>FACEBOOK</span>
                                                    </a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a target="_blank" aria-label="Komoverse Medium Blog" href="{{ $socmed['medium'] }}">
                                                        <span>BLOG</span>
                                                    </a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a target="_blank" aria-label="Komoverse Linkedin" href="{{ $socmed['linkedin'] }}">
                                                        <span>LINKEDIN</span>
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">{{ $more[$lang] }}</a>

                                            <ul class="sub-menu" style="display: none;">
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a href="javascript:void(0)">
                                                        <span>{{ $market[$lang] }}</span>
                                                    </a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a href="javascript:void(0)">
                                                        <span>{{ $media[$lang] }}</span>
                                                    </a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a href="{{ ($lang == 'en') ? url('careers') : url($lang.'/careers') }}">
                                                        <span>{{ $careers[$lang] }}</span>
                                                    </a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item">
                                                    <a href="{{ ($lang == 'en') ? url('contact-us') : url($lang.'/contact-us') }}">
                                                        <span>{{ $contact[$lang] }}</span>
                                                    </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row pages">
            <div class="col-1 text-center bg-dark navigation position-fixed d-none d-lg-flex overflow-auto" style="top:69px; height: 100%">
                <ul class="nav nav-pills nav-flush flex-column mt-2 mb-auto">
                    <li class="nav-item">
                        <a href="{{ ($lang == 'en') ? url('/') : url($lang) }}" class="nav-link">
                            <i class="fas fa-home"></i>
                            <span>{{ $home[$lang] }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ ($lang == 'en') ? url('papers') : url($lang.'/papers') }}" class="nav-link">
                            <i class="far fa-file-alt"></i>
                            <span>{{ $whitepaper[$lang] }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ ($lang == 'en') ? url('team') : url($lang.'/team') }}" class="nav-link">
                            <i class="fas fa-id-card"></i>
                            <span>{{ $team[$lang] }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ ($lang == 'en') ? url('partners') : url($lang.'/partners') }}" class="nav-link">
                            <i class="far fa-handshake"></i>
                            <span>{{ $partners[$lang] }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ ($lang == 'en') ? url('news') : url($lang.'/news') }}" class="nav-link">
                            <i class="fas fa-bullhorn"></i>
                            <span>{{ $news[$lang] }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ ($lang == 'en') ? url('academy') : url($lang.'/academy') }}" class="nav-link exit-second-nav">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span>{{ $academy[$lang] }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" onmouseover="toggleNavCommunity()" class="nav-link">
                            <i class="fas fa-users"></i>
                            <span>{{ $community[$lang] }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" onmouseover="toggleNavMore()" class="nav-link">
                            <i class="fas fa-bars"></i>
                            <span>{{ $more[$lang] }}</span>
                        </a>
                    </li>
                    <li>
                        <div class="exit-second-nav" style="width:100%; height: 100px;"></div>
                    </li>
                </ul>
            </div>
            <div class="second-nav-community pt-2 pb-5 px-0 position-fixed overflow-auto" style="display: none">

                <a target="_blank" href="{{ $socmed['discord'] }}">
                    <i class="fab fa-discord"></i>
                    <span>DISCORD</span>
                </a>
                <a target="_blank" href="{{ $socmed['telegram'] }}">
                    <i class="fab fa-telegram"></i>
                    <span>TELEGRAM</span>
                </a>
                <a target="_blank" href="{{ $socmed['instagram'] }}">
                    <i class="fab fa-instagram"></i>
                    <span>INSTAGRAM</span>
                </a>
                <a target="_blank" href="{{ $socmed['twitter'] }}">
                    <i class="fab fa-twitter"></i>
                    <span>TWITTER</span>
                </a>
                <a target="_blank" href="{{ $socmed['tiktok'] }}">
                    <i class="fab fa-tiktok"></i>
                    <span>TIKTOK</span>
                </a>
                <a target="_blank" href="{{ $socmed['youtube'] }}">
                    <i class="fab fa-youtube"></i>
                    <span>YOUTUBE</span>
                </a>
                <a target="_blank" href="{{ $socmed['facebook'] }}">
                    <i class="fab fa-facebook"></i>
                    <span>FACEBOOK</span>
                </a>
                <a target="_blank" href="{{ $socmed['medium'] }}">
                    <i class="fab fa-medium-m"></i>
                    <span>BLOG</span>
                </a>
                <a target="_blank" href="{{ $socmed['linkedin'] }}">
                    <i class="fab fa-linkedin"></i>
                    <span>LINKEDIN</span>
                </a>
            </div>
            <div class="second-nav-more pt-2 pb-5 px-0 position-fixed overflow-auto" style="display: none">
                <a href="javascript:void(0)">
                    <i class="fas fa-shopping-cart"></i>
                    <span>{{ $market[$lang] }}</span>
                </a>
                <a href="javascript:void(0)">
                    <i class="fas fa-newspaper"></i>
                    <span>{{ $media[$lang] }}</span>
                </a>
                <a href="{{ url('careers') }}" class="nav-link">
                    <i class="fas fa-user-tie"></i>
                    <span>{{ $careers[$lang] }}</span>
                </a>
                <a href="{{ url('contact-us') }}">
                    <i class="fas fa-envelope-open-text"></i>
                    <span>{{ $contact[$lang] }}</span>
                </a>
            </div>
            <div class="col page-content">
                @yield('content')
        <div class="container footer">
            <div class="row">
                <div class="col-12 text-center">
                    <img src="{{ url('assets/img/logo.webp') }}" alt="Komoverse (Komodo Metaverse)">
                    <div class="social-footer">
                        <h3>{!! $joinus[$lang] !!}</h3>
                        <a class="px-2" target="_blank" href="{{ $socmed['discord'] }}">
                            <i class="fab fa-discord"></i>
                        </a>
                        <a class="px-2" target="_blank" href="{{ $socmed['telegram'] }}">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <a class="px-2" target="_blank" href="{{ $socmed['instagram'] }}">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="px-2" target="_blank" href="{{ $socmed['twitter'] }}">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="px-2" target="_blank" href="{{ $socmed['tiktok'] }}">
                            <i class="fab fa-tiktok"></i>
                        </a>
                        <a class="px-2" target="_blank" href="{{ $socmed['youtube'] }}">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="px-2" target="_blank" href="{{ $socmed['facebook'] }}">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="px-2" target="_blank" href="{{ $socmed['medium'] }}">
                            <i class="fab fa-medium-m"></i>
                        </a>
                        <a class="px-2" target="_blank" href="{{ $socmed['linkedin'] }}">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <form action="subs-newsletter" method="POST">
                <div class="row py-5">
                    @csrf
                    <div class="col"></div>
                    <div class="col-12 col-md-2 mb-2">
                        <input type="text" name="name" placeholder="{{ $name[$lang] }}" class="form-control">
                    </div>
                    <div class="col-12 col-md-3 mb-2">
                        <input type="email" name="email" placeholder="{{ $email[$lang] }}" class="form-control">
                    </div>
                    <div class="col-12 col-md-2">
                        <button type="submit" class="btn form-control btn-primary">{{ $subscribe[$lang] }}</button>
                    </div>
                    <div class="col"></div>
                </div>
            </form>
        </div>

                <div class="container-fluid bg-dark px-5 py-2 footer">
                    <div class="row d-block d-md-none">
                        <div class="col-12 col-md-5">
                            &copy; 2021 All rights reserved | PT Komodo Legends Interaktif
                        </div>
                        <div class="col-12 col-md-3 text-center">
                                    <a href="{{ ($lang == 'en') ? url('privacy-policy') : url($lang.'/privacy-policy') }}">{{ $privacy[$lang] }}</a> &nbsp; |
                                    &nbsp; <a href="{{ ($lang == 'en') ? url('terms-of-use') : url($lang.'/terms-of-use') }}">{{ $terms[$lang] }}</a>
                        </div>
                        <div class="col-12 col-md-4 text-xl-end text-lg-center">
                            <a href="mailto:{{ $socmed['email'] }}">{{ $socmed['email'] }}</a>
                        </div>
                    </div>
                    <div class="row d-none d-md-block">
                        <div class="section-footer bg-dark py-2 footer">


                            <div class="row">
                                <div class="col-4 text-end">
                                    <a href="{{ $copyright_link }}" target="_blank">
                                    &copy; 2021 All rights reserved | PT Komodo Legends Interaktif
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ ($lang == 'en') ? url('privacy-policy') : url($lang.'/privacy-policy') }}">{{ $privacy[$lang] }}</a> &nbsp; |
                                    &nbsp; <a href="{{ ($lang == 'en') ? url('terms-of-use') : url($lang.'/terms-of-use') }}">{{ $terms[$lang] }}</a>
                                </div>
                                <div class="col-4 text-start">
                                    <a href="mailto:{{ $socmed['email'] }}">{{ $socmed['email'] }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--lastdiv-->
    </div>
    <script src="{{ url('assets/js/fader.js') }}" defer="defer"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>
    @yield('script')
</body>

</html>