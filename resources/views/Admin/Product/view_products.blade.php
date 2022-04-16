@extends("Admin/admin_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Products</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
						<div class="col-md-12">
							
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>
            @if(!empty($products))
              		@foreach($products as $product)

              		<tr>
              				<td>{{$product->product_name}}</td>
              				<td>{{$product->price}}</td>
              				<td>{{$product->description}}</td>
              				<td>
              					<a href="{{ asset('Uploads' .$product->user_id .'/'.$product->image) }}" class="entr_prof_pc">
              					<img src="Uploads/{{ $product->image }}" class="img-circle" style="height: 70px; width: 70px;" width="100px">
              					<a class="fa fa-download"  href="{{$product->image ? asset('Uploads' .$product->user_id .'/'.$product->image) : ''}}" download></a>
              				</td>
              			</a>
              				<td>
              					<a class="btn btn-danger" href="destroy-product/{{$product->id}}">Delete<i 
              						class="halflings-icon white trash">
              					</i></a>
              					<a class="btn btn-success" href="edit-product/{{$product->id}}">Edit<i 
              						class="halflings-icon white trash">
              					</i></a>
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