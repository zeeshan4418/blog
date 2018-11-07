@extends('layout.app')
@section('content')
<style>
    .login-block{
        background: #DE6262;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        width:100%;
        padding : 50px 0px 50px 0px;
    }
    .login-container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
    .btn-login{background: #DE6262; color:#fff; font-weight:600;}
    .login-col{
        background: linear-gradient(to bottom, #00ccff, #00ff99); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    .label-name{
        color:#ffffff;
    }
</style>
<section class="login-block">
    <div class="container login-container">
        <div class="row login-col">
            <div class="col-md-4">
                <h3 class="text-center text-capitalize label-name">Login</h3>
                <form class="login-form">
                    <div class="form-group">
                        <label class="text-capitalize label-name">User Name</label>
                        <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize label-name">Password</label>
                        <input type="password" class="form-control" placeholder="">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8" style="padding: 10px">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    {{--<ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>--}}

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This is Heaven</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This is Heaven</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text">
                                    <h2>This is Heaven</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>--}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection