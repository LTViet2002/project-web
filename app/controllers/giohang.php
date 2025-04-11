<?php

    class giohang extends DController{
        
        public function __construct(){
            $data = array();
            Session::init();
            parent::__construct();
        }
        public function index(){
            $this->giohang();
        }

        public function giohang(){
            $table_member = "member";
            $membermodel = $this->load->model('membermodel');
            $data['member'] = $membermodel->member($table_member);
            // Session::init();
            $table_category = "category";
            $table_product = "product";
            $categorymodel = $this->load->model('categorymodel');
            $data['category'] = $categorymodel->category_home($table_category);
            

            $table_category_blog = "category_blog";
            $category_blog = $this->load->model('category_blog');
            $data['category_blog'] = $category_blog->category_blog_home($table_category_blog);

            $this->load->view('header');
            $this->load->view('menu',$data);
            $this->load->view('cart');
            $this->load->view('footer');
        }
        public function dathang(){
			// Session::init();
			$table_order = "tbl_order";
			$table_order_details = "order_details";
			$ordermodel = $this->load->model('ordermodel');
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$content = $_POST['content'];
			$order_code = rand(0,9999);

			date_default_timezone_set('asia/ho_chi_minh');
			$date = date("d/m/Y");
			$hour = date("h:i:sa");
			$order_date = $date.$hour;
			$data_order = array(
				'order_status' => 0,
				'order_code' => $order_code,
				'order_date' => $date.' '.$hour,
			);
			$result_order = $ordermodel->insert_order($table_order,$data_order);
			if($_SESSION["shopping"]==true){
				foreach($_SESSION["shopping"] as $key => $value){

					$data_details = array(
						'order_code' => $order_code,
						'product_id' => $value['product_id'],
						'product_quantity' => $value['product_quantity'],
						'name' => $name,
						'phone' => $phone,
						'email' => $email,
						'address' => $address,
						'content' => $content
					);
					$result_order_details = $ordermodel->insert_order_details($table_order_details,$data_details);

				}
				unset($_SESSION["shopping"]);
			}
			if($result_order_details){
				$message['msg'] = "Đặt hàng thành công";
				header('Location:'.BASE_URL."/giohang?msg=".urlencode(serialize($message)));
			}

		}
        public function themgiohang(){
            // Session::init();
            // Session::destroy();
            if(isset($_SESSION["shopping"])){
                $avaiable == 0;
                foreach($_SESSION["shopping"] as $key => $value){
                    if($_SESSION["shopping"][$key]['product_id'] == $_POST['product_id']){
                        $avaiable++;
                        $_SESSION["shopping"][$key]['product_quantity'] = $_SESSION["shopping"][$key]['product_quantity'] +$_POST['product_quantity'];
                    } 
                }

                if($avaiable == 0){
                    $item = array(
                        'product_id' => $_POST["product_id"],
                        'product_name' => $_POST["product_name"],
                        'product_img' => $_POST["product_img"],
                        'product_price' => $_POST["product_price"],
                        'product_quantity' => $_POST["product_quantity"]
                    );
                    $_SESSION["shopping"][] = $item;
                }

            }else{
                $item = array(
                    'product_id' => $_POST["product_id"],
                    'product_name' => $_POST["product_name"],
                    'product_img' => $_POST["product_img"],
                    'product_price' => $_POST["product_price"],
                    'product_quantity' => $_POST["product_quantity"]
                );
                $_SESSION["shopping"][] = $item;
                
            }
            header("Location:".BASE_URL.'giohang');
        }
        public function xoagiohang(){
            // Session::init();
            if(isset($_POST['delete_cart'])){
                if(isset($_SESSION["shopping"])){
                    foreach($_SESSION["shopping"] as $key => $value){
                        if($_SESSION["shopping"][$key]['product_id'] == $_POST['delete_cart']){
                            unset($_SESSION["shopping"][$key]);
                        }
                    }
                    header('Location:'.BASE_URL.'giohang');
                }else{
                    header('Location:'.BASE_URL);
                }
            }else{
                foreach($_POST["qty"] as $key => $qty){
                    foreach($_SESSION["shopping"] as $session => $value){
                        if($value['product_id'] == $key){
                            $_SESSION["shopping"][$session]['product_quantity'] = $qty;
                        }
                    }
                }
                header('Location:'.BASE_URL.'giohang');
            }
            
        }
        
    }
    

?>