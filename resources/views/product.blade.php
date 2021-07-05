@extends("layout")
@section("product")
<section class="product_container">
    <div class="container product_wrapper">
        <div class="row d-flex justify-content-around">
            @foreach($products as $product)
            <a href="{{url('detail/'.$product->id)}}" class="col-md-3 col-sm-6 col-lg-3 col-8 product">
                <div class="img">
                    <img src="{{asset('img/'.$product->img)}}" alt="">
                </div>
                <div class="pro_details">
                    <div class="pro_name">{{$product->name}}</div>
                    <div class="dis_price"></div>
                    <div class="pro_price">{{$product->price}}</div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endsection