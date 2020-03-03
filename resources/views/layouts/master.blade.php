
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> belimo</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/animate.css"/>
    <link rel="stylesheet" href="/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="/css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="js/jquery.min.js"></script>

</head>
<body>

<div class="header-fix">
    <div id="middle-header" class="middle-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="col1-login-register">
                        <div class="d-flex icon-text-login">
                            @if(!auth()->check())
                                <div class="col-text-login-register">
                                    <a href="/login" class="login">ورود اعضا </a>
                                </div>
                                <a href="" class="link-top1 ">  منابع عضو</a>
                                <a href="" class="link-top2"> به ما بپیوندید </a>
                            @else
                                <div style="cursor: pointer" class="col-text-login-register">
                                    <a class="login"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();   "
                                    >خروج </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style=" display: none;">
                                        @csrf
                                    </form>
                                </div>
                                <a href="" class="link-top1 ">  منابع عضو</a>
                                <a href="" class="link-top2"> به ما بپیوندید </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <a href="#" class="lnk-logo-go-home">
                        <div class="logo-top-header">
                            <img class="tp-logo tp-side2" alt="logo" src="/images/logo1.png"/>
                        </div>
                        <div class="text-logo">
                            پرتال جامع درمان
                            ناباروری در ایران
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="bottom-header" class="bottom-header">
        <div class="container">
            <div class="row">
                <div class="backBtn d-block d-sm-none bars-menu " id="showRight">
                    <span class="open-menu">   <i class="fas fa-bars"></i>  </span>   <span>  </span><img class="tp-logo" alt="logo" src="/images/logo1.png"></div>
                <nav class="menu1 menu-right header--nav" id="menu-right1">
                    <div class="close-menu d-block d-sm-none"><i class="fas fa-times"></i></div>
                    <li><a class="active" href="#"> صفحه اصلی </a></li>
                    <li><a href="/about-us">  درباره ما </a></li>
                    <li><a href="/conferences">  همایش ها </a></li>
                    <li><a href="/news"> اخبار</a></li>
                    <li><a href="/blogs"> بلاگ ها</a></li>
                </nav>
            </div>
        </div>
    </div>
</div>

@yield('content')

<footer id="part--footer">
    <div class="footer-body">
        <div class="prt--above-footer-">
            <div class="container">
                <div class="row row-img-above-footer">
                    <div class="col-sm-12">
                        <div class="footer5">
                            <div class="text-email">


                                <h4>
                                    خبرنامه الکترونیکی رایگان ما را دریافت کنید

                                </h4>
                                <p>  تا در آخرین اطلاعات مربوط به سلامت متخصصان  به روز باشید.</p>
                            </div>
                            <form action="/action_page.php">
                                <input type="text" name="firstname" value="" placeholder="نام">
                                <input type="text" name="phone" value="" placeholder="شماره تلفن">
                                <input type="text" name="email" value="" placeholder="ایمیل">
                                <input type="submit" value="عضویت">
                            </form>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom1">
            <div class="container">
                <div class="row top-footer">
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        <div class="col3-ft-logo-desc">
                            <h4> اطلاعات تماس</h4>

                            <ul class="lnk-footers">
                                <li>
                                    <i class=" fas fa-map-marker-alt"></i>
                                    <a href="/2"> تهران-ستارخان-نبش گل افشان </a>
                                </li>
                                <div class="bottom-line"></div>
                                <li>
                                    <i class=" fa fa-phone"></i>
                                    <a href="/">021-33445566 </a>
                                </li>
                                <div class="bottom-line"></div>
                                <li>
                                    <i class="fas fa-envelope-open-text"></i>
                                    <a href="/">info.bdhf@gmail.com </a>
                                </li>
                                <li>
                                    <i class="fas fa-print"></i>
                                    <a href="/">021-33445566 </a>
                                </li>

                            </ul>

                            <div class="footer-social-link">
                                <div class="social-link">
                                    <a href="#"><i class="fab fa-whatsapp"></i> <span> </span></a>
                                    <a href="#"><i class="fab fa-twitter"></i>  <span> </span></a>
                                    <a href="#"><i class="fab fa-instagram"></i>  <span> </span></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i>  <span> </span></a>
                                    <a href="#"><i class="far fa-paper-plane"></i>  <span> </span></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-3">
                        <div class="col2-ft-list-frst like-together-icon">
                            <h4> دسترسی سریع </h4>
                            <ul class="lnk-footers">
                                <li>
                                    <i class="fas fa-square"></i>
                                    <a href="/2">نمونه تیتر خدمات</a>
                                </li>
                                <div class="bottom-line"></div>
                                <li>
                                    <i class="fas fa-square"></i>
                                    <a href="/">نمونه تیتر خدمات</a>
                                </li>
                                <div class="bottom-line"></div>
                                <li>
                                    <i class="fas fa-square"></i>
                                    <a href="/">نمونه تیتر خدمات</a>
                                </li>
                                <div class="bottom-line"></div>
                                <li>
                                    <i class="fas fa-square"></i>
                                    <a href="/">نمونه تیتر خدمات</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-3">
                        <div class="col2-ft-list-second like-together-icon">
                            <h4> دسترسی سریع </h4>

                            <ul class="lnk-footers">
                                <li>
                                    <i class="fas fa-square"></i>
                                    <a href="/2">نمونه تیتر خدمات</a>
                                </li>
                                <div class="bottom-line"></div>
                                <li>
                                    <i class="fas fa-square"></i>
                                    <a href="/">نمونه تیتر خدمات</a>
                                </li>
                                <div class="bottom-line"></div>
                                <li>
                                    <i class="fas fa-square"></i>
                                    <a href="/">نمونه تیتر خدمات</a>
                                </li>
                                <div class="bottom-line"></div>
                                <li>
                                    <i class="fas fa-square"></i>
                                    <a href="/">نمونه تیتر خدمات</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-3">
                        <div class="col1-ft-e-namad-prt">
                            <ul>
                                <li>
                                    <a href="">
                                        مراقبت های خیریه و کمک های مالی

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        مراقبت های خیریه و کمک های مالی

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        اسناد کمک مالی فلوریدا

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        ارزیابی نیازهای بهداشت جامعه (CHNA)

                                    </a>
                                </li>

                            </ul>
                            <div class="img--enamad">
                                <img class="e-namad1" src="images/img11.png" alt="e-namad"/>
                                <img class="e-namad1" src="images/img11.png" alt="e-namad"/>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> </div>
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="copy-right">
                <p class="eng--font">© 2018 PARTESTAN . ALL RIGHTS RESERVED</p>
            </div>
            <div class="npco">
            </div>
        </div>
    </div>
