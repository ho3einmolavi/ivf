@extends('admin.adminPanel')

@section('content')
    <section class="content">
        <div class="container-fluid">
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
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">

                        <div class="card-header">
                            <h3 class="card-title">add Conference</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                        <form role="form" method="post" action="{{ route('conference.create') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail133">manager</label>
                                    <input type="text" name="manager" value="{{ old('manager') }}" class="form-control" id="exampleInputEmail133" placeholder="برگزار کننده">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">title</label>
                                    <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">body</label>
                                    <textarea type="text" rows="10" name="body" class="form-control" id="exampleInputPassword1" placeholder="body">
                                        {{ old('body') }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label>information</label>
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" value="{{ old('phone') }}" class="form-control" placeholder="phone" name="phone">
                                        </div>
                                        <div class="col">
                                            <input type="text" value="{{ old('website') }}" class="form-control" placeholder="website" name="website">
                                        </div>
                                        <div class="col">
                                            <input type="text" value="{{ old('fax') }}" class="form-control" name="fax" placeholder="fax">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail13">address</label>
                                    <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="exampleInputEmail13" placeholder="Enter address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection