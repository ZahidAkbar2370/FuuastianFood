@extends('layout')
@extends('Layout.header')
   
@section('content')
    

<div class="row">
    @foreach($products as $product)
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="Uploads/{{ $product->image }}" style="width: 200px;height: 250px;" alt="">
                <div class="caption">
                    <span class="text-center" style="text-align: center !important;">{{ $product->name }}</span>
                    <p>{{ $product->description }}</p>
                    <p><strong>Price: </strong> {{ $product->price }}<?php '' ?>PKR</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach

</div>


    
@endsection