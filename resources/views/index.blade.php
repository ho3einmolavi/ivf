@extends('layouts.master')

@section('content')
    <section id="part--full-slider">
        <div class="container-fluid">
            <div class="row slider-back">

                <div class="col-xs-12 col-sm-12 no-padding slider11">
                    <div id="slider-animation" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#slider-animation" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-animation" data-slide-to="1"></li>
                            <li data-target="#slider-animation" data-slide-to="2"></li>
                            <li data-target="#slider-animation" data-slide-to="3"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            @foreach($slides as $key => $slide)
                                @if($key == 0)
                                      <div class="carousel-item active">
                                          <img src="/images/slideShow/{{ $slide->image }}" alt="Los Angeles">
                                      </div>
                                    @else
                                    <div class="carousel-item">
                                        <img src="/images/slideShow/{{ $slide->image }}" alt="Chicago">
                                    </div>
                                @endif
                            @endforeach
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
    <section class="part-item">
        <div class="container">
            <div class="row ">
                <div id="blog-item">
                    <div class="title-h3">
                        <h3> آخرین مقالات</h3>
                        <a href="/news" class="more"> مشاهده همه</a>
                    </div>
                    <div class="large-12 blog-item1 row">
                        @foreach($news as $new)
                            <div class="col-xs-12 col-sm-3">
                                <div class="item col">
                                    <a href="/news/{{ $new->id }}">
                                        <div class="blog-item-img"> <img class="bg-movei-lnk" src="/images/news/{{ $new->image }}"/></div>
                                        <div class="des1-item">
                                            <h3> {{ $new->title }}</h3>
                                            <span class="description">
                                               {{ substr($new->body , 0 , 50) }} ...
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="part-item1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 padding1">

                    <div class="large-12 columns ">
                        <div class="owl-carousel info1-item owl-theme">
                            <div class="item col">
                                <a href="">
                                    <div class="box-item">
                                        <img class="bg-movei-lnk" src="images/Layer99.png"/>
                                    </div>
                                </a>
                            </div>
                            <div class="item col">
                                <a href="">
                                    <div class="box-item">
                                        <img class="bg-movei-lnk" src="images/Layer99.png"/>
                                    </div>
                                </a>
                            </div>
                            <div class="item col">
                                <a href="">
                                    <div class="box-item">
                                        <img class="bg-movei-lnk" src="images/Layer99.png"/>
                                    </div>
                                </a>
                            </div>
                            <div class="item col">
                                <a href="">
                                    <div class="box-item">
                                        <img class="bg-movei-lnk" src="images/Layer99.png"/>
                                    </div>
                                </a>
                            </div>                    </div>
                    </div>


                </div>
                <div class="col-xs-12 col-sm-8 padding2">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 no-padding">
                            <div class="box1 box-info">
                                <img class="bg-movei-lnk" src="images/Layer94.png"/>
                                <a href=""> یک دکتر پیدا کنید</a>
                            </div>
                            <div class="box2 box-info">
                                <img class="bg-movei-lnk" src="images/Layer94.png"/>
                                <a href=""> یک دکتر پیدا کنید</a>
                            </div>
                            <div class="box3 box-info">
                                <img class="bg-movei-lnk" src="images/Layer94.png"/>
                                <a href=""> یک دکتر پیدا کنید</a>
                            </div>
                            <div class="box4 box-info">
                                <img class="bg-movei-lnk" src="images/Layer94.png"/>
                                <a href=""> یک دکتر پیدا کنید</a>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-6 no-padding">
                            <img class="img-lnk1" src="images/Layer100.png"/>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section id="part-item2">
        <div class="container">
            <div class="title-h3">
                <h3> آخرین مقالات</h3>
                <a htef="" class="more"> مشاهده همه</a>
            </div>

            <div class=" row">

                <div class="col-sm-4">
                    <div class="main-body-in-tab row span3 wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">
                        <div class="about-item1">
                            <div class="about-image"> <img class="bg-movei-lnk" src="images/Layer 72.png"/></div>
                            <div class="about-des">
                                <h3> عکس العمل های آلرژیتیک     </h3>
                                <span class="description">
                                       اثرات بهداشتی سیگارهای الکترونیکی.
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="main-body-in-tab row span3 wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">
                        <div class="about-item1">
                            <div class="about-image"> <img class="bg-movei-lnk" src="images/Layer 72.png"/></div>
                            <div class="about-des">
                                <h3> عکس العمل های آلرژیتیک     </h3>
                                <span class="description">
                                       اثرات بهداشتی سیگارهای الکترونیکی.
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="main-body-in-tab row span3 wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">
                        <div class="about-item1">
                            <div class="about-image"> <img class="bg-movei-lnk" src="images/Layer 72.png"/></div>
                            <div class="about-des">
                                <h3> عکس العمل های آلرژیتیک     </h3>
                                <span class="description">
                                       اثرات بهداشتی سیگارهای الکترونیکی.
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="main-body-in-tab row span3 wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">
                        <div class="about-item1">
                            <div class="about-image"> <img class="bg-movei-lnk" src="images/Layer 72.png"/></div>
                            <div class="about-des">
                                <h3> عکس العمل های آلرژیتیک     </h3>
                                <span class="description">
                                       اثرات بهداشتی سیگارهای الکترونیکی.
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="main-body-in-tab row span3 wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">
                        <div class="about-item1">
                            <div class="about-image"> <img class="bg-movei-lnk" src="images/Layer 72.png"/></div>
                            <div class="about-des">
                                <h3> عکس العمل های آلرژیتیک     </h3>
                                <span class="description">
                                       اثرات بهداشتی سیگارهای الکترونیکی.
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="main-body-in-tab row span3 wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">
                        <div class="about-item1">
                            <div class="about-image"> <img class="bg-movei-lnk" src="images/Layer 72.png"/></div>
                            <div class="about-des">
                                <h3> عکس العمل های آلرژیتیک     </h3>
                                <span class="description">
                                       اثرات بهداشتی سیگارهای الکترونیکی.
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="part-item3">
        <div class="container">
            <div class="row ">
                <div id="blog-item">
                    <div class="title-h3">
                        <h3> نگارش مطلب </h3>
                        <a htef="" class="more"> مشاهده همه</a>
                    </div>
                    <div class="large-12 blog-item1 row">
                        <div class="col-xs-12 col-sm-3">
                            <div class="item col">
                                <a href="">
                                    <div class="post-img"> <img class="bg-movei-lnk" src="images/Layer 9.png"/></div>
                                    <div class="des1-item">
                                        <h3> عکس العمل های آلرژیتیک     </h3>
                                        <span class="description">
                                       اثرالورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .
                                    </span>
                                    </div>
                                    <div class="option-item">
                                        <span class="author"><i class="fas fa-user"></i> admin</span>
                                        <span class="more"><i class="fas fa-plus-circle"></i> </span>
                                        <span class="time"><i class="fas fa-calendar-alt"></i> 5/11/1398</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <div class="item col">
                                <a href="">
                                    <div class="post-img"> <img class="bg-movei-lnk" src="images/Layer 9.png"/></div>
                                    <div class="des1-item">
                                        <h3> عکس العمل های آلرژیتیک     </h3>
                                        <span class="description">
                                       اثرالورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .
                                    </span>
                                    </div>
                                    <div class="option-item">
                                        <span class="author"><i class="fas fa-user"></i> admin</span>
                                        <span class="more"><i class="fas fa-plus-circle"></i> </span>
                                        <span class="time"><i class="fas fa-calendar-alt"></i> 5/11/1398</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <div class="item col">
                                <a href="">
                                    <div class="post-img"> <img class="bg-movei-lnk" src="images/Layer 9.png"/></div>
                                    <div class="des1-item">
                                        <h3> عکس العمل های آلرژیتیک     </h3>
                                        <span class="description">
                                       اثرالورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .
                                    </span>
                                    </div>
                                    <div class="option-item">
                                        <span class="author"><i class="fas fa-user"></i> admin</span>
                                        <span class="more"><i class="fas fa-plus-circle"></i> </span>
                                        <span class="time"><i class="fas fa-calendar-alt"></i> 5/11/1398</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <div class="item col">
                                <a href="">
                                    <div class="post-img"> <img class="bg-movei-lnk" src="images/Layer 9.png"/></div>
                                    <div class="des1-item">
                                        <h3> عکس العمل های آلرژیتیک     </h3>
                                        <span class="description">
                                       اثرالورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .
                                    </span>
                                    </div>
                                    <div class="option-item">
                                        <span class="author"><i class="fas fa-user"></i> admin</span>
                                        <span class="more"><i class="fas fa-plus-circle"></i> </span>
                                        <span class="time"><i class="fas fa-calendar-alt"></i> 5/11/1398</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="part-item4">
        <div class="container-fluid">
            <div id="info-item">
                <div class="large-12 info-item1 row">
                    <div class="box-img1 width5">
                        <div class="item col">
                            <a href="">
                                <img class="bg-movei-lnk" src="images/Layer18.png"/>
                                <div class="des1-item">
                                    <h3> عکس العمل های آلرژیتیک  11   </h3>
                                    <span class="description">
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="box-img1 width5">
                        <div class="item col">
                            <a href="">
                                <img class="bg-movei-lnk" src="images/Layer18.png"/>
                                <div class="des1-item">
                                    <h3> عکس العمل های آلرژیتیک  11   </h3>
                                    <span class="description">
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="box-img1 width5">
                        <div class="item col">
                            <a href="">
                                <img class="bg-movei-lnk" src="images/Layer18.png"/>
                                <div class="des1-item">
                                    <h3> عکس العمل های آلرژیتیک  11   </h3>
                                    <span class="description">
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="box-img1 width5">
                        <div class="item col">
                            <a href="">
                                <img class="bg-movei-lnk" src="images/Layer18.png"/>
                                <div class="des1-item">
                                    <h3> عکس العمل های آلرژیتیک  11   </h3>
                                    <span class="description">
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>


                <script>
                    $(".box-img1").on("mouseover", function () {
                        $(".box-img1").addClass("activehover0");
                        $(this).addClass("activehover");
                        $(this).removeClass("activehover0");
                    });

                    $(".box-img1").mouseout(function(){
                        $(this).removeClass("activehover");
                        $(".box-img1").removeClass("activehover0");
                    });

                </script>

            </div>
        </div>
    </section>
    <section class="part-item5">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-sm-4 padding3">
                    <h3 class="title-bottom"> اطلاعیه ها  </h3>
                    <div id="info1-item">
                        <div class="large-12 columns ">
                            <div class="owl-carousel info1-item owl-theme">
                                <div class="item col">
                                    <a href="">
                                        <img class="bg-movei-lnk" src="images/img5.png"/>
                                    </a>
                                </div>
                                <div class="item col">
                                    <a href="">
                                        <img class="bg-movei-lnk" src="images/img5.png"/>

                                    </a>
                                </div>
                                <div class="item col">
                                    <a href="">
                                        <img class="bg-movei-lnk" src="images/img5.png"/>

                                    </a>
                                </div>
                                <div class="item col">
                                    <a href="">
                                        <img class="bg-movei-lnk" src="images/img5.png"/>

                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 padding3">
                    <div class="title-bottom1">
                        <h3 >  آخرین اخبار</h3>

                        <a htef="" class="more"> مشاهده همه</a>
                    </div>
                    <div class="item-news row">
                        <div class="post-img col-xs-12 col-sm-4"> <img class="bg-movei-lnk" src="images/Layer 9.png"/></div>
                        <div class="des1-item col-xs-12 col-sm-8 no-padding">
                            <i class="fas fa-caret-left"></i> <h3> عکس العمل های آلرژیتیک     </h3>
                            <span class="description">
                                       اثرالورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .
                                    </span>
                            <div class="option-item1">
                                <span class="share"> </span>
                                <span class="category2"><a href=""> اقتصاد</a> </span>
                                <span class="time"><i class="far fa-clock"></i> 4 روز قبل </span>
                            </div>
                        </div>
                    </div>
                    <div class="item-news row">
                        <div class="post-img col-xs-12 col-sm-4"> <img class="bg-movei-lnk" src="images/Layer 9.png"/></div>
                        <div class="des1-item col-xs-12 col-sm-8 no-padding">
                            <i class="fas fa-caret-left"></i> <h3> عکس العمل های آلرژیتیک     </h3>
                            <span class="description">
                                       اثرالورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .
                                    </span>
                            <div class="option-item1">
                                <span class="share"> </span>
                                <span class="category2"><a href=""> اقتصاد</a> </span>
                                <span class="time"><i class="far fa-clock"></i> 4 روز قبل </span>
                            </div>
                        </div>
                    </div>
                    <div class="item-news row">
                        <div class="post-img col-xs-12 col-sm-4"> <img class="bg-movei-lnk" src="images/Layer 9.png"/></div>
                        <div class="des1-item col-xs-12 col-sm-8 no-padding">
                            <i class="fas fa-caret-left"></i> <h3> عکس العمل های آلرژیتیک     </h3>
                            <span class="description">
                                       اثرالورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است .
                                    </span>
                            <div class="option-item1">
                                <span class="share"> </span>
                                <span class="category2"><a href=""> اقتصاد</a> </span>
                                <span class="time"><i class="far fa-clock"></i> 4 روز قبل </span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="brand-category">
        <div class="container">
            <div class=" row">

                <div class="col-sm-12">
                    <div class="main-body-in-tab row span3 wow bounceInRight"
                         style="visibility: visible; animation-name: bounceInRight;">

                        <div id="brand-item">
                            <div class="large-12 columns ">
                                <div class="owl-carousel brand-item owl-theme">
                                    <div class="item col">
                                        <a href="">
                                            <img class="bg-movei-lnk" src="images/logos1.png"/>
                                        </a>
                                    </div>
                                    <div class="item col">
                                        <a href="">
                                            <img class="bg-movei-lnk" src="images/logos1.png"/>
                                        </a>
                                    </div>
                                    <div class="item col">
                                        <a href="">
                                            <img class="bg-movei-lnk" src="images/logos1.png"/>
                                        </a>
                                    </div>
                                    <div class="item col">
                                        <a href="">
                                            <img class="bg-movei-lnk" src="images/logos1.png"/>
                                        </a>
                                    </div>
                                    <div class="item col">
                                        <a href="">
                                            <img class="bg-movei-lnk" src="images/logos1.png"/>
                                        </a>
                                    </div>
                                    <div class="item col">
                                        <a href="">
                                            <img class="bg-movei-lnk" src="images/logos1.png"/>
                                        </a>
                                    </div>
                                    <div class="item col">
                                        <a href="">
                                            <img class="bg-movei-lnk" src="images/logos1.png"/>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection

