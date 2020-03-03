@extends('layouts.master')

@section('content')
    <section class="part-content-blog">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-sm-8">



                    <div class="news-blog1 row">


                        <h3> {{$news->title}}  </h3>
                        <a href="#" class="request-pdf-download"><span class="cta-text"><span>دانلود</span> <span>PDF </span></span></a>
                        <div class="date-news"><span class="time-blog"> <i class="fas fa-calendar-alt"></i>  <span> {{ $news->date }}  </span> <span class="author"><i class="far fa-user"></i> {{ $news->user->first_name }} {{ $news->user->last_name }} </span></span>     </div>

                        <div class="news-item-img col-xs-12 col-sm-12">
                            <a href=""><img class="bg-movei-lnk" src="/images/news/{{$news->image}}"/></a>
                        </div>
                        <div class="desblog-item col-xs-12 col-sm-12">

                            <div class="description-news">

                                <p>
                                    {{ $news->body }}
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="Suggested-Reading">
                        <h3> پیشنهاد مطالب</h3>
                        <div class="row">
                            <div class="col-xs-12 col-sm-3">
                                <img src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2019%2f5%2fshutterstock_1299113278_f694d5a9d2d542b0a126df26ace3668a-125x110.jpg" />
                                <h4> عنوان مورد نظر</h4>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <img src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2019%2f5%2fshutterstock_1299113278_f694d5a9d2d542b0a126df26ace3668a-125x110.jpg" />
                                <h4> عنوان مورد نظر</h4>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <img src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2019%2f5%2fshutterstock_1299113278_f694d5a9d2d542b0a126df26ace3668a-125x110.jpg" />
                                <h4> عنوان مورد نظر</h4>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <img src="https://d2jx2rerrg6sh3.cloudfront.net/image.axd?picture=2019%2f5%2fshutterstock_1299113278_f694d5a9d2d542b0a126df26ace3668a-125x110.jpg" />
                                <h4> عنوان مورد نظر</h4>
                            </div>


                        </div>

                    </div>



                    <div class="comment-form">
                        <h4>نظر شما :</h4>
                        <div class="alert alert-danger">
                            توجه!<small> لطفا دیدگاه خود پیرامون این مطلب را در این قسمت درج نمایید و برای ارسال سایر درخواست ها و پیام ها به بخش
                                <a class="alert-link" href="#" target="_blank">تماس با ما</a> مراجعه فرمایید.</small>
                        </div>
                        <form id="w1" class="clearfix" action="" method="post">
                            <input type="hidden" name="_csrf" value="">
                            <input type="hidden" name="moduleId" value="news">
                            <input type="hidden" name="ownerModelClassName" value="#">
                            <input type="hidden" name="ownerId" value="8259">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group field-comment-name required">

                                        <input type="text" id="comment-name" class="form-control" name="Comment[name]" placeholder="نام " aria-required="true">

                                        <p class="help-block help-block-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group field-comment-email">
                                        <input type="text" id="comment-email" class="form-control" name="Comment[email]" placeholder="پست الکترونیکی">

                                        <p class="help-block help-block-error"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group field-comment-content required">
                                        <textarea id="comment-content" class="form-control" name="Comment[content]" rows="4" placeholder="نظر" aria-required="true"></textarea>
                                        <p class="help-block help-block-error"></p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="captcha-wrapper">
                                        <div class="form-group field-comment-verifycode">
                                            <input type="text" id="comment-verifycode" class="form-control input-sm" name="Comment[verifyCode]" placeholder="کد امنیتی">
                                            <img id="comment-verifycode-image" src="https://ut.ac.ir//front/captcha?v=5cdbc0528de821.54921914&amp;language=fa" alt="">

                                            <p class="help-block help-block-error"></p>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2">ارسال نظر</button>
                                </div>

                            </div>
                        </form>
                    </div>

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


                <div class="share-inside">
                    <ul>
                        <li class="whatsapp1"><a href=""><i class="fab fa-whatsapp"></i> </a></li>
                        <li  class="twitter1"><a href=""><i class="fab fa-twitter"></i> </a></li>
                        <li  class="instagram1"> <a href=""><i class="fab fa-instagram"></i> </a></li>
                        <li  class="facebook1"><a href=""><i class="fab fa-facebook-f"></i> </a></li>
                        <li  class="paper"><a href=""><i class="far  fa-paper-plane"></i> </a></li>


                    </ul>

                </div>

            </div>
        </div>
    </section>
@endsection