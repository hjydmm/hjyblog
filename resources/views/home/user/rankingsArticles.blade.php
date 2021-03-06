@extends('layouts.rankings')
@section('title','シリーズリスト')
@section('homePage','ホーム')
@section('rankingsListPage','ランキング一覧')
@section('rankingsPage',"「 " . $rankings_name . " 」")

@section('navList')

    <header id="user-header" class="nav-list">
        <div class="container">
            <div id="nav_list_item">
		<a id="returnHome" href="{{ url('/') }}">
                    @yield('homePage')
                </a>
                &nbsp;
                <i class="fa fa-angle-right"></i>
                &nbsp;
                <a id="seriesPage" href="{{ url('series', ['series' => $rankings_name ]) }}">
                    @yield('rankingsListPage')
                    @yield('rankingsPage')
                </a>
            </div>
        </div>
    </header>

@endsection

@section('content')

    <div class="user-widget full-frame">
        <div class="recent-release">
            {{--<h3>{{ $series_name }}</h3>--}}
            <ul id="front-items" class="tab_part" style="min-height: 600px;">
                @foreach($articles as $article)
                    <li class="passArticle_item clearfix" style="display: none;">
                        <span class="sub_title" style="background-color: {{ $article->articles->categories->color_categories }};">
                            {{ substr($article->articles->categories->str_categories, strripos($article->articles->categories->str_categories, ',')+1 ) }}
                        </span>
                        &nbsp;&nbsp;
                        <a class="article_title" href="{{ route('user.articleDetail', [ 'id'=>$article->articles->id ] ) }}">{{ $article->articles->title }}</a>&nbsp;&nbsp;
                        <div class="article_info">
                            <span class="like_number"><i class="fa fa-heart-o"></i>&nbsp;&nbsp;{{$article -> like_number}}</span>
                            <span class="store_number"><i class="fa fa-bookmark-o"></i>&nbsp;&nbsp;{{$article -> store_number}}</span>
                            <span class="comment_number"><i class="fa fa-comment-o"></i>&nbsp;&nbsp;{{$article -> comment_number}}</span>
                            <span class="created_at"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{$article -> articles -> created_at -> diffForHumans()}}</span>
                        </div>
                    </li>
                @endforeach
            </ul>

            <ul class="pager">
                <li><button id="front_prev" onclick="front_previous_page(this)" disabled="disabled">前のページ</button></li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li><button id="front_next" onclick="front_next_page(this)">次のページ</button></li>
            </ul>

        </div>
    </div>

@endsection

@section('script')
    <script>

        frontPage(10);

    </script>
@endsection
