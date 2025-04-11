


<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>product">Sản Phẩm</a></li>
        <li class="breadcrumb-item"><a href="#">Thêm Sản Phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm Sản Phẩm</h3>
          <div class="tile-body">
            <div class="row element-button">
            <form class="row" action="<?php echo BASE_URL?>product/insertproduct" method="POST" enctype="multipart/form-data">
              <div class="form-group col-md-12">
                <label class="control-label">Tên Sản Phẩm:</label>
                <input type="name" class="form-control" placeholder="Nhập Tên Sản Phẩm" id="name_blogs" name="name_product">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Hình Ảnh 1</label>
                <div id="myfileupload">
                   <input type="file" id="uploadfile" name="img_product" onchange="readURL(this);" />
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Hình Ảnh 2</label>
                <div id="myfileupload">
                   <input type="file" id="uploadfile" name="img1_product" onchange="readURL(this);" />
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Nhập Giá Tiền:</label>
                <input type="name" class="form-control" placeholder="Nhập Giá" id="price_product" name="price_product">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Nhập Hàng Còn\Không:</label>
                <input type="name" class="form-control" placeholder="Có/Không" id="quantity_product" name="quantity_product">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Tiêu Đề</label>
                <textarea name="title_product" id="title_product"  rows="5" style="resize: none" class="form-control"></textarea>
                <script>
                                    CKEDITOR.replace('title_product');
                                </script>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Nội Dung</label>
                <textarea name="content_product" id="content_product"  rows="5" style="resize: none" class="form-control"></textarea>
                <script>
                                    CKEDITOR.replace('content_product');
                                </script>
              </div>
              <div class="form-group col-md-12">
                <label for="parameter">Thông Số Kỹ Thuật:</label>
                <textarea name="parameter" id="parameter" rows="5" style="resize: none" class="form-control"></textarea>
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
                  <option value="<?php echo $cate['id_category'] ?>"><?php echo $cate['name_category']?></option>
                  
                  <?php
                  }
                  ?>
                </select>
                </div>
                <div class="form-group col-md-12">
                  <label for="id_category">Nhà Sản Xuất:</label>
                  <select class="form-control" name="id_producer" style="max-width: 50%;">
                    <option><-- Chọn Nhà Sản Xuất --></option>
                    <?php
                    foreach ($prod as $key => $prod){
                    ?>
                    <option value="<?php echo $prod['id_producer'] ?>"><?php echo $prod['name_producer']?></option>
                    
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
  </main>
