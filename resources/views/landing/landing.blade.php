@extends('Layout.layout')
@section('content')

<!--Slider Start-->
<div class="container custom-product">
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <a href="#">
                        <img class="slider-img" src="{{asset('Uploads/1648587282_.png')}}">
                        <div class="carousel-caption slider-text">
                            <h3>name</h3>
                            <p>fdgfdgfd</p>
                        </div>
                    </a>
                </div>
                        

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!--Slider End-->
        <!-- Page content -->
        <div class="content-a">
            <!--All Items list Start-->

            <div class="product-text">
                <h3>Trending Products</h3>
            </div>

            <div class="trending-wrapper">
                <div class="row">
                    @foreach ($products as $item)
                    <div class="col-md-4">
                        <a href="detail/{{$item->product_id}}">
                            <img class="trending-image" src="{{asset('Uploads/'.$item->image)}}">
                            <br>
                            <span>{{$item->product_name}}</span>

                        </a>
                    </div>
                    @endforeach

                </div>

            </div>


        </div>
        <!-- end side nev-->


    </div>


</div>

@endsection