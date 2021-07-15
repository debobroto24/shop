@extends("layout");
@section("cart")
<div class="cartItem txt2">



    <!-- <div class="container"> -->
    <p>My Cart : </p>
    @if($products->isEmpty())
    <p style="font-size:25px ;text-align:center;padding:100px 0px 5px 0px;">You didn't select any item.</p>
    <p style="text-align:center;">click here to Add some product <a href="{{url('home')}}" style="
            padding:3px 7px;background:green;border-radius:5px ; 
        ">See Product</a></p>

    @else
    <a class="ordernow_btn" href="{{url('orderpage')}}">Order Now</a>
    @foreach($products as $product)
    <div class="row d-flex cartProduct m-5">

        <div class="col-sm-12 col-md-3">
            <img src="{{url('img/' . $product->img)}}" alt="" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-4">
            <h2>{{$product->name}}</h2>
            <h3>{{$product->catagory}}</h3>
            <p>Details : {{$product->detail}}</p>

        </div>
        <div class="col-sm-12 col-md-4">
            <a href="cart_item_remove/{{$product->idFormCart}}" class="remove btn-danger">Remove</a><br>
            <span>Price : {{$product->price}}</span>
        </div>

    </div>
    @endforeach
    @endif
    <!-- </div> -->
</div>
@endsection