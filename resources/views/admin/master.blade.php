<!DOCTYPE html>
<html>
<head>
    <title>Nikmah Shoes - @yield('title')</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="/css/umega.css">

</head>
<body>
<!-- Main Sidebar start-->
<aside class="main-sidebar pinned">

    <!-- Nav tabs-->
    <ul role="tablist" class="nav nav-tabs nav-justified nav-sidebar">
        <li role="presentation" class="active"><a href="#menu" aria-controls="menu" role="tab" data-toggle="tab"><i class="ti-menu"></i></a></li>

    </ul>
    <!-- Tab panes-->
    <div class="tab-content nav-sidebar-content">
        <div id="menu" role="tabpanel" class="tab-pane fade in active">
            <ul class="list-unstyled navigation mb-0">
                <li><a href="/admin" class="bubble"><i class="ti-home"></i> Dashboard</a></li>
                <li><a href="/admin/order" class="bubble"><i class="ti-shopping-cart"></i> Order</a></li>
                <li><a href="/admin/member" class="bubble"><i class="ti-user"></i> Member</a></li>
            </ul>

        </div>

    </div>
</aside>
<!-- Main Sidebar end-->
<!-- Header start-->
<header>
    <div class="search-bar closed">
        <form>
            <div class="input-group input-group-lg">
                <input type="text" placeholder="Search for..." class="form-control"><span class="input-group-btn">
              <button type="button" class="btn btn-default search-bar-toggle"><i class="ti-close"></i></button></span>
            </div>
        </form>
    </div>
    <div class="brand pull-left"><a href="index.html" class="logo"><i class="ti-underline"></i>
            <h2>Nikmah<span>Shoes</span></h2></a></div><a href="javascript:;" role="button" class="sidebar-toggle pull-left header-icon"><i class="ti-menu text-muted"></i></a>

    <ul class="notification-bar list-inline pull-right">
        <li><a href="/admin/logout" role="button" class="header-icon"><i class="ti-power-off text-muted"></i></a></li>
    </ul>
</header>
<!-- Header end-->
<!-- Work Here start-->
@yield('page-container')
<!-- Work Here end-->

<!-- jQuery-->
<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<!-- jQuery Cookie-->
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
<!-- Bootstrap JavaScript-->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<!-- Custom JS-->
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>