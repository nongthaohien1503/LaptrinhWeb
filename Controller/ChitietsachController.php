<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/LaptrinhWeb/Model/Getdetail.php");

    class ChitietsachController{
        public $model;

        public function __construct() {
            $this -> model= new Getdetail();
        }

        public function invoke($id)
        {
            $books = $this->model->getbook();
            $motas = $this->model->getmota();
            $tacgias = $this->model->gettacgia();
            $nxbs = $this->model->getnxb();
            include $_SERVER['DOCUMENT_ROOT']."/LaptrinhWeb/View/detailproduct_view.php";
        }
    } 
?> 