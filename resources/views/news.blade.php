@extends('layouts.master')

@section('content')
    <section class="part-content-blog">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-sm-8">
                    <div class="news-spatial row">
                        <div class="title1-spatial">  <h3 > <a> تیتر عنوان بلاگ در این قسمت </a>   </h3></div>
                        <div class="news-item-img col-xs-12 col-sm-4">
                            <a href=""><img class="bg-movei-lnk" src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2020%2f2%2fhESCs%2bdifferentiating%2binto%2bgerm%2bcells_418ac12cf2104f91a13852177e98a147-310x240.jpg"/></a>
                        </div>

                        <div class="desblog-item col-xs-12 col-sm-7">
                            <h3> <a> تیتر عنوان بلاگ در این قسمت </a>   </h3>
                            <div class="description-news">

                                <p>


                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای ا.
                                </p>
                            </div>

                        </div>



                    </div>


                    @foreach($news as $new)
                        <div class="news-blog row">
                            <div class="date-news"><span class="time-blog"> <i class="fas fa-calendar-alt"></i>{{ $new->date }}</span></div>
                            <div class="news-item-img col-xs-12 col-sm-3">
                                <a href="/news/{{ $new->id}}"><img class="bg-movei-lnk" src="/images/news/{{$new->image}}"/></a>
                            </div>

                            <div class="desblog-item col-xs-12 col-sm-9">
                                <h3> <a> {{ $new->title }} </a>   </h3>
                                <div class="description-news">

                                    <p>
                                        {{ $new->body }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    @endforeach




                </div>

                <div class="col-xs-12 col-sm-4">
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



                </div>

            </div>
        </div>
    </section>
@endsection