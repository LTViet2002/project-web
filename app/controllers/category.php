<?php

    class category extends DController{

        public function __construct(){
            Session::checkSession();
            parent::__construct();
        }
        public function index(){
            $this->category();
        }
        
        public function category(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');

            $table = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category($table);


            $this->load->view('cpanel/category/category',$data);
            $this->load->view('cpanel/footer');
        }
        public function addcategory(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/category/addcategory');
            $this->load->view('cpanel/footer');
        }
        public function insertcategory(){
            $name_category = $_POST['name_category'];

            
            $table = "category";
            $data = array(
                'name_category' => $name_category
            );
            $categorymodel = $this->load->model('categorymodel');
            $result = $categorymodel->insertcategory($table,$data);
            if($result == 1){
                $message['msg'] = "Thêm Thành Công";
                header('Location:'.BASE_URL."category?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thêm Thất Bại";
                header('Location:'.BASE_URL."category?msg=".urlencode(serialize($message)));
            }
        }
        public function delete_category($id){
            $table = "category";
            $cond = "id_category='$id'";
            $categorymodel = $this->load->model('categorymodel');
            $result = $categorymodel->deletecategory($table,$cond);
            if($result == 1){
                $message['msg'] = "Xóa Thành Công";
                header('Location:'.BASE_URL."category?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa Thất Bại";
                header('Location:'.BASE_URL."category?msg=".urlencode(serialize($message)));
            }
        }
        public function edit_category($id){
            $table = "category";
            $cond = "id_category='$id'";
            $categorymodel = $this->load->model('categorymodel');
            $data['cate'] = $categorymodel->categorybyid($table,$cond);
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/category/editcategory',$data);
            $this->load->view('cpanel/footer');
        }
        public function updatecategory($id){
            $table = "category";
            $cond = "id_category='$id'";
            $name_category = $_POST['name_category'];
            $data = array(
                'name_category' => $name_category
            );
            $categorymodel = $this->load->model('categorymodel');

            $result = $categorymodel->updatecategory($table,$data,$cond);

            if($result == 1){
                $message['msg'] = "Thêm Thành Công";
                header('Location:'.BASE_URL."category?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thêm Thất Bại";
                header('Location:'.BASE_URL."category?msg=".urlencode(serialize($message)));
            }
        }
    }

?>