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
                        <li class="breadcrumb-item"><a href="#">{{__('site.tags')}}</a></li>
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
                <h3 class="card-title">Tags Table</h3>

                <a href="{{route('admin.tags.create')}}" class="btn btn-success" style="float: inline-end;">Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>{{__('site.name')}}</th>
                        <th>{{__('site.PostsCount')}}</th>
                        <th>{{__('site.Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($tags as $tag)
                    <tr>
                        <td>{{++$loop->index}}.</td>
                        <td>{{$tag->name}}</td>
                        <td>{{ $tag->article_count }}</td>
                        <td>
                            <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>{{__('site.edit')}}</a>

                            <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="post" style="display: inline-block">
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
                  {{$tags->links()}}

            </ul>


            </div>
        </div>
        <!-- /.card -->
      </div>


@endsection
