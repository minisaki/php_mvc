<?php
$select_status =  ['defaul'=>'--Select Status--', 'active'=>'Kích Hoạt', 'inactive'=> 'Chưa Kích Hoạt']
?>
<div class="content-wrapper" style="min-height: 287px;">
    <!-- Content Header (Page header) -->
    <?php echo Helper::render_admin_header('Category::Form') ?>
   
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card text-center">
            <div class="card-body">
              <a class="btn btn-app" href="<?php echo URL::createLink('admin', 'category', 'index')?>">
                <i class="fas fa-arrow-left"></i> Back
              </a>
              <a onclick="submitForm('<?php echo URL::createLink('admin', 'category', 'save')?>')"  class="btn btn-app">
                <i class="far fa-save"></i> Save
              </a>
              <a onclick="submitForm('<?php echo URL::createLink('admin', 'category', 'save', ['type'=> 'close'])?>')" class="btn btn-app">
                <i class="fas fa-store-alt-slash"></i> Save & Close
              </a>
              <a onclick="submitForm('<?php echo URL::createLink('admin', 'category', 'save', ['type'=> 'new'])?>')" class="btn btn-app">
                <i class="far fa-file-alt"></i> Save & new
              </a>
              
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
            <form id="frmData" role="form" method="POST" action="" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >Name</label>
                    <input name="form[name]" type="text" class="form-control"  placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label >Description</label>
                    <textarea name="form[description]" class="form-control" name="" id="" cols="30" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                        <label>Status</label>
                        <select name="form[status]" class="form-control">
                        <?php echo Helper::create_select($select_status,'') ?>
                          
                        </select>
                      </div>
                 
                  <div class="form-group">
                    <label for="exampleInputFile">Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="picture" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                
              </form>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>