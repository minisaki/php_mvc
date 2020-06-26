<?php
$tr = '';
foreach($this->items as $key => $item){
  $id = $item['id'];
  $name = $item['name'];
  $picture = DIR_UPLOAD.'category/thumb/'.$item['picture'];
  $status = $item['status'];
  $created = date("d/m/y i:h",$item['created_at']);
  $updated = date("d/m/Y i:h:s",$item['updated_at']);
  $tr .= '<tr>
  <td><input  style="width: 12px"  type="checkbox"></td>
  <td>'.$id.'</td>
  <td>'.$name.'</td>  
  <td><img src = "'.$picture.'" style="width:100px"></td>  
  <td>'.$status.'</td>  
  <td>'.$created.'</td>    
  <td>'.$updated.'</td>                              
  </tr>';
}
?>
<div class="content-wrapper" style="min-height: 287px;">
    <!-- Content Header (Page header) -->
  <?php echo Helper::render_admin_header('Category::List') ?>
   
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card text-center">
            <div class="card-body">
              <a class="btn btn-app" href="<?php echo URL::createLink('admin', 'category', 'index')?>">
                <i class="fas fa-redo-alt"></i> Reload
              </a>
              <a href="<?php echo URL::createLink('admin', 'category', 'form')?>" class="btn btn-app">
                <i class="fas fa-plus"></i> Add
              </a>
              <a class="btn btn-app">
                <i class="fas fa-minus"></i> Delete
              </a>
              
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <table class="table table-bordered data-table">
                <thead>                  
                  <tr>
                      <th>
                      <input style="width: 12px" id="check_all"  type="checkbox">
                      </th>
                    <th >#</th>
                    <th >Name</th>
                    <th>Picture</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Update</th>
                    <th style="width: 40px">Label</th>
                  </tr>
                </thead>
                <tbody>
                  <?php echo $tr ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
</div>