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
                        <li class="breadcrumb-item"><a href="#">{{__('site.all_categories')}}</a></li>
                        <li class="breadcrumb-item active">{{__('site.dashboard')}}</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

@endsection
@section('content')
    <div class="container-fluid">
          <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{__('site.categories')}} </h3>
                <div class="pull-right">
                <a href="{{route('admin.categories.create')}}" class="btn btn-success pull-right "  >{{__('site.create')}}</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>{{__('site.name')}}</th>
                        <th>{{__('site.created_at')}}</th>
                        <th>{{__('site.Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($categories as $category)

                    <tr>
                        <td>{{$loop->iteration}}.</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at->format('d/m/Y')}}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>{{__('site.edit')}}</a>

                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> {{__('site.delete')}}</button>
                            </form><!-- end of form -->

                        </td>

                    </tr>
                    @empty
                    <p>No_Data_found</p>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                  {{$categories->links()}}
            </ul>


            </div>
        </div>
        <!-- /.card -->
      </div>


@endsection

