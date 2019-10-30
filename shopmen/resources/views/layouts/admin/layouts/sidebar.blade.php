<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('img/avatar.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active ">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Bảng điều khiển</span>
            
          </a>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-bar-chart-o"></i>
            <span>Biểu đồ doanh thu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a> 
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-calendar"></i> Doanh thu tháng</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-file-word-o"></i>
            <span>Quản lý bài viết</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a> 
          <ul class="treeview-menu">
            <li><a href="{{route('list.news')}}"><i class="fa fa-file-word-o"></i>Tất các bài viết</a></li>
            <li><a href="{{route('list.add')}}"><i class="fa fa-pencil-square-o"></i> Thêm bài viết</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-archive"></i>
            <span>Quản lý Order</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a> 
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-file-word-o"></i>Đơn hàng chờ xác nhận</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-pencil-square-o"></i> Đơn hàng đã xác nhận</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-fw fa-folder"></i>
            <span>Quản lý Danh mục sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a> 
          <ul class="treeview-menu">
            <li><a href="{{route('list.cate')}}"><i class="fa fa-file-text-o"></i>Danh sách tất cả danh mục</a></li>
            <li><a href="{{route('add.cate')}}"><i class="fa fa-pencil-square-o"></i> Thêm mới danh mục</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file-powerpoint-o"></i>
            <span>Quản lý sản phẩm</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list.product')}}"><i class="fa fa-circle-o"></i> Tất cả sản phẩm</a></li>
            <li><a href="{{route('list.product')}}"><i class="fa fa-pencil-square-o"></i> Thêm mới sản phẩm</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Quản lý Sự kiện</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="pages/UI/general.html"><i class="fa fa-users"></i> Tất cả Sự kiện</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa  fa-user-plus"></i>Slide show </a></li>
            <li><a href="pages/UI/icons.html"><i class="fa  fa-user-plus"></i>Mã giảm giá </a></li>
            
          </ul>
        </li>
        
        <li class="header">Sự kiện</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>Quản lý user</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li><a href="pages/UI/general.html"><i class="fa fa-users"></i> Tất cả user</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa  fa-user-plus"></i>Thêm mới user </a></li>
            
            
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-comments-o"></i> <span>Quản lý comments</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-cog"></i> <span>Cài đặt giao diện</span>
          </a>
        </li>
       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>