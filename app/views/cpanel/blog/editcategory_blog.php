

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
          <h3 class="tile-title">Cập Nhật Danh Mục Bài Viết</h3>
          <div class="tile-body">
            <div class="row element-button">
            <?php
    foreach($cate as $key => $cate){
?>
            <form class="row"action="<?php echo BASE_URL?>category_blog/updatecategory_blog/ <?php echo $cate['id_category_blog'] ?>" method="post">
              <div class="form-group col-md-12">
                <label class="control-label">Cập Nhật Danh Mục Bài Viết</label>
                <input type="text" class="form-control" value="<?php echo $cate['name_category_blog'] ?>" placeholder="Nhập Tên Nhà Sản Xuất" id="name_producer" name="name_category_blog">
              </div>
              
              <div class="form-group col-md-3">
          <button class="btn btn-save" type="submit">Lưu lại</button>
          <a class="btn btn-cancel" href="<?php echo BASE_URL?>category_blog">Hủy bỏ</a>
          <div>
        </div>
    </form>
    <?php 
}
 ?>
  </main>
