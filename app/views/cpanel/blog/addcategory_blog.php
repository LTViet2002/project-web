

<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>category_blog">Danh Mục Bài Viết</a></li>
        <li class="breadcrumb-item"><a href="#">Cập nhật danh mục bài viết</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm Danh Mục Bài Viết</h3>
          <div class="tile-body">
            <div class="row element-button">
            <form class="row" action="<?php echo BASE_URL?>category_blog/insertcategory_blog" method="post">
              <div class="form-group col-md-12">
                <label class="control-label">Tên Danh Mục Bài Viết</label>
                <input type="name" class="form-control" placeholder="Nhập Tên Danh Mục" id="name_category" name="name_category_blog">
              </div>
              
              <div class="form-group col-md-3">
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="<?php echo BASE_URL?>category_blog">Hủy bỏ</a>
          <div>
        </div>
        </form>
  </main>
