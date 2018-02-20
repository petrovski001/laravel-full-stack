@extends('logedIn')


@section('content')
            @foreach($products as $product)
				<form method="GET" action="{{ route('product.addToCart', $product->id_p) }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="col-md-6 col-sm-6 "   name="{{$product->slug}}">
    			<span class="thumbnail">
      			<div class="col-md-6 product_img">
                                   {{-- <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive">--}}
                    <img src='http://127.0.0.1:8000/produkti-sliki/{{$product->slika}}' alt="..." class="img-responsive">
                                </div>
      			<h4><a href="{{route('products.show',$product->slug)}}">{{$product->ime}}</a></h4>


      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">{{$product->cena}} ден.</p>
      				</div>
					<input type="submit" class="btn btn-danger btn-block" value="ADD TO CART" />



      			</div>

    		</span>
                </div>
				</form>
            @endforeach
@endsection
