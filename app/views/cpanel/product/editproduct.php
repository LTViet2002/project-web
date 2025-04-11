




<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>product">Sản Phẩm</a></li>
        <li class="breadcrumb-item"><a href="#">Cập Nhật Sản Phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Cập Nhật Sản Phẩm</h3>
          <div class="tile-body">
            <div class="row element-button">
            <?php
                foreach($products as $key => $pro){
            ?>
            <form class="row" action="<?php echo BASE_URL?>product/updateproduct/ <?php echo $pro['id_product'] ?>" method="POST"  enctype="multipart/form-data">
              <div class="form-group col-md-12">
                <label class="control-label">Tên Sản Phẩm:</label>
                <input type="name" value="<?php echo $pro['name_product'] ?>" class="form-control" placeholder="Nhập Tên Sản Phẩm" id="name_blogs" name="name_product">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Hình Ảnh</label>
                <div id="myfileupload">
                   <input type="file" id="uploadfile" value="<?php echo $pro['img_product'] ?>" name="img_product" onchange="readURL(this);" />
                   <p><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['img_product'] ?>" height="100" width="100"></p>
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Hình Ảnh 2</label>
                <div id="myfileupload">
                   <input type="file" id="uploadfile" name="img1_product" onchange="readURL(this);" />
                   <p><img src="<?php echo BASE_URL ?>/public/uploads/product/<?php echo $pro['img1_product'] ?>" height="100" width="100"></p>
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Nhập Giá Tiền:</label>
                <input type="name" class="form-control" value="<?php echo $pro['price_product'] ?>" placeholder="Nhập Giá" id="price_product" name="price_product">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Nhập Hàng Còn\Không:</label>
                <input type="name" class="form-control" value="<?php echo $pro['quantity_product'] ?>" placeholder="Có/Không" id="quantity_product" name="quantity_product">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Tiêu Đề</label>
                <textarea name="title_product" id="title_product"  rows="5" style="resize: none" class="form-control"><?php echo $pro['title_product'] ?></textarea>
                <script>
                                    CKEDITOR.replace('title_product');
                                </script>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Nội Dung</label>
                <textarea name="content_product" id="content_product"  rows="5" style="resize: none" class="form-control"><?php echo $pro['content_product'] ?></textarea>
                <script>
                                    CKEDITOR.replace('content_product');
                                </script>
              </div>
              <div class="form-group col-md-12">
                <label for="parameter">Thông Số Kỹ Thuật:</label>
                <textarea name="parameter" id="parameter" rows="5" style="resize: none" class="form-control"><?php echo $pro['parameter'] ?></textarea>
                <script>
                                    CKEDITOR.replace('parameter');
                                </script>
              </div>
              <div class="form-group col-md-12">
                  <label for="id_category">Danh Mục Bài Viết:</label>
                  <select class="form-control" name="id_category" style="max-width: 50%;">
                  <option><-- Chọn Danh Mục --></option>
                  <?php
                  foreach ($category as $key => $cate){
                  ?>
                  <option <?php if($cate['id_category']==$pro['id_category']){ echo 'selected'; }?>
                  value="<?php echo $cate['id_category']?>"
                  ><?php echo $cate['name_category']?></option>
                  
                  <?php
                  }
                  ?>
                </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="id_category">Nhà Sản xuất:</label>
                  <select class="form-control" name="id_producer" style="max-width: 50%;">
                  <option><-- Chọn Nhà Sản Xuất --></option>
                  <?php
                  foreach ($prod as $key => $prod){
                  ?>
                  <option <?php if($prod['id_producer']==$pro['id_producer']){ echo 'selected'; }?>
                  value="<?php echo $prod['id_producer']?>"
                  ><?php echo $prod['name_producer']?></option>
                  <?php
                  }
                  ?>
            </select>
                </div>
              <div class="form-group col-md-3">
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="<?php echo BASE_URL?>product">Hủy bỏ</a>
          <div>
        </div>
        </form>
        <?php 
        }
        ?>
  </main>
