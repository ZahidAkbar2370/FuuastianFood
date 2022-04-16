@extends("Admin/admin_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Orders</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Orders</div>
					<div class="panel-body">
						<!-- <a href="{{url('view-order-history')}}"><button class="btn btn-primary">Order History</button></a> -->
						<p style="font-size:16px; color:red" align="center"></p>
						<div class="col-md-12">
							
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>Customer Name</th>
                  <th>Contact No</th>
                  <th>Location</th>
                  <th>Product Name</th>
                  <th>Quantity</th> 
                  <th>Price</th>
                  <th>Total Price</th> 
                  <th>Status</th>
                  <th>Product Image</th> 
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
            @if(!empty($orders))
              		@foreach($orders as $order)

              		<tr>
              				<td>{{$order->customer_name}}</td>
              				<td>{{$order->contact_no}}</td>
              				<td>{{$order->location}}</td>
              				<td>{{$order->product_name}}</td>
              				<td>{{$order->product_quantity}}</td>
              				<td>{{$order->product_price}}</td>
              				<td>{{$order->total_price}}</td>
              				<td>{{$order->status}}</td>


              				<td>
              					<a href="{{ asset('Uploads' .$order->user_id .'/'.$order->product_image) }}" class="entr_prof_pc">
              					<img src="Uploads/{{ $order->product_image}}" class="img-circle" style="height: 70px; width: 70px;" width="100px">
              					<a class="fa fa-download"  href="{{$order->product_image ? asset('Uploads' .$order->user_id .'/'.$order->product_image) : ''}}" download></a>
              				</td>
              			</a>
              				<td>
              					<a class="btn btn-danger" href="destroy-order/{{$order->id}}">Delete<i 
              						class="halflings-icon white trash">
              					</i></a>
              					<a href="{{url('order-deleverd',$order->id)}}" class="btn btn-info">Deleverd<i class="align-middle" data-feather="thumbs-up"></i> <span class="align-middle"></span></a>
              						</td>	
              				</tr>
              		@endforeach
              @endif
              </tbody>
            </table>
          </div>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->


@endsection