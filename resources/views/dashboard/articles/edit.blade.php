@extends('layouts.admin.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Post Create </h3>
                    </div>
                    <!-- /.card-header -->


                    <!-- form start -->
                    <form action="{{route('admin.articles.update',$article->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <x-forms.input    name="title" label="Title" placeholder="Enter Your title post" value="{{$article->title}}"/>
                            <x-forms.textarea name="description" label="Description" placeholder="Enter Your description" value="{{$article->description}}"/>



                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea type="text" class="form-control @error('content') is-invalid @enderror" name="content"
                                          id="content"
                                          placeholder="Enter content">{{$article->content}}</textarea>
                                @error('content')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="custom-file">
                                    <input name="image" type="file" class="custom-file-input" id="exampleInputFile" onchange="previewfile(this)">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                </div>
                                <img id="previewImg" alt="Profile Image" style="max-width: 130px;margin-top: 20px"/>

                                @error('image')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            @if (isset($article))
                                <div class="form-group">
                                    <img src="{{asset('uploads/'.$article->image_path)}}" style="width: 21%;height: 150px;" />
                                </div>
                            @endif



                            <div class="form-group">
                                <label for="category">Categories</label>
                                <select name="category_id" id="Categories" data-placeholder="Select Categories" style="width: 100%;">
                                    <option value="">Select Categories</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach

                                </select>
                                @error('category_id')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <select name="tags[]" id="tags" class="tags" multiple  style="width: 100%;">
                                    <option value="">Select tags</option>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"  @if ($article->hasTag($tag->id))
                                        selected
                                            @endif
                                        >{{ $tag->name }}</option>
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
                                                    <input class="form-check-input" type="radio" name="features" id="radioSuccess1" value="slider-top" @if(old('features', $article->features) == 'slider-top') checked @endif>
                                                    <label class="form-check-label" for="radioSuccess1">
                                                        Slider-top
                                                    </label>
                                                </div> </div>
                                            <div class="form-check" style="margin-bottom: 7px;">
                                                <div class="icheck-success d-inline">
                                                    <input class="form-check-input" type="radio" name="features" id="radioSuccess2" value="slider-footer" @if(old('features', $article->features) == 'slider-footer') checked @endif>
                                                    <label class="form-check-label" for="radioSuccess2">
                                                        Slider-footer
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-check" style="margin-bottom: 7px;">
                                                <div class="icheck-success d-inline">
                                                    <input class="form-check-input" type="radio" name="features" id="radioSuccess3" id="features" value="article" @if(old('features', $article->features) == 'article') checked @endif>
                                                    <label class="form-check-label" for="radioSuccess3">
                                                        Article
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="form-check" style="margin-bottom: 7px;">
                                                <div class="icheck-success d-inline">
                                                    <input class="form-check-input" type="radio" name="features" id="radioSuccess4" value="trendNews" @if(old('features', $article->features) == 'trendNews') checked @endif>
                                                    <label class="form-check-label" for="radioSuccess4">
                                                        TrendNews
                                                    </label>
                                                </div>
                                            </div><div class="form-check" style="margin-bottom: 7px;">
                                                <div class="icheck-success d-inline">
                                                    <input class="form-check-input" type="radio" name="features" id="radioSuccess5" value="mostPopular" @if(old('features', $article->features) == 'mostPopular') checked @endif>
                                                    <label class="form-check-label" for="radioSuccess5">
                                                        MostPopular
                                                    </label>
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input id="status" type="checkbox" name="status"
                                               @if(old('status', $article->status) == 'published' ) checked @endif
                                               data-toggle="toggle" >
                                    </div>
                                    @error('status')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>



                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>

  @endsection
@push('js')
                <script src="{{ asset('admin_files/js/front.js') }}"></script>

 @endpush
