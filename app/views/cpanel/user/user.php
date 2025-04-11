<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Quản Lý Khách Hàng</b></a></li>
            </ul>
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
                                    <th>Tên Người Dùng</th>
                                    <th>Ảnh</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Email</th>
                                    <th>Quản Lý</th>
                                </tr>
                            </thead>  
                            <tbody>
                            <?php
                            $i=0;
                            foreach($user as $key => $user){
                                $i++;
                                ?>
                                <tr>
                                    <!-- <td width="10"><input type="checkbox" name="check1" value="1"></td> -->
                                    <td><?php echo $i?></td>
                                    <td><?php echo $user['username_member'] ?></td> 
                                    <td><img src="<?php echo BASE_URL ?>public/uploads/member/<?php echo $user['img_member'] ?>" width="100" height="100"></td>
                                    <td><?php echo $user['phone_member'] ?></td>
                                    <td><?php echo $user['email_member'] ?></td>                                       
                                    <td><a href="<?php echo BASE_URL?>user/delete_user/<?php echo $user['id_member']?>">Xóa</a> </td>
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
    