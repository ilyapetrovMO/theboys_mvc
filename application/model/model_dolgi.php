<?php
class Model_Dolgi extends Model{
    public function get_data(){
        $instance = ConnectDb::getInstance();
        $conn = $instance->getConnection();
        $result = $conn->query("select nameDolg, checkFlag from dolgi where 1");
        return $result;
    }
    public function update($nameDolg,$value){
        $instance = ConnectDb::getInstance();
        $conn = $instance->getConnection();
        $sql = "update dolgi set checkFlag = '".$value."' where dolgi.nameDolg = '".$nameDolg."';";
        $conn->query($sql);
    }
}