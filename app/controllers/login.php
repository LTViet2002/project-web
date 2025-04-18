<?php

    class login extends DController{
        
        public function __construct(){
            $message = array();
            $data = array();
            parent::__construct();
        }
        public function index(){
            $this->login();
        }

        public function login(){
            Session::init();
            if(Session::get("login") == true){
                header("Location:".BASE_URL."login/dashboard");
            }
            $this->load->view('cpanel/header1');
            $this->load->view('cpanel/login');

        }
        public function dashboard(){
            Session::checkSession();
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/dashboard');
            $this->load->view('cpanel/footer');
        }
        
        public function admin_login(){
            $username    = $_POST['username'];
            $password    = md5($_POST['password']);
            $table_admin = 'admin';
            $loginmodel = $this->load->model('loginmodel');

            $count = $loginmodel->login($table_admin,$username,$password);
            if($count == 0){
                $message ['msg']= "Tài khoản hoặc mật khẩu nhập sai xin nhập lại."; 
                header("Location:".BASE_URL."login");
            }else{
                $result = $loginmodel->getlogin($table_admin,$username,$password);
                Session::init();
                Session::set('login',true);
                Session::set('username',$result[0]['username']);
                Session::set('userid',$result[0]['admin_id']);
                header("Location:".BASE_URL."login/dashboard");
            }
        }
        public function logout(){
            Session::init();
            Session::destroy();
            unset($_SESSION['login']);
            header("Location:".BASE_URL."login");
        }
    }
    

?>