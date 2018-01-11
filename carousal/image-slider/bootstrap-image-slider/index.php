<!DOCTYPE html>
<html lang="en">
    <head>
        <title>KR- Learning Programming</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- position relative is important-->
        <div class="row">
            <!--   this id image-slider is important and it will match on Left and right controls -->
            <div id="image-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <!-- here is path of your images where is it in your server and computer-->
                        <img src="../slider-images/slide1.jpg" alt="Los Angeles" style="width:100%;">
                        <div class="title-subtilte">
                            <h3>Responsive Slider for your website</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page It is a long established fact that</p>
                        </div>
                        <div class="slider-overlay"></div>
                    </div>

                    <div class="item">
                        <!-- here is path of your images where is it in your server and computer-->
                        <img src="../slider-images/slide2.jpg" alt="Chicago" style="width:100%;">
                        <div class="title-subtilte">
                            <h3>Web development with security</h3>
                            <p>It is a long established fact that a reader will be distracted by the rIt is a long established fact that</p>
                        </div>
                        <div class="slider-overlay"></div>
                    </div>

                    <div class="item">
                        <!-- here is path of your images where is it in your server and computer-->
                        <img src="../slider-images/slide3.jpg" alt="New york" style="width:100%;">
                        <div class="title-subtilte">
                            <h3>Make responsive image slider</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page It is a long established fact that It is a long established fact</p>
                        </div>
                        <div class="slider-overlay"></div>
                    </div>

                </div>

                <!-- Left and right controls -->

                <!-- see this id above i have mention image-slider  -->
                <a class="left carousel-control" href="#image-slider" data-slide="prev">
                    <span class=""><i class="fa fa-angle-left" aria-hidden="true"></i></span>


                </a>
                <a class="right carousel-control" href="#image-slider" data-slide="next">
                    <span class=""><i class="fa fa-angle-right" aria-hidden="true"></i></span>

                </a>
            </div>

        </div>

    </body>
</html>
