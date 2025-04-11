<?php

    class index extends DController{
        
        public function __construct(){
            $data = array();
            Session::init();
            parent::__construct();
        }
        public function index(){
            $this->homepage();
        }

        public function homepage(){
            $table_member = "member";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->member($table_member);
            // category...
            $table_category = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table_category);
            // cate
            // category blog
            $table_category_blog = "category_blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table_category_blog);

            $table_product = "product";
            $homemodel = $this->load->model('homemodel');
            $data['product_1'] = $homemodel->product_1($table_product);

            $table_blog = "blog";
            $blogmodel = $this->load->model('blogmodel');
            $data['blog'] = $blogmodel->blog_1($table_blog);

            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('homepage',$data);
            $this->load->view('footer');
        }
        public function notfound(){
            $this->load->view('404');

        }
        // public function product(){
        //     $table = "category";
        //     $categorymodel = $this->load->model('categorymodel');
        //     $data['category'] = $categorymodel->category_home($table);
        //     $this->load->view('header');
        //     $this->load->view('menu',$data);
        //     $this->load->view('product');
        //     $this->load->view('footer');

        // }
        
        public function lienhe()
        {
            # code...
            $table_member = "member";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->member($table_member);
            // category...
            $table_category = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table_category);
            // cate
            // category blog
            $table_category_blog = "category_blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table_category_blog);
            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('contact',$data);
            $this->load->view('footer');
        }
        public function gioithieu(){
            $table_member = "member";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->member($table_member);
            $table_category = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table_category);
            // cate
            // category blog
            $table_category_blog = "category_blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table_category_blog);
            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('introduce',$data);
            $this->load->view('footer');
        }
    }
    

?>