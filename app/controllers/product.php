<?php

    class product extends DController{

        public function __construct(){
            Session::checkSession();
            parent::__construct();
        }
        public function index(){
            $this->product();
        }
        public function product(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');

            $table = "product";
            $table_category = "category";
            $table_producer = "producer";
            $productmodel = $this->load->model('productmodel');
            $data['products'] = $productmodel->productid($table,$table_category,$table_producer);

            // $productmodel = $this->load->model('productmodel');
            // $data['products'] = $productmodel->productidproducer($table,$table_producer);

            $this->load->view('cpanel/product/product',$data);
            $this->load->view('cpanel/footer');
        }
        public function addproduct(){
            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            // gọi bảng category
            $table = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category($table);
            // kết thúc bảng category
            // gọi bảng producer
            $table = "producer";
            $producermodel = $this->load->model('producermodel');
            $data['prod'] = $producermodel->producer($table);
            $this->load->view('cpanel/product/addproduct',$data);
            $this->load->view('cpanel/footer');
        }
        public function insertproduct(){
            $name_product = $_POST['name_product'];
            // xử lý hình ảnh 1
            $image = $_FILES['img_product']['name'];
			$tmp_image = $_FILES['img_product']['tmp_name'];
		
			$div = explode('.', $image);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;

			$path_uploads = "public/uploads/product/".$unique_image;
            // kết thúc xử lý hình ảnh
            // xử lý hình ảnh 2
            $image1 = $_FILES['img1_product']['name'];
			$tmp_image1 = $_FILES['img1_product']['tmp_name'];
		
			$div = explode('.', $image1);
			$file_ext = strtolower(end($div));
			$unique1_image = $div[0].time().'.'.$file_ext;

			$path_uploads1 = "public/uploads/product/".$unique1_image;
            // kết thúc xử lý hình ảnh
            $price_product = $_POST['price_product'];
            $quantity_product = $_POST['quantity_product'];
            $title_product = $_POST['title_product'];
            $content_product = $_POST['content_product'];
            $parameter = $_POST['parameter'];
            $id_category = $_POST['id_category'];
            $id_producer = $_POST['id_producer'];
            
            $table = "product";
            $data = array(
                'name_product' => $name_product,
                'img_product' => $unique_image,
                'img1_product' => $unique1_image,
                'price_product' => $price_product,
                'quantity_product' => $quantity_product,
                'title_product' => $title_product,
                'content_product' => $content_product,
                'parameter' => $parameter,
                'id_category' => $id_category,
                'id_producer' => $id_producer
            );
            $productmodel = $this->load->model('productmodel');
            $result = $productmodel->insertproduct($table,$data);
            if($result == 1){
                move_uploaded_file($tmp_image, $path_uploads);
                move_uploaded_file($tmp_image1, $path_uploads1);
                $message['msg'] = "Thêm Thành Công";
                header('Location:'.BASE_URL."product?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Thêm Thất Bại";
                header('Location:'.BASE_URL."product?msg=".urlencode(serialize($message)));
            }
        }
        public function delete_product($id){
            $table = "product";
            $cond = "id_product='$id'";
            $productmodel = $this->load->model('productmodel');
            $result = $productmodel->deleteproduct($table,$cond);
            if($result == 1){
                $message['msg'] = "Xóa Thành Công";
                header('Location:'.BASE_URL."product?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Xóa Thất Bại";
                header('Location:'.BASE_URL."product?msg=".urlencode(serialize($message)));
            }
        }
        public function edit_product($id){
            $table = "product";
            $cond = "id_product='$id'";
            $productmodel = $this->load->model('productmodel');
            $data['products'] = $productmodel->productbyid($table,$cond);
            
            $table_category = "category";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category($table_category);

            $table_producer = "producer";
            $producermodel = $this->load->model('producermodel');
            $data['prod'] = $producermodel->producer($table_producer);

            $this->load->view('cpanel/header');
            $this->load->view('cpanel/menu');
            $this->load->view('cpanel/product/editproduct',$data);
            $this->load->view('cpanel/footer');
        }
        public function updateproduct($id){
            $table = "product";
            $cond = "id_product='$id'";
            $productmodel = $this->load->model('productmodel');
            $name_product = $_POST['name_product'];
            // xử lý hình ảnh
            $image = $_FILES['img_product']['name'];
			$tmp_image = $_FILES['img_product']['tmp_name'];
		
			$div = explode('.', $image);
			$file_ext = strtolower(end($div));
			$unique_image = $div[0].time().'.'.$file_ext;

			$path_uploads = "public/uploads/product/".$unique_image;
            // kết thúc xử lý hình ảnh
            // xử lý hình ảnh 2
            $image1 = $_FILES['img1_product']['name'];
			$tmp_image1 = $_FILES['img1_product']['tmp_name'];
		
			$div = explode('.', $image1);
			$file_ext = strtolower(end($div));
			$unique1_image = $div[0].time().'.'.$file_ext;

			$path_uploads1 = "public/uploads/product/".$unique1_image;
            // kết thúc xử lý hình ảnh
            $price_product = $_POST['price_product'];
            $quantity_product = $_POST['quantity_product'];
            $title_product = $_POST['title_product'];
            $content_product = $_POST['content_product'];
            $parameter = $_POST['parameter'];
            $id_category = $_POST['id_category'];
            $id_producer = $_POST['id_producer'];
            
            if($image && $image1){
				$data['products'] = $productmodel->productbyid($table,$cond);
				foreach ($data['products'] as $key => $value) {
					$path_unlink = "public/uploads/product/";
					unlink($path_unlink.$value['img_product']);
                    unlink($path_unlink.$value['img1_product']);
				}
            $data = array(
                'name_product' => $name_product,
                'img_product' => $unique_image,
                'img1_product' => $unique1_image,
                'price_product' => $price_product,
                'quantity_product' => $quantity_product,
                'title_product' => $title_product,
                'content_product' => $content_product,
                'parameter' => $parameter,
                'id_category' => $id_category,
                'id_producer' => $id_producer
            );
            move_uploaded_file($tmp_image, $path_uploads);
                move_uploaded_file($tmp_image1, $path_uploads1);
        }else{
            $data = array(
                'name_product' => $name_product,
                // 'img_product' => $unique_image,
                // 'img1_product' => $unique1_image,
                'price_product' => $price_product,
                'quantity_product' => $quantity_product,
                'title_product' => $title_product,
                'content_product' => $content_product,
                'parameter' => $parameter,
                'id_category' => $id_category,
                'id_producer' => $id_producer
            );
        }

        
            $result = $productmodel->updateproduct($table,$data,$cond);

            if($result == 1){
                
                $message['msg'] = "cập Nhật Thành Công";
                header('Location:'.BASE_URL."product?msg=".urlencode(serialize($message)));
            }else{
                $message['msg'] = "Cập Nhật Thất Bại";
                header('Location:'.BASE_URL."product?msg=".urlencode(serialize($message)));
            }
        }

    }

?>