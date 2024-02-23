<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\ProductModel;
use App\Models\UserModel;
use App\Validation\Validation;

class AddDa extends BaseController{
   use Validation;
    private $_renderBase;
    private $_model;
public $data = [];

    function __construct(){
        parent::__construct();
        $this->_model = new ProductModel();
        $this->_renderBase = new RenderBase();
    }
    

    public function loadViewAddDa(){
        
        $this->load->render('layouts/client/header');
        

        $this->load->render('layouts/client/AddDa');

        $this->load->render('layouts/client/footer');
       
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
    $this->loadViewAddDa();
}
    



}