</footer>

<script src="/js/bootstrap.bundle.min.js"></script>
<script src="/js/owl.carousel.js"></script>

<!--mega menu-->
<script>
    $(document).ready(function(){
        $('.visible-fix21').hover(function () {

            $('.fix-menu').toggleClass(' fix-menu-open1');
        });
    });



    $(document).ready(function(){
        $('#showRight').click(function () {

            $('#menu-right1').toggleClass('right-open1');
        });
        $('.backBtn').click(function () {
            $('#menu-right1').toggleClass('right-open');
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('.brand-item').owlCarousel({
            loop: true,
            margin: 20, items: 6,  nav: false,
            responsiveClass: true, dots: false,
            responsive: {
                0: {
                    items: 2, margin: 0,
                    nav: true, dots: false,
                },
                600: {
                    items: 2, margin: 10,
                    nav: true, dots: false,
                },
                1000: {
                    items: 6,
                    nav: false, dots: false,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
    $(document).ready(function () {
        $('.blog-item').owlCarousel({
            loop: true, margin: 10,
            items: 4, nav: true,
            responsiveClass: true, dots: false,
            responsive: {
                0: {
                    items: 1, margin: 0,
                    nav: true, dots: false,
                },
                600: {
                    items: 2, margin: 10,
                    nav: true, dots: false,
                },
                1000: {
                    items: 4,
                    nav: true, dots: false,
                    loop: false,
                    margin: 10,
                }
            }
        })
    })
    $(document).ready(function () {
        $('.info-item').owlCarousel({
            loop: true,
            margin: 0, items: 4,
            responsiveClass: true, dots: true,
            responsive: {
                0: {
                    items: 1, margin: 0,
                    nav: true, dots: false,
                },
                600: {
                    items: 2, margin: 0,
                    nav: true, dots: false,
                },
                1000: {
                    items: 4,
                    nav: false, dots: true,
                    loop: false,
                    margin: 0
                }
            }
        })
    })

    $(document).ready(function () {
        $('.info1-item').owlCarousel({
            loop: true,
            margin: 0, items: 1,nav: true,
            responsiveClass: true, dots: false,
            autoplay:true,
            autoplayTimeout:2000,

            responsive: {
                0: {
                    items: 1, margin: 0,
                    nav: true, dots: false,
                },
                600: {
                    items: 1, margin: 0,
                    nav: false, dots: false,
                },
                1000: {
                    items: 1,
                    nav: true, dots: false,
                    margin: 0
                }
            }
        })
    })
</script>

<script>
    var html = document.documentElement; // pega o elemento HTML da página

    document.querySelector('.open-menu').onclick = function(){
        html.classList.add('active5');
    };

    document.querySelector('.close-menu').onclick = function(){
        html.classList.remove('active5');
    };

    html.onclick = function(event){
        if (event.target === html){
            html.classList.remove('active5');
        }
    };

</script>

<!--back to top-->
<script>
    $(document).ready(function () {
        $('body').append('<div id="scrollTop" class="btn btn-success"><div class="circle"><div class="wave"><i class="fas fa-angle-double-up"></i><span class="glyphicon glyphicon glyphicon-arrow-up"></span></div></div></div>');
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#scrollTop').fadeIn();
            } else {
                $('#scrollTop').fadeOut();
            }
        });

        $('#scrollTop').on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, '3000');
        });
    });

</script>
</body>
</html>