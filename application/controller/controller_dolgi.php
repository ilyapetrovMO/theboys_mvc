<?php
class Controller_Dolgi extends Controller{
    function __construct(){
        $this->view = new View();
        $this->model = new Model_Dolgi();
    }

    function action_index(){
        $data = $this->model->get_data();
        $this->view->generate('dolgi_view.php','template_view.php',$data);
    }

    function action_formUpdate(){
        $this->model->update($_POST['dolgName'],$_POST['delorpost']);
        $data = $this->model->get_data();
        $this->view->generate('dolgi_view.php','template_view.php',$data);
    }
}