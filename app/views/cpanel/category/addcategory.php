

<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>category">Danh Mục Sản Phẩm</a></li>
        <li class="breadcrumb-item"><a href="#">Thêm danh mục sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Thêm Danh Mục Sản Phẩm</h3>
          <div class="tile-body">
            <div class="row element-button">
            <form class="row" action="<?php echo BASE_URL?>category/insertcategory" method="post">
              <div class="form-group col-md-12">
                <label class="control-label">Tên nhà sản xuất</label>
                <input type="name" class="form-control" placeholder="Nhập Tên Danh Mục" id="name_category" name="name_category">
              </div>
              
              <div class="form-group col-md-3">
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="<?php echo BASE_URL?>category">Hủy bỏ</a>
          <div>
        </div>
        </form>
  </main>
