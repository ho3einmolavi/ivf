@extends('layouts.master')

@section('content')
    <section class="part-content-blog">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-sm-9">
                    <div class="success-blog1 row">


                        <h3> {{ $blog->title }}   </h3>

                        <div class="news-item-img col-xs-12 col-sm-12">
                            <a href=""><img class="bg-movei-lnk" src="/images/blogs/{{ $blog->image }}"/></a>
                            <p class="success-img-p"></p>
                        </div>
                        <div class="desblog-item col-xs-12 col-sm-12">

                            <div class="description-news">

                                <p>
                                    {{ $blog->body }}
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="comment-form1">
                        <h4>  ثبت داستان موفقیت شما </h4>
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


                    <div class="share-inside1">
                        <ul>
                            <li class="whatsapp1"><a href=""><i class="fab fa-whatsapp"></i> </a></li>
                            <li  class="twitter1"><a href=""><i class="fab fa-twitter"></i> </a></li>
                            <li  class="instagram1"> <a href=""><i class="fab fa-instagram"></i> </a></li>
                            <li  class="facebook1"><a href=""><i class="fab fa-facebook-f"></i> </a></li>
                            <li  class="paper"><a href=""><i class="far  fa-paper-plane"></i> </a></li>


                        </ul>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-3">

                    <div class="search">

                        <form class="search-form" action="/action_page.php">
                            <input type="text" placeholder=" جستجو...  " name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="post-blog1">
                        <h4>
                            موقعیت شما
                        </h4>
                        <ul>
                            <li><a href=""> <i class="fas fa-chevron-left"></i>    عنوان مورد نظر</a></li>
                            <li><a href=""> <i class="fas fa-chevron-left"></i>    عنوان مورد نظر</a></li>
                            <li><a href=""> <i class="fas fa-chevron-left"></i>    عنوان مورد نظر</a></li>
                            <li><a href=""> <i class="fas fa-chevron-left"></i>    عنوان مورد نظر</a></li>
                            <li><a href=""> <i class="fas fa-chevron-left"></i>    عنوان مورد نظر</a></li>
                            <li><a href=""> <i class="fas fa-chevron-left"></i>    عنوان مورد نظر</a></li>
                            <li><a href=""> <i class="fas fa-chevron-left"></i>    عنوان مورد نظر</a></li>
                            <li><a href=""> <i class="fas fa-chevron-left"></i>    عنوان مورد نظر</a></li>
                            <li><a href=""> <i class="fas fa-chevron-left"></i>    عنوان مورد نظر</a></li>
                            <li><a href=""> <i class="fas fa-chevron-left"></i>    عنوان مورد نظر</a></li>
                            <li><a href=""> <i class="fas fa-chevron-left"></i>    عنوان مورد نظر</a></li>


                        </ul>
                    </div>



                </div>



            </div>
        </div>
    </section>
@endsection