<!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">

            <!-- <li class="header">Menu</li> -->

            <li class="active treeview">
              <a href="<?php echo site_url('dashboard/') ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>

     
        

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- CONTENT -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo isset($page_infos["location"]) ? $page_infos["location"] : "" ?>
            <small><?php echo isset($page_infos["description"]) ? $page_infos["description"] : "" ?></small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
              <!-- Main row -->
              <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 ">