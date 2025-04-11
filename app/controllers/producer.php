<?php

    class producer extends DController{

        public function __construct(){
            Session::checkSession();
            parent::__construct();
        }
        public function index(){
            $this->producer();
        }
        
        public function producer(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');

            $table = "producer";
            $producermodel = $this->load->model('producermodel');
            $data['producer'] = $producermodel->producer($table);

            $this->load->view('cpanel/producer/producer',$data);
            $this->load->view('cpanel/footer');
        }
        public function addproducer(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/producer/addproducer');
            $this->load->view('cpanel/footer');
        }
        public function insertproducer(){
            $name_producer = $_POST['name_producer'];
            $content_producer = $_POST['content_producer'];
            
            $table = "producer";

            $data = array(
                'name_producer' => $name_producer,
                'content_producer' => $content_producer
            );
            $producermodel = $this->load->model('producermodel');
            $result = $producermodel->insertproducer($table,$data);
            if($result == 1){
                $message['msg'] = "Thêm Thành Công";
                header('Location:'.BASE_URL."producer?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thêm Thất Bại";
                header('Location:'.BASE_URL."producer?msg=".urlencode(serialize($message)));
            }
        }
        public function delete_producer($id){
            $table = "producer";
            $cond = "id_producer='$id'";
            $producermodel = $this->load->model('producermodel');
            $result = $producermodel->deleteproducer($table,$cond);
            if($result == 1){
                $message['msg'] = "Xóa Thành Công";
                header('Location:'.BASE_URL."producer?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa Thất Bại";
                header('Location:'.BASE_URL."producer?msg=".urlencode(serialize($message)));
            }
        }
        public function edit_producer($id){
            $table = "producer";
            $cond = "id_producer='$id'";
            $producermodel = $this->load->model('producermodel');
            $data['prod'] = $producermodel->producerbyid($table,$cond);
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/producer/editproducer',$data);
            $this->load->view('cpanel/footer');
        }
        public function updateproducer($id){
            $table = "producer";
            $cond = "id_producer='$id'";
            $name_producer = $_POST['name_producer'];
            $content_producer = $_POST['content_producer'];

            $data = array(
                'name_producer' => $name_producer,
                'content_producer' => $content_producer
            );
            $producermodel = $this->load->model('producermodel');

            $result = $producermodel->updateproducer($table,$data,$cond);

            if($result == 1){
                $message['msg'] = "Cập Nhật Thành Công";
                header('Location:'.BASE_URL."producer?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Cập Nhật Thất Bại";
                header('Location:'.BASE_URL."producer?msg=".urlencode(serialize($message)));
            }
        }
    }

?>