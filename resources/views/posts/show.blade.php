
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
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/main.css">
    <style>
        iframe{
            margin-top: 70px;
        }
        .float {
            width: 90%;
            margin: auto;
        }
        .row .float img{
            text-align: center;
        }

    </style>
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


<div class="row">
    <div class=" float">
        <center>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$youtubevideos->youtube_id}} " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>{{$youtubevideos->youtube_title}}</p>
        </center>

    </div>
</div>

<footer>
    <section class="footer-top">
        <!--Container-->
        <div class="container">
            <h2>My Flickr Feed</h2>
            <div class="row text-center text-lg-left">
                <div class="col-lg-2 col-md-4 col-xs-6">
                    <a href="#" class="d-block h-100"><img class="img-fluid img-thumbnail" src="vimages/banner-image-1.jpg" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-4 col-xs-6">
                    <a href="#" class="d-block h-100"><img class="img-fluid img-thumbnail" src="../images/banner-image-2.jpg" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-4 col-xs-6">
                    <a href="#" class="d-block h-100"><img class="img-fluid img-thumbnail" src="../images/banner-image-3.jpg" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-4 col-xs-6">
                    <a href="#" class="d-block h-100"><img class="img-fluid img-thumbnail" src="../images/banner-image-4.jpg" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-4 col-xs-6">
                    <a href="#" class="d-block h-100"><img class="img-fluid img-thumbnail" src="../images/banner-image-2.jpg" alt=""></a>
                </div>
                <div class="col-lg-2 col-md-4 col-xs-6">
                    <a href="#" class="d-block h-100"><img class="img-fluid img-thumbnail" src="../images/banner-image-1.jpg" alt=""></a>
                </div>
            </div>

        </div>
        <!-- /.container -->
    </section>
    <section class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li class="hidden">/</li>
                        <li><a href="about.html">About-us</a></li>
                        <li class="hidden">/</li>
                        <li><a href="mystories.html">My stories</a></li>
                        <li class="hidden">/</li>
                        <li><a href="destinations.html">Destinations</a></li>
                        <li class="hidden">/</li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li class="hidden">/</li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <p>(C) All Rights Reserved <a href="https://www.template.net/editable/websites/html5" target="_blank">ClickaHolic</a> <span>/</span> Designed and Developed by <a href="https://www.template.net/editable/websites/html5" target="_blank">Template.net</a></p>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>
</footer>

</body>
</html>