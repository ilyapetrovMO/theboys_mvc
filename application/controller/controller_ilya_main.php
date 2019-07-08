<?php
class Controller_Ilya_Main extends Controller{
    function __construct(){
        //$this->model = new Model_Main();
        $this->view = new View();
    }

    function action_index(){
        //$data = $this->model->get_data();
        $this->view->generate('ilya_main_view.php','template_view.php');
    }
}