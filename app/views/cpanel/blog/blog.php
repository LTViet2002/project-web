





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
              
                              <a class="btn btn-add btn-sm" href="<?php echo BASE_URL?>blog/addblog" title="Thêm"><i class="fas fa-plus"></i>
                                Thêm bài viết</a>
                            </div>
                            
                          </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                    <th>ID</th>
                                    <th>Tên Bài Viết</th>
                                    <th>Hình Ảnh</th>
                                    <th>Tiêu Đề</th>
                                    <th>Danh Mục</th>
                                    <th>Quản Lý</th>
                                </tr>
                            </thead>  
                            <tbody>
                            <?php
                            $i=0;
                            foreach($blog as $key => $blog){
                                $i++;
                                ?>
                                <tr>
                                    <!-- <td width="10"><input type="checkbox" name="check1" value="1"></td> -->
                                    <td><?php echo $i?></td>
                                    <!-- gọi tên từ CSDL -->
                                    <td><?php echo $blog['name_blogs'] ?></td>
                                    <!-- truyền ảnh -->
                                    <td><img src="<?php echo BASE_URL ?>public/uploads/blog/<?php echo $blog['img'] ?>" width="100" height="100"></td>
                                    <!-- tiêu đề -->
                                    <td><?php echo substr($blog['title_blog'],0,30).'...' ?></td> 
                                    <!-- Danh Mục -->
                                    <td><?php echo $blog['name_category_blog']?></td> 
                                    <!-- quản lý -->
                                    <!-- trong mỗi phẩn sẽ có id để khi bấm vào hệ thống sẽ hiểu truyền id = '?' -->
                                    <td><a href="<?php echo BASE_URL?>blog/edit_blog/<?php echo $blog['id_blog']?>">Cập Nhật</a> |
                                    | <a href="<?php echo BASE_URL?>blog/delete_blog/<?php echo $blog['id_blog']?>">Xóa</a> </td>
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