


<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Quản Lý Danh Mục Bài Viết</b></a></li>
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
              
                              <a class="btn btn-add btn-sm" href="<?php echo BASE_URL?>category_blog/addcategory_blog" title="Thêm"><i class="fas fa-plus"></i>
                                Thêm danh mục bài viết</a>
                            </div>
                            
                          </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                    <th>ID</th>
                                    <th>Tên Danh Mục</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>  
                            <tbody>
                            <?php
                            $i=0;
                            foreach($category as $key => $cate){
                                $i++;
                                ?>
                                <tr>
                                    <!-- <td width="10"><input type="checkbox" name="check1" value="1"></td> -->
                                    <<td><?php echo $i?></td>
                                  <td><?php echo $cate['name_category_blog'] ?></td>
                                  <td><a href="<?php echo BASE_URL?>category_blog/edit_category_blog/<?php echo $cate['id_category_blog']?>">Cập Nhật</a> |
                                  | <a href="<?php echo BASE_URL?>category_blog/delete_category_blog/<?php echo $cate['id_category_blog']?>">Xóa</a> </td>
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