<section class="content">
  <div class="row">      
    <div class="col-md-12">  

      <form action="" id="form_profile">
        <div class="form-group">

          <input id="id" name="id" value="<?php echo $user_infos["id"] ?>" hidden>

          <div class="row">

              <div class="form-group col-xs-4 col-sm-4 col-md-4">
                <label>Name:</label>
                <input type="text" class="form-control" placeholder="Your Name" id="user_name" name="user_name" value="<?php echo $user_infos["name"] ?>">
                <span class="help-block"></span>
              </div>

              <div class="form-group col-xs-3 col-sm-3 col-md-3">
                  <label>User Description:</label>
                  <input type="text" class="form-control" placeholder="Description" id="user_description" name="user_description" value="<?php echo $user_infos["description"] ?>">
                  <span class="help-block"></span>
              </div>

            <div class="form-group col-xs-4 col-sm-4 col-md-4">
              <label>Email:</label>
              <input type="text" class="form-control" readonly placeholder="your@email.com" id="user_email" name="user_email" value="<?php echo $user_infos["email"] ?>">
              <span class="help-block"></span>
            </div>

          </div><!-- ROW -->

          <button type="submit" id="btn_salvar_aluno" class="btn btn-primary pull-left">Salvar</button>
          <button type="button" class="btn btn-danger " data-dismiss="modal">Cancelar</button>

        </div><!-- form-group -->

    </div><!-- /.col-md-12 -->
  </div><!-- /.row -->
</section><!-- /.content -->