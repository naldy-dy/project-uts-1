@php
  function checkRouteActive($route){
  if(Route::current()->uri == $route) return 'active';
}
@endphp

<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="{{url('beranda')}}" class="{{checkRouteActive('beranda')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{url('blog')}}" class="{{checkRouteActive('blog')}}">
                        <i class="icon-rss"></i>
                        <span>Blog</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('blog/create')}}" class="{{checkRouteActive('buat-blog')}}">
                        <i class="fa fa-plus"></i>
                        <span>Buat Blog</span>
                    </a>
                </li>
                <li class="{{checkRouteActive('kategori')}}" class="{{checkRouteActive('kategori.index')}}">
                    <a href="{{url('kategori')}}">
                        <i class="icon-list"></i>
                        <span>Kategori</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside> 