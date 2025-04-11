<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item active"><a href="#"><b>Quản Lý Nhà Sản Xuất</b></a></li>
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
              
                              <a class="btn btn-add btn-sm" href="<?php echo BASE_URL?>producer/addProducer" title="Thêm"><i class="fas fa-plus"></i>
                                Thêm nhà sản xuất</a>
                            </div>
                            
                          </div>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <!-- <th width="10"><input type="checkbox" id="all"></th> -->
                                    <th>ID</th>
                                    <th>Tên Nhà Sản Xuất</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>  
                            <tbody>
                            <?php
                            $i=0;
                            foreach($producer as $key => $producer){
                                $i++;
                                ?>
                                <tr>
                                    <!-- <td width="10"><input type="checkbox" name="check1" value="1"></td> -->
                                    <td><?php echo $i?></td>
                                    <td><?php echo $producer['name_producer'] ?></td>                                    
                                    <td><a href="<?php echo BASE_URL?>producer/edit_producer/<?php echo $producer['id_producer']?>">Cập Nhật</a> |
                                    | <a href="<?php echo BASE_URL?>producer/delete_producer/<?php echo $producer['id_producer']?>">Xóa</a> </td>
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
    