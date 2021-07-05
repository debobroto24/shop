@extends("layout")
@section("detail")
<section class="product_detail_all">
    <div class="product_detail_wrapper">
        <div class="row justify-content-around">
            <div class="col-md-5">
                <div class="img">
                    <img src="{{asset('img/'.$product->img)}}" alt="">
                </div>
            </div>
            <div class="col-md-5 product_detail_des">
                <div class="detail_name">
                    <span>Name : {{$product->name}}</span>
                </div>
                <div class="detail_brand">
                    <span>brand : {{$product->brand}}</span>
                </div>
                <div class="detail_price">
                    <span>Price : {{$product->price}}</span>
                </div>
                <div class="detail_details">
                    <span>About {{$product->name}} : {{$product->detail}}</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection