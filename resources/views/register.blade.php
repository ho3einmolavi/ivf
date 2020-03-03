@extends('layouts.master')

@section('content')
    <section class="part-content-register">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-sm-6 text-register">
                    <h3 > ثبت نام کاربران </h3>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                    </p>


                </div>


                <div class="col-xs-12 col-sm-6">
                    <form class="modal-content " action="{{ route('register') }}" method="post">
                        @csrf
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                        @endif
                        <div class="field-form field-form1">
                            <label for="email"><b>نام</b></label>
                            <input type="text" placeholder=" " name="first_name" required>
                        </div>
                        <div class="field-form field-form1">
                        <label for="email"><b>نام خانوادگی</b></label>
                        <input type="text" placeholder=" " name="last_name" required>
                        </div>
                        <div class="field-form">
                            <label for="email"><b>ایمیل</b></label>
                            <input type="text" placeholder=" " name="email" required>
                        </div>

                        <div class="field-form field-form1">
                            <label for="psw"><b>پسورد</b></label>
                            <input type="password" placeholder="" name="password" required>
                        </div>


                        <div class="field-form field-form1">
                            <label for="psw-repeat"><b> تکرار پسورد</b></label>
                            <input type="password" placeholder=" " name="password_confirmation" required>
                        </div>
                        {{--<div class="field-form">--}}
                            {{--<select id="country1">--}}
                                {{--<option value="volvo">ایران</option>--}}
                                {{--<option value="saab">آمریکا</option>--}}
                                {{--<option value="mercedes">آلمان</option>--}}
                                {{--<option value="audi">ژاپن</option>--}}
                            {{--</select>--}}

                        {{--</div>--}}

                        {{--<div class="field-form">--}}
                            {{--<textarea id="w3mission" rows="4" cols="50"></textarea>--}}
                        {{--</div>--}}



                        <p>
                            با ایجاد یک حساب کاربری شما با ما موافقت می کنید

                            <a href="#" style="color:dodgerblue"> شرایط و حریم خصوصی </a>
                        </p>

                        <div class="clearfix">
                            <button type="submit" class="signupbtn"> عضویت</button>
                        </div>
                    </form>


                </div>





            </div>
        </div>
    </section>
@endsection

