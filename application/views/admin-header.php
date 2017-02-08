<?php 
  $this->session->userdata('username');
?>

<head>
    <title>Sepakat</title>

    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>"/>
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css/style-extra.css"); ?>"/> -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style-admin.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/footer.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/summernote.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/adminlte.min.css"); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/_all-skins.min.css"); ?>"/>

    <link rel="" href="<?php echo base_url();?>"/>
</head>
<body>
    <header class="main-header">
    <a href="../../index2.html" class="logo">
    <!-- LOGO -->
    Sepakat-ADMIN
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-envelope-o"></i>
            <span class="label label-success">4</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 4 messages</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li><!-- start message -->
                  <a href="#">
                    <div class="pull-left">
                      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <h4>
                      Sender Name
                      <small><i class="fa fa-clock-o"></i> 5 mins</small>
                    </h4>
                    <p>Message Excerpt</p>
                  </a>
                </li><!-- end message -->
                ...
              </ul>
            </li>
            <li class="footer"><a href="#">See All Messages</a></li>
          </ul>
        </li>
        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="ion ion-ios-people info"></i> Notification title
                  </a>
                </li>
                ...
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul>
        </li>
        <!-- Tasks: style can be found in dropdown.less -->
        <li class="dropdown tasks-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-flag-o"></i>
            <span class="label label-danger">9</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 9 tasks</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      Design some buttons
                      <small class="pull-right">20%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                  </a>
                </li><!-- end task item -->
                ...
              </ul>
            </li>
            <li class="footer">
              <a href="#">View all tasks</a>
            </li>
          </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url();?>assets/img/user2-160x160.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs">Administrator</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
              <p>
                Alexander Pierce - Web Developer
                <small>Member since Nov. 2012</small>
              </p>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
              <div class="col-xs-4 text-center">
                <a href="#">Followers</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Sales</a>
              </div>
              <div class="col-xs-4 text-center">
                <a href="#">Friends</a>
              </div>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="<?= base_url('login/logout')?>" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    </nav>
    </header>

    <div class="main-sidebar">
      <!-- Inner sidebar -->
      <div class="sidebar">
        <!-- user panel (Optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url();?>assets/img/user2-160x160.jpg" class="img-circle" alt="">
          </div>
          <div class="pull-left info">
            <p>Administrator</p>

            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div><!-- /.user-panel -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
          <li class="header">NAVIGATION</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="#"><span>Dashboard</span></a></li>
          <li><a href="<?= base_url('user/');?>"><span>User</span></a></li>
          <li><a href="<?= base_url('admin/posting');?>"><span>Posting</span></a></li>
          <li><a href="<?= base_url('bahan_baku/admin/');?>"><span>Perusahaan Bahan Baku</span></a></li>
          <li><a href="<?= base_url('manufaktur/admin/');?>"><span>Perusahaan Manufaktur</span></a></li>
          <li><a href="<?= base_url('admin/kategori');?>"><span>Kategori</span></a></li>
          <li><a href="<?= base_url('admin/barang_bahan/');?>"><span>Barang/Bahan</span></a></li>
          <li><a href="<?= base_url('admin/provinsi/');?>"><span>Provinsi</span></a></li>
          <li><a href="<?= base_url('admin/kota/');?>"><span>Kota</span></a></li>
        </ul><!-- /.sidebar-menu -->

      </div><!-- /.sidebar -->
    </div><!-- /.main-sidebar -->
</body>
