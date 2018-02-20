@extends('main')

@section('content')
	<!--@($role == 'admin') -->
	@foreach($products as $product)
		<form method="POST" action="{{ route('delete.destroy', $product->id_p) }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<div class="col-md-6 col-sm-6 " name="{{$product->slug}}"
			>
    			<span class="thumbnail">
      			<div class="col-md-6 product_img">
                                   {{-- <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive">--}}
					<img src='http://127.0.0.1:8000/produkti-sliki/{{$product->slika}}' alt="..." class="img-responsive">
                                </div>
      			<h4><a href="{{route('products.show',$product->slug)}}">{{$product->ime}}</a></h4>
      			<div class="ratings">
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                </div>
      			<p>{{$product->opis}} </p>
      			<hr class="line">
      			<div class="row">
      				<div class="col-md-6 col-sm-6">
      					<p class="price">{{$product->cena}} ден.</p>
      				</div>
					<div class="col-md-6 col-sm-6">
					{{--{!! Form::open(['route'=>['delete.destroy',$product->id_p],'method'=>'DELETE']) !!}--}}

						{{--{!! Form::submit('Delete',['class'=>'btn btn-danger btn-block' ]) !!}--}}
					{{--{!! Form::close() !!}--}}
</div>

					<input type="submit" class="btn btn-danger btn-block" value="DELETE" />

      			</div>
    		</span>
		</div>
		</form>
	@endforeach
<!-- @ else

	@ endif -->
@endsection
