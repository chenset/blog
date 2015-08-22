@extends('layout')

@section('layoutCss')
    <style>
        body {
            background: #F4F2ED;
        }
    </style>
@overwrite

@section('main')
    <div class="container article-wrap">
        <div class="row">
            <div class="navbar navbar-white navbar-static-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            {{--<a class="navbar-brand" href="#">投资项目</a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @foreach($articles as $article)
                    <article class="article-list">
                        <header>
                            <h3>
                                <a href="{{route('topic.show',$article['id'])}}">{{$article['title']}}</a>
                            </h3>
                            <ul>
                                <li>{{date('m月 d, Y',$article['release_time'])}}</li>
                            </ul>
                        </header>
                        <p>{{ mb_substr(strip_tags($article['content']),0,300) }}...</p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@stop