<!DOCTYPE html>
<html>
   
   <?php $this->load->view('header/top'); ?>

   <body class="hold-transition skin-blue sidebar-mini">
      <div class="wrapper">
         <?php $this->load->view('header/sidebar'); ?>
         <div class="content-wrapper">
            
          <section class="content-header">
                   
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-user"></i> User</a></li>
                        <li class="active">Update User </li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                       
                            <section class="content">
                       
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
                    
                Update User
                </h3>
              
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal" action="<?=base_url()?>user/update" method="POST">
                 <input type="hidden" value="<?=$edit_user->Id_User?>" name="Id_User">

              <div class="box-body">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Username*</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Username" name="Username" required="" value="<?=$edit_user->Username?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Email*</label>

                  <div class="col-sm-10">
                      <input type="email" class="form-control" placeholder="Email" name="Email" required="" value="<?=$edit_user->Email?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Password*</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Password" name="Password" required="" value="<?=$edit_user->Password?>">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
<a href="<?= base_url()?>user/user_list" class="btn btn-danger">Cancle</a>
                  <button type="submit" name="submit" class="btn btn-primary pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
                            
                            
                            
                        </div>
                    </div>
                </section>

         </div>
         <?php
            $this->load->view('header/footer');
            ?>
         <div class="control-sidebar-bg"></div>
      </div>
      <?php
         $this->load->view('header/down');
         ?>
   </body>
</html>
