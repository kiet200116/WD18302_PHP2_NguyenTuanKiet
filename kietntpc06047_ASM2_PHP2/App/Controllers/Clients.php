<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\UserModel;
use App\Validation\Validation;

class Clients extends BaseController{
   use Validation;
    private $_renderBase;


    function __construct(){
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }
    

    public function loadViewClient(){
        
        $this->load->render('layouts/client/header');
        

        $this->load->render('layouts/client/Clients');

        $this->load->render('layouts/client/footer');
       
    }

    


    



}