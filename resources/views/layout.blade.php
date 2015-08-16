<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>Fly Say - Chen的博客</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/css/codemirror.css')}}" rel="stylesheet" type="text/css"/>
    @section('layoutCss')
        {{-- 按需载入css, 这个section会被每个子视图重写 --}}
    @show

     <!--[if lt IE 9]>
    <script src="{{asset('/js/respond.min.js')}}"></script>
    <script src="{{asset('/js/html5shiv.min.js')}}"></script>
    <![endif]-->

    <script src="{{asset('/js/jquery.min.js')}}"></script>
{{--    <script src="{{asset('/js/require.js')}}"></script>--}}
    {{--<script>--}}
        {{--requirejs.config({--}}
            {{--baseUrl: 'js',--}}
            {{--paths: {--}}
                {{--jquery: 'jquery.min'--}}
            {{--},--}}
            {{--packages: [{--}}
                {{--name: "codemirror",--}}
                {{--location: "/js",--}}
                {{--main: "codemirror"--}}
            {{--}]--}}
        {{--});--}}
    {{--</script>--}}
    {{--<script src="{{asset('/js/jquery.min.js')}}"></script>--}}

    <style type="text/css">
        {{--footer置底--}}
        html,
        body {
            height: 100%;
        }

        #wrap {
            min-height: 100%;
            height: auto !important;
            height: 100%;
            margin: 0 auto -150px;
        }

        #footer-buff,
        #footer {
            height: 150px;
        }

        @media (max-width: 767px) {
            #footer {
                margin-left: -20px;
                margin-right: -20px;
                padding-left: 20px;
                padding-right: 20px;
            }
        }
    </style>

</head>
<body>

<div id="wrap">
    <!--[if IE 8]>
    <div class="alert alert-warning text-center" style="margin-bottom:0;">
        <p>你的浏览器不支持一些新特性，请升级你的浏览器或安装<a href="http://browsehappy.com/"> Chrome </a>。
        </p>

        <p>2015年了，IE8老了...</p>
    </div>
    <![endif]-->

    <!--[if lt IE 8]>
    <div class="alert alert-danger text-center" style="margin-bottom:0;">
        <p>你的浏览器不支持一些新特性，请升级你的浏览器或安装<a href="http://browsehappy.com/"> Chrome </a>。
        </p>

        <p>2015年了，IE7及以下都老了...</p>
    </div>
    <![endif]-->


    <nav class="navbar navbar-default index-navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button"
                        class="navbar-toggle collapsed"
                        data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('index')}}">Fly Say</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="{{nav_active('index')?' active ':''}}" href="{{route('index')}}">HOME</a></li>
                    <li><a class="{{nav_active('code.index')?' active ':''}}"
                                href="{{route('code.index')}}">CODE</a>
                    </li>
                    <li><a class="{{nav_active('note.index')?' active ':''}}"
                                href="{{route('note.index')}}">NOTE</a>
                    </li>
                    <li><a href="https://github.com/chenset" target="_blank"><i class="fa fa-github"></i> GitHub</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('main')
    <div id="footer-buff">
        {{--footer置底--}}
    </div>
</div>

<div id="footer"> {{--footer置底--}}
    <div class="container">
        <nav class="navbar navbar-default index-footer-navbar">
            <div class="container">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li><a href="{{route('admin.index')}}"><i class="fa fa-slack"></i> Admin</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>


<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/codemirror.js')}}"></script>
<script src="{{asset('/js/codemirror-active-line.js')}}"></script>
<script src="{{asset('/js/codemirror-javascript.js')}}"></script>
@section('js')
    {{-- 按需载入js, 这个section会被每个子视图重写 --}}
@show
</body>
</html>