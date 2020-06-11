<?php 
    $ids = $_POST['id'];
    print_r ($ids);

    $data = file_get_contents('data/post.txt');
    $arrList = explode("\n", $data);

    foreach ($ids as $id) {
        // $id = $_GET['id'];
        print_r ($id);
        

        $keyDelete = "";
        foreach($arrList as $key => $value){
            $arrItem = explode("|", $value);
            if($id == $arrItem[0]){            
                $keyDelete = $key;
                // print_r ($keyDelete);
                break;
            }
        }    
        unset($arrList[$keyDelete]);
        $strData = implode("\n", $arrList);
        
        }
    file_put_contents("data/post.txt", $strData);
    header("location: indexl.php");

?>