<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>blog">Bài Viết</a></li>
        <li class="breadcrumb-item"><a href="#">Thêm danh mục bài viết</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm Danh Mục Bài Viết</h3>
          <div class="tile-body">
            <div class="row element-button">
            <form class="row" action="<?php echo BASE_URL?>blog/insertblog/" method="post" enctype="multipart/form-data">
              <div class="form-group col-md-12">
                <label class="control-label">Tên Bài Viết</label>
                <input type="name" class="form-control" placeholder="Nhập Tên Bài Viết" id="name_blogs" name="name_blogs">
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Hình Ảnh</label>
                <div id="myfileupload">
                   <input type="file" id="uploadfile" name="img" onchange="readURL(this);" />
                </div>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Tiêu Đề</label>
                <textarea name="title_blog" id="title_blog"  rows="5" style="resize: none" class="form-control"></textarea>
                <script>
                                    CKEDITOR.replace('title_blog');
                                </script>
              </div>
              <div class="form-group col-md-12">
                <label class="control-label">Nội Dung</label>
                <textarea name="content_blog" id="content_blog"  rows="5" style="resize: none" class="form-control"></textarea>
                <script>
                                    CKEDITOR.replace('content_blog');
                                </script>
              </div>
              <div class="form-group col-md-12">
    <label for="id_category">Danh Mục Bài Viết:</label>
    <select class="form-control" name="id_category_blog" style="max-width: 50%;">
    <option><-- Chọn Danh Mục --></option>
    <?php
    foreach ($category as $key => $cate){
    ?>
    <option value="<?php echo $cate['id_category_blog'] ?>"><?php echo $cate['name_category_blog']?></option>
    
    <?php
    }
    ?>
  </select>
  </div>
              <div class="form-group col-md-3">
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="<?php echo BASE_URL?>blog">Hủy bỏ</a>
          <div>
        </div>
        </form>
  </main>
