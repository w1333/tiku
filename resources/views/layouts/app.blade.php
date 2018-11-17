<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/swiper.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('home/yangshi/css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('home/yangshi/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('home/yangshi/dist/sortable.min.css') }}">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="margin-left: 200px;">
                <a class="navbar-brand" href="#">免费课程</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#" style="color: #fff;">实战课程 <span class="sr-only">(current)</span></a>
                    </li>
                    <li>
                        <a href="#">就业班</a>
                    </li>
                    <li>
                        <a href="#">猿问</a>
                    </li>
                    <li>
                        <a href="#">手记</a>
                    </li>
                    <li>
                        <a href="#">猿聘</a>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group headers" style="">

                        <input type="text" class="form-control myinput" style="" value="web">
                        <div class="glyphicon glyphicon-search"></div>

                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">下载App</a>
                    </li>
                    <li>
                        <a href="#">购物车</a>
                    </li>
                    <li>
                        <a href="#">登录 </a>
                    </li>
                    <li style="line-height: 48px;">/</li>
                    <li>
                        <a href="#"> 注册 </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <div class="foot" style="margin-top: 0;">
        <div class="inner clearfix">
            <ul class="clearfix">
                <li>
                    <a href="#">网站首页</a>
                </li>
                <li>
                    <a href="#">企业合作</a>
                </li>
                <li>
                    <a href="#">人才招聘</a>
                </li>
                <li>
                    <a href="#">联系我们</a>
                </li>
                <li>
                    <a href="#">讲师招聘</a>
                </li>
                <li>
                    <a href="#">帮助我们</a>
                </li>
                <li>
                    <a href="#">意见反馈</a>
                </li>
                <li>
                    <a href="#">友情连接</a>
                </li>
            </ul>
            <div class="fr">
                <a class="weixin" href="##"></a>
                <a class="weibo" href="##"></a>
                <a class="qq" href="##"></a>
            </div>

            <br />
            <p>Copyright © 2018 imooc.com All Rights Reserved | 京ICP备 12003892号-11 </p>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="{{ asset('js/base.js')}}"></script>--}}
<script src="{{ asset('/js/jquery-3.1.0.min.js')}}"></script>
<script src="{{ asset('/js/bootstrap.js')}}"></script>
<script src="{{ asset('/js/Chart.js')}}"></script>

<script src="{{ asset('/js/script.js')}}"></script>

<script type="text/javascript" src="/home/jquerypbl/dist/sortable.min.js"></script>
<script src="{{ asset('/home/super_slider_plug20150908/js/super_slider.js')}}"></script>

<script src="{{ asset('/js/swiper.min.js')}}"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
            delay: 1000,
            stopOnLastSlide: false,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fade: {
            crossFade: false,
        },
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    mySwiper.el.onmouseover = function() {
        mySwiper.autoplay.stop();
    };
    mySwiper.el.onmouseout = function() {
        mySwiper.autoplay.start();
    };

    /*nav*/
    var liNum = 0;
    $(' .nav .menu li').mouseenter(function() {
        liNum = $(this).index();
        $(this).addClass('ac').siblings().removeClass('ac');
        $('.menu_fuceng').show();
        $('.menu_fuceng #' + (liNum + 1)).show().siblings().hide();
    })
    $(' .nav .menu li').mouseleave(function() {
        $('.menu_fuceng').hide();
        $(this).removeClass('ac');
    })
    $('.menu_fuceng').mouseenter(function() {
        console.log($(' .nav .menu li'))
        $(this).show();
        $(' .nav .menu').show()
        $(' .nav .menu li').eq(liNum).addClass('ac');
    })
    $('.menu_fuceng ').mouseleave(function() {
        $('.menu_fuceng').hide();
        $(' .nav .menu li').removeClass('ac');
        //		$(' .nav .menu').hide();
    })
    $(' .nav .menu ').mouseleave(function() {
        //		$(' .nav .menu').hide()
    })

    document.querySelector('#sortable').sortablejs()
    $(".box").superSlider({
        prevBtn: ".prev", //左按钮
        nextBtn: ".next", //右按钮
        listCont: "#roll", //滚动列表外层
        scrollWhere: "prev", //自动滚动方向next
        delayTime: 2000, //自动轮播时间间隔
        speed: 300, //滚动速度
        amount: 1, //单次滚动数量
        showNum: 4, //显示数量
        autoPlay: true //自动播放
    });
</script>



<!--<script src="js/swiper.min.js"></script>-->


</body>
</html>
