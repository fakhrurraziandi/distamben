<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('bower_components/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
</head>
<body>

    <header class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ URL::asset('assets/img/logo-pancacita.png') }}" alt="" class="logo-img">
                    <div class="title">
                        <h2>DINAS PERTAMBANGAN DAN ENERGI <span>PROVINSI ACEH</span></h2>
                        <h3>Aceh Teunaga</h3>
                    </div>
                </div>
                <div class="col-md-6">

                    <table class="table borderless table-contact" style="margin-top: 10px;">
                        <tbody>
                            <tr>
                                <td style="text-align: right;">Jl. T. Nyak Arief No 195 Banda Aceh, 23144</td>
                                <td style="text-align: right;"><i class="fa fa-building-o"></i></td>
                            </tr>
                            <tr>
                                <td style="text-align: right;">Telp. (0651) 7551773 - 7554737</td>
                                <td style="text-align: right;"><i class="fa fa-phone"></i></td>
                            </tr>
                            <tr>
                                <td style="text-align: right;">Fax. (0651) 7553080</td>
                                <td style="text-align: right;"><i class="fa fa-fax"></i></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: right; padding-top: 15px;">
                                    <a href="#"><img src="{{ URL::asset('assets/img/svg/002-facebook.svg') }}" alt="" style="width: 25px; margin-left: 10px;"></a>
                                    <a href="#"><img src="{{ URL::asset('assets/img/svg/003-twitter.svg') }}" alt="" style="width: 25px; margin-left: 10px;"></a>
                                    <a href="#"><img src="{{ URL::asset('assets/img/svg/001-instagram.svg') }}" alt="" style="width: 25px; margin-left: 10px;"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">Beranda</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Regulasi</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info Publik <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proyek Strategis <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Kontak</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>

                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </form>

            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="running-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-newspaper-o"></i>
                    <marquee behavior="" direction="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis laboriosam vel earum porro mollitia, reprehenderit maiores et quisquam pariatur quae iste molestiae impedit voluptate nisi aliquam enim, obcaecati eius sint?</marquee>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <img src="{{ URL::asset('assets/img/logo-pancacita.png') }}" alt="" class="footer-logo">
                    <h4>DINAS PERTAMBANGAN DAN ENERGI</h4>
                    <h5>PROVINSI ACEH</h5>
                    <p>Copyright &copy; 2017</p>
                </div>
            </div>
        </div>
    </footer>




    <script src="{{ URL::asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/script.js') }}"></script>
</body>
</html>
