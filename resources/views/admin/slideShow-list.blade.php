@extends('admin.adminPanel')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-title">
                                slide show
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        @foreach($errors->all() as $error)
                                            {{ $error }} <br>
                                        @endforeach
                                    </div>
                                @endif

                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                <div class="filter-container p-0 row">
                                    @foreach($slides as $slide)
                                        <div onclick="if (confirm('delete this slide ??')){
                                            document.getElementById('delete-slide').submit();
                                        }

                                             " class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                            <a data-toggle="lightbox" data-title="sample 1 - white">
                                                <img src="/images/slideShow/{{ $slide->image }}" class="img-fluid mb-2" alt="white sample"/>
                                            </a>
                                        </div>
                                        <form id="delete-slide" method="post" action="{{ route('delete' , ['slide_shows' , $slide->id]) }}">@csrf @method('delete')</form>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection