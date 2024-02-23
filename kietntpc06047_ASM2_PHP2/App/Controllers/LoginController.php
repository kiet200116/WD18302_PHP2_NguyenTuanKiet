<?php

namespace App\Controllers;

use App\Core\RenderBase;

use App\Models\UserModel;
use App\Validation\Validation;

class LoginController extends BaseController
{
    use Validation;

    private $_renderBase;

    public function loadViewHome()
    {
        if (!isset($_SESSION['user'])) {
            $this->load->render('layouts/client/pages/login');
        } else {
            $this->_renderBase->renderHeader();
            $this->load->render('layouts/client/slider');
            $this->_renderBase->renderFooter();
        }
    }


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }


    public function loadViewLogin()
    {

        if (!empty($_SESSION['user'])) {
            $this->redirect(ROOT_URL);
        }


        $this->load->render('layouts/client/pages/login');

    }


    public function handleLogin()
    {
        // validation form
// kiểm tra trước rồi mới new UserModel();
        $userModel = new UserModel();
        if(isset($_POST['submit']) ) {
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        // $user = $userModel->checkUserExist($_POST["email"]);
        // var_dump($user);
        if ($this->emtyValidation($email) === false || $this->emtyValidation($password) === false) {
            $this->errors['empty'] = "Vui lòng nhập đầy đủ các thông tin";
            $this->load->render('layouts/client/pages/login', $this->errors);

        } else {
            $user = $userModel->checkUserExist($email, $password);
            if (!$user || $user == false) {
                $this->errors['ema'] = "vui lòng kiểm tra lại";
                $this->load->render('layouts/client/pages/login', $this->errors);
            } else {
                $_SESSION['user'] = $user['email'];
                $this->resetErrors();
                $this->loadViewHome();
            }
        }
    }else{
        $this->loadViewLogin();

    }
        // if(!$user){
        //     // chuyển trang tới /?url=LoginController/loadViewLogin
        //     // báo lỗi
        // }

        // //xác thực
        // if(password_verify($_POST['password'], $user['password'])){
        //     // xử lý session
        //     $_SESSION['user'] = $user;

        // }else{

        // }



    }



    public function logout()
    {
        unset($_SESSION['user']);
        $this->loadViewHome();
    }


}