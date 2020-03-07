@extends('layouts.master')

@section('content')
    <section id="part--full-img">
        <div class="container-fluid">
            <div class="row">
                <img src="https://www.vitrolife.com/globalassets/images/academy/educate-yourself.png" alt="Los Angeles">
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

    @foreach($cats as $cat)
        <section class="part-content-academy">
            <div class="container">
                <div class="row ">
                    <h3 class="titleinside1">
                        {{ $cat->name }}
                    </h3>

                    @foreach($cat->academies as $item)
                        <div class="col-xs-12 col-sm-4">

                            <div class="item-academy">
                                <div class="blog-item-img">
                                    <a href=""><img class="bg-movei-lnk" src="/images/academy/image/{{ $item->image }}"/></a>
                                </div>
                                <h3> <a> {{ $item->title }} </a>   </h3>
                                <div class="description-academy">
                                    <p>
                                        {{ substr($item->body , 0 , 150) }} ...
                                    </p>
                                </div>
                                <div>
                                    <a href="" class="readmore-blog">  <span> ادامه مطلب</span> <i class="fas fa-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach

@endsection

