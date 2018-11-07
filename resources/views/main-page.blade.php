@extends('layout.app')
<style>
    #main-baner{
        background: url({{ URL::asset('img/banner.jpg')}}) no-repeat 0px 0px;
        background-size: cover;
        min-height: 350px;
        padding: 90px 0 0 0;
    }
    .banner h1{
        color:#ffffff;
        font-size: 45px;
        font-weight: 400;
        font-family: 'Ubuntu Condensed', sans-serif;
    }
    .banner p{
        font-size: 18px;
        font-family: 'Open Sans', sans-serif;
        color: #ffffff;
    }
    .focus-grid{
        margin-top: 30px;
    }
    .focus-border{
        border: 1px solid #e7eaed;
    }
    .focus-layout{
        background: #FBFBFB;
        margin: 5px;
        padding: 20px 0;
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
        text-align: center;
    }
    .focus-layout:hover{
        background: rgba(0,128,128);
    }
    .focus-image {
        text-align: center;
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
    }
    .focus-image i {
        font-size: 40px;
        color: #fff;
        background: #dd0908;
        border-radius: 50%;
        width: 90px;
        height: 90px;
        line-height: 95px;
        transition: 0.5s all;
        -webkit-transition: 0.5s all;
        -moz-transition: 0.5s all;
        -o-transition: 0.5s all;
        -ms-transition: 0.5s all;
    }
    .focus-grid h4 {
        text-align: left;
        font-size: 2.5em;
        font-weight: 400;
        margin: 0 0 0 0;
        color: #4C4C4C;
        font-size: 18px;
        text-align: center;
        height: 35px;
        margin-top: 20px;
    }
    .focus-grid a, .focus-grid a:hover{
        text-decoration: none;
    }
</style>
@section('content')
    <div class="container-fluid">
        <!-- Slider Image -->
        <div class="row">
            <div class="col-md-12 banner text-center" id="main-baner">
                <h1 class="banner-text-h1">Sell or Advertise   <span class="segment-heading">    anything online </span> with Resale</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                <a class="btn btn-lg btn-warning">Post Free Ad</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-mobile-alt"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-car"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-motorcycle"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-wheelchair"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-paw"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-book"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-asterisk"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-gamepad"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-shield"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-at"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-2 focus-grid">
                <a href="categories.html">
                    <div class="focus-border">
                        <div class="focus-layout">
                            <div class="focus-image">
                                <i class="fa fa-home"></i>
                            </div>
                            <h4 class="clrchg">Mobiles</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
