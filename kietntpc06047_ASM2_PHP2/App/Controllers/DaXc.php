<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\ProductModel;
use App\Models\UserModel;
use App\Validation\Validation;

class DaXc extends BaseController{
   use Validation;
    private $_renderBase;
    private $_model;
    public $data = [];


    function __construct(){
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->_model = new ProductModel;
    }
    

    public function loadViewDaXc(){
        
        $this->load->render('layouts/client/header');
        $this->data['listDa'] = $this->_model->getAllProduct();

        $this->load->render('layouts/client/DaXc', $this->data);
        $this->load->render('layouts/client/footer');
       
    }

    public function listDa(){
        
       
        $this->data['listDa'] = $this->_model->getAllProduct();
        // var_dump($this->data['listTopic']);die();
        $this->load->render('layouts/client/DaXc', $this->data);
        
    }
    public function handleAdd(){

        if(isset($_POST['them']) && $_POST['them']){
            $data = [
                'name' => $_POST['name'],
                'nameDa' => $_POST['nameDa'],
                'start_time' => $_POST['start_time'],
                'end_time' => $_POST['end_time']
                
            ];
            $this->_model->addProduct($data);
        }
        $this->loadViewDaXc();
    }

    public function suaDaXc(){
        $id = $_GET['id'];
        $this->data = $this->_model->getOneTopic($id);
        
        $this->load->render('layouts/client/header');
        $this->load->render('layouts/client/Edit', $this->data);
        $this->load->render('layouts/client/footer');
        
    }


    public function SuaXl(){
        $id =  $_POST['id'];
        $data = [
            
            'name' => $_POST['name'],
            'nameDa' => $_POST['nameDa'],
            'start_time' => $_POST['start_time'],
            'end_time' => $_POST['end_time']
            
        ];
        $updateDa = $this->_model->updateProduct($id ,$data,'id');
        $this->loadViewDaXc();
        
    }


    



}