@extends('layout')

@section('main')
    <div class="index-head-background">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="index-editor-card">
                            <div class="top">
                                <i class="circle bg-red-1"></i>
                                <i class="circle bg-yellow-1"></i>
                                <i class="circle bg-green-1"></i>

                                <small class="color-gray-1">~/run.py</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            @foreach($articles as $article)
                <section class="index-article-card">
                    <div class="row">
                        <div class="col-md-11">
                            <h2>
                                <a href="{{route(strtolower(config('blog.article_type')[$article['type']]).'.show',$article['id'])}}">{{$article['title']}}</a>
                            </h2>
                        </div>
                        <div class="col-md-1">
                            <a href="{{route(strtolower(config('blog.article_type')[$article['type']]).'.index')}}"
                                    class="type color-green-1">{{config('blog.article_type')[$article['type']]}}</a>
                        </div>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="col-md-12">
                            {!! $article['content'] !!}
                        </div>
                    </div>
                </section>
            @endforeach
        </div>

@stop