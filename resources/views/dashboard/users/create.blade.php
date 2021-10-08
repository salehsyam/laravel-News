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
                            Users Create </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('admin.users.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <x-forms.input name="name" label="Name" placeholder="Enter Your Name"/>
                            <div class="form-group">
                                <label>email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            </div>

                              <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>password_confirmation</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>

@endsection
            @push('js')
                <script>
                    jQuery(function(){
                        $("input[data-bootstrap-switch]").each(function(){
                            $(this).bootstrapSwitch('state', $(this).prop('checked'));
                        });
                        $('.tags').select2();

                        $('#content').summernote({
                            height:100,
                            toolbar: [
                                // [groupName, [list of button]]
                                ['style', ['bold', 'italic', 'underline', 'clear']],
                                ['font', ['strikethrough', 'superscript', 'subscript']],
                                ['fontsize', ['fontsize']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['height', ['height']]
                            ]
                        });



                    })
                </script>
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
    @endpush
