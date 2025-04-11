<?php

    class sanpham extends DController{
        
        public function __construct(){
            $data = array();
            Session::init();
            parent::__construct();
        }
        public function index(){
            $this->danhmuc();
        }

        public function danhmuc($id){
            $table_member = "member";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->member($table_member);
            $table_category = "category";
            $table_product = "product";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table_category);
            $data['category_byid'] = $categorymodel->category_home_byid($table_category,$table_product,$id);

            $table_category_blog = "category_blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table_category_blog);

            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('product',$data);
            $this->load->view('footer');
        }
        public function tatca(){
            $table_member = "member";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->member($table_member);
            $table_category = "category";
            $table_product = "product";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table_category);
            $data['category_byid'] = $categorymodel->product_home($table_product);

            $table_category_blog = "category_blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table_category_blog);

            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('product',$data);
            $this->load->view('footer');
        }
        public function tatcatintuc(){
            $table_member = "member";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->member($table_member);
            // category
            $table_category = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table_category);
            // end
            $table_category_blog = "category_blog";
            $table_blog = "blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table_category_blog);
            $data['blog_id'] = $category_blog->blog_home_all($table_blog);

            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('blog',$data);
            $this->load->view('footer');
        }
        public function tintuc($id){
            $table_member = "member";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->member($table_member);
            $table_category = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table_category);

            $table_category_blog = "category_blog";
            $table_blog = "blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table_category_blog);
            $data['blog_id'] = $category_blog->category_blog_home_byid($table_category_blog,$table_blog,$id);

            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('blog',$data);
            $this->load->view('footer');
        }
        public function chitietsanpham($id){
            $table_member = "member";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->member($table_member);
            // category product
            $table_category = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table_category);
            // end
            // producer
            // end
            // category blog
            $table_category_blog = "category_blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table_category_blog);
            // end
            $table_product = "product";
            $cond = "$table_category.id_category=$table_product.id_category AND $table_product.id_product='$id'";
            $homemodel = $this->load->model('homemodel');
            $data['detail_product'] = $homemodel->detail_product_home($table_category,$table_product,$cond);

            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('detailproduct',$data);
            $this->load->view('footer');
        }
        public function chitiettintuc($id){
            $table_member = "member";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->member($table_member);
            
            
            // category product
            $table_category = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table_category);
            // end
            // category blog
            $table_category_blog = "category_blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table_category_blog);
            // end
            // 
            $table_blog = "blog";
            $blogmodel = $this->load->model('blogmodel');
            $data['blog'] = $blogmodel->blogs($table_blog);
            // 
            $cond = "$table_category_blog.id_category_blog=$table_blog.id_category_blog AND $table_blog.id_blog='$id'";
            $homemodel = $this->load->model('homemodel');
            $data['detail_blog'] = $homemodel->detail_blog_home($table_category_blog,$table_blog,$cond);
            // 
            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('detailblog',$data);
            $this->load->view('footer');
        }
    }
    

?>