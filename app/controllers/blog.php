<?php

    class blog extends DController{

        public function __construct(){
            // lấy dữ liệu của login vào
            Session::checkSession();
            parent::__construct();
        }
        public function index(){
            $this->blog();
        }
        // vào hàm
        public function blog(){
            // gọi tên file
            $this->load->view('cpanel/header'); 
            $this->load->view('cpanel/menu');
            // gọi table sql
            $table = "blog";
            $table_category = "category_blog";
            // gọi tới model xử lý
            $blogmodel = $this->load->model('blogmodel');
            $data['blog'] = $blogmodel->blog($table,$table_category);
            // truyền dữ liệu
            $this->load->view('cpanel/blog/blog',$data);
            $this->load->view('cpanel/footer');
        }
        // tới trang Thêm 
        public function addblog(){
            // gọi các file
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $table = "category_blog";
            $blogmodel = $this->load->model('blogmodel');
            $data['category'] = $blogmodel->category_blog($table);
            // gọi tới trang thêm bài viết
            $this->load->view('cpanel/blog/addblog',$data);
            $this->load->view('cpanel/footer');
        }
        // truyền dữ liệu từ ở thêm bài viết vào insert table
        public function insertblog(){
            // xử lý dữ liệu từ addblog
            $name_blogs = $_POST['name_blogs'];
            // xử lý hình ảnh truyền file
            $image = $_FILES['img']['name'];
			$tmp_image = $_FILES['img']['tmp_name'];
		
			$div = explode('.', $image);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;

			$path_uploads = "public/uploads/blog/".$unique_image;
            // kết thúc xử lý file ảnh và tiếp tục xử lý dữ liệu
            $title_blog = $_POST['title_blog'];
            $content_blog = $_POST['content_blog'];
            $id_category_blog = $_POST['id_category_blog'];
            // truy cập đến bảng
            $table = "blog";
            // truyền dữ liệu nhập từ addblog vào table
            $data = array(
                'name_blogs' => $name_blogs,
                'img' => $unique_image,
                'title_blog' => $title_blog,
                'content_blog' => $content_blog,
                'id_category_blog' => $id_category_blog
            );
            $blogmodel = $this->load->model('blogmodel');
            $result = $blogmodel->insertblog($table, $data);
            // nhận thông báo nếu thành công thì trả 1
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                // khi thành công sẽ báo thêm thành công
                $message['msg'] = "Thêm Thành Công";
                // khi thành công trả về trang addblog để có thể thêm bài viết
                header('Location:'.BASE_URL."blog/addblog?msg=".urlencode(serialize($message)));
            }else{
                // nếu thất bại nhận dữ liệu thì sẽ trả về thêm thất bại
                $message['msg'] = "Thêm Thất Bại";
                // trả về thất bại
                header('Location:'.BASE_URL."blog/addblog?msg=".urlencode(serialize($message)));
            }
        }
        // xóa bài viết qua id / truyền id vào để nhận thông số
        public function delete_blog($id){
            // gọi table
            $table = "blog";
            // tại cond mình gọi cond thay vì gọi id để dễ xử lý
            $cond = "id_blog='$id'";
            // gọi model
            $blogmodel = $this->load->model('blogmodel');
            $result = $blogmodel->deleteblog($table,$cond);
            // trả dữ liệu
            if($result == 1){
                // nếu trả về thành công sẽ thông báo và trả về trang blog
                $message['msg'] = "Xóa Thành Công";
                header('Location:'.BASE_URL."blog?msg=".urlencode(serialize($message)));
            }else{
                // nếu trả thất bại sẽ có thông báo
                $message['msg'] = "Xóa Thất Bại";
                header('Location:'.BASE_URL."blog?msg=".urlencode(serialize($message)));
            }
        }
        // vào trang cập nhật lại dữ liệu và truyền id để lấy dữ liệu từ table
        public function edit_blog($id){
            // gọi table
            $table = "blog";
            // tại cond mình gọi cond thay vì gọi id để dễ xử lý
            $cond = "id_blog='$id'";
            // gọi model
            $blogmodel = $this->load->model('blogmodel');
            $data['blog'] = $blogmodel->blogbyid($table,$cond);
           
            $table_category = "category_blog";
            $category_blog = $this->load->model('category_blog');
            $data['cate'] = $category_blog->category_blog($table_category);

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            // truyền data vào để hiện dữ liệu cũ
            $this->load->view('cpanel/blog/editblog',$data);
            $this->load->view('cpanel/footer');
        }
        // update truyền $id lấy id cần sửa
        public function updateblog($id){
            // gọi table 
            $table = "blog";
            // gọi cond để dễ xử lý id
            $cond = "id_blog='$id'";
            $blogmodel = $this->load->model('blogmodel');
            // truyền dữ liệu từ trang edit vào để cập nhật
            $name_blogs = $_POST['name_blogs'];
            // xử lý gửi file ảnh
            $image = $_FILES['img']['name'];
			$tmp_image = $_FILES['img']['tmp_name'];
		
			$div = explode('.', $image);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;

			$path_uploads = "public/uploads/blog/".$unique_image;
            // kết thúc xử lý file ảnh
            // tiếp tục xử lý dữ liệu
            $title_blog = $_POST['title_blog'];
            $content_blog = $_POST['content_blog'];
            $id_category_blog = $_POST['id_category_blog'];
            // truyền data vào vào table
            if($image){
				$data['blog'] = $blogmodel->blogbyid($table,$cond);
				foreach ($data['blog'] as $key => $value) {
					$path_unlink = "public/uploads/blog/";
					unlink($path_unlink.$value['img']);
				}
            $data = array(
                'name_blogs' => $name_blogs,
                'img' => $unique_image,
                'title_blog' => $title_blog,
                'content_blog' => $content_blog,
                'id_category_blog' => $id_category_blog
            );
            move_uploaded_file($tmp_image, $path_uploads);
        }else{
            $data = array(
                'name_blogs' => $name_blogs,
                // 'img' => $unique_image,
                'title_blog' => $title_blog,
                'content_blog' => $content_blog,
                'id_category_blog' => $id_category_blog
            );
        }
            // gọi model
            
            $result = $blogmodel->updateblog($table,$data,$cond);
            // trả dữ liệu
            if($result == 1){
                
                // thông báo thành công nếu dữ liệu về 1
                $message['msg'] = "Thêm Thành Công";
                header('Location:'.BASE_URL."blog?msg=".urlencode(serialize($message)));
            }else{
                // thất bại nếu dữ liệu trả về 0
                $message['msg'] = "Thêm Thất Bại";
                header('Location:'.BASE_URL."blog?msg=".urlencode(serialize($message)));
            }
        }
    }

?>