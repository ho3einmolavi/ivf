@extends('layouts.master')

@section('content')
    <section id="part-Conference-img1">
        <div class="container">
            <div class="row">
                <div class="img-Conference1"> <img src="/images/conferences/{{ $conf->image }}"  /></div>
            </div>
        </div>
    </section>
    <section id="part-Conference-text1">
        <div class="container">
            <div class="row background-Conference">
                <div class=text-aboutus>
                    <h3 class="title-Conference1"><i class="fas fa-info"></i>
                        {{ $conf->title }}
                    </h3>

                    <p>
                        {{ $conf->body }}
                    </p>

                    <ul class="row option1-li">
                        <li class="col-xs-12 col-sm-6"><div class="text-r"><i class="fa fa-tag"></i><span> برگزار کننده   </span> </div> <div class="text-l"> {{ $conf->manager }} </div></li>
                        <li class="col-xs-12 col-sm-6"><div class="text-r"><i class="fa fa-phone-square"></i><span>  تلفن  </span> </div> <div class="text-l">   {{ $conf->phone }} </div></li>
                        <li class="col-xs-12 col-sm-6"><div class="text-r"><i class="fa fa-fax"></i><span>  فکس  </span> </div> <div class="text-l">  {{ $conf->fax }}</div></li>
                        <li class="col-xs-12 col-sm-6"><a href="{{ $conf->website }}"><div class="text-r"><i class="fa fa-globe"></i><span>   وب سایت  </span> </div> <div class="text-l">  {{ $conf->website }}</div></a></li>
                        <li class="col-xs-12 col-sm-12"><div class="text-r"><i class="fa fa-map-marker"></i><span>   آدرس </span> </div> <div class="text-l">  {{ $conf->address }} </div></li>

                    </ul>


                </div>
            </div>
        </div>
    </section>
    {{--<section class="content-Conference-text2">--}}
        {{--<div class="container">--}}

            {{--<div class="row background-Conference">--}}
                {{--<h3 class="title-Conference1"><i class="fab fa-searchengin"></i>--}}
                    {{--لیست شرکت ها--}}
                {{--</h3>--}}

                {{--<form class="form-co row" action="/action_page.php">--}}
                    {{--<div class="col-xs-12 col-sm-2">--}}
                        {{--<label for="gsearch"> سالن:</label>--}}
                        {{--<select id="select-form">--}}
                            {{--<option value="volvo">text</option>--}}
                            {{--<option value="saab">text</option>--}}
                            {{--<option value="mercedes">text</option>--}}
                        {{--</select>--}}

                    {{--</div>--}}
                    {{--<div class="col-xs-12 col-sm-3">--}}
                        {{--<label for="gsearch"> دسته بندی ها:</label>--}}
                        {{--<select id="select-form">--}}
                            {{--<option value="volvo">text</option>--}}
                            {{--<option value="saab">text</option>--}}
                            {{--<option value="mercedes">text</option>--}}
                        {{--</select>--}}

                    {{--</div>--}}

                    {{--<div class="col-xs-12 col-sm-3">--}}
                        {{--<label for="gsearch">   شرکت ها:</label>--}}
                        {{--<select id="select-form">--}}
                            {{--<option value="volvo">text</option>--}}
                            {{--<option value="saab">text</option>--}}
                            {{--<option value="mercedes">text</option>--}}
                        {{--</select>--}}

                    {{--</div>--}}

                    {{--<div class="col-xs-12 col-sm-4">--}}
                        {{--<label for="gsearch">جستجو :</label>--}}
                        {{--<input type="search" id="gsearch" name="gsearch" placeholder="  نام شرکت یا فعالیت  ">--}}
                    {{--</div>--}}

                    {{--<button class="form-btn4 btn-10">--}}
                        {{--<span class="btn-10-span">  <span class="span-name"> <i class="fa fa-search"></i>   جستجو  </span>  </span>--}}
                    {{--</button>--}}

                {{--</form>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="content-Conference-text3">--}}
        {{--<div class="container">--}}

            {{--<div class="result-Conference">--}}
                  {{--<span>--}}
                      {{--52 شرکت--}}
                  {{--</span>--}}
            {{--</div>--}}
            {{--<div class="row ">--}}

                {{--<div class="col-xs-12 col-sm-4">--}}
                    {{--<div class="card-back1">--}}


                        {{--<div class="card-header" style="background: url(https://image.iranfair.com/images/co/hd/350_15d60f63610dfc460.jpg) no-repeat;">--}}
                            {{--<div class="img">--}}
                                {{--<a target="_blank" href="#" title=" Profile of Excutive Team Of Irannano "><img src="https://image.iranfair.com/images/co/15d60f636d54aa255.png" alt="Excutive Team Of Irannano"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="card-body row">--}}
                            {{--<h4><a target="_blank" href="" title="  Profile of Excutive Team Of Irannano ">  تیم اجرایی ایرانانانو</a></h4>--}}
                            {{--<p class="text-muted">--}}
                                {{--انجام امور اجرایی نمایشگاه نانو                </p>--}}
                            {{--<div class="col-xs-6 col-sm-6 col-md-6"><p><i class="fa fa-tag" aria-hidden="true"></i> سالن: 38</p></div>--}}
                            {{--<div class="col-xs-6 col-sm-6 col-md-6"><p><i class="fa fa-map-marker" aria-hidden="true"></i> غرفه: 103</p></div>--}}
                            {{--<div class="col-xs-12 col-sm-6"><p><i class="fa fa-envelope" aria-hidden="true"></i> festival@nano.ir</p></div>--}}
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<p>--}}
                                    {{--<i class="fa fa-globe" aria-hidden="true"></i>--}}
                                    {{--<a target="_blank" title="Excutive Team Of Irannano" href="http://festival.nano.ir">festival.nano.ir</a>                    </p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}



                {{--<div class="col-xs-12 col-sm-4">--}}
                    {{--<div class="card-back1">--}}


                        {{--<div class="card-header" style="background: url(https://image.iranfair.com/images/co/hd/350_15d60f63610dfc460.jpg) no-repeat;">--}}
                            {{--<div class="img">--}}
                                {{--<a target="_blank" href="#" title=" Profile of Excutive Team Of Irannano "><img src="https://image.iranfair.com/images/co/15d60f636d54aa255.png" alt="Excutive Team Of Irannano"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="card-body row">--}}
                            {{--<h4><a target="_blank" href="" title="  Profile of Excutive Team Of Irannano ">  تیم اجرایی ایرانانانو</a></h4>--}}
                            {{--<p class="text-muted">--}}
                                {{--انجام امور اجرایی نمایشگاه نانو                </p>--}}
                            {{--<div class="col-xs-6 col-sm-6 col-md-6"><p><i class="fa fa-tag" aria-hidden="true"></i> سالن: 38</p></div>--}}
                            {{--<div class="col-xs-6 col-sm-6 col-md-6"><p><i class="fa fa-map-marker" aria-hidden="true"></i> غرفه: 103</p></div>--}}
                            {{--<div class="col-xs-12 col-sm-6"><p><i class="fa fa-envelope" aria-hidden="true"></i> festival@nano.ir</p></div>--}}
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<p>--}}
                                    {{--<i class="fa fa-globe" aria-hidden="true"></i>--}}
                                    {{--<a target="_blank" title="Excutive Team Of Irannano" href="http://festival.nano.ir">festival.nano.ir</a>                    </p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="col-xs-12 col-sm-4">--}}
                    {{--<div class="card-back1">--}}


                        {{--<div class="card-header" style="background: url(https://image.iranfair.com/images/co/hd/350_15d60f63610dfc460.jpg) no-repeat;">--}}
                            {{--<div class="img">--}}
                                {{--<a target="_blank" href="#" title=" Profile of Excutive Team Of Irannano "><img src="https://image.iranfair.com/images/co/15d60f636d54aa255.png" alt="Excutive Team Of Irannano"></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="card-body row">--}}
                            {{--<h4><a target="_blank" href="" title="  Profile of Excutive Team Of Irannano ">  تیم اجرایی ایرانانانو</a></h4>--}}
                            {{--<p class="text-muted">--}}
                                {{--انجام امور اجرایی نمایشگاه نانو                </p>--}}
                            {{--<div class="col-xs-6 col-sm-6 col-md-6"><p><i class="fa fa-tag" aria-hidden="true"></i> سالن: 38</p></div>--}}
                            {{--<div class="col-xs-6 col-sm-6 col-md-6"><p><i class="fa fa-map-marker" aria-hidden="true"></i> غرفه: 103</p></div>--}}
                            {{--<div class="col-xs-12 col-sm-6"><p><i class="fa fa-envelope" aria-hidden="true"></i> festival@nano.ir</p></div>--}}
                            {{--<div class="col-xs-12 col-sm-6">--}}
                                {{--<p>--}}
                                    {{--<i class="fa fa-globe" aria-hidden="true"></i>--}}
                                    {{--<a target="_blank" title="Excutive Team Of Irannano" href="http://festival.nano.ir">festival.nano.ir</a>                    </p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</section>--}}
@endsection