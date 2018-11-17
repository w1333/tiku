@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="inner">
            <div class="col-md-8 kecheng">
                <ul class="clearfix">
                    <li><a href="#">课程</a></li>
                    <li><span>\</span></li>
                    <li><a href="#">前端开发</a></li>
                    <li><span>\</span></li>
                    <li><a href="#">PHP</a></li>
                    <li><span>\</span></li>
                    <li><a href="#">PHP入门篇</a></li>
                </ul>
                <h3>PHP入门篇</h3>
                <ul class="subject clearfix">
                    <li><img src="/home/images/b.png"/></li>
                    <li>难度 入门</li>
                    <li>·</li>
                    <li>时长 5小时57分</li>
                    <li>·</li>
                    <li>学习人数 40000人</li>
                    <li>·</li>
                    <li>综合评分 9分</li>
                </ul>
            </div>
            <div class="col-md-4"></div>
        </div>

    </div>

    <div class="op">
        <div class="container">
            <div class="inner">
                <div class="col-md-8">
                    <div class="panel panel-default panel-heading ccc">Panel heading without title</div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <strong>当前页面:</strong>
                            <a href="#">首页</a>
                            <a href="#">></a>
                            <a href="#">模拟考试</a>
                            <a href="#">></a>
                            <a href="#">css练习</a>
                            <a href="#">></a>
                            <a href="#">顺序练习</a>
                        </div>
                        <div class="panel-body">
                            <div class="title">
                                <p class="text">23/133、学习是我快乐</p>
                                <ul class="clearfix option">

                                    <li><label><input type="radio" name="w"/><i>A、</i></label></li>
                                    <li><label><input type="radio" name="w"/><i>B、</i></label></li>
                                    <li><label><input type="radio" name="w"/><i>C、</i></label></li>
                                    <li><label><input type="radio" name="w"/><i>D、</i></label></li>
                                </ul>
                            </div>
                            <p style="color: #999;">单选题，请选择你认为正确的答案！</p>
                            <button class="one prev">上一题</button><button class="one next">下一题</button><br />
                            <ul class="clearfix problem">
                                <li class="first"><input type="checkbox" /></li>
                                <li>答对自动下一题</li>
                                <li>答对：<span class="green">0题</span></li>
                                <li>答错：<span class="red">0题</span></li>
                                <li class="first">正确率：50%</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shadow brief clearfix">
                        <div class="learn-btn ">
                            <a href="##" class="moco-btn-lg">开始学习</a>
                        </div>
                        <div class="course">
                            <dl>
                                <dt>课程须知</dt>
                                <dd>1.对实时计算机有初步的了解</dd>
                                <dd>1.对实时计算机有初步的了解</dd>
                            </dl>
                            <dl>
                                <dt>告诉老师你能学到什么</dt>
                                <dd>1.对实时计算机有初步的了解</dd>
                                <dd>1.对实时计算机有初步的了解</dd>
                                <dd>1.对实时计算机有初步的了解</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="lable shadow">
                        <span class="label label-default">Android自动化测试助你薪水翻番</span>
                        <span class="label label-primary">Primary</span>
                        <span class="label label-success">测试工程师必备课程</span>
                        <span class="label label-info">Info</span>
                        <span class="label label-warning">Warning</span>
                        <span class="label label-danger">Danger</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection