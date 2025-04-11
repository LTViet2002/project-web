<?php

    class category_blog extends DController{

        public function __construct(){
            Session::checkSession();
            parent::__construct();
        }
        public function index(){
            $this->category_blog();
        }
        
        public function category_blog(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');

            $table = "category_blog";
            $blogmodel = $this->load->model('blogmodel');
            $data['category'] = $blogmodel->category_blog($table);


            $this->load->view('cpanel/blog/category_blog',$data);
            $this->load->view('cpanel/footer');
        }
        public function addcategory_blog(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/blog/addcategory_blog');
            $this->load->view('cpanel/footer');
        }
        public function insertcategory_blog(){
            $name_category_blog = $_POST['name_category_blog'];

            
            $table = "category_blog";
            $data = array(
                'name_category_blog' => $name_category_blog
            );
            $blogmodel = $this->load->model('blogmodel');
            $result = $blogmodel->insertblog($table, $data);
            if($result == 1){
                $message['msg'] = "Thêm Thành Công";
                header('Location:'.BASE_URL."category_blog?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thêm Thất Bại";
                header('Location:'.BASE_URL."category_blog?msg=".urlencode(serialize($message)));
            }
        }
        public function delete_category_blog($id){
            $table = "category_blog";
            $cond = "id_category_blog='$id'";
            $blogmodel = $this->load->model('blogmodel');
            $result = $blogmodel->deleteblog($table,$cond);
            if($result == 1){
                $message['msg'] = "Xóa Thành Công";
                header('Location:'.BASE_URL."category_blog?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa Thất Bại";
                header('Location:'.BASE_URL."category_blog?msg=".urlencode(serialize($message)));
            }
        }
        public function edit_category_blog($id){
            $table = "category_blog";
            $cond = "id_category_blog='$id'";
            $blogmodel = $this->load->model('blogmodel');
            $data['cate'] = $blogmodel->blogbyid($table,$cond);
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/blog/editcategory_blog',$data);
            $this->load->view('cpanel/footer');
        }
        public function updatecategory_blog($id){
            $table = "category_blog";
            $cond = "id_category_blog='$id'";
            $name_category_blog = $_POST['name_category_blog'];
            $data = array(
                'name_category_blog' => $name_category_blog
            );
            $blogmodel = $this->load->model('blogmodel');
            $result = $blogmodel->updateblog($table,$data,$cond);
            if($result == 1){
                $message['msg'] = "Cập Nhật Thành Công";
                header('Location:'.BASE_URL."category_blog?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Cập Nhật Thất Bại";
                header('Location:'.BASE_URL."category_blog?msg=".urlencode(serialize($message)));
            }
        }
    }

?>