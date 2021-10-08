<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/') }}"  class="brand-link">
        <img  src="{{asset('admin_files/img/AdminLTELogo.png')}}"
              alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3"
              style="opacity: .8">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img  src="{{asset('admin_files/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <p  class="text-white-50" > {{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('admin/') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <span>{{__('site.dashboard')}}</span>
                    </a></li>
           

                <li class="nav-item">
                    <a href="{{ route('admin.categories.index') }}" class="nav-link">
                        <i class="fas fa-book"></i>
                        <span>{{__('site.categories')}}</span></a>
                </li>
                     
               
                <li class="nav-item"><a href="{{ route('admin.articles.index') }}" class="nav-link"><i class="nav-icon fas fa-th"></i><span>{{__('site.articles')}}</span></a></li>
                
                {{----}}
                <li class="nav-item"><a href="{{ route('admin.tags.index') }}" class="nav-link"><i class="nav-icon fas fa-tags"></i><span>{{__('site.tags')}}</span></a></li>
                
                {{----}}
                <li class="nav-item"><a href="{{ route('admin.videos.index') }}" class="nav-link"><i class="nav-icon fas fa-video"></i><span>{{__('site.videos')}}</span></a></li>

                {{----}}
                <li class="nav-item"><a href="{{ route('admin.users.index') }}" class="nav-link"><i class="fas fa-users"></i><span>{{__('site.users')}}</span></a></li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
