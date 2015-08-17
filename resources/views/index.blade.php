@extends('layout')

@section('main')
    <div class="index-head-background" id="wave">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="jumbotron">
                            <h3 style="font-size: 42px;">I love coding</h3>
                            <br/>

                            <p style="color:#8b8a88">All i need is time, write coding, run code. change myself !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="index-editor-card">
                            <div class="top">
                                <i class="circle bg-red-1"></i>
                                <i class="circle bg-yellow-1"></i>
                                <i class="circle bg-green-1"></i>

                                <small class="color-gray-1 title">~/console.js</small>
                            </div>
                            <div class="editor-wrap">
                                <label for="editor" class="sr-only"></label>
                                <textarea id="editor" class="sr-only">
require([
    "lib/codemirror",
    "codemirror/mode/codemirror-active-line",
    "codemirror/mode/codemirror-javascript"
], function (CodeMirror) {
    var codeMirror = CodeMirror.fromTextArea(document.getElementById("editor"), {
        lineNumbers: true,
        lineWrapping: true,
        readOnly: false,
        styleActiveLine: true,
        mode: "javascript",
        autofocus: true
    });

    codeMirror.setSize('100%', '100%');
});
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            require([
                "lib/codemirror",
                "codemirror/mode/codemirror-active-line",
                "codemirror/mode/codemirror-javascript"
            ], function (CodeMirror) {

                var codeMirror = CodeMirror.fromTextArea(document.getElementById("editor"), {
                    lineNumbers: true,
                    lineWrapping: true,
                    readOnly: false,
                    styleActiveLine: true,
                    mode: "javascript",
                    autofocus: true
                });
                codeMirror.setSize('100%', '100%');
            });
        </script>

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