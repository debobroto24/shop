@extends("layout")
@section("signup")
<section class="signup">
    @if(Session('msg'))
    <div class="msg">
        <p>{{Session('msg')}}</p>
    </div>
    @endif
    <div class="signup_wrapper">

        <h2 class="signup_header">Sign Up</h2>

        <form action="{{url('signup')}}" method="POST">
            @csrf
            <div class="txt_field">
                <input type="text" name="name" required>
                <label>Name</label>
            </div>
            <div class="txt_field">
                <input type="email" name="email" placeholder="..@.." required>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>

            <input type="submit" value="signup">
            <span class="forgotpass"><a href="#">forgot Password</a></span>


        </form>
    </div>
</section>
@endsection