@extends('layouts.master')

@section('content')
    <div class="form-search">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>
                        تقویم نمایشگاه های داخلی
                    </h3>
                    <form action="/action_page.php" class="row">
                        <div class="col-xs-12 col-sm-3">
                            <span class="title-select">سال </span>
                            <select id="select-form">
                                <option value="volvo">1397</option>
                                <option value="saab">1398</option>
                                <option value="mercedes">1398</option>
                                <option value="audi">1400</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <span class="title-select"> تاریخ </span>
                            <select id="select-form">
                                <option value="volvo">لیست کامل</option>
                                <option value="saab">هنگام اجرا</option>
                                <option value="mercedes">از امروز تا پایان سال</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <span class="title-select"> جستجو </span>
                            <input type="text" placeholder="جستجو بر اساس عنوان نمایشگاه" name="search">
                        </div>


                        <button type="submit"> جستجو</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <section id="part--full-Conference">
        <div class="container">
            <div class="row Conference-back">

                <div class="col-xs-12 col-sm-12 no-padding slider11">
                    <div id="slider-animation" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#slider-animation" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-animation" data-slide-to="1"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/Conference1.jpg" alt="Los Angeles">




                            </div>
                            <div class="carousel-item">
                                <img src="images/Conference2.jpg" alt="Chicago">

                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev footer" href="#slider-animation" data-slide="prev"><i
                                    class="fas fa-chevron-right"></i></a>
                        <a class="carousel-control-next footer" href="#slider-animation" data-slide="next"><i
                                    class="fas fa-chevron-left"></i></a>

                    </div>



                </div>

            </div>
        </div>
    </section>



    <section class="part-content-blog">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-sm-12">
                    @foreach($confs as $conf)
                        <div class="Conference-blog row">
                        <div class="Conference-item-img col-xs-12 col-sm-4">
                            <a href="/conference/{{ $conf->id }}"><img class="bg-movei-lnk" src="/images/conferences/{{ $conf->image }}"/></a>
                            <div class="col-xs-12 text-center date">
                                {{--<span class="day">11</span>--}}
                                {{--<span class="dsep"> - </span>--}}
                                {{--<span class="day">13</span>--}}
                                {{--<span class="month">Apr</span>--}}
                                {{--<span class="text-center"></span>--}}
                                <span>{{ $conf->date }}</span>
                            </div>
                        </div>
                        <div class="desblog-item col-xs-12 col-sm-8">
                            <h3> <a>{{ $conf->title }}      </a>   </h3>
                            <div class="description-Conference">
                                <ul>
                                    <li> <span><i class="fas fa-check"></i> برگزارکننده :</span> <span> {{ $conf->manager }}  </span>  </li>
                                    <li> <span> <i class=" fa fa-phone"></i>  تلفن : </span><span>{{ $conf->phone }}  </span> </li>
                                    <li> <span><i class="fas fa-globe"></i> وب سایت :</span> <span>  <a href=" {{ $conf->website }}"> {{ $conf->website }} </a></span></li>
                                </ul>

                                <p>


                                </p>
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>

                <!--            <div class="col-xs-12 col-sm-4">
                                <div class="asv">
                                    <img src="https://tpc.googlesyndication.com/daca_images/simgad/1745168202064514028">
                                </div>


                  <ul class="nav nav-tabs news-side1">
                    <li class="active"><a data-toggle="tab" href="#menu1" class="active show"> عنوان مورد نظر</a></li>
                    <li ><a data-toggle="tab" href="#menu2"> خبر جدید</a></li>
                    <li><a data-toggle="tab" href="#menu3"> بیشترین بازدید</a></li>
                  </ul>

                  <div class="tab-content news-side1">
                    <div id="menu1" class="tab-pane fade show active">
                        <ul>
                            <li>
                                <a href="">
                                    <div class="image-side"> <img  src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2020%2f2%2fshutterstock_178613183_2d19b3aaf3fd4662a5577e329309e7eb-125x110.jpg" alt="Discovery of potential cause of age-related macular degeneration" style=""></div>
                                    <div class="text-side"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="image-side"> <img  src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2020%2f2%2fshutterstock_178613183_2d19b3aaf3fd4662a5577e329309e7eb-125x110.jpg" alt="Discovery of potential cause of age-related macular degeneration" style=""></div>
                                    <div class="text-side"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="image-side"> <img  src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2020%2f2%2fshutterstock_178613183_2d19b3aaf3fd4662a5577e329309e7eb-125x110.jpg" alt="Discovery of potential cause of age-related macular degeneration" style=""></div>
                                    <div class="text-side"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                </a>
                            </li>

                        </ul>





                    </div>
                    <div id="menu1" class="tab-pane fade">

                        <ul>
                            <li>
                                <a href="">
                                    <div class="image-side"> <img  src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2020%2f2%2fshutterstock_178613183_2d19b3aaf3fd4662a5577e329309e7eb-125x110.jpg" alt="Discovery of potential cause of age-related macular degeneration" style=""></div>
                                    <div class="text-side"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="image-side"> <img  src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2020%2f2%2fshutterstock_178613183_2d19b3aaf3fd4662a5577e329309e7eb-125x110.jpg" alt="Discovery of potential cause of age-related macular degeneration" style=""></div>
                                    <div class="text-side"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="image-side"> <img  src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2020%2f2%2fshutterstock_178613183_2d19b3aaf3fd4662a5577e329309e7eb-125x110.jpg" alt="Discovery of potential cause of age-related macular degeneration" style=""></div>
                                    <div class="text-side"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                </a>
                            </li>

                        </ul>

                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <ul>
                            <li>
                                <a href="">
                                    <div class="image-side"> <img  src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2020%2f2%2fshutterstock_178613183_2d19b3aaf3fd4662a5577e329309e7eb-125x110.jpg" alt="Discovery of potential cause of age-related macular degeneration" style=""></div>
                                    <div class="text-side"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="image-side"> <img  src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2020%2f2%2fshutterstock_178613183_2d19b3aaf3fd4662a5577e329309e7eb-125x110.jpg" alt="Discovery of potential cause of age-related macular degeneration" style=""></div>
                                    <div class="text-side"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <div class="image-side"> <img  src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2020%2f2%2fshutterstock_178613183_2d19b3aaf3fd4662a5577e329309e7eb-125x110.jpg" alt="Discovery of potential cause of age-related macular degeneration" style=""></div>
                                    <div class="text-side"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</div>
                                </a>
                            </li>

                        </ul>
                    </div>
                  </div>



                                <div class="post-blog">
                                    <h4>
                                        مقالات محبوب
                                    </h4>
                                    <ul>
                                        <li><a href=""> عنوان تیتر مقاله</a></li>
                                        <li><a href=""> عنوان تیتر مقاله</a></li>
                                        <li><a href=""> عنوان تیتر مقاله</a></li>
                                        <li><a href=""> عنوان تیتر مقاله</a></li>


                                    </ul>
                                </div>
                                <div class="post-blog">
                                    <h4>
                                         جدید ترین مطالب
                                    </h4>
                                    <ul>
                                        <li><a href=""> عنوان تیتر مقاله</a></li>
                                        <li><a href=""> عنوان تیتر مقاله</a></li>
                                        <li><a href=""> عنوان تیتر مقاله</a></li>
                                        <li><a href=""> عنوان تیتر مقاله</a></li>


                                    </ul>
                                </div>



                             </div>-->

            </div>
        </div>
    </section>
@endsection