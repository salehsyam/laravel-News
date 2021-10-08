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
                        <li class="breadcrumb-item active">{{__('site.user')}}</li>
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
                            User Edit </h3>
                    </div>

                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.users.update',$user->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">

                            <x-forms.input name="name" label="Name" placeholder="Enter Your Name" value="{{$user->name}}" />

                            <div class="form-group">
                                <label>email</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
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
