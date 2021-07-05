@extends("layout")
@section("login")
<section class="login">
    @if(Session('msg'))
    <div class="msg">
        <p>{{Session('msg')}}</p>
    </div>
    @endif
    <div class="login_wrapper">
        <h2 class="login_header">Login</h2>
        <form action="{{url('login')}}" method="POST">
            @csrf
            <div class="txt_field">
                <input type="text" name="email" required>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <label>password</label>
            </div>

            <input type="submit" value="login">
            <span class="forgotpass"><a href="#">forgot Password</a></span>
            <div class="signup_btn">Want to signup <a href={{url('signup')}}>signup</a>
            </div>
        </form>
    </div>
</section>
@endsection