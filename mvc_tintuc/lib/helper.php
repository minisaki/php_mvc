<?php
    class Helper{
        public static function render_admin_header($title){
            $html = '<div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">'.$title.'</h1>
                </div><!-- /.col -->          
              </div>
            </div>
          </div>';
            return $html;
        }

        public static function create_select($data, $keyselect){
          $html = '';
          foreach($data as $key => $value){
            $selected = $key  == $keyselect ? "selected" : "";
            $html .= '<option '.$selected. ' value="'.$key.'">'.$value.'</option>';
          }
          return $html;
        }

    }
?>