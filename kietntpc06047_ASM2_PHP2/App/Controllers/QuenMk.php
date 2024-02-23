<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\UserModel;
use App\Validation\Validation;

class QuenMk extends BaseController{
   use Validation;
    private $_renderBase;


    function __construct(){
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }
    

    public function loadViewQuenMk(){
        
        $this->load->render('layouts/client/pages/QuenMk');
       
    }


    



}