<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{URL::to('/')}}/adminhtml/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name}}</p>
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
            <li class="">
                <a href="{{route('dashboard')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview {{MenuActive::active(array('admin/product/list','admin/category/list'))}}">
                <a href="#">
                    <i class="fa fa-suitcase"></i>
                    <span>Catalog</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{MenuActive::active(array('admin/product/list'))}}"><a href="{{route('admin.product.list')}}"><i class="fa fa-circle-o"></i> Manage Products</a></li>
                    <li><a href="{{route('admin.category.list')}}"><i class="fa fa-circle-o"></i> Manage Categories</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('admin.customer')}}">
                    <i class="fa fa-users"></i> <span>Customer</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">103</small>
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-asterisk"></i>
                    <span>Sales</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">3</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="{{route('admin.orders.list')}}"><i class="fa fa-heart-o"></i> Manage Orders</a></li>
                    <li><a href="{{route('admin.category.list')}}"><i class="fa fa-heart-o"></i> Manage Invoice</a></li>
                    <li><a href="{{route('admin.category.list')}}"><i class="fa fa-heart-o"></i> Manage Shipment</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
