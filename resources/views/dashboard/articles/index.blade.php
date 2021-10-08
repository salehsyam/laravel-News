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
                        <li class="breadcrumb-item"><a href="#">{{__('site.all_articles')}}</a></li>
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
                <h3 class="card-title">{{__('Articles')}} </h3>
                <div class="pull-right">
                <a href="{{route('admin.articles.create')}}" class="btn btn-success pull-left" >{{__('site.create')}}</a>
                <a href="{{route('admin.articles.trashed')}}" class="btn btn-warning">{{__('site.trashed')}}</a>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>{{__('site.title')}}</th>
                        <th>{{__('site.description')}}</th>
                        <th>{{__('site.image')}}</th>
                        <th>{{__('site.status')}}</th>
                        <th>{{__('site.category')}}</th>
                        <th>{{__('site.Features')}}</th>
                        <th>{{__('site.Tag')}}</th>
                        <th>{{__('site.Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($articles as $article)

                    <tr>
                        <td>{{++$loop->index}}.</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->description}}</td>
                        <td><img src="{{$article->Imageurl}}" height="80px" width="80px" alt=""></td>
                        <td ><span class="{{$article->typeClass()}} ">{{$article->status}}</span></td>
                        <td>{{ $article->category->name }}</td>
                        <td>{{ $article->features }}</td>
                        <td>
                            @foreach($article->tags as $tag)
                                <div class="bg-gray-300 text-gray-700 text-sm rounded-full px-2 py-1 mr-1 mb-1">{{ substr($tag->name,0,10) }}</div>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>{{__('site.edit')}}</a>

                            <form action="{{ route('admin.articles.destroy', $article->id) }}" method="post" style="display: inline-block">
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
                  {{$articles->links()}}

            </ul>


            </div>
        </div>
        <!-- /.card -->
      </div>


@endsection
