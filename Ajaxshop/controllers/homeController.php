<?php

require_once("./models/dbModel.php");

class HomeController{

    public $model;
    public $view;
    public $nav;
    public function __construct(){
         $this->model = new HomeModel();
         $this->view = new HomeView();

    }
    public function index(){
        $this->nav->output();
        $data  = $this->model->get_all_benchmarks();
        $this->view->output($data);
    }
  
}




?>