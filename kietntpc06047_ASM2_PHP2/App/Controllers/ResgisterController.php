<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\UserModel;
use App\Validation\Validation;

class ResgisterController extends BaseController{
   use Validation;
    private $_renderBase;


    function __construct(){
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }
    

    public function loadViewRegister(){

        if(!empty($_SESSION['user'])){
            $this->redirect(ROOT_URL);
        }

        
        $this->load->render('layouts/client/pages/register');
       
    }


    public function handleRegister(){
        
        

        $userModel = new UserModel();
        $user = $userModel->checkUserEmailExist($_POST["email"]);


        if($user){
            // tài khoản này có rồi , vui lòng đăng nhập
            // chuyển trang tới /?url=LoginController/loadViewLogin
            // báo lỗi
        }

        $userModel->registerUser($_POST);


        // //xác thực
        // if(password_verify($_POST['password'], $user['password'])){
        //     // xử lý session
        //     $_SESSION['user'] = $user;

        // }else{
            
        // }
        
        // var_dump($_SESSION['user']);

    }



}