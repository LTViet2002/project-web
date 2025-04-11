<main class="app-content">
        <div class="app-title">
            <h1><b>Giỏ Hàng</b></h1>
            <?php
	if(!empty($_GET['msg'])){
		$msg = unserialize(urldecode($_GET['msg']));
		foreach ($msg as $key => $value){
			echo '<span style="color:blue;font-weight:bold">'.$value.'</span>';
		}
	}
	?> 
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <?php
                        if(isset($_SESSION['shopping'])){
                            ?>
                        <form action="<?php echo BASE_URL?>giohang/xoagiohang" method="post">
                    <?php
                            $total = 0;
                             
                              foreach($_SESSION['shopping'] as $key => $value){
                                  $subtotal = $value['product_quantity'] * $value['product_price'];
                                    $total += $subtotal; 
                                  ?>
                        <table class="table table-hover table-bordered" >
                            <thead>
                                <tr>
                                    <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                    <th style="text-align:center; width: 500px">Tên Sản Phẩm</th>
                                    <th>Hình Ảnh </th>
                                    <th>Giá Tiền</th>
                                    <th>Số Lượng</th>
                                    <th>Tổng Số Tiền</th>
                                    <th>Quản Lý</th>
                                </tr>
                            </thead>  
                            <tbody>
                                <tr>
                                  <td><?php echo $value['product_name'] ?></td>
                                  <td><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $value['product_img'] ?>" width="100" height="100"></td>
                                  <td><?php echo number_format($value['product_price'],0,',','.').'VNĐ' ?></td>
                                  <td><input type="number" name="qty[<?php echo $value['product_id']?>]" value="<?php echo $value['product_quantity'] ?>"" min="1" value="1" style="width: 70px"></td>
                                  <td><?php echo number_format($subtotal,0,',','.').'VNĐ' ?></td>
                                  <td>
                                      
                                      <button type="submit" class="btn btn-sm btn-primary" style="width:80px" name="delete_cart" value="<?php echo $value['product_id'] ?>">xóa</button>
                                      
                                      <button type="submit" class="btn btn-sm btn-primary" style="width:80px" name="update_cart" value="<?php echo $value['product_id'] ?>">Cập nhật</button>
                                </tr>
                                </tbody>
                        </table>
                        
                        <?php
                                
                              }
                              ?>
                              </form>
                              <div style="float: right">
                        <h5>Tổng:</h5>
                        <h4 style="none">
                        <?php echo number_format($total,0,',','.').'VNĐ' ?>
                        </h4>    
                    </div>
                    <?php
                        }
                    ?>
                    <div>
                    <a href="<?php echo BASE_URL?>sanpham/tatca">Tiếp Tục Mua Hàng</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
      <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12  wrapbox-content-page-contact">
          <div class="header-page-contact clearfix">
            <h1>Đặt hàng</h1>
          </div>
          <div class="box-send-contact">
            <div id="col-left contactFormWrapper menuList-links">
              <form action="<?php echo BASE_URL?>giohang/dathang" name="FormDatHang" class="contact-form" method="post">
                <div class="contact-form">
                  <div class="row">
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                      <label>Họ và tên: <span style="color:red;">*</span></label>
                        <input required="" type="text" class="form-control" name="name" required
                          placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                      <label>Số điện thoại: <span style="color:red;">*</span></label>
                        <input required="" type="text" class="form-control" name="phone" onkeydown="return checkIt(event)" required
                          placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                      <label>Email: <span style="color:red;">*</span></label>
                        <input required="" type="text" class="form-control" name="email" required onchange="return KiemTraEmail(this);"
                          placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                      <label>Địa chỉ: <span style="color:red;">*</span></label>
                        <input required="" type="text" class="form-control" name="address" required
                          placeholder="">
                      </div>
                    </div>
                    <div class="col-sm-12 col-xs-12">
                      <div class="input-group">
                      <label>Nội dung: <span style="color:red;">*</span></label>
                      <textarea type="text" name="content" class="clsipa"></textarea>
                      </div>
                    </div>
                    
                    
                    <div class="col-sm-12">
                      <button class="button dark" name="frmSubmit" type="submit">Gửi Đơn Hàng</button>

                      <button class="button dark" name="frmSubmit" type="reset">Nhập Lại</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          </div>
                    </div>
    </main>