@extends("layout");
@section("orderpage")

<section class="myorder">
    <div class="container">


        <div class="row order_details .txt2">
            <div class="col-md-6 col-sm-12 offset-md-3 txt2">
                <table class="tbody">
                    <tr>
                        <td>
                            <h4>cost : </h4>
                        </td>
                        <td>
                            <span>${{$cost}}</span>
                        </td>
                    </tr>

                    <tr class="border-bottom">
                        <td>
                            <h4>delevery charge : </h4>
                        </td>
                        <td>
                            <span>$10</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>total cost : </h4>
                        </td>
                        <td>
                            <span>${{$cost + 10}} </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row order_form txt2">
            <div class="col-md-6 col-sm-10 offset-md-3">
                <form action="{{url('orderNow')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <label for="address">Address</label>
                            <input type="textarea" id="address" placeholder="Enter Your address" required style="width:440px;height:62px;" name="address">
                        </div>
                        <div class="col-sm-12">
                            <h3>Payment :</h3>
                            <input type="radio" value="online" id="online" name="payment"> <label for="online">online payment</label><br>
                            <input type="radio" value="cash" id="cash" name="payment"> <label for="cash">Cash on delevery</label><br>
                        </div>
                        <div class="col-sm-12">
                            <input type="submit" value="order now" id="" class="btn btn-success">

                        </div>

                    </div>




                </form>
            </div>
        </div>


    </div>
</section>


@endsection