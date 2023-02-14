@extends('layouts.app')

@section('content')
    <div class="cs-height_90 cs-height_lg_80"></div>
    <!-- Start Page Head -->
    <section class="cs-page_head cs-bg" data-src="assets/img/page_head_bg.svg">
        <div class="container">
            <div class="text-center">
                <h1 class="cs-page_title">Bız turaly</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('video.index')}}">Basty bet</a></li>
                    <li class="breadcrumb-item active">About Us</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Page Head -->
    <div class="cs-height_100 cs-height_lg_70"></div>
    <!-- Start CTA -->
    <div class="container">
        <div class="cs-cta cs-style1 cs-type1 cs-bg">
            <div class="cs-cta_right">
                <h2 class="cs-cta_title">Komanda</h2>
            </div>
            <div class="cs-cta_img text-center"><img src="{{asset('img/team/sobr.jpg')}}" alt="Image"></div>
        </div>
    </div>
    <!-- End CTA -->
    <div class="cs-height_95 cs-height_lg_70"></div>
    <div class="cs-height_95 cs-height_lg_70"></div>
    <!-- Start Team members -->
    <div class="container">
        <h2 class="cs-section_heading cs-style1 text-center">Top jaily</h2>
        <div class="cs-height_45 cs-height_lg_45"></div>
        <div class="cs-grid_5 cs-gap_30">
            <div class="cs-team cs-style1 cs-white_bg cs-box_shadow text-center">
                <div class="cs-team_img"><img src="{{asset('img/team/1.jpeg')}}" alt=""></div>
                <h2 class="cs-member_name">Nūraliev Ersūltan</h2>
                <div class="cs-member_designation">Front end & Tester</div>
                <div class="cs-member_social_links">
                    <a href="https://www.instagram.com/nuralievv___/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/ersultan-nuraliev-2992a2257/"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="cs-team cs-style1 cs-white_bg cs-box_shadow text-center">
                <div class="cs-team_img"><img src="{{asset('img/team/2.jpeg')}}" alt=""></div>
                <h2 class="cs-member_name">Rahmetova Saltanat</h2>
                <div class="cs-member_designation">PR Manager & Designer</div>
                <div class="cs-member_social_links">
                    <a href="https://www.instagram.com/_rakhmetova_s/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/saltanat-rakhmetova-8622a3257/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="cs-team cs-style1 cs-white_bg cs-box_shadow text-center">
                <div class="cs-team_img"><img src="{{asset('img/team/3.jpeg')}}" alt=""></div>
                <h2 class="cs-member_name">Säulebek Bayan</h2>
                <div class="cs-member_designation">CEO & Presentation</div>
                <div class="cs-member_social_links">
                    <a href="https://www.instagram.com/_hnnry/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/bayan-saulebek-7a2505257/"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="cs-team cs-style1 cs-white_bg cs-box_shadow text-center">
                <div class="cs-team_img"><img src="{{asset('img/team/4.jpeg')}}" alt=""></div>
                <h2 class="cs-member_name">Bostanova Alina</h2>
                <div class="cs-member_designation">PR Manager & Designer</div>
                <div class="cs-member_social_links">
                    <a href="https://www.instagram.com/_.ab.o._/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/%D0%B0%D0%BB%D0%B8%D0%BD%D0%B0-%D0%B1%D0%BE%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%B0-13558a257/"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="cs-team cs-style1 cs-white_bg cs-box_shadow text-center">
                <div class="cs-team_img"><img src="{{asset('img/team/5.jpeg')}}" alt=""></div>
                <h2 class="cs-member_name">Hudaibergenov Batyrhan</h2>
                <div class="cs-member_designation">Back End & Tester</div>
                <div class="cs-member_social_links">
                    <a href="h.batyrkhan04"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/batyrhan-hudaybergen-b28032257/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="cs-team cs-style1 cs-white_bg cs-box_shadow text-center">
                <div class="cs-team_img"><img src="{{asset('img/team/6.jpg')}}" alt=""></div>
                <h2 class="cs-member_name">Dosqūlov Daniyar</h2>
                <div class="cs-member_designation">FullStack & Web Developer</div>
                <div class="cs-member_social_links">
                    <a href="https://www.instagram.com/doskulov04/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/doskulov-daniyar-748031257/"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
