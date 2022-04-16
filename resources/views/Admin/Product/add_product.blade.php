@extends("Admin/admin_layout")
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add Product</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
					<div class="panel-heading">Product</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
		<div class="col-md-12">
							
			<form role="form" method="post" action="{{URL::to('add-product')}}" enctype="multipart/form-data">
				@csrf

				<div class="form-group">
					<label>Product Name</label>
					<input class="form-control" type="text" value="" required="true" name="product_name"  style="width: 400px;">
				</div>

				<div class="form-group">
					<label>Price</label>
					<input class="form-control" type="number" value="" required="true" name="price"  style="width: 400px;">
				</div>

				<div class="form-group">
					<label>Description</label>
					<input class="form-control" type="text" value="" required="true" name="description"  style="width: 400px;">
				</div>

				<div class="form-group">
					<label>Product Image</label>
					<input class="form-control" type="file" value="" required="true" name="image" value="{{old('image')}}"  style="width: 400px;">
				</div>

				<div class="form-group">												
				<div class="form-group has-success">
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
				</div>					
			</form>		
		</div>
								
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->

@endsection