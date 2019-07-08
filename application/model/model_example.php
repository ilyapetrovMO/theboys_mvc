<?php
class Model_Main extends Model{
    public function get_data(){
        $instance = ConnectDb::getInstance();
        $conn = $instance->getConnection();
        $result = $conn->query("select * from dolgi where 1");
        return $result;
    }
}