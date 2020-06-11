<?php
    class DB extends mysqli{
        public function __construct($db_host, $db_user, $db_pass, $db_name){
            parent::__construct($db_host, $db_user, $db_pass, $db_name);
            if($this->connect_errno){
                die("lỗi kết nối");
            }
            // print_r($this);
    }

    public function createColunmInsert($data){
        $str ='';
        foreach($data as $key=>$value){
            $str .= ",`$key`";
        }
        $str = substr($str, 1);
        return $str;
    }

    public function createValueInsert($data){
        $str ='';
        foreach($data as $key=>$value){
            $str .= ",'$value'";
        }
        $str = substr($str, 1);
        return $str;
    }

    public function insert($data, $table=""){
        $col = $this->createColunmInsert($data);
        $value = $this->createValueInsert($data);
        $sql = "INSERT INTO `$table`(".$col.") VALUES (".$value.")";
        $this->query($sql);
        return $this->insert_id;
    }

    public function deleteDB($id, $stable=""){
        $sql = "DELETE FROM `$stable` WHERE `id` = $id ";
        $this->query($sql);
    }

    public function multiDeleteDB($ids, $stable=""){
        $strId = implode(",", $ids);
        $sql = "DELETE FROM `$stable` WHERE `id` IN (".$strId.") ";
        $this->query($sql);
    }

    public function createUpdate($data){
        $str = "";
        foreach($data as $key=>$value){
            $str .= ",`$key` = '$value' ";
        }
        $str = substr($str, 1);
        return $str;
    }
    public function update($data, $id, $stable=""){
        $str = $this->createUpdate($data);
        // die($str);
        $sql= "UPDATE `$stable` SET $str WHERE `id`=$id";
        $this->query($sql);
    }

    public function fetch_record($sql){
        $result = $this->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function fetch_records($sql){
        $result = $this->query($sql);
        $data = [];
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        };
        return $data;
    }

    public function fetch_option($sql){
        $result = $this->query($sql);
        $data = [];
        while($row = $result->fetch_assoc()){
            $data[$row['id']] = $row['name'];
        };
        return $data;
    }
}
?>