<?php

    class user extends DController{

        public function __construct(){
            Session::checkSession();
            parent::__construct();
        }
        public function index(){
            $this->user();
        }
        
        public function user(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');

            $table = "member";
            $usermodel = $this->load->model('usermodel');
            $data['user'] = $usermodel->user($table);


            $this->load->view('cpanel/user/user',$data);
            $this->load->view('cpanel/footer');
        }
        public function delete_user($id){
            $table = "member";
            $cond = "id_member='$id'";
            $usermodel = $this->load->model('usermodel');
            $result = $usermodel->deleteuser($table,$cond);
            if($result == 1){
                $message['msg'] = "Xóa Thành Công";
                header('Location:'.BASE_URL."user?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa Thất Bại";
                header('Location:'.BASE_URL."user?msg=".urlencode(serialize($message)));
            }
        }
    }

?>