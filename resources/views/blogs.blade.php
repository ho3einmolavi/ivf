@extends('layouts.master')

@section('content')
    <section id="part--full-img">
        <div class="container-fluid">
            <div class="row">
                <img src="https://cdn2.hubspot.net/hubfs/452811/Assets/img/blog-listing-hero.png" alt="Los Angeles">
                <div class=text-slider1>
                    <h1>
                        عنوتن تیتر در این قسمت
                    </h1>
                    <h2>
                        توضیح در این قسمت
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="part-content-blog">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-sm-8">
                    @foreach($blogs as $blog)
                        <div class="item-blog">

                            <div class="desblog-item">
                                <h3> <a> {{ $blog->title }} </a>   </h3>
                                <div class="time-blog"><span class="time-blog1"> <i class="fas fa-calendar-alt"></i>{{ $blog->date }}</span> <span class="author"><i class="far fa-user"></i> {{ $blog->user->first_name  }} {{ $blog->user->last_name }} </span></div>
                                <div class="description-blog">
                                    <div class="blog-item-img">
                                        <a href=""><img class="bg-movei-lnk" src="/images/blogs/{{ $blog->image }}"/></a>
                                    </div>
                                    <p>
                                        {{substr( $blog->body, 0, 200) }}...
                                    </p>
                                </div>
                                <div class="readmore-blog1">
                                    <a href="/blog/{{ $blog->id }}" class="readmore-blog">  <span> ادامه مطلب</span> <i class="fas fa-arrow-left"></i></a>
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