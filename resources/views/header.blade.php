 <!-- //header section -->
 <?php

    use \App\Http\Controllers\ProductCon;

    if (session()->has('user')) {
        $count = ProductCon::cartCount();
        $orderCount = ProductCon::orderlistcount();
    } else {
        $count = 0;
        $orderCount = 0;
    }
    ?>
 <section class="header">
     <div class="row">
         <div class="col-sm-12 header_top">
             <div class="user_con">
                 @if(session()->has('user'))
                 <?php $user = json_decode(json_encode(session()->get('user')), true) ?>
                 <a href="{{url('cart')}}">cart({{$count}})</a>
                 <a href="{{url('admin')}}">admin</a>
                 <a href="{{url('logout')}}">Logout</a>
                 <a href="">{{$user['name']}}</a>
                 @else
                 <a href={{url('login')}}>Login</a>

                 @endif
                 <a href="{{url('signup')}}">signup</a>



             </div>
         </div>
         <div class="col-sm-12 header_bottom d-flex">
             <div class="col-md-6">
                 <div class="logo">
                     <h3><a href="{{url('home')}}">OurShop</a> </h3>
                 </div>
             </div>
             <div class="col-md-6">
                 <div class="nav">
                     <a href="#">Home</a>
                     <a href="#">contact</a>
                     <a href="{{url('myOrderList')}}">myorder({{$orderCount}})</a>
                 </div>
             </div>
         </div>
     </div>

 </section>