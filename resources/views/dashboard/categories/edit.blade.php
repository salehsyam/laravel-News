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
                        <li class="breadcrumb-item"><a href="#">{{__('site.edit')}}</a></li>
                        <li class="breadcrumb-item active">{{__('site.category')}}</li>
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
                            {{__('site.edit')}} {{__('site.category')}} </h3>
                    </div>


                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.categories.update',$category->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <x-forms.input name="name" label="{{__('site.name')}}" placeholder="Enter Your Name" value="{{$category->name}}" />
                            <x-forms.textarea name="description" label="{{__('site.description')}}" placeholder="Enter Your description"  />

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{__('site.update')}}</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>

@endsection
