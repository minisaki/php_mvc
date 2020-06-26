<?php
class Upload{
    public function  __construct($file){
        $this->file = $file;
    }

    public function setFolder($folder){
        $this->folder = $folder;
    }

    public function upload(){
        global $resizeImage;
        $size = $this->file['size'];
        $ext = pathinfo($this->file['name'], PATHINFO_EXTENSION);
        $newName = time() . "." . $ext;
        $ext_accepted = ['jpg', 'png'];
        if (!in_array($ext, $ext_accepted)){
            die('Định dạng hình ảnh không hợp lệ');
        }
        if ($size > 500000){
            die("Kích thướt quá lớn");
        }

        $dir_file = PATH_UPLOAD . $this->folder . '/';
        $originDir = $dir_file . $newName;
        // $standardDir = $dir_file . 'standard/' . $newName;
        // $thumbDir = $dir_file . 'thumb/' . $newName;
        // die($dir_file);
        move_uploaded_file($this->file['tmp_name'],$originDir);
        // resize
        /*$resize = new ResizeImage($originDir);

        $resize->resizeTo(300, 300, 'exact');
        $resize->saveImage($standardDir);

        $resize->resizeTo(100, 100, 'exact');
        $resize->saveImage($thumbDir);*/

        if (isset($resizeImage[$this->folder])){
            $resize = new ResizeImage($originDir);
            $folders = $resizeImage[$this->folder];
            foreach ($folders as $folder => $size){
                if (!file_exists($dir_file . $folder)){
                    mkdir($dir_file . $folder);
                }
                $width = $size['width'];
                $height = $size['height'];
                $resize->resizeTo($width, $height, 'exact');
                $resize->saveImage($dir_file . $folder . '/' . $newName);
            }
        }
        return $newName;
    }
}
?>