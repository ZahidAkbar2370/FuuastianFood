
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/styles.css')}}" rel="stylesheet"> 
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
<!-- Header -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                <a class="navbar-brand" href="{{url('#')}}"><span>Admin Panel</span></a>  
            </div>   
        </div>
    </nav>
<!-- Slider -->

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar"><!-- 
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div> -->
            <div class="profile-usertitle">
                
                <div class="profile-usertitle-name">Abid Ali</div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="#"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>


              <li class="parent "><a data-toggle="collapse" href="#sub-item-4">
                <em class="fa fa-navicon">&nbsp;</em>Products<span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-4">
                    <li><a class="" href="{{url('product')}}">
                        <span class="fa fa-arrow-right">&nbsp;</span>Add Product
                    </a></li>

                    <li><a class="" href="{{url('view-products')}}">
                        <span class="fa fa-arrow-right">&nbsp;</span>View Products
                    </a></li>   
                </ul>
                 </li>

                 <li class="parent "><a data-toggle="collapse" href="#sub-item-9">
                <em class="fa fa-navicon">&nbsp;</em>Orders<span data-toggle="collapse" href="#sub-item-9" class="icon pull-right"><em class="fa fa-plus"></em></span>
                </a>
                <ul class="children collapse" id="sub-item-9">
                    <li><a class="" href="{{url('view-orders')}}">
                        <span class="fa fa-arrow-right">&nbsp;</span>New Orders
                    </a></li> 
                    <li><a class="" href="{{url('view-order-history')}}">
                        <span class="fa fa-arrow-right">&nbsp;</span>Order History
                    </a></li>    
                </ul>

                 </li>

                 
                 <li><form action="{{URL::to('logout')}}" method="post">
              @csrf
              <button type="submit">Logout</button>
          </form></li>
          </li>

          </ul>
      </div>

    <div class="col-sm-12">
        @yield('content')
            <p class="back-link">User Panel <a href="#">Abid Ali</a></p>
    </div>


    <script src="{{asset('backend/js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/js/chart.min.js')}}"></script>
    <script src="{{asset('backend/js/chart-data.js')}}"></script>
    <script src="{{asset('backend/js/easypiechart.js')}}"></script>
    <script src="{{asset('backend/js/easypiechart-data.js')}}"></script>
    <script src="{{asset('backend/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('backend/js/custom.js')}}"></script>


</body>
</html>