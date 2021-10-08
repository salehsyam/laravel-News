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
                        <li class="breadcrumb-item"><a href="#">{{__('site.users')}}</a></li>
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
                <h3 class="card-title">Users Table</h3>

                <a href="{{route('admin.users.create')}}" class="btn btn-success" style="float: inline-end;">Create</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>{{__('site.name')}}</th>
                        <th>{{__('site.email')}}</th>
                        <th>{{__('site.created_at')}}</th>
                        <th>{{__('site.Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)

                    <tr>
                        <td>{{$loop->iteration}}.</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->format('d/m/Y')}}</td>
                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>{{__('site.edit')}}</a>

                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" style="display: inline-block">
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
                  {{$users->links()}}
            </ul>


            </div>
        </div>
        <!-- /.card -->
      </div>


@endsection

