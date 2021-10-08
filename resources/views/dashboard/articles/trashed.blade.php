@extends('layouts.admin.master')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Posts Table</h3>

                <a href="{{route('admin.articles.index')}}" class="btn btn-success" style="float:right;">back</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>description</th>
                         <th>category</th>

                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($posts as $post)
                        <tr>
                            <td>{{++$loop->index}}.</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{ $post->category->name }}</td>
                                <td>
                                    <a href="{{route('admin.trashed.restore', $post->id)}}" class="btn btn-primary float-right btn-sm">Restore</a>

                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> delete</button>
                                </form><!-- end of form -->

                            </td>

                        </tr>
                    @empty
                           <h2>No_Data_found</h2>

                    @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">


                </ul>


            </div>
        </div>
        <!-- /.card -->
    </div>


@endsection
