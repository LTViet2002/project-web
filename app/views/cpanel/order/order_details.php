

<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Liệt Kê Chi Tiết Đơn Hàng</b></a></li>
            </ul>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                    <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tên người đặt</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Ghi chú</th>
                            
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 0;
                            
                            foreach($order_info as $key => $ord){
                            
                                $i++;
                            ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $ord['name'] ?></td>
                                <td><?php echo $ord['email'] ?></td>
                                <td><?php echo $ord['phone'] ?></td>
                                <td><?php echo $ord['address'] ?></td>
                                <td><?php echo $ord['content'] ?></td>
                            </tr>
                            <?php
                            } 
                            ?>
                            
                            
                            </tbody>
                        </table>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                    <th>ID</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Hình Ảnh</th>
                                    <th>Số Lượng</th>
                                    <th>Đơn Giá</th>
                                    <th>Thành Tiền</th>
                                </tr>
                            </thead>  
                            <tbody>
                            <?php
                            $i=0;
                            $total = 0;
                            foreach($order_details as $key => $order){
                                $total+=$order['product_quantity']*$order['price_product'];
                                $i++;
                                ?>
                                <tr>
                                    <!-- <td width="10"><input type="checkbox" name="check1" value="1"></td> -->
                                    <td><?php echo $i?></td>
                                    <td><?php echo $order['name_product'] ?></td>   
                                    <td><img src="<?php echo BASE_URL ?>public/uploads/product/<?php echo $order['img_product'] ?>" height="100" width="100"></td>
                                    <td><?php echo $order['product_quantity'] ?></td>
                                    <td><?php echo number_format($order['price_product'],0,',','.').'đ' ?></td>
                                    <td><?php echo number_format($order['product_quantity']*$order['price_product'],0,',','.').'đ' ?></td>
                                </tr>
                                <?php
                                }
                                ?>
                                <form method="POST" action="<?php echo BASE_URL ?>/order/order_confirm/<?php echo $order['order_code'] ?>">
                                <tr>
                                    <td><input type="submit" name="update_order" value="Đã xử lý" class="btn btn-default"></td>
                                    <td align="right" colspan="6">Tổng tiền : <?php echo number_format($total,0,',','.').'đ' ?></td>
                                </tr>
                                </form>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
   