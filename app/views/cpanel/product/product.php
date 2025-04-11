<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Quản Lý Bài Viết</b></a></li>
            </ul>
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
                        <div class="row element-button">
                            <div class="col-sm-2">
              
                              <a class="btn btn-add btn-sm" href="<?php echo BASE_URL?>product/addproduct" title="Thêm"><i class="fas fa-plus"></i>
                                Thêm bài viết</a>
                            </div>
                            
                          </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                    <th style="max-width: 10px;">ID</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Hình Ảnh 1</th>
                                    <th>Hình Ảnh 2</th>
                                    <th>Giá Tiền</th>
                                    <th>Số Lượng</th>
                                    <th>Danh Mục</th>
                                    <th>Nhà Sản Xuất</th>
                                    <th>Quản Lý</th>
                                </tr>
                            </thead>  
                            <tbody>
                            <?php
                              $i=0;
                              foreach($products as $key => $pro){
                                  $i++;
                                  ?>
                                <tr>
                                  <td><?php echo $i?></td>
                                  <td><?php echo $pro['name_product'] ?></td>
                                  <td><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $pro['img_product'] ?>" width="100" height="100"></td>
                                  <td><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $pro['img1_product'] ?>" width="100" height="100"></td>
                                  <td><?php echo number_format($pro['price_product'],0,',','.').'VNĐ' ?></td>
                                  <td><?php echo $pro['quantity_product'] ?></td>
                                  <td><?php echo $pro['name_category'] ?></td>
                                  <td><?php echo $pro['name_producer'] ?></td>
                                  <td><a href="<?php echo BASE_URL?>product/edit_product/<?php echo $pro['id_product']?>">Cập Nhật</a> |
                                  | <a href="<?php echo BASE_URL?>product/delete_product/<?php echo $pro['id_product']?>">Xóa</a> </td>
                                </tr>
                                <?php
                              }
                              ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>