

<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Liệt Kê Đơn Hàng</b></a></li>
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
                        
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                    <th>ID</th>
                                    <th>Mã Đơn Hàng</th>
                                    <th>Ngày Đặt Hàng</th>
                                    <th>Tình Trạng</th>
                                    <th>Chi Tiết</th>
                                </tr>
                            </thead>  
                            <tbody>
                            <?php
                            $i=0;
                            foreach($order as $key => $order){
                                $i++;
                                ?>
                                <tr>
                                    <!-- <td width="10"><input type="checkbox" name="check1" value="1"></td> -->
                                    <td><?php echo $i?></td>
                                    <td><?php echo $order['order_code'] ?></td>   
                                    <td><?php echo $order['order_date'] ?></td>
                                    <td><?php if($order['order_status']==0){echo 'đơn hàng mới';}else{echo 'đã xử lý';} ?></td>
                                    <td><a href="<?php echo BASE_URL?>order/order_details/<?php echo $order['order_code']?>">Xem Đơn Hàng</a></td>                                       
                                    
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
   