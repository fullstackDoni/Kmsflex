@extends('layouts.app')

@section('content')
    <div class="cs-height_100 cs-height_lg_70"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="cs-height_25 cs-height_lg_25"></div>
                <div class="slider-nav">
                    <div class="slider-item">
                        <div class="cs-slider_thumb_sm"><img src="{{$videos->image}}" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cs-height_0 cs-height_lg_40"></div>
                <div class="cs-single_product_head">
                    <h2>{{$videos->name}}</h2>
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="cs-author_card cs-white_bg cs-box_shadow">
                            <div class="cs-author_right">
                                <h3>Direktor</h3>
                                <p>{{$videos->directors}}</p>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cs-author_card cs-white_bg cs-box_shadow">
                            <div class="cs-author_right">
                                <h3>Ärtıster</h3>
                                <p>{{$videos->directors}}</p>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="cs-author_card cs-white_bg cs-box_shadow">
                            <div class="cs-author_right">
                                <h3>Janry</h3>
                                <p>{{$videos->genres->gname}}</p>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                    <div class="col-xl-6">
                        <div class="cs-author_card cs-white_bg cs-box_shadow">
                            <div class="cs-author_right">
                                <h3>Kategoriasy</h3>
                                <p>{{$videos->category->cname}}</p>
                            </div>
                        </div>
                        <div class="cs-height_25 cs-height_lg_25"></div>
                    </div>
                </div>
                <div class="cs-tabs cs-fade_tabs cs-style1">
                    <div class="cs-medium">
                        <ul class="cs-tab_links cs-style1 cs-medium cs-primary_color cs-mp0 cs-primary_font">
                            <li class="active"><a href="#">Sipattama</a></li>
                        </ul>
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                    <div class="cs-tab_content">
                        <div id="Description" class="cs-tab active">
                            <div class="cs-white_bg cs-box_shadow cs-general_box_5">
                                {{$videos->description}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
                <div class="cs-tabs cs-fade_tabs cs-style1">
                    <div class="cs-medium">
                        <iframe width="560" height="315" src="{{$videos->video}}" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                    <div class="cs-tab_content">
                        <div id="tab_one" class="cs-tab active">
                            <ul class="cs-activity_list cs-mp0">
                                <li>
                                    <form action="{{route('comments.store')}}" method="post">
                                        @csrf
                                        <textarea name="text" cols="60" rows="10"></textarea>
                                        <input name="video_id" value="{{$videos->id}}" type="hidden">
                                        <button type="submit" class="btn-success">Jıberu</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @foreach($videos->comments as $comment)
                        <div class="d-flex flex-row comment-row m-t-0">
                            <div class="p-2"></div>
                            <div class="comment-text w-100">
                                <h6 class="font-medium"></h6> <span class="m-b-15 d-block">{{$comment->text}}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="cs-height_30 cs-height_lg_30"></div>
            </div>
        </div>
    </div>
    <div class="cs-height_95 cs-height_lg_70"></div>
@endsection
