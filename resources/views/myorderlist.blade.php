@extends("layout");
@section("myorderlist")
<div class="cartItem txt2">
    <div class="container">
        <p>My Order : </p>
        @if($myorderlist->isEmpty())
        <p style="font-size:25px ;text-align:center;padding:100px 0px 5px 0px;">You don't have any order</p>
        <p style="text-align:center;">click here to Add some product <a href="{{url('ourshop')}}" style="
            padding:3px 7px;background:green;border-radius:5px ; 
        ">See Product</a></p>
        @else
        <h6 style="text-align:center;margin:50px 0px;color:white">My OrderList</h6>
        @foreach($myorderlist as $product)
        <div class="row d-flex cartProduct txt2 m-5 border-bottom-1">

            <div class="col-sm-12 col-md-3">
                <img src="{{url('img/' . $product->img)}}" alt="" class="img-fluid">
            </div>
            <div class="col-sm-12 col-md-4">
                <h4>{{$product->name}}</h4>
                <p>{{$product->catagory}}</p>
                <p>Address:{{$product->user_address}}</p>
                <h3>Payment:{{$product->payment_method}}</h3>


            </div>
            <div class="col-sm-12 col-md-4">
                <span>Price : {{$product->price}}</span>
                <p>Details : {{$product->detail}}</p>
            </div>

        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection