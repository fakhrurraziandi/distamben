@extends('template')

@section('title', 'Home')

@section('content')
    <div class="main-carousel">
        <div class="owl-carousel owl-theme">
            <div class="item" style="height: 400px; background: url('assets/img/carousel-1.jpg'); background-size: cover; background-position: center;">
                <div class="carousel-caption">
                    <div class="triangle"></div>
                    <h2>Aceh Mandiri Energi</h2>
                    <p>Di bawah kepemimpinan baru, Aceh bertekad untuk mencapai kemandirian energi demi percepatan pembangunan daerah</p>
                </div>
            </div>
            <div class="item" style="height: 400px; background: url('assets/img/carousel-2.jpg'); background-size: cover; background-position: center;">
                <div class="carousel-caption">
                    <div class="triangle"></div>
                    <h2>Aceh Mandiri Energi</h2>
                    <p>Di bawah kepemimpinan baru, Aceh bertekad untuk mencapai kemandirian energi demi percepatan pembangunan daerah</p>
                </div>
            </div>
            <div class="item" style="height: 400px; background: url('assets/img/carousel-1.jpg'); background-size: cover; background-position: center;">
                <div class="carousel-caption">
                    <div class="triangle"></div>
                    <h2>Aceh Mandiri Energi</h2>
                    <p>Di bawah kepemimpinan baru, Aceh bertekad untuk mencapai kemandirian energi demi percepatan pembangunan daerah</p>
                </div>
            </div>
        </div>
    </div>


    <section class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">


                    <ul class="nav nav-tabs custom-tabs" role="tablist">
                        @for ($i=0; $i < $categories->count(); $i++)
                            <li role="presentation" @if($i == 0) class="active" @endif >
                                <a href="#{{ $categories[$i]->slug }}" aria-controls="{{ $categories[$i]->slug }}" role="tab" data-toggle="tab">
                                    <h4>{{ strtoupper($categories[$i]->title) }}</h4>
                                </a>
                            </li>
                        @endfor
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        @for ($i=0; $i < $categories->count(); $i++)

                            <div role="tabpanel" class="tab-pane @if($i == 0) active @endif " id="{{ $categories[$i]->slug }}">

                                @forelse ($categories[$i]->posts as $post)
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="{{ URL::asset('assets/img/carousel-1.jpg') }}" alt="..." style="width: 100px;">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">{{ $post->title }}</a></h4>
                                            <p>
                                                {!! substr($post->content, 0, 200) !!}
                                            </p>
                                        </div>
                                    </div>
                                @empty
                                    <p>Belum ada berita pada category ini.</p>
                                @endforelse

                            </div>
                        @endfor


                    </div>


                </div>
                <div class="col-md-4">
                    <div class="document-wrapper">
                        <h4>DOKUMEN PENTING</h4>
                        <div class="document-wrapper-inner">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <i class="fa fa-file-pdf-o fa-2x"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Lorem ipsum dolor sit amet.</h5>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <i class="fa fa-file-pdf-o fa-2x"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Lorem ipsum dolor sit amet.</h5>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <i class="fa fa-file-pdf-o fa-2x"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Lorem ipsum dolor sit amet.</h5>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <i class="fa fa-file-pdf-o fa-2x"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Lorem ipsum dolor sit amet.</h5>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#">
                                        <i class="fa fa-file-pdf-o fa-2x"></i>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h5 class="media-heading">Lorem ipsum dolor sit amet.</h5>
                                    <p>Lorem ipsum dolor sit amet.</p>
                                </div>
                            </div>

                            <div class="media">
                                <a href="" class="btn btn-default btn-md">Download Index</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 photo-carousel">
                    <h4>GALERI PHOTO</h4>
                    <div class="owl-carousel owl-theme">
                        <div class="item" style="height: 300px; background: url('{{ URL::asset('assets/img/carousel-1.jpg') }}'); background-size: cover; background-position: center; z-index: 999">
                            <div class="carousel-caption">
                                <div class="triangle"></div>
                            </div>
                        </div>
                        <div class="item" style="height: 300px; background: url('{{ URL::asset('assets/img/carousel-2.jpg') }}'); background-size: cover; background-position: center; z-index: 999">
                            <div class="carousel-caption">
                                <div class="triangle"></div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-warning btn-md pull-right">Selengkapnya</a>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 video-carousel">
                    <h4>GALERI VIDEO</h4>
                    <div class="owl-carousel owl-theme">
                        <div class="item" style="height: 300px; background: url('{{ URL::asset('assets/img/carousel-1.jpg') }}'); background-size: cover; background-position: center; z-index: 999">
                            <div class="carousel-caption">
                                <div class="triangle"></div>
                            </div>
                        </div>
                        <div class="item" style="height: 300px; background: url('{{ URL::asset('assets/img/carousel-2.jpg') }}'); background-size: cover; background-position: center; z-index: 999">
                            <div class="carousel-caption">
                                <div class="triangle"></div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-warning btn-md pull-right">Selengkapnya</a>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 infografis-carousel">
                    <h4>INFO GRAFIS</h4>
                    <div class="owl-carousel owl-theme">
                        <div class="item" style="height: 300px; background: url('{{ URL::asset('assets/img/carousel-1.jpg') }}'); background-size: cover; background-position: center; z-index: 999">
                            <div class="carousel-caption">
                                <div class="triangle"></div>
                            </div>
                        </div>
                        <div class="item" style="height: 300px; background: url('{{ URL::asset('assets/img/carousel-2.jpg') }}'); background-size: cover; background-position: center; z-index: 999">
                            <div class="carousel-caption">
                                <div class="triangle"></div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-warning btn-md pull-right">Selengkapnya</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 testimonial-carousel">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="{{ URL::asset('assets/img/testimoni-1.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('assets/img/testimoni-1.png') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ URL::asset('assets/img/testimoni-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>PROYEK <strong>STRATEGIS</strong></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 proyek-strategis">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ URL::asset('assets/img/image-proyek.png') }}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="{{ URL::asset('assets/img/svg/001-electric-tower.svg') }}" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <p>Indonesia memiliki potensi energi panas bumi mencapai <strong>27.000 Megawatt</strong> yang sama dengan 40% dari yang ada di seluruh dunia (Data Worldbank tahun 2011)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="{{ URL::asset('assets/img/svg/003-flash.svg') }}" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <p>Merupakan <strong>sumber energi terbarukan</strong> yang banyak dimanfaatkan <strong>di seluruh dunia</strong> termasuk <strong>di Indonesia</strong></p>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="{{ URL::asset('assets/img/svg/002-erupting-volcano.svg') }}" alt="...">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <p>Angka ini tidak mengherankan mengingat Indonesia merupakan negara yang <strong>dikelilingi lingkar gunung api</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
