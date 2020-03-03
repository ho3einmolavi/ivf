@extends('layouts.master')

@section('content')
    <section class="part-content-login">
        <div class="container">
            <div class="row content-login">

                <div class="col-xs-12 col-sm-6 text-login">
                    <h3 >  آیا می خواهید یک حساب کاربری ایجاد کنید؟  </h3>
                    <p>
                        برای ایجاد حساب کاربری لطفا کلیک کنید
                    </p>

                    <a href="/register" class="signupbtn1"> عضویت</a>
                </div>


                <div class="col-xs-12 col-sm-6 login-form">
                    <form class="modal-content " action="/login" method="post">
                        @csrf
                        <div class="field-form ">
                            <label for="email"><b>ایمیل </b></label>
                            <input type="email" placeholder=" " name="email" required>
                        </div>


                        <div class="field-form">
                            <label for="psw"><b>پسورد</b></label>
                            <input type="password" placeholder="" name="password" required>
                        </div>

                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="field-form alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif

                        <div class="clearfix btn-loginb5">
                            <button type="submit" class="loginupbtn"> ورود </button>
                        </div>
                    </form>



                </div>





            </div>
        </div>
    </section>
@endsection

