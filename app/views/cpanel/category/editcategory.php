


<main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo BASE_URL?>category">Danh Mục Sản Phẩm</a></li>
        <li class="breadcrumb-item"><a href="#">Cập nhật danh mục sản phẩm</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Cập Nhật Nhà Sản Xuất</h3>
          <div class="tile-body">
            <div class="row element-button">
            <?php
    foreach($cate as $key => $cate){
?>
            <form class="row"action="<?php echo BASE_URL?>category/updatecategory/ <?php echo $cate['id_category'] ?>" method="post">
              <div class="form-group col-md-12">
                <label class="control-label">Tên nhà sản xuất</label>
                <input type="text" class="form-control" value="<?php echo $cate['name_category'] ?>" placeholder="Nhập Tên Nhà Sản Xuất" id="name_producer" name="name_category">
              </div>
              
              <div class="form-group col-md-3">
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="<?php echo BASE_URL?>category">Hủy bỏ</a>
          <div>
        </div>
    </form>
    <?php 
}
 ?>
  </main>
