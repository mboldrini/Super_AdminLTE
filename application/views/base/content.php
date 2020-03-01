
<?php
 // echo $user_infos["name"];
?>



<div class="col-md-4">
  <!-- USERS LIST -->
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Latest Members</h3>

      <div class="box-tools pull-right">
        <span class="label label-danger">8 New Members</span>
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
      <ul class="users-list clearfix">

        <?php foreach( $latest_users as $latest_user ){ ?>
          
          <li>
            <img src="<?php echo base_url(); ?>assets/img/user1-128x128.jpg" alt="User Image">
            <a class="users-list-name" href="#"><?php echo $latest_user->user_name  ?></a>
            <span class="users-list-date"></span>
          </li>
        <?php } ?>
        
      </ul>
      <!-- /.users-list -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer text-center">
      <a href="javascript:void(0)" class="uppercase">View All Users</a>
    </div>
    <!-- /.box-footer -->
  </div>
  <!--/.box -->
</div>


   <?php// print_r( //$latest_users ) ?>