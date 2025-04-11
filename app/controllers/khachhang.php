<?php

    class khachhang extends DController{

        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $this->product();
        }
        public function logout(){
            Session::init();
            Session::destroy();
            header("Location:".BASE_URL."khachhang/dangnhap");
        }

        public function login_member(){
            $username    = $_POST['username'];
            $password    = md5($_POST['password']);
            $table_member = 'member';
            $membermodel  = $this->load->model('membermodel');

            $count = $membermodel->login($table_member,$username,$password);
            if($count == 0){
                $message ['msg']= "Tài khoản hoặc mật khẩu nhập sai xin nhập lại."; 
                header("Location:".BASE_URL."khachhang/dangnhap?mg=".urlencode(serialize($message)));
            }else{
                $result = $membermodel->getlogin($table_member,$username,$password);
                Session::init();
                Session::set('member',true);
                Session::set('email_member',$result[0]['email_member']);
                Session::set('userid',$result[0]['id_member']);
                header("Location:".BASE_URL."");
            }
        }
        public function dangnhap(){
            $table_member = "member";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->member($table_member);
            // menu
            $table = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table);
            // cate
            // category blog
            $table = "category_blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table);
            Session::init();
            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('login');
            $this->load->view('footer');
        }   
        
        public function insert_khachhang(){
            $username_member = $_POST['username_member'];
            $phone_member = $_POST['phone_member'];
            $email_member = $_POST['email_member'];
            $password_member = $_POST['password_member'];
            $address_member = $_POST['address_member'];
            
            $table_member = "member";
            $data = array(
                'username_member' => $username_member,
                'phone_member' => $phone_member,
                'email_member' => $email_member,
                'password_member' => MD5($password_member),
                'address_member' => $address_member
            );
            $membermodel = $this->load->model('membermodel');
            $result = $membermodel->insertmember($table_member,$data);
            if($result == 1){
                $message['msg'] = "Đăng Ký Thành Công Vui Lòng Đăng Nhập";
                header('Location:'.BASE_URL."khachhang/dangnhap?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Đăng Ký Thất Bại Kiểm Tra Lại Thông Tin";
                header('Location:'.BASE_URL."khachhang/dangnhap?msg=".urlencode(serialize($message)));
            }
        }
        
        public function thongtincanhan($id){
            Session::init();
            $table_member = "member";
            $cond = "id_member='$id'";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->memberbyid($table_member,$cond); 


            $table_category = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table_category);
            // cate
            // category blog
            $table_category_blog = "category_blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table_category_blog);

            //
            
            

            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('information',$data);
            $this->load->view('footer');
        }
        public function update_khachhang($id){
            $table_member = "member";
            $cond = "id_member='$id'";
            $membermodel = $this->load->model('membermodel');
            $username_member = $_POST['username_member'];
            // xử lý hình ảnh
            $image = $_FILES['img_member']['name'];
			$tmp_image = $_FILES['img_member']['tmp_name'];
		
			$div = explode('.', $image);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;

			$path_uploads = "public/uploads/member/".$unique_image;
            // kết thúc xử lý hình ảnh
            // xử lý hình ảnh 2
            
            // kết thúc xử lý hình ảnh
            $phone_member = $_POST['phone_member'];
           
            $address_member = $_POST['address_member'];
           
            
            
            if($image){
				$data['member'] = $membermodel->memberbyid($table_member,$cond);
				foreach ($data['member'] as $key => $value) {
					$path_unlink = "public/uploads/member/";
					unlink($path_unlink.$value['img_member']);
                    
				}
            $data = array(
                'username_member' => $username_member,
                'img_member' => $unique_image,

                'phone_member' => $phone_member,
                'address_member' => $address_member
               
                
            );
            move_uploaded_file($tmp_image, $path_uploads);
                
        }else{
            $data = array(
                'username_member' => $username_member,
                // 'img_member' => $unique_image,
                // 'img1_product' => $unique1_image,
                'phone_member' => $phone_member,
            
                'address_member' => $address_member
                
            );
        }

        
            $result = $membermodel->updatemember($table_member,$data,$cond);

            if($result == 1){
                
                $message['msg'] = "cập Nhật Thành Công";
                header('Location:'.BASE_URL."?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Cập Nhật Thất Bại";
                header('Location:'.BASE_URL."?msg=".urlencode(serialize($message)));
            }
        }
    }