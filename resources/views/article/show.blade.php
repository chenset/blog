@extends('layout')

@section('main')
    <div class="container article-wrap">
        <h3 class="text-center">{{$article['title']}}</h3>
        <hr/>
        <h5 class="text-right text-muted">
            <a href="{{route(strtolower(config('blog.article_type')[$article['type']]).'.index')}}">{{config('blog.article_type')[$article['type']]}}</a>
            <small class="text-muted" style="margin-left: 20px">{{date('Y-m-d',$article['release_time'])}}</small>
        </h5>
        <br/>
        {!! $article['content'] !!}
    </div>
@stop