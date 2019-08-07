@extends('layouts.app')
@section('content')
<section id="slider" class="slider-element force-full-screen full-screen">
    <div class="force-full-screen full-screen dark section nopadding nomargin noborder ohidden">
        <div class="container clearfix">
            <div class="slider-caption slider-caption-center">
                <h2 data-animate="fadeInUp">@lang('welcome.hello')</h2>
                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">@lang('welcome.title')</p>
                <a data-animate="fadeInUp" data-delay="400" href="{{ route('login') }}"
                    class="button button-border button-light button-rounded button-large noleftmargin nobottommargin d-none d-md-inline-block"
                    style="margin-top: 30px;">Start Now</a>
                <a data-animate="fadeInUp" data-delay="600" href="{{ route('register') }}"
                    class="button button-3d button-teal button-large nobottommargin d-none d-md-inline-block"
                    style="margin: 30px 0 0 10px;">Register</a>
            </div>
        </div>
        <div class="video-wrap">
            <video poster="bower_components/library-for-naitei-social/images/videos/deskwork.jpg" preload="auto" loop autoplay muted>
                <source src='bower_components/library-for-naitei-social/images/videos/deskwork.mp4' type='video/mp4' />
                <source src='bower_components/library-for-naitei-social/images/videos/deskwork.webm' type='video/webm' />
            </video>
            <div class="video-overlay" style="background-color: rgba(0,0,0,0.45);"></div>
        </div>
    </div>
</section>
@endsection
