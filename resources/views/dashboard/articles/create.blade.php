@extends('layouts.admin.app')
@section('breadcrumb')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{__('site.dashboard')}}</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('site.create')}}</a></li>
                        <li class="breadcrumb-item active">{{__('site.article')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            {{__('site.create')}} {{__('site.article')}} </h3>
                    </div>
                    <!-- /.card-header -->


                <!-- form start -->
                    <form action="{{route('admin.articles.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <x-forms.input    name="title" label="{{__('site.title')}}" placeholder="Enter Your title post"/>
                            <x-forms.textarea name="description" label="{{__('site.description')}}" placeholder="Enter Your description"/>



                            <div class="form-group">
                                <label for="content">{{__('site.content')}}</label>
                                <textarea type="text"  class="form-control @error('content') is-invalid @enderror" name="content"
                                          id="content"
                                          placeholder="Enter content">{{ old('content')}}</textarea>
                                @error('content')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="content">{{__('site.image')}}</label>
                                <div class="custom-file">
                                    <input type="file" name="image"  id="customFileLang" onchange="previewfile(this)" >
                                    <label class="custom-file-label" for="customFileLang">{{__('site.image')}}</label>
                                </div>
                                <img id="previewImg" alt="Profile Image" style="max-width: 130px;margin-top: 20px"/>
                                @error('image')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>



                            <div class="form-group">
                                <label for="category">{{__('site.categories')}}</label>
                                <select name="category_id" id="Categories" data-placeholder="Select Categories" style="width: 100%;">
                                    <option value=""> {{__('site.Select-category')}}</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach

                                </select>
                                @error('category_id')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tags">{{__('site.tags')}}</label>
                                <select name="tags[]" id="tags" class="tags" multiple  style="width: 100%;">
                                    <option value="">{{__('site.Select-tags')}}</option>
                                @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                                @error('tags')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="features">{{__('site.Features')}}</label>
                                        <div>

                                            <div class="form-check" style="margin-bottom: 7px;">
                                                <div class="icheck-success d-inline">
                                             <input class="form-check-input" type="radio" name="features" id="radioSuccess1" value="slider-top">
                                                <label class="form-check-label" for="radioSuccess1">
                                                    Slider-top
                                                </label>
                                            </div> </div>
                                            <div class="form-check" style="margin-bottom: 7px;">
                                                <div class="icheck-success d-inline">
                                                    <input class="form-check-input" type="radio" name="features" id="radioSuccess2" value="slider-footer">
                                                    <label class="form-check-label" for="radioSuccess2">
                                                        Slider-footer
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-check" style="margin-bottom: 7px;">
                                                <div class="icheck-success d-inline">
                                                <input class="form-check-input" type="radio" name="features" id="radioSuccess3" id="features" value="article">
                                                <label class="form-check-label" for="radioSuccess3">
                                                    Article
                                                </label>
                                                </div>
                                            </div>

                                            <div class="form-check" style="margin-bottom: 7px;">
                                                <div class="icheck-success d-inline">
                                                    <input class="form-check-input" type="radio" name="features" id="radioSuccess4" value="trendNews">
                                                    <label class="form-check-label" for="radioSuccess4">
                                                        TrendNews
                                                    </label>
                                                </div>
                                            </div><div class="form-check" style="margin-bottom: 7px;">
                                                <div class="icheck-success d-inline">
                                                    <input class="form-check-input" type="radio" name="features" id="radioSuccess5" value="mostPopular">
                                                    <label class="form-check-label" for="radioSuccess5">
                                                        MostPopular
                                                    </label>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group" >
                                        <label for="status">{{__('site.status')}}</label>
                                        <input id="status" type="checkbox" name="status" data-toggle="toggle" >
                                    </div>
                                    @error('status')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{__('site.add')}}</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>

@endsection
@push('js')
                <script>
                    function previewfile(input){
                        var file = $("input[type=file]").get(0).files[0];
                        if (file)
                        {
                            var reader = new FileReader();
                            reader.onload = function() {
                                $("#previewImg").attr("src",reader.result);

                            }
                            reader.readAsDataURL(file);

                        }
                    }
                </script>

                <script src="{{ asset('admin_files/js/front.js') }}"></script>

    @endpush
