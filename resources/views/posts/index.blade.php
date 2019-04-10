<!DOCTYPE html>
<html>
<head>
    <title>VideoShare</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700|Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark cyan fixed-top">
        <div class="container">
            {{--<a class="navbar-brand" href="index.html">--}}
                {{--<img src="images/nav-logo.png" alt="nav-logo">--}}
            {{--</a>--}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">gallery </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Read my blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">contact </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://farm8.staticflickr.com/5498/11653267665_82c2ab1dfa_o.jpg" alt="First slide">
                <div class="gradient"></div>
                <div class="carousel-caption">
                    <h1>VideoShare</h1>
                    <p class="lead">Photo by Andreas Kollmorgen</p>
                    {{--<a class="btn btn-primary" href="about.html"><span>Learn more</span></a>--}}
                </div>
            </div>
            {{--<div class="carousel-item">--}}
                {{--<img class="d-block w-100" src="images/banner-image-3.jpg" alt="Second slide">--}}
                {{--<div class="gradient"></div>--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h1>Remainings of old boat in the beach of bali.</h1>--}}
                    {{--<p class="lead">Remainings of old boat in the beach of bali...</p>--}}
                    {{--<a class="btn btn-primary" href="about.html"><span>Learn more</span></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="carousel-item">--}}
                {{--<img class="d-block w-100" src="images/banner-image-2.jpg" alt="Third slide">--}}
                {{--<div class="gradient"></div>--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h1>Beautiful sunsetting in the mountains.</h1>--}}
                    {{--<p class="lead">Beautiful sunsetting in the mountains...</p>--}}
                    {{--<a class="btn btn-primary" href="about.html"><span>Learn more</span></a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="carousel-item">--}}
                {{--<img class="d-block w-100" src="images/banner-image-1.jpg" alt="Third slide">--}}
                {{--<div class="gradient"></div>--}}
                {{--<div class="carousel-caption">--}}
                    {{--<h1>Snow white mountain of east china.</h1>--}}
                    {{--<p class="lead">Snow white mountain of east china...</p>--}}
                    {{--<a class="btn btn-primary" href="about.html"><span>Learn more</span></a>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
        <!--/.Slides-->
        <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->

    <!-- Page Content -->
    {{--@foreach($youtubes as $youtube)--}}
        {{--<a  href="{{route('posts',$youtube->id)}}">--}}
            {{--<img id="img" src="http://img.youtube.com/vi/{{$youtube ->youtubeid}}/mqdefault.jpg">--}}
        {{--</a>--}}
    {{--@endforeach--}}
    <section id="portfolio">
        <div class="container">
            <h2>Recently Added Photographs</h2>
            <div class="row justify-content-center">
                <div class="col-md-12 col-12">
                    <div class="row">
                        @foreach($youtubes as $youtube)
                        <a href="{{route('posts',$youtube->id)}}" data-toggle="lightbox" data-gallery="example-gallery" class="videos col-xl-3 col-md-4 box-1">
                            <img src="http://img.youtube.com/vi/{{$youtube ->youtube_id}}/mqdefault.jpg" class="img-fluid" width="50px">
                            <div class="overlay">
                                <img src="http://img.youtube.com/vi/{{$youtube ->youtube_id}}/1.jpg" alt="plus-icon">
                                <img src="http://img.youtube.com/vi/{{$youtube ->youtube_id}}/2.jpg" alt="plus-icon">
                                <img src="http://img.youtube.com/vi/{{$youtube ->youtube_id}}/3.jpg" alt="plus-icon">
                                {{--<div class="col-xl-6 col-md-4 box-1" src="http://img.youtube.com/vi/{{$youtube ->youtubeid}}/1.jpg" ></div>--}}
                                {{--<div class="col-xl-6 col-md-4 box-1" src="http://img.youtube.com/vi/{{$youtube ->youtubeid}}/2.jpg" ></div>--}}
                                {{--<div class="col-xl-6 col-md-4 box-1" src="http://img.youtube.com/vi/{{$youtube ->youtubeid}}/3.jpg" ></div>--}}
                                <div class="text">{{$youtube ->youtube_title}}</div>
                                {{--<div class="count">45</div>--}}
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="javascript:" id="return-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
    {{--<a href="#" id="loadMore">Load More</a>--}}
    {{--<div class="carousel-inner">--}}
        {{--<div class="carousel-item active">--}}
            {{--<img src="https://farm8.staticflickr.com/5498/11653267665_82c2ab1dfa_o.jpg" height="300px" width="100%" alt="">--}}
        {{--</div>--}}
    {{--</div>--}}

        {{--<div  class=" float">--}}
            {{--@foreach($youtubes as $youtube)--}}
                {{--<a  href="{{route('posts',$youtube->id)}}"><img id="img" src="http://img.youtube.com/vi/{{$youtube ->youtubeid}}/mqdefault.jpg"></a>--}}
            {{--@endforeach--}}
        {{--</div>--}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/index.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <!-- Custom JavaScript -->
    {{--<script src="/js/animate.js"></script>--}}
    <script src="/js/custom.js"></script>

{{--<script type="text/javascript" src="path-to-file/jquery.preload.js"></script>--}}

</body>
</html>